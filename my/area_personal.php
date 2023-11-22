<?php
// Incluye el archivo de configuración de Moodle
require_once("../config.php");


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="area_personal.scss"> <!-- Reemplaza "ruta/del/archivo" con la ruta real de tu archivo CSS -->
</head>
<div class="descripcion_dnpe">
    <div class="nombre_plataforma">
        <img src="../Assets/Images/monitor.png" alt="">
        <h2>CursosDNPE</h2>
    </div>
    <p>La Dirección Nacional de Prospectiva y Estudios Estratégicos te da la bienvenida 
        a su plataforma virtual de recursos de aprendizaje, en la cual pondremos a tu
        disposición cursos que te permitirán potenciar tus conocimientos, habilidades 
        y competencias con la finalidad de construir un Perú desarrollado y sostenible a 
        lo largo del tiempo.</p>
</div>

<div class="categorias">
    <?php
    // Obtener todas las categorías
    $categories = $DB->get_records('course_categories');

    // Mostrar cada categoría
    foreach ($categories as $category) {
        $category_id = $category->id;
        $category_name = $category->name;
        $category_image = $category->image;
        $category_description = $category->description;

        echo '<div class="categoria">';
        echo '<h3>' . $category_name . '</h3>';
        echo '<div class="contenido">';
        echo '<div class="circulo">';
        echo '<a href="../course/index.php?categoryid=' . $category_id . '"><img src="../Assets/Images/' . $category_image . '" alt=""></a>';
        echo '</div>';
        echo $category_description ;
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

<?php
echo $OUTPUT->footer();
?>
