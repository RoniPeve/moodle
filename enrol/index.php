<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This page shows all course enrolment options for current user.
 *
 * @package    core_enrol
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../config.php');
require_once("$CFG->libdir/formslib.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../Cursos/css/matricula.css">
</head>
<?php

$id = required_param('id', PARAM_INT);
$returnurl = optional_param('returnurl', 0, PARAM_LOCALURL);
/************************** */



/********* */
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

$PAGE->set_course($course);
$PAGE->set_pagelayout('incourse');
$PAGE->set_url('/enrol/index.php', array('id'=>$course->id));
$PAGE->set_secondary_navigation(false);
$PAGE->add_body_class('limitedwidth');

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

/*$PAGE->set_title($course->shortname);
$PAGE->set_heading($course->fullname);
$PAGE->navbar->add(get_string('enrolmentoptions','enrol'));
*/
echo $OUTPUT->header();
/*echo $OUTPUT->heading(get_string('enrolmentoptions','enrol'));

$courserenderer = $PAGE->get_renderer('core', 'course');
echo $courserenderer->course_info_box($course);

/***********MATRICULA NUEVA VISTA********************** */

// Obtener el ID del curso desde los parámetros GET
$courseId = optional_param('id', 0, PARAM_INT);

// Verificar si se proporcionó un ID de curso válido
if ($courseId <= 0) {
    echo '<div class="alert alert-danger" role="alert">ID de curso inválido.</div>';
    echo $OUTPUT->footer();
    exit;
}

$course = $DB->get_record('course', array('id' => $courseId), '*', MUST_EXIST);
$category = $DB->get_record('course_categories', array('id' => $course->category), '*', MUST_EXIST);

// Obtener datos adicionales del curso desde la tabla customfield_data
$modalidad = get_custom_field_value($courseId, 1);
$fecha = get_custom_field_value($courseId, 2);
$duracion = get_custom_field_value($courseId, 3);
/********************************* */

/* UTILIZANDO LOS CAMPOS DE LOS CURSOS PARA LAS IMAGENES DE LOS BANNER */
// Obtener los valores de banner y requisitos desde customfield_data
$fieldsQuery = "SELECT cf.shortname, cd.charvalue 
                FROM {customfield_data} cd
                JOIN {customfield_field} cf ON cd.fieldid = cf.id
                WHERE cd.instanceid = :courseid
                  AND cf.shortname IN ('banner', 'requisitos')";
$fieldsParams = ['courseid' => $courseId];
$fieldsResult = $DB->get_records_sql($fieldsQuery, $fieldsParams);

// Verificar si se obtuvieron los valores
/*if (empty($fieldsResult)) {
    //echo '<div class="alert alert-danger" role="alert">Por el momento no hay información para este curso</div>';
    //echo $OUTPUT->footer();
    //exit;
}
*/
// Inicializar variables con valores por defecto
$imageFileName = 'Banner02.png';
$requirementsValue = 'Banner.png';

// Iterar sobre los resultados y almacenar en variables separadas
foreach ($fieldsResult as $field) {
    if ($field->shortname == 'banner') {
        $imageFileName = !empty($field->charvalue) ? $field->charvalue : 'Banner.png';
    } elseif ($field->shortname == 'requisitos') {
        $requirementsValue = !empty($field->charvalue) ? $field->charvalue : 'Banner.png';
    }
}
// Mostrar la imagen del banner del curso
echo '<div class="container imagen_banner">';
echo '<div class="row">';
echo '<div class="col-md-12 text-center ">';
echo '<img src="../Assets/Images/' . $imageFileName . '" alt="Imagen del curso" class="img-fluid imagen_curso" style="width: 100%; object-fit: cover;">';
echo '</div>';



/***************************************** */
/*********************************** */
//  ANTERIOR MANERA DE MOSTRAR IMAGEN MEDIANTE UNA TABLA LLAMADA COURSE_IMAGES
// Obtener la imagen de la tabla course_images
/*$courseImage = $DB->get_record('course_images', array('id_course_image' => $courseId), '*', MUST_EXIST);


// Mostrar detalles del curso
// Mostrar detalles del curso
echo '<div class="container imagen_banner">';
echo '<div class="row">';
echo '<div class="col-md-12 text-center ">';
echo '<img src="../Assets/Images/' . $courseImage->banner . '" alt="Imagen del curso" class="img-fluid imagen_curso" style="width: 100%; object-fit: cover;">';
echo '</div>';

/*********************** */
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
        echo '<a href="../Cursos/censo.php?id=' . $courseId . '" class="btn btn-primary btn-lg mx-2">Matricularse</a>';
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
echo '<div class="modal-content" style="background: url(../Assets/Images/' . $requirementsValue ./*$courseImage->requirements .*/ ') no-repeat center center fixed; background-size: cover; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">';
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



/**********FIN DE LA NUEVA VISTA************************* */
/*foreach ($forms as $form) {
    echo $form;
}
/*************CODIGO CREADO PARA MODIFICAR EL MOODLE**************** */



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
