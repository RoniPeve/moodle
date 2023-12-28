<?php
// Incluye el archivo de configuración de Moodle
require_once("../config.php");

// Establece el título de la página
$PAGE->set_title('Acerca de');
//$PAGE->set_heading('Acerca de');

// Inicia la impresión de la página
echo $OUTPUT->header();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="acerca.scss"> <!-- Reemplaza "ruta/del/archivo" con la ruta real de tu archivo CSS -->
</head>
<!-- Aquí puedes agregar tu contenido "Acerca de" -->

<div class="banner">
    <div class="banner-text">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto nisi ipsum omnis explicabo placeat alias, dolor, molestias esse incidunt doloribus accusantium sequi sint? Odit, aut excepturi dolorem non, esse magni illo asperiores adipisci accusamus ducimus ipsum saepe explicabo autem! Tenetur sunt, officiis iure nam iusto perspiciatis libero dolorum praesentium officia!</p>
    </div>
</div>
<div class="cuerpo_contenido">
    <div class="cuerpo">
        <div class="titulo1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, distinctio?</div>
        <div class="parrafo1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem porro unde aut, dolores, asperiores aliquid cupiditate ullam minus expedita sunt molestiae maiores eum rerum, laudantium beatae. Eveniet nobis animi voluptas nemo optio sapiente fugit qui incidunt, a quasi architecto, veniam doloribus necessitatibus cum. Qui aliquam adipisci atque minus ad modi, voluptatem saepe. Placeat possimus corrupti voluptates unde asperiores aliquid recusandae nesciunt, ut tenetur, quibusdam facere ab, atque accusantium eveniet magnam id. Minima facere nihil quis sed? Sapiente minima atque in ratione praesentium cum similique, quasi molestiae fugit quaerat est, et quibusdam possimus odit sequi provident animi cupiditate quidem nostrum voluptatum.</div>
        <div class="titulo1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, distinctio?</div>
        <div class="parrafo1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem porro unde aut, dolores, asperiores aliquid cupiditate ullam minus expedita sunt molestiae maiores eum rerum, laudantium beatae. Eveniet nobis animi voluptas nemo optio sapiente fugit qui incidunt, a quasi architecto, veniam doloribus necessitatibus cum. Qui aliquam adipisci atque minus ad modi, voluptatem saepe. Placeat possimus corrupti voluptates unde asperiores aliquid recusandae nesciunt, ut tenetur, quibusdam facere ab, atque accusantium eveniet magnam id. Minima facere nihil quis sed? Sapiente minima atque in ratione praesentium cum similique, quasi molestiae fugit quaerat est, et quibusdam possimus odit sequi provident animi cupiditate quidem nostrum voluptatum.</div>
        <div class="titulo1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, distinctio?</div>
        <div class="parrafo1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem porro unde aut, dolores, asperiores aliquid cupiditate ullam minus expedita sunt molestiae maiores eum rerum, laudantium beatae. Eveniet nobis animi voluptas nemo optio sapiente fugit qui incidunt, a quasi architecto, veniam doloribus necessitatibus cum. Qui aliquam adipisci atque minus ad modi, voluptatem saepe. Placeat possimus corrupti voluptates unde asperiores aliquid recusandae nesciunt, ut tenetur, quibusdam facere ab, atque accusantium eveniet magnam id. Minima facere nihil quis sed? Sapiente minima atque in ratione praesentium cum similique, quasi molestiae fugit quaerat est, et quibusdam possimus odit sequi provident animi cupiditate quidem nostrum voluptatum.</div>
    </div>
    <div class="imagen">
        <img src="../Assets/Images/chica.png" alt="">
    </div>
</div>
<!-- Formulario de contacto para que lo usuarios envien sus comentarios -->
<div class="formulario">
    <div class="titulo_formulario">Ayúdenos a mejorar. Su opinión es importante para nosotros.</div>
    <div class="parrafo_formulario">
    Con el propósito de brindar un mejor servicio y asegurar la calidad de la información provista, agradecemos nos pueda brindar sus comentarios o aportes. En ese sentido, sírvase a completar el siguiente formulario o también puede escribirnos directamente a geo@ceplan.gob.pe.
    </div>
<form action="../local/contact/index.php" method="post" class="contact-us">
        <fieldset>
            <label for="name" id="namelabel">Nombres <strong class="required">(Requerido)</strong></label><br>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\s]){2,}"
                    title="Minimum 3 letters/spaces." required="required" value=""><br>
            <label for="email" id="emaillabel">Correo <strong class="required">(Requerido)</strong></label><br>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" value=""><br>
            <label for="subject" id="nom_entidad">Entidad <strong class="required">(Requerido)</strong></label><br>
            <input id="subject" name="entidad" type="text" size="57" maxlength="200"
                    title="Minimum 5 characters." required="required"><br>
            <label for="telefono" id="num_telefono">Teléfono <strong class="required">(Requerido)</strong></label><br>
            <input id="telefono" name="telefono" type="text" size="57" maxlength="80" minlength="9"
                    title="Minimum 5 characters." required="required"><br>
            <label for="subject" id="subjectlabel">Asunto <strong class="required">(Requerido)</strong></label><br>
            <input id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Minimum 5 characters." required="required"><br>
            <label for="message" id="messagelabel">Comentario <strong class="required">(Requerido)</strong></label><br>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Minimum 5 characters." required="required"></textarea><br>
            <input type="hidden" id="sesskey" name="sesskey" value="">
            <script>document.getElementById('sesskey').value = M.cfg.sesskey;</script>
        </fieldset>
        <div>
            <input type="submit" name="submit" id="submit" value="Enviar">
        </div>
    </form>
</div>
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
