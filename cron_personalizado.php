<?php
define('CLI_SCRIPT', true);

// Ajusta la ruta al directorio de instalación de Moodle
require_once(__DIR__ . '/config.php');
require_once($CFG->libdir . '/clilib.php');

// Obtén el contexto del sistema
$systemcontext = context_system::instance();

// Crea un usuario ficticio del sistema para establecer el contexto del usuario
$systemuser = new stdClass();
$systemuser->id = -1;  // Un valor único que no se utiliza normalmente
$systemuser->contextid = $systemcontext->id;
$USER = $systemuser;

// Obtén la fecha y hora actual
$current_time = time();

// Obtén la fecha y hora hace 2 horas
$inactivity_threshold = $current_time - (7 * 24 * 60 * 60);
//$inactivity_threshold = $current_time - (1 * 60 * 60);

// Obtén los usuarios que no han iniciado sesión en las últimas 2 horas
$inactive_users = $DB->get_records_sql("SELECT u.id, u.username, u.email, u.lastaccess, CONCAT(u.firstname, ' ', u.lastname) AS fullname FROM {user} u WHERE u.lastaccess < ? AND u.suspended = 0", [$inactivity_threshold]);

// Enviar correos de recordatorio a los usuarios inactivos
foreach ($inactive_users as $user) {
    // Convierte el timestamp a una fecha legible
    $lastlogin_date = date('Y-m-d H:i:s', $user->lastaccess);

    $subject = 'Recordatorio de Acceso a la Plataforma Ceplan';
    $message = "Estimado(a) {$user->fullname},\n\nTe recordamos que no has ingresado a la Plataforma de Aula Virtual del CEPLAN recientemente. Tu última conexión fue el {$lastlogin_date}. ¡Esperamos verte pronto!\n\nSaludos,\nCentro Nacional de Planeamiento Estratégico";

    // Utiliza las funciones de correo de Moodle
    $emailresult = email_to_user($user, $USER, $subject, $message);

    if ($emailresult) {
        cli_writeln("Correo enviado a {$user->fullname} ({$user->email})");
    } else {
        cli_writeln("Error al enviar el correo a {$user->fullname} ({$user->email})");
    }
}

cli_writeln("Proceso completado.");
