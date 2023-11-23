
<?php

// This file is part of Moodle - http://moodle.org/
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
 * Lists the course categories
 *
 * @copyright 1999 Martin Dougiamas  http://dougiamas.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package course
 */

require_once("../config.php");
require_once($CFG->dirroot. '/course/lib.php');
$PAGE->set_heading('Todos los Cursos');
$categoryid = optional_param('categoryid', 0, PARAM_INT); // Category id
//$site = get_site();//nombre del sitio


if ($CFG->forcelogin) {
    require_login();
}

$heading = $site->fullname;
if ($categoryid) {
    $category = core_course_category::get($categoryid); // This will validate access.
    $PAGE->set_category_by_id($categoryid);
    $PAGE->set_url(new moodle_url('/course/index.php', array('categoryid' => $categoryid)));
    $PAGE->set_pagetype('course-index-category');
    $heading = $category->get_formatted_name();
} else if ($category = core_course_category::user_top()) {
    // Check if there is only one top-level category, if so use that.
    $categoryid = $category->id;
    $PAGE->set_url('/course/index.php');
    if ($category->is_uservisible() && $categoryid) {
        $PAGE->set_category_by_id($categoryid);
        $PAGE->set_context($category->get_context());
        if (!core_course_category::is_simple_site()) {
            $PAGE->set_url(new moodle_url('/course/index.php', array('categoryid' => $categoryid)));
            $heading = $category->get_formatted_name();
        }
    } else {
        $PAGE->set_context(context_system::instance());
    }
    $PAGE->set_pagetype('course-index-category');
} else {
    throw new moodle_exception('cannotviewcategory');
}

$PAGE->set_pagelayout('coursecategory');
$PAGE->set_primary_active_tab('home');
$PAGE->add_body_class('limitedwidth');
$courserenderer = $PAGE->get_renderer('core', 'course');

$PAGE->set_heading($heading);
$content = $courserenderer->course_category($categoryid);

$PAGE->set_secondary_active_tab('categorymain');

echo $OUTPUT->header();
echo $OUTPUT->skip_link_target();
echo $content;

// Trigger event, course category viewed.
$eventparams = array('context' => $PAGE->context, 'objectid' => $categoryid);
$event = \core\event\course_category_viewed::create($eventparams);
$event->trigger();
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
function obtener_nombre_imagen($category_id) {
    global $DB;

    // Reemplaza 'nombre_tabla' con el nombre real de tu tabla que contiene la relación entre categorías e imágenes.
    $table_name = 'course_categories_images';

    // Realiza la consulta para obtener el nombre de la imagen.
    $sql = "SELECT image FROM {" . $table_name . "} WHERE id_category = :category_id";
    $params = array('category_id' => $category_id);
    $result = $DB->get_record_sql($sql, $params);

    if ($result) {
        return $result->image;
    } else {
        // Si no se encuentra la imagen, puedes proporcionar un valor predeterminado o manejarlo de otra manera.
        return 'imagen_predeterminada.svg';
    }
}

/********iconos dinamicos en categorias de cursos***** */
// Obtén la lista de categorías desde la base de datos
$sql = "SELECT id FROM {course_categories}";
$categories = $DB->get_records_sql_menu($sql);

// Acumula el código CSS en una variable
$css = '';

foreach ($categories as $category_id => $category_name) {
    // Obtener el nombre del archivo de imagen de la base de datos
    $category_image = obtener_nombre_imagen($category_id);

    // Acumula el código CSS dinámico
    $css .= '.category[data-categoryid="' . $category_id . '"] .info h3 a::before  {';
    $css .= '    content: \'\';';
    $css .= '    background-image: url(\'../Assets/Images/' . $category_image . '\');';
    $css .= '    background-size: cover;';
    $css .= '    width: 40px;';
    $css .= '    height: 40px;';
    $css .= '    margin-right: 5px;';
    $css .= '    display: inline-block;';
    $css .= '}';
}

// Imprime todo el código CSS fuera del bucle
echo '<style>' . $css . '</style>';

echo '</style>';
echo $OUTPUT->footer();
