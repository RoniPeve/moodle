<?php
require_once("../config.php");

$PAGE->set_title('Censo');
$PAGE->set_heading('Censo');

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

// Mostrar el ID y el nombre del curso
//echo '<h2>Matricula para el curso:' . $course->fullname . '</h2>';
echo '<h2>Formulario de Matricula para el curso "' . $course->fullname . '"</h2>';


// Array asociativo para almacenar los resultados
$campos = [];

// Lista de campos que deseas buscar
$camposBuscados = ['Cargo', 'Entidad', 'Fecha de Nacimiento', 'Nivel de Gobierno', 'Sector Laboral','Profesion','Grado de Instrucción','Sexo'];

// Iterar sobre los campos buscados
foreach ($camposBuscados as $campoBuscado) {
    // Obtener el ID del campo actual
    $fieldIdQuery = "SELECT id FROM {user_info_field} WHERE name = :fieldname";
    $fieldIdParams = ['fieldname' => $campoBuscado];
    $fieldId = $DB->get_field_sql($fieldIdQuery, $fieldIdParams);

    if ($fieldId) {
        // Obtener el valor del campo actual
        $campoQuery = "SELECT data FROM {user_info_data} WHERE userid = :userid AND fieldid = :fieldid";
        $campoParams = ['userid' => $USER->id, 'fieldid' => $fieldId];
        $campo = $DB->get_field_sql($campoQuery, $campoParams);

        // Almacenar el valor en el array asociativo
        $campos[$campoBuscado] = $campo;

        // Mostrar el valor del campo actual
        //echo "<p>$campoBuscado: $campo</p>";
    } else {
        //echo "<p>No se encontró el campo '$campoBuscado'.</p>";
    }
}
//echo $campos['Entidad'];
// Ahora, los valores están almacenados en el array $campos
//var_dump($campos);

//echo '<p>Nombre de usuario: ' . $USER->username . '</p>';
/*****************/
/*Tipo de documento (lista desplegable con DNI, Carnet de extranjeria)
Nro de Documento
Apellidos
Nombres
Sexo
Fecha de Nacimiento
Grado
Profesion
Nivel de Gobierno
entidad
cargo
experiencia en el cargo (años, meses)
experiencia en el sector (años, meses)
telefono movil
telefono oficina
anexo
correo institucional
correo gmail
modalidad de ingreso*/


 
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
?>
<body>
    <div class="container mt-5">
        
        <?php
        // Verificar si el formulario se ha enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener y convertir los valores del formulario a mayúsculas
            $nro_documento = strtoupper($USER->username);
            $apellidos = strtoupper($USER->lastname);
            $nombres = strtoupper($USER->firstname);

            // Obtener el ID del curso desde los parámetros GET
            $courseId = optional_param('id', 0, PARAM_INT);

            // Verificar si se proporcionó un ID de curso válido
            if ($courseId <= 0) {
                echo '<div class="alert alert-danger" role="alert">ID de curso inválido.</div>';
                echo $OUTPUT->footer();
                exit;
            }
            /************************************************** */
            
            /*
                DIRECTORIOS MEDIANTE OTRA TABLA
            $tableQuery = "SELECT nombre_directorio FROM {directorios_cursos} WHERE courseid = :courseid";
            $tableParams = ['courseid' => $courseId];
            $tableName = $DB->get_field_sql($tableQuery, $tableParams);

            // Verificar si se obtuvo el nombre de la tabla
            if (empty($tableName)) {
                echo '<div class="alert alert-danger" role="alert">Por el momento no hay un directorio para este curso</div>';
                echo $OUTPUT->footer();
                exit;
            }

            // Realizar la consulta en la tabla correspondiente al curso
            $sql = "SELECT * FROM {" . $tableName . "} 
                    WHERE DNI = :nro_documento 
                    AND Apellidos = :apellidos 
                    AND Nombres = :nombres";
            
            $params = [
                'nro_documento' => $nro_documento,
                'apellidos' => $apellidos,
                'nombres' => $nombres,
            ];

            $result = $DB->get_record_sql($sql, $params);*/


            /**************************************************** */
            /* DiRECTORIO UTILIZANDO LOS CAMPOS DEL DASHBOARD DEL CURSO*/
            /********************************** */
            // Obtener el nombre de la tabla correspondiente al curso desde customfield_data
            $tableQuery = "SELECT charvalue FROM {customfield_data} WHERE fieldid = (SELECT id FROM {customfield_field} WHERE shortname = 'directorio') AND instanceid = :courseid";
            $tableParams = ['courseid' => $courseId];
            $tableName = $DB->get_field_sql($tableQuery, $tableParams);

            // Verificar si se obtuvo el nombre de la tabla
            if (empty($tableName)) {
                echo '<div class="alert alert-danger" role="alert">Por el momento no hay un directorio para este curso</div>';
                echo $OUTPUT->footer();
                exit;
            }

            // Realizar la consulta en la tabla correspondiente al curso (customfield_data)
            $sql = "SELECT * FROM {" . $tableName . "} 
                    WHERE DNI = :nro_documento 
                    AND Apellidos = :apellidos 
                    AND Nombres = :nombres";

            $params = [
                'nro_documento' => $nro_documento,
                'apellidos' => $apellidos,
                'nombres' => $nombres,
            ];
            $result = $DB->get_record_sql($sql, $params);

            
            // Verificar si el usuario está en la tabla
            if ($result) {
                // El usuario está en la tabla, ocultar el formulario y mostrar mensaje de felicitaciones
                echo '<div class="text-center mb-5">
                        <h3 class="text-success">¡Felicitaciones! Estás apto para llevar el curso</h3>
                        
                      </div>';
                      
                      foreach ($forms as $form) {
                        echo $form;
                    }
                    
                    // Ocultar el formulario de registro mediante JavaScript
                    echo '<script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var formularioRegistro = document.getElementById("formularioRegistro");
                        if (formularioRegistro) {
                            formularioRegistro.style.display = "none";
                        }
                    });
                </script>';
            } else {
                // El usuario no está en la tabla, mostrar mensaje de que no existe
                echo '<div class="text-center mb-5">
                        <h3 class="text-danger">Lo sentimos, por el momento no contamos con cupos para este usuario.</h3>
                        
                      </div>';
                      //echo ' <a href="../course/index.php" class="text-center btn btn-primary btn-lg mx-2">Volver a todos Cursos</a> ';
                        // Ocultar el formulario de registro mediante JavaScript
                    echo '<script>
                    document.addEventListener("DOMContentLoaded", function () {
                        var formularioRegistro = document.getElementById("formularioRegistro");
                        if (formularioRegistro) {
                            formularioRegistro.style.display = "none";
                        }
                    });
                </script>';
            }
        }
        
        ?>

        <form id="formularioRegistro" action="censo.php?id=<?php echo $courseId; ?>" method="post">
            <div class="row">
                <!-- Columna 1 -->
                <div class="col-md-4 col-sm-12">
                    <!-- Nro de Documento -->
                    <div class="form-group">
                        <label for="nro_documento">Nro de Documento:</label>
                        <input type="text" class="form-control" name="nro_documento" required disabled value="<?php echo $USER->username; ?>">
                    </div>

                    <!-- Apellidos -->
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" required disabled value="<?php echo $USER->lastname; ?>">
                    </div>

                    <!-- Nombres -->
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input type="text" class="form-control" name="nombres" required disabled value="<?php echo $USER->firstname; ?>">
                    </div>
                </div>

                <!-- Columna 2 -->
                <div class="col-md-4 col-sm-12">
                    <!-- Fecha de Nacimiento -->
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <?php
                    // Convertir timestamp a formato de fecha
                    $fechaNacimiento = isset($campos['Fecha de Nacimiento']) ? date('Y-m-d', $campos['Fecha de Nacimiento']) : '';
                    ?>
                    <input type="date" class="form-control" name="fecha_nacimiento" required disabled value="<?php echo $fechaNacimiento; ?>">
                </div>

                    <!-- Sexo -->
                    <div class="form-group">
                        <label>Sexo:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" disabled value="M" <?php echo ($campos['Sexo'] == 'M') ? 'checked' : ''; ?>>
                            <label class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" disabled value="F" <?php echo ($campos['Sexo'] == 'F') ? 'checked' : ''; ?>>
                            <label class="form-check-label">Femenino</label>
                        </div>
                    </div>
                    <!-- grado -->
                    <div class="form-group">
                        <label for="grado">Grado:</label>
                        <input type="text" class="form-control" name="grado" required disabled value="<?php echo isset($campos['Grado de Instrucción']) ? $campos['Grado de Instrucción'] : ''; ?>">
                    </div>
                </div>

                <!-- Columna 3 -->
                <div class="col-md-4 col-sm-12">
                    <!-- CORREO -->
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="text" class="form-control" name="correo" required disabled value="<?php echo $USER->email; ?>">
                    </div>

                    <!-- Profesion -->
                    <div class="form-group">
                        <label for="profesion">Profesion:</label>
                        <input type="text" class="form-control" name="profesion" required disabled value="<?php echo isset($campos['Profesion']) ? $campos['Profesion'] : ''; ?>">
                    </div>
                      <!-- entidad -->
                    <div class="form-group">
                        <label for="entidad">Entidad: </label>
                        <input type="text" class="form-control" name="entidad" required disabled value="<?php echo isset($campos['Entidad']) ? $campos['Entidad'] : ''; ?>">

                    </div>

                </div>
            </div>
            <?php
            /***************************************** */
?>

            <!-- Botón de Continuar -->
            <button type="submit" class="btn btn-primary">Continuar</button>
        </form>
    </div>

<?php
/****************/
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
