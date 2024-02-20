<?php
// Incluye el archivo de configuración de Moodle
require_once("../config.php");

// Establece el título de la página
$PAGE->set_title('Cronograma');
//$PAGE->set_heading('Acerca de');

// Inicia la impresión de la página
echo $OUTPUT->header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Próximos Eventos</h1>
<div class="calendario">
<iframe src="https://calendar.google.com/calendar/embed?src=28a89d9ef1b7a5046cfd9a771cfc61d298085e8402a51a7b3e231af7e72d911c%40group.calendar.google.com&ctz=America%2FLima" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
</div>
</body>
</html>
<?php
/************OCULTAR LA PESTAÑA PAGINA PRINCIPAL*********** */
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
// Finaliza la página
echo $OUTPUT->footer();
?>


