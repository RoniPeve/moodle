<?php
require_once(__DIR__ . '/../config.php'); // Ajusta la ruta relativa a config.php según sea necesario.
require_once("$CFG->libdir/formslib.php");

class matriculaform extends moodleform {

    public function definition() {
        $mform = $this->_form;

        // Agrega los campos al formulario
        $mform->addElement('text', 'Username', get_string('DNI', 'local_yourplugin'));
        $mform->setType('dni', PARAM_ALPHANUMEXT);
        $mform->addRule('dni', null, 'required', null, 'client');

        $mform->addElement('text', 'nombre', get_string('Nombres', 'local_yourplugin'));
        $mform->setType('nombre', PARAM_NOTAGS);
        $mform->addRule('nombre', null, 'required', null, 'client');

        $mform->addElement('text', 'apellidos', get_string('lastname', 'local_yourplugin'));
        $mform->setType('apellidos', PARAM_NOTAGS);
        $mform->addRule('apellidos', null, 'required', null, 'client');

        $mform->addElement('text', 'cargo', get_string('jobtitle', 'local_yourplugin'));
        $mform->setType('cargo', PARAM_NOTAGS);

        $mform->addElement('text', 'entidad', get_string('organization', 'local_yourplugin'));
        $mform->setType('entidad', PARAM_NOTAGS);

        // Añade botones de acción
        $this->add_action_buttons();
    }

    function validation($data, $files) {
        $errors = parent::validation($data, $files);

        // Añade aquí tus propias reglas de validación si es necesario

        return $errors;
    }
}

$newaccount = get_string('newaccount');
$login      = get_string('login');

$PAGE->navbar->add($login);
$PAGE->navbar->add($newaccount);

//$PAGE->set_pagelayout('login');
$PAGE->set_title($newaccount);
//$PAGE->set_heading($SITE->fullname);

echo $OUTPUT->header();
