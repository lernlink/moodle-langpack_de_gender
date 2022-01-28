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
 *
 * @package    auth
 * @subpackage shibboleth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo_description'] = 'Stellen Sie ein Logo für die Authentifizierungsmethode \'Shibboleth\' bereit, die Ihren Nutzer*innen vertraut vorkommt. Dies könnte das Logo Ihrer Shibboleth-Föderation sein, z.B. <tt> SWITCHaai Login </tt> oder <tt> InCommon Login </tt> oder ähnlich.';
$string['auth_shib_auth_method_description'] = 'Vergeben Sie für die verwendete Shibboleth-Methode einen Titel, der den Nutzern*innen vertraut ist, z.B. der Titel des Shibboleth-Verbunds (<tt>SWITCHaai Login</TT> oder <tt>Gemeinsamer Login</tt>.';
$string['auth_shib_contact_administrator'] = 'Falls Sie nicht dieser Organisation zugeordnet wurden und Kurszugriff benötigen, nehmen Sie bitte mit <a href="mailto:{$a}">Moodle Administrator/innen</a> Kontakt auf.';
$string['auth_shib_idp_list_description'] = 'Stellen Sie eine Liste der Identity-Provider zur Verfügung aus der die Nutzer*innen auf der Loginseite auswählen können. <br />In jeder Zeile muss ein kommagetrenntes Tupple für identityID der IdP (siehe Shibboleth Medatadtendatei) und Name des IdP wie es in der Drowndopwnliste gezeigt werden soll eingetragen werden.<br /> Als optionaler dritter Parameter kann der Ort des Shibboleth Session Initators eingetragen werden falls die Moodle-Installation im Verbund genutzt wird.';
$string['auth_shib_instructions_help'] = 'Tragen Sie hier Informationen für Ihre Nutzer\\*innen ein, die ihnen den Zugang mit Hilfe von Shibboleth erklären. Diese werden auf der Loginseite angzeigt. Der Text sollte einen Link "<b>{$a}</b>" enthalten, damit ein einfachere Login möglich ist. Wenn Sie das Feld leer lassen, werden die Standard-Texte angezeigt und keine Hinweise auf den Shibboleth Login.';
$string['auth_shib_logout_return_url_description'] = 'Auf diese Seite werden Shibboleth-Nutzer*innen nach dem Logout geleitet.<br />Bleibt das Feld leer wird die Standardseite von Moodle genutzt.';
$string['auth_shib_username_description'] = 'Name der Shibboleth Umgebungsvariable, die als Moodle-Nutzer*innenname verwandt werden soll.';
$string['shib_invalid_account_error'] = 'Sie scheinen über Shibboleth authentifiziert zu sein, aber Moodle findet keinen gültiges Nutzer*innenkonto zu Ihrem Anmeldenamen. Ihr Nutzer*innenkonto könnte ungültig geworden sein oder es existiert gar nicht.';
$string['shib_no_attributes_error'] = 'Sie versuchen vermutlich, die Shibboleth Authentifizierung zu verwenden. Moodle hat jedoch keine Attribute für die Nutzer*innen erhalten. Prüfen Sie bitte, ob der Identity Provider die erforderlichen Attribute ({$a}) dem Moodle-Serviceprovider zur Verfügung stellt oder informieren Sie den Webmaster des Servers.';
