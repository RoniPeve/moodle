<?php
require_once("../config.php");

$PAGE->set_title('Censo');
$PAGE->set_heading('Censo');

echo $OUTPUT->header();
echo '<p>Usuario ID: ' . $USER->username . '</p>';
// AQUI MOSTRAR CARGO, PROFESION, ENTIDAD

/// Obtener el ID del usuario
$userId = $USER->id;

// Consultar la tabla mdl_user_info_field para obtener los campos personalizados
$sql = "SELECT f.name, d.data
        FROM {user_info_data} d
        JOIN {user_info_field} f ON d.fieldid = f.id
        WHERE d.userid = :userid";

$params = ['userid' => $userId];
$userInfoData = $DB->get_records_sql($sql, $params);

// Dividir los campos en tres columnas
$numColumns = 3;
$fieldsPerColumn = ceil(count($userInfoData) / $numColumns);

// Mostrar los campos personalizados en un formulario con tres columnas
echo '<form><div class="row">';
$i = 0;

foreach ($userInfoData as $field) {
    if ($i % $fieldsPerColumn === 0 && $i > 0) {
        echo '</div><div class="row">';
    }

    echo '<div class="col-md-' . (12 / $numColumns) . '">';
    echo '<div class="form-group">';
    echo '<label for="' . $field->name . '">' . $field->name . ':</label>';

    // Convertir timestamp de fecha de nacimiento a formato legible
    if ($field->name === 'Fecha de Nacimiento') {
        $formattedDate = date('d-m-Y', $field->data);
        echo '<input type="text" class="form-control" id="' . $field->name . '" name="' . $field->name . '" value="' . $formattedDate . '" disabled>';
    } else {
        echo '<input type="text" class="form-control" id="' . $field->name . '" name="' . $field->name . '" value="' . $field->data . '" disabled>';
    }

    echo '</div>';
    echo '</div>';

    $i++;
}

echo '</div></form>';

// TODO: find if future enrolments present and display some info
// formulario para matricula
/*foreach ($forms as $form) {
    echo $form;
}*/


//TODO: find if future enrolments present and display some info
//formulario para matricula
/*foreach ($forms as $form) {
    echo $form;
}*/

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
