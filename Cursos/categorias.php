 <?php
 require_once("../config.php");
 
 $PAGE->set_title('Cursos');
 
 echo $OUTPUT->header();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/cursos.css">
</head>

<div class="categorias">
    <?php
    // Obtener todas las categorías con sus imágenes de la nueva tabla
    $sql = "SELECT cc.id, cc.name, cci.image AS category_image, cc.description
    FROM {course_categories} cc
    LEFT JOIN {course_categories_images} cci ON cc.id = cci.id_category";

    $categories = $DB->get_records_sql($sql);

    // Mostrar cada categoría
    foreach ($categories as $category) {
    $category_id = $category->id;
    $category_name = $category->name;
    $category_image = $category->category_image; // Usar el nuevo campo de imagen
    $category_description = $category->description;

    echo '<div class="categoria">';
    echo '<h3>' . $category_name . '</h3>';
    echo '<div class="contenido">';
    echo '<div class="circulo">';
    echo '<a href="../course/index.php?categoryid=' . $category_id . '"><img src="../Assets/Images/' . $category_image . '" alt=""></a>';
    //echo '<a href="../Cursos/Index.php?search=&category=' . $category_id . '"><img src="../Assets/Images/' . $category_image . '" alt=""></a>';
    echo '</div>';
    echo $category_description;
    echo '</div>';
    echo '</div>';
    }
    ?>
</div>
<?php
//abro php
/***********FIN DE AREA PERSONAL**************** */
//echo $OUTPUT->custom_block_region('content');//contenido dinamico de area personal //ocultar calendario

/*********OCULTAR PAGINA PRINCIPAL************* */
if (isloggedin() && !isguestuser()) {
    // El usuario ha iniciado sesión, mostrar solo el bloque específico.
   // echo "¡Bienvenido! Has iniciado sesión en Moodle. colocar";
   
    // Agregar el script JavaScript para ocultar el elemento li con data-key="home"
    echo '<script>a
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

// Trigger dashboard has been viewed event.
$eventparams = array('context' => $context);
$event = \core\event\dashboard_viewed::create($eventparams);
$event->trigger();
