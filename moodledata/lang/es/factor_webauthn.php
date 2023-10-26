<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'factor_webauthn', language 'es', version '4.3'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:revoke'] = 'Revocar autenticador';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Híbrido';
$string['authenticator:internal'] = 'Interno';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nombre de clave de seguridad';
$string['error'] = 'Fallo en la autenticación';
$string['info'] = '<p>Use una clave de seguridad</p>';
$string['logindesc'] = 'Clique "continuar"para usar su clave de seguridad o token de autenticación';
$string['loginoption'] = 'Usar token de autenticación';
$string['loginskip'] = 'No tengo mi clave de seguridad';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Verificar que es usted mediante token de autenticación';
$string['pluginname'] = 'Clave de seguridad';
$string['privacy:metadata'] = 'El plugin Security key factor no almacena ningún dato personal';
$string['register'] = 'Registrar autenticador';
$string['settings:authenticatortypes'] = 'Tipos de autenticador';
$string['settings:authenticatortypes_help'] = 'Alternar ciertos tipos de autenticador';
$string['settings:userverification'] = 'Verificación de usuario';
$string['settings:userverification_help'] = 'Sirve para verificar que la persona que se está autenticando es de hecho quien dice ser. La verificación de usuario puede tener distintas formas, como una contraseña, PIN, huella dactilar, etc.';
$string['setupfactor'] = 'Configurar autenticador';
$string['summarycondition'] = 'usando un autenticador soportado por WebAuthn';
$string['userverification:discouraged'] = 'No se pudo utilizar la verificación de usuario, por ejemplo para minimizar la interacción del usuario';
$string['userverification:preferred'] = 'Se prefiere verificación de usuario, la autenticación no fallará si falta la verificación de usuario';
$string['userverification:required'] = 'Se requiere verificación de usuario (p.ej., mediante pin). La autenticación falla si la clave no tiene verificación de usuario';
