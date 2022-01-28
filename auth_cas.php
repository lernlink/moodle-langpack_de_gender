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
 * @subpackage cas
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesCAS'] = 'CAS-Nutzer*innen';
$string['accesNOCAS'] = 'Weitere Nutzer*innen';
$string['auth_casdescription'] = 'Dieses Verfahren verwendet einen CAS Server (Central Authentification Service) zur Authentifizierung über Single-Sign-On (SSO). Sie können alternativ auch eine einfache LDAP Authentifizierung verwenden. Wenn der benutzte Anmeldename und das Kennwort auf dem CAS Server bei der erstmaligen Anmeldung gültig sind, erstellt Moodle einen neuen Nutzer*inneneintrag in seiner Datenbank und übernimmt weitere erforderliche Daten über LDAP. Bei späteren Anmeldungen werden nur Anmeldename und Kennwort geprüft.';
$string['auth_cas_auth_logo_description'] = 'Stellen Sie ein Logo für die CAS-Authentifizierung bereit, das Ihren Nutzer*innen vertraut ist.';
$string['auth_cas_auth_name_description'] = 'Stellen Sie einen Namen für die CAS-Authentifizierung bereit, der Ihren Nutzer*innen vertraut ist.';
$string['auth_cas_auth_user_create'] = 'Nutzer*innen extern anlegen';
$string['auth_cas_broken_password'] = 'Ohne die Änderung des Kennworts können Sie nicht weitermachen. Falls die Seite zur Änderung des Kennworts nicht verfügbar ist, wenden Sie sich an die Administrator*innen der Website.';
$string['auth_cas_create_user'] = 'Aktivieren Sie die Einstellung, um CAS authentifizierte Nutzer*innen in die Moodle-Datenbank einzufügen. Andernfalls können sich nur die Nutzer*innen anmelden, die bereits in der Moodle-Datenbank vorhanden sind.';
$string['auth_cas_create_user_key'] = 'Nutzer*in anlegen';
$string['auth_cas_logout_return_url'] = 'Geben Sie die URL ein auf die CAS-Nutzer*innen zurückgeleitet werden wenn sie sich ausloggen.<br />Lassen Sie das Feld leer, so werden die Nutzer*innen auf die Seite geführt, die bei Moodle nach dem Logout üblicherweise verwendet.';
$string['synctask'] = 'Synchronisierung von CAS-Nutzer*innenkonten';
