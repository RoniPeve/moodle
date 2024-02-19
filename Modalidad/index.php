<?php
// Incluye el archivo de configuración de Moodle
require_once("../config.php");

// Establece el título de la página
$PAGE->set_title('Modalidades');
//$PAGE->set_heading('Acerca de');

// Inicia la impresión de la página
echo $OUTPUT->header();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="modalidad.scss"> <!-- Reemplaza "ruta/del/archivo" con la ruta real de tu archivo CSS -->
</head>
<body>
    <h1 class="programas">- Tipos de Programas -</h1>
<div class="container">
  <div class="row">
    <div class="col">
    <div class="image-container">
            <img src="../Assets/Images/fondo_trabajo.jpg" alt="Imagen 3">
        </div>
    </div>
    <div class="col">
      <h3>Cursos Mooc</h3>
      <p>MOOC (Massive Open Online Course), es una modalidad de formación que se caracteriza por ser masivo y abierto; es decir, diseñados para ser impartidos a un gran número de alumnos a la vez.

<br><br>El estudiante ingresa a la plataforma en el horario que más le convenga, participa en foros, observa recursos interactivos y soluciona exámenes. 

<br><br>Los cursos Mooc duran 15 días (equivale a 15 horas de estudio). Al culminar, el estudiante recibe un certificado de aprobación. 

<br><br>Vacantes ilimitadas. Dirigido al público en general.</p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h3>Título 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel tortor ut leo ultrices vestibulum. Integer eu ipsum sapien.</p>
    </div>
    <div class="col">
    <div class="image-container">
            <img src="../Assets/Images/fondo_trabajo.jpg" alt="Imagen 3">
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
        <div class="image-container">
            <img src="../Assets/Images/fondo_trabajo.jpg" alt="Imagen 3">
        </div>
    </div>
    <div class="col">
      <h3>Título 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel tortor ut leo ultrices vestibulum. Integer eu ipsum sapien.</p>
    </div>
  </div>
</div>

</body>
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
