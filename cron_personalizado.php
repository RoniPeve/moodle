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

// Obtén la fecha y hora hace 48 horas
$inactivity_threshold = $current_time - (48 * 60 * 60);

// Obtén los usuarios que no han iniciado sesión en las últimas 48 horas
$inactive_users = $DB->get_records_sql("SELECT id, username, email FROM {user} WHERE lastlogin < ? AND suspended = 0", [$inactivity_threshold]);

// Enviar correos de recordatorio a los usuarios inactivos
foreach ($inactive_users as $user) {
    $subject = 'Recordatorio de Acceso a la Plataforma';
    $message = 'Estimado ' . $user->username . ',\n\nEste es un recordatorio amistoso para acceder a la plataforma Moodle en las últimas 48 horas. ¡Esperamos verte pronto!\n\nSaludos,\nTu Plataforma Moodle';

    // Utiliza las funciones de correo de Moodle
    $emailresult = email_to_user($user, $USER, $subject, $message);

    if ($emailresult) {
        cli_writeln("Correo enviado a {$user->username} ({$user->email})");
    } else {
        cli_writeln("Error al enviar el correo a {$user->username} ({$user->email})");
    }
}

cli_writeln("Proceso completado.");
