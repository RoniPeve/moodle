<?php
require_once("../config.php");

$PAGE->set_title('Cursos');

echo $OUTPUT->header();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/cursos.css">
</head>
<h1 class="mb-4">Todos los Cursos</h1>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="form-inline mb-4">
        <div class="form-group buscador">
            <input type="text" name="search" class="form-control" placeholder="Buscar cursos" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
        </div>
        <button type="submit" class="btn btn-primary ml-2">Buscar</button>
        <div class="form-group ml-2">
            <label for="category">Categoría:</label>
            <select name="category" id="category" class="form-control">
                <option value="all" <?php echo (!isset($_GET['category']) || $_GET['category'] == 'all') ? 'selected' : ''; ?>>Todos</option>
                <?php
                // Obtener todas las categorías
                $categories = $DB->get_records_menu('course_categories', null, '', 'id, name');
                
                // Mostrar opciones en el menú desplegable
                foreach ($categories as $category_id => $category_name) {
                    $selected = (isset($_GET['category']) && $_GET['category'] == $category_id) ? 'selected' : '';
                    echo '<option value="' . $category_id . '" ' . $selected . '>' . $category_name . '</option>';
                }
                ?>
            </select>
        </div>
        
    </form>
    <?php
    // Mostrar el resultado de la búsqueda solo si hay un término de búsqueda
    if (!empty($_GET['search'])) {
        $search_keyword = $_GET['search'];
        $category_filter = isset($_GET['category']) ? $_GET['category'] : 'all';

        $sql = "
            SELECT COUNT(*) as count
            FROM {course} c
            WHERE c.id != 1
            AND (c.fullname LIKE ? OR c.summary LIKE ?)
            " . ($category_filter != 'all' ? "AND c.category = ?" : "");

        $params = ['%' . $search_keyword . '%', '%' . $search_keyword . '%'];
        if ($category_filter != 'all') {
            $params[] = $category_filter;
        }

        $result_count = $DB->get_field_sql($sql, $params);

        echo '<p>Resultados de la búsqueda: ' . $result_count . '</p>';
    }
    ?>
</div>

<div class="container cursos">
    
 
    <div class="row">
        <?php
        // Modificación para incluir el filtro por categoría
        $search_keyword = isset($_GET['search']) ? $_GET['search'] : '';
        $category_filter = isset($_GET['category']) ? $_GET['category'] : 'all';

        $sql = "
            SELECT c.id, c.fullname, c.summary, c.category, cc.name as category_name,
                ci.banner as imagen,
                cd1.value as modalidad, cd2.value as fecha, cd3.value as duracion
            FROM {course} c
            JOIN {course_categories} cc ON c.category = cc.id
            LEFT JOIN {course_images} ci ON c.id = ci.id_course_image
            LEFT JOIN {customfield_data} cd1 ON c.id = cd1.instanceid AND cd1.fieldid = 1
            LEFT JOIN {customfield_data} cd2 ON c.id = cd2.instanceid AND cd2.fieldid = 2
            LEFT JOIN {customfield_data} cd3 ON c.id = cd3.instanceid AND cd3.fieldid = 3
            WHERE c.id != 1
            AND (c.fullname LIKE ? OR c.summary LIKE ?)
            " . ($category_filter != 'all' ? "AND c.category = ?" : "");

        $params = ['%' . $search_keyword . '%', '%' . $search_keyword . '%'];
        if ($category_filter != 'all') {
            $params[] = $category_filter;
        }

        $cursos = $DB->get_records_sql($sql, $params);

        foreach ($cursos as $curso) {
            echo '<div class="col-md-4 lista_cursos">';
            echo '<div class="card position-relative">';
            
            // Muestra la categoría superpuesta
            echo '<div class="categoria-superpuesta">' . $curso->category_name . '</div>';
            
            // Construir la URL de la imagen
            $imagenURL = '../Assets/Images/' . $curso->imagen;
            echo '<img src="' . $imagenURL . '" class="card-img-top" alt="Imagen del curso">';
            
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $curso->fullname . '</h5>';
            //echo '<p class="card-text">' . $curso->summary . '</p>';
            
            // Limitar la descripción a 50 palabras y agregar puntos suspensivos
            $summary = strip_tags($curso->summary); // Eliminar etiquetas HTML para evitar problemas
            $summary_words = explode(' ', $summary);
            $limited_summary = implode(' ', array_slice($summary_words, 0, 50));
            echo '<p class="card-text">' . $limited_summary . '...</p>';

            // Mostrar datos adicionales con iconos de FontAwesome
            echo '<div class="datos-adicionales">';
            echo '<i class="fas fa-graduation-cap icono-fa"></i>' . $curso->modalidad . '<br>';
            echo '<i class="far fa-calendar-alt icono-fa"></i>' . $curso->fecha . '<br>';
            echo '<i class="far fa-clock icono-fa"></i>' . $curso->duracion;
            echo '</div>';
            
            echo '<a href="matricula.php?id=' . $curso->id . '" class="btn btn-primary">Ver detalles</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<script>
    // Script para enviar automáticamente el formulario cuando cambia la categoría
    document.getElementById('category').addEventListener('change', function() {
        this.form.submit();
    });
</script>

<?php
if (isloggedin() && !isguestuser()) {
    echo '<script>
            document.addEventListener("DOMContentLoaded", function () {
                var elementToHide = document.querySelector(\'li[data-key="home"]\');
                if (elementToHide) {
                    elementToHide.style.display = "none";
                }
            });
          </script>';
}
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
