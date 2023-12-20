<?php
require_once("../config.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/matricula.css">
</head>
<?php
$PAGE->set_title('Matrícula');
$PAGE->set_heading('Matrícula');

echo $OUTPUT->header();

// Obtener el ID del curso desde los parámetros GET
$courseId = optional_param('id', 0, PARAM_INT);

// Verificar si se proporcionó un ID de curso válido
if ($courseId <= 0) {
    echo '<div class="alert alert-danger" role="alert">ID de curso inválido.</div>';
    echo $OUTPUT->footer();
    exit;
}

// Obtener información detallada del curso
$course = $DB->get_record('course', array('id' => $courseId), '*', MUST_EXIST);
$category = $DB->get_record('course_categories', array('id' => $course->category), '*', MUST_EXIST);

// Obtener datos adicionales del curso desde la tabla customfield_data
$modalidad = get_custom_field_value($courseId, 1);
$fecha = get_custom_field_value($courseId, 2);
$duracion = get_custom_field_value($courseId, 3);

// Obtener la imagen de la tabla course_images
$courseImage = $DB->get_record('course_images', array('id_course_image' => $courseId), '*', MUST_EXIST);


// Mostrar detalles del curso
// Mostrar detalles del curso
echo '<div class="container imagen_banner">';
echo '<div class="row">';
echo '<div class="col-md-12 text-center ">';
echo '<img src="../Assets/Images/' . $courseImage->banner . '" alt="Imagen del curso" class="img-fluid imagen_curso" style="width: 100%; object-fit: cover;">';
echo '</div>';
echo '</div>';
echo '<div class="row mt-3">';
echo '<div class="col-md-12 text-center">';
echo '<h1>' . $course->fullname . '</h1>';
echo '</div>';
echo '</div>';
echo '<div class="row mt-3">';
echo '<div class="col-md-6 descripcion">';
echo '<p ><strong>Descripción:</strong> ' . $course->summary . '</p>';
echo '</div>';
echo '<div class="col-md-6 atributos">';
echo '<br>';
echo '<p><strong>Categoría:</strong> ' . $category->name . '</p>';
echo '<p><i class="far fa-clock icono-fa"></i><strong> Duración:</strong> ' . $duracion . '</p>';
echo '<p><i class="fa fa-graduation-cap" aria-hidden="true"></i><strong> Modalidad:</strong>' . $modalidad . '</p>';
echo '<p><i class="far fa-calendar-alt icono-fa"></i><strong> Fecha de inicio:</strong> ' . $fecha . '</p>';
echo '</div>';
echo '</div>';
echo '<div class="row mt-3">';
echo '<div class="col-md-12 text-center">';
$enrolDates = $DB->get_records('enrol', array('courseid' => $courseId), 'id ASC');

$now = time(); // Obtener la marca de tiempo actual

$enableMatriculation = false;
$matriculationMessage = '';

if ($enrolDates) {
    echo '<div class="row mt-3">';
    echo '<div class="col-md-12 text-center">';
    echo '<p><strong>Fechas de matrícula:</strong></p>';
    
    foreach ($enrolDates as $enrolDate) {
        // Verificar si las fechas son mayores que un valor específico
        if ($enrolDate->enrolstartdate > 0 && $enrolDate->enrolenddate > 0) {
            // Convertir timestamps a formato de fecha y hora
            $enrolStartDate = userdate($enrolDate->enrolstartdate, '%d-%m-%Y %H:%M:%S');
            $enrolEndDate = userdate($enrolDate->enrolenddate, '%d-%m-%Y %H:%M:%S');
            
            echo "<p><b>Inicio:</b> $enrolStartDate | <b>Fin:</b> $enrolEndDate</p>";
            
            // Verificar el estado de la matriculación
            if ($enrolDate->enrolstartdate <= $now && $enrolDate->enrolenddate >= $now) {
                $enableMatriculation = true;
            } elseif ($enrolDate->enrolstartdate > $now) {
                $matriculationMessage = "Las matrículas aún no han comenzado." ;//. $enrolStartDate;
            } elseif ($enrolDate->enrolenddate < $now) {
                $matriculationMessage = "Ya no puede matricularse, ya que el periodo finalizó " . $enrolEndDate;
            }
        }
    }
    
    echo '</div>';
    echo '</div>';
    
    // Mostrar el mensaje correspondiente
    if (!empty($matriculationMessage)) {
        echo '<div class="alert alert-warning" role="alert">' . $matriculationMessage . '</div>';
    }

    // Generar el botón de matriculación según el estado de las fechas
    if ($enableMatriculation) {
        echo '<a href="censo.php?id=' . $courseId . '" class="btn btn-primary btn-lg mx-2">Matricularse</a>';
    } else {
        echo '<button class="btn btn-primary btn-lg mx-2" disabled>Matricularse</button>';
    }
} else {
    echo '<div class="alert alert-warning" role="alert">No se encontraron fechas de matrícula para este curso.</div>';
}

/*******************/
// Agregar evento onclick para abrir la ventana modal
echo '<a href="#" class="btn btn-info btn-lg mx-2" onclick="openModal()">Ver requisitos</a>';
//echo '<a href="censo.php?id=' . $courseId . '" class="btn btn-primary btn-lg mx-2">Matricularse</a>';

echo '</div>';
echo '</div>';
echo '</div>';
// Obtener el nombre del campo requisitos
// Contenido de la ventana modal flotante
echo '<div id="myModal" class="modal">';
// Utilizar el nombre del campo requisitos para el fondo de la ventana modal
echo '<div class="modal-content" style="background: url(../Assets/Images/' . $courseImage->requirements . ') no-repeat center center fixed; background-size: cover; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">';
// Botón de cierre en la esquina superior derecha
echo '<span class="close" onclick="closeModal()">&times;</span>';
// Contenido personalizado de la ventana modal
// Puedes agregar más contenido aquí si es necesario
echo '</div>';
echo '</div>';

// Incluir el script JavaScript y el estilo CSS para la ventana modal
echo '<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";

    }

    function closeModal() {
        
        document.getElementById("myModal").style.display = "none";
    }
</script>';

// Función para obtener el valor de un campo personalizado desde la tabla customfield_data
function get_custom_field_value($instanceId, $fieldId) {
    global $DB;

    $value = $DB->get_field('customfield_data', 'value', ['instanceid' => $instanceId, 'fieldid' => $fieldId]);

    return $value ? $value : 'N/A';
}

/*****************MATRICULA************ */
$id = required_param('id', PARAM_INT);
$returnurl = optional_param('returnurl', 0, PARAM_LOCALURL);

if (!isloggedin()) {
    $referer = get_local_referer();
    if (empty($referer)) {
        // A user that is not logged in has arrived directly on this page,
        // they should be redirected to the course page they are trying to enrol on after logging in.
        $SESSION->wantsurl = "$CFG->wwwroot/course/view.php?id=$id";
    }
    // do not use require_login here because we are usually coming from it,
    // it would also mess up the SESSION->wantsurl
    redirect(get_login_url());
}

$course = $DB->get_record('course', array('id'=>$id), '*', MUST_EXIST);
$context = context_course::instance($course->id, MUST_EXIST);

// Everybody is enrolled on the frontpage
if ($course->id == SITEID) {
    redirect("$CFG->wwwroot/");
}

if (!$course->visible && !has_capability('moodle/course:viewhiddencourses', context_course::instance($course->id))) {
    throw new \moodle_exception('coursehidden');
}


// do not allow enrols when in login-as session
if (\core\session\manager::is_loggedinas() and $USER->loginascontext->contextlevel == CONTEXT_COURSE) {
    throw new \moodle_exception('loginasnoenrol', '', $CFG->wwwroot.'/course/view.php?id='.$USER->loginascontext->instanceid);
}

// Check if user has access to the category where the course is located.
if (!core_course_category::can_view_course_info($course) && !is_enrolled($context, $USER, '', true)) {
    throw new \moodle_exception('coursehidden', '', $CFG->wwwroot . '/');
}

// get all enrol forms available in this course
$enrols = enrol_get_plugins(true);
$enrolinstances = enrol_get_instances($course->id, true);
$forms = array();
foreach($enrolinstances as $instance) {
    if (!isset($enrols[$instance->enrol])) {
        continue;
    }
    $form = $enrols[$instance->enrol]->enrol_page_hook($instance);
    if ($form) {
        $forms[$instance->id] = $form;
    }
}

// Check if user already enrolled
if (is_enrolled($context, $USER, '', true)) {
    if (!empty($SESSION->wantsurl)) {
        $destination = $SESSION->wantsurl;
        unset($SESSION->wantsurl);
    } else {
        $destination = "$CFG->wwwroot/course/view.php?id=$course->id";
    }
    redirect($destination);   // Bye!
}

//TODO: find if future enrolments present and display some info
//formulario para matricula
/*foreach ($forms as $form) {
    echo $form;
}*/
//echo '<a href="#" class="btn btn-info btn-lg mx-2 requisitos" onclick="openModal()">Ver requisitos</a>';

/*********OCULTAR PAGINA PRINCIPAL************* */
if (isloggedin() && !isguestuser()) {
    // El usuario ha iniciado sesión, mostrar solo el bloque específico.
   // echo "¡Bienvenido! Has iniciado sesión en Moodle. colocar";
   
    // Agregar el script JavaScript para ocultar el elemento li con data-key="home"
    echo '<script>
            document.addEventListener("DOMContentLoaded", function () {
                var elementToHide = document.querySelector(\'li[data-key="home"]\');
                if (elementToHide) {
                    elementToHide.style.display = "none";
                }
            });
          </script>';
}
/*******FIN DE BLOQUE PAGINA PRINCIPAL************* */
echo $OUTPUT->footer();
?>
