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
 * Page for creating or editing course category name/parent/description.
 *
 * When called with an id parameter, edits the category with that id.
 * Otherwise it creates a new category with default parent from the parent
 * parameter, which may be 0.
 *
 * @package    core_course
 * @copyright  2007 Nicolas Connault
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../config.php');
require_once($CFG->dirroot.'/course/lib.php');

require_login();
$max_id;
$nuevoID;
$id = optional_param('id', 0, PARAM_INT);
$obtenerid=$id;
$url = new moodle_url('/course/editcategory.php');
if ($id) {
    $coursecat = core_course_category::get($id, MUST_EXIST, true);
    $category = $coursecat->get_db_record();
    $context = context_coursecat::instance($id);
    navigation_node::override_active_url(new moodle_url('/course/index.php', ['categoryid' => $category->id]));
    $PAGE->navbar->add(get_string('settings'));
    $PAGE->set_primary_active_tab('home');
    $PAGE->set_secondary_active_tab('edit');

    $url->param('id', $id);
    $strtitle = new lang_string('editcategorysettings');
    $itemid = 0; // Initialise itemid, as all files in category description has item id 0.
    $title = $strtitle;
    $fullname = $coursecat->get_formatted_name();

} else {
    /********RESTABLECER EL AUTOINCREMENTABLES**************** */

    // Obtener el máximo ID de la tabla course_categories
    $max_id_record = $DB->get_record_sql("SELECT MAX(id) as max_id FROM {course_categories}");
    $max_id = $max_id_record->max_id;
    // Restablecer el contador de autoincremento al siguiente número después del máximo ID existente
    $sql = "ALTER TABLE {course_categories} AUTO_INCREMENT = " . ($max_id + 1);
    $DB->execute($sql);

    /************************* */

    $parent = required_param('parent', PARAM_INT);
    $url->param('parent', $parent);
    $strtitle = get_string('addnewcategory');
    if ($parent) {
        $parentcategory = $DB->get_record('course_categories', array('id' => $parent), '*', MUST_EXIST);
        $context = context_coursecat::instance($parent);
        navigation_node::override_active_url(new moodle_url('/course/index.php', ['categoryid' => $parent]));
        $fullname = format_string($parentcategory->name, true, ['context' => $context->id]);
        $title = "$fullname: $strtitle";
        $managementurl = new moodle_url('/course/management.php');
        // These are the caps required in order to see the management interface.
        $managementcaps = array('moodle/category:manage', 'moodle/course:create');
        if (!has_any_capability($managementcaps, context_system::instance())) {
            // If the user doesn't have either manage caps then they can only manage within the given category.
            $managementurl->param('categoryid', $parent);
        }
        $PAGE->set_primary_active_tab('home');
        $PAGE->navbar->add(get_string('coursemgmt', 'admin'), $managementurl);
        $PAGE->navbar->add(get_string('addcategory', 'admin'));
    } else {
        $context = context_system::instance();
        $fullname = $SITE->fullname;
        $title = $strtitle;
        $PAGE->set_secondary_active_tab('courses');
    }

    $category = new stdClass();
    $category->id = 0;
    $category->parent = $parent;
    $itemid = null; // Set this explicitly, so files for parent category should not get loaded in draft area.
}

require_capability('moodle/category:manage', $context);

$PAGE->set_context($context);
$PAGE->set_url($url);
$PAGE->set_pagelayout('admin');
$PAGE->set_title($title);
$PAGE->set_heading($fullname);

$mform = new core_course_editcategory_form(null, array(
    'categoryid' => $id,
    'parent' => $category->parent,
    'context' => $context,
    'itemid' => $itemid
));
$mform->set_data(file_prepare_standard_editor(
    $category,
    'description',
    $mform->get_description_editor_options(),
    $context,
    'coursecat',
    'description',
    $itemid
));
$nuevoID=$max_id+1;
$manageurl = new moodle_url('/course/management.php');
if ($mform->is_cancelled()) {
    if ($id) {
        $manageurl->param('categoryid', $id);
    } else if ($parent) {
        $manageurl->param('categoryid', $parent);
    }
    redirect($manageurl);
} else if ($data = $mform->get_data()) {
    
    if (isset($coursecat)) {
        $id = $coursecat->id;
        if ((int)$data->parent !== (int)$coursecat->parent && !$coursecat->can_change_parent($data->parent)) {
            throw new \moodle_exception('cannotmovecategory');
        }
        $coursecat->update($data, $mform->get_description_editor_options());

        // Actualizar la imagen si se proporciona un nuevo nombre
        try {
            if (!empty($data->category_image_name)) {
                // Verificar si ya existe un registro para esta categoría en la tabla course_categories_images
                $existing_image = $DB->get_record('course_categories_images', ['id_category' => $id]);
            
                if ($existing_image) {
                    // Si existe, actualizar el nombre de la imagen solo si ha cambiado
                    if ($existing_image->image != $data->category_image_name) {
                        // Construir la consulta de actualización
                        $sql = "UPDATE {course_categories_images} SET image = :image WHERE id_category = :id_category";

                        $params = [
                            'image' => $data->category_image_name,
                            'id_category' => $id
                        ];

                        $updated = $DB->execute($sql, $params);
                    }
                } 
            }            
        } catch (Exception $e) {
            echo "Se produjo un error: " . $e->getMessage(); 
        }
    } else {
        $category = core_course_category::create($data, $mform->get_description_editor_options());

        /*********** CODIGO PARA INSERTAR EN LA NUEVA TABLA DE CORUSE_CATEGORIES_IMAGES
         * ESTA TABLA CONTIENE EL ID DE MI CATEGORIA Y EL NOMBRE DE LA IMAGEN QUE SE DEBE ENCONTRAR EN ASSETS/IMAGES/
         *  ************ */
        /********************************************* */
        // Insertar los datos de la imagen en la tabla course_categories_images
        try{
            if (!empty($data->category_image_name)) {
                $image_data = new stdClass();
                $image_data->id_category = $nuevoID;
                $image_data->image = $data->category_image_name;
    
                $inserted = $DB->insert_record('course_categories_images', $image_data);
                if (!$inserted) {
                    echo "Error al insertar los datos de la imagen en la base de datos.";
                }
            }
    
        }catch(Exception $e){
            echo "Se produjo un error: " . $e->getMessage(); 
        }
        /************************** */
    }
    
    $manageurl->param('categoryid', $category->id);
    redirect($manageurl);
    
    
}

echo $OUTPUT->header();
echo $OUTPUT->heading($strtitle);
$mform->display();
echo $OUTPUT->footer();
