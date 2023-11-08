<?php
require_once(__DIR__ . '/../config.php'); // Ajusta la ruta relativa a config.php según sea necesario.
require_once('matriculaform.php'); // Asegúrate de que la ruta al archivo del formulario sea correcta.

// Crea una instancia del formulario
$mform = new matriculaform();

// Verifica si el formulario ha sido cancelado o enviado
if ($mform->is_cancelled()) {
    // Aquí manejas la lógica de cancelación, como redirigir a otra página
    redirect($CFG->wwwroot.'/course/index.php');

} else if ($fromform = $mform->get_data()) {
    // Aquí manejas la lógica de procesamiento de los datos enviados
    // Por ejemplo, podrías insertar los datos en una base de datos o realizar alguna otra acción
} else {
    // Mostrar el formulario
    $mform->display();
}
