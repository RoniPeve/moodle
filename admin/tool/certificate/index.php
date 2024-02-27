<?php
// This file is part of the tool_certificate plugin for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Handles verifying the code for a certificate.
 *
 * @package   tool_certificate
 * @copyright 2017 Mark Nelson <markn@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This file does not need require_login because capability to verify can be granted to guests, skip codechecker here.
// @codingStandardsIgnoreLine
require_once('../../../config.php');

$code = optional_param('code', '', PARAM_ALPHANUM); // The code for the certificate we are verifying.

if (!\tool_certificate\permission::can_verify()) {
    throw new moodle_exception('verifynotallowed', 'tool_certificate');
}

$pageurl = new moodle_url('/admin/tool/certificate/index.php');

if ($code) {
    $pageurl->param('code', $code);
}

$heading = get_string('verifycertificates', 'tool_certificate');

$PAGE->set_url($pageurl);
$PAGE->set_context(context_system::instance());
$PAGE->set_title(format_string($heading));
$PAGE->set_heading($SITE->fullname);

$PAGE->navbar->add($heading);


$form = new \tool_certificate\verify_certificate_form($pageurl, null, 'post', '',
    ['class' => 'mt-3 mb-5 p-4 bg-light']);

if ($code) {
    $form->set_data(['code' => $code]);
}

$PAGE->set_heading($heading);
echo $OUTPUT->header();

?>
<p>Esta página tiene por finalidad proveer un mecanismo para verificar la autenticidad de la Constancia de Aprobación de los cursos tomados por un estudiante. </p>

<?php

$form->display();
if ($form->get_data()) {
    $result = \tool_certificate\certificate::verify($code);
    $results = new \tool_certificate\output\verify_certificate_results($result);
    echo $OUTPUT->render($results);
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
?>
<style>
.certificado {
    background-color: #f8f9fa;
    padding: 20px;
    text-align: center;
}

.certificado h4 {
    color: #333;
}

.certificado p {
    color: #666;
}

.imagen_certificado {
    margin-top: 20px;
    width: 50%;
}

.imagen_Certificado img {
    width: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Agregamos un sombreado */
    border-radius: 10px;
    box-sizing: border-box;
    display: block;
    margin: 0 auto;
}
.modal {
    display: none;
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}

.modal-content {
    width: 80%;
    height: 400px;
    padding: 0px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    overflow: hidden;
    object-fit: contain;

}
.imagen_modal{
    width: 100%;
    height: 100%;
}
.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    padding: 15px;
}

</style>

<div class="certificado">
        <h4>¿Dónde encuentro el Código de Verificación?</h4>
        <p>El Código de verificación de su constancia aparece en la parte inferior izquierda del documento. También puede escanear el código QR para obtener dicho código.</p>
        <div class="imagen_Certificado" id="modalTrigger">
            <img onclick="openModal()" src="../../../Assets/Images/codigo_certificados.png" alt="">
        </div>
    </div>

<div id="myModal" class="modal">
<div class="modal-content" style="background-size: cover; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
<!--<div class="modal-content" style="background: url(../../../Assets/Images/codigo_certificados.png) no-repeat center center fixed; background-size: cover; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
--><span class="close" onclick="closeModal()">&times;</span>
<img class="imagen_modal" src="../../../Assets/Images/codigo_certificados.png" alt=""></img>

</div>
</div>
<script>
function openModal() {
        document.getElementById("myModal").style.display = "block";

    }

    function closeModal() {
        
        document.getElementById("myModal").style.display = "none";
    }

</script>
<?php
echo $OUTPUT->footer();
