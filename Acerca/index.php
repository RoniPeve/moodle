<?php
// Incluye el archivo de configuración de Moodle
require_once("../config.php");

// Establece el título de la página
$PAGE->set_title('Acerca de');
$PAGE->set_heading('Acerca de');

// Inicia la impresión de la página
echo $OUTPUT->header();
?>

<!-- Aquí puedes agregar tu contenido "Acerca de" -->
<div class="content">
    <h2>Aula Virtual del Ceplan</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto nisi ipsum omnis explicabo placeat alias, dolor, molestias esse incidunt doloribus accusantium sequi sint? Odit, aut excepturi dolorem non, esse magni illo asperiores adipisci accusamus ducimus ipsum saepe explicabo autem! Tenetur sunt, officiis iure nam iusto perspiciatis libero dolorum praesentium officia!</p>
</div>

<?php
// Finaliza la página
echo $OUTPUT->footer();
?>
