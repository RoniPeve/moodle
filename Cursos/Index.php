<?php
require_once("../config.php");

$PAGE->set_title('Acerca de');

echo $OUTPUT->header();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Enlace a FontAwesome -->
    <style>
        /* Estilos básicos para las cards */
        .curso-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            text-align: center;
            cursor: pointer;
        }

        /* Estilo adicional para la categoría superpuesta */
        .categoria-superpuesta {
            position: absolute;
            top: 0;
            left: 0;
            background-color: #3B69AE;
            padding: 5px;
            font-weight: bold;
            color: #fff;
        }

        /* Estilo para los datos adicionales */
        .datos-adicionales {
            margin-top: 10px;
        }
        .lista_cursos{
            margin-bottom: 20px;
        }
        /* Estilo para los iconos de FontAwesome */
        .icono-fa {
            margin-right: 5px;
        }
        
    </style>
</head>

<div class="container-fluid cursos">
    <h1 class="mb-4">Todos los Cursos</h1>
 
    <div class="row">
        <?php
        // Consulta para obtener cursos de la base de datos, excluyendo el curso con id 1
        $cursos = $DB->get_records_sql("
            SELECT c.id, c.fullname, c.summary, c.category, c.imagen, cc.name as category_name,
                   cd1.value as modalidad, cd2.value as fecha, cd3.value as duracion
            FROM {course} c
            JOIN {course_categories} cc ON c.category = cc.id
            LEFT JOIN {customfield_data} cd1 ON c.id = cd1.instanceid AND cd1.fieldid = 1
            LEFT JOIN {customfield_data} cd2 ON c.id = cd2.instanceid AND cd2.fieldid = 2
            LEFT JOIN {customfield_data} cd3 ON c.id = cd3.instanceid AND cd3.fieldid = 3
            WHERE c.id != 1
        ");

        // Mostrar cards de cursos en columnas de tres, pero ocupando más ancho
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
            echo '<p class="card-text">' . $curso->summary . '</p>';
            
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

echo $OUTPUT->footer();
?>
