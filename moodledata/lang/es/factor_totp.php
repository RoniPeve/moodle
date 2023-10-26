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
 * Strings for component 'factor_totp', language 'es', version '4.3'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:revoke'] = 'Revocar autenticador de contraseña de un sólo uso basada en el tiempo (TOTP)';
$string['devicename'] = 'Etiqueta del dispositivo';
$string['devicename_help'] = 'Este es el dispositivo en el que usted tiene instalada la app autenticadora. Usted puede configurar mútiples dispositivos, así que esta etiqueta le ayuda a distinguir cuáles está usando. Debería configurar cada dispositivo con un código único para que puedan revocarse por separado.';
$string['devicenameexample'] = 'Por ejemplo, "Teléfono del trabajo"';
$string['error:alreadyregistered'] = 'Esta contraseña de un solo uso basada en tiempo (TOTP) ya se había registrado.';
$string['error:codealreadyused'] = 'Este código ya se había usado para autenticarse. Por favor, espere a que se genere un nuevo código y vuelva a intentarlo.';
$string['error:futurecode'] = 'Este código no es válido. Por favor, verifique que la hora de su dispositivo de autenticación es correcta y vuelva a intentarlo.
  La hora actual es {$a}.';
$string['error:oldcode'] = 'Este código es demasiado antiguo. Por favor, verifique que la hora de su dispositivo de autenticación sea correcta y vuelva a intentarlo.
  La hora actual es {$a}.';
$string['error:wrongverification'] = 'Código de verificación incorrecto';
$string['factorsetup'] = 'Configuración de app';
$string['info'] = '<p>Use cualquier app autenticadora TOTP para obtener un código de verificación en su teléfono incluso cuando esté fuera de línea.</p>

<p>Por ejemplo <a href="https://2fas.com/">2FAS Auth</a>, <a href="https://freeotp.github.io/">FreeOTP</a>, Google Authenticator, Microsoft Authenticator o Twilio Authy.</p>

<p>Nota: Por favor, asegúrese de que la fecha y hora de su dispositivo se ha ajustado a "automática" o "por red".</p>';
$string['logindesc'] = 'Use la app de autenticación de su dispositivo móvil para generar un código.';
$string['loginoption'] = 'Usar aplicación de autenticación';
$string['loginskip'] = 'No tengo mi dispositivo';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Verificar que es usted mediante app móvil';
$string['pluginname'] = 'App autenticadora';
$string['privacy:metadata'] = 'El plugin Authenticator app factor no almacena ningún dato personal';
$string['settings:totplink'] = 'Mostrar enlace a la app para móviles';
$string['settings:totplink_help'] = 'Si se habilita el usuario verá una tercera opción ocn un enlace directo otpauth://';
$string['settings:window'] = 'Ventana de verificación TOTP';
$string['settings:window_help'] = 'Cuánto tiempo es válido cada código. Puede configurar esto a un valor mayor si los relojes de sus usuarios habitualmente tienen alguna desviación.
  Redondeado a los 30 segundos más cercanos, que es el tiempo de generación de nuevos códigos';
$string['setupfactor'] = 'Configuración de autenticador TOTP';
$string['setupfactor:account'] = 'Cuenta:';
$string['setupfactor:enter'] = 'Introduzca los detalles manualmente:';
$string['setupfactor:key'] = 'Clave secreta:';
$string['setupfactor:link'] = '<b> O </b> abra la app para móviles:';
$string['setupfactor:link_help'] = 'Este enlace puede funcionar si usted está en un dispositivo móvil y ya tiene una app de autenticación instalada. Observe que usar TOTP en el mismo dispositivo en que se autentica puede debilitar los beneficios del MFA.';
$string['setupfactor:linklabel'] = 'Abrir app a instalada en este dispositivo';
$string['setupfactor:mode'] = 'Modo:';
$string['setupfactor:mode:timebased'] = 'Basado en la hora';
$string['setupfactor:scan'] = 'Escanear código QR:';
$string['setupfactor:scanfail'] = '¿No puede escanear?';
$string['setupfactor:scanwithapp'] = 'Escanear código QR con su aplicación de autenticación elegida.';
$string['summarycondition'] = 'usando una app TOTP';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = 'Introduzca su código de verificación de 6 dígitos';
$string['verificationcode_help'] = 'Abra su app de autenticacíon y busque el código de 6 dígitos que concida con este sitio y con este usuario';
