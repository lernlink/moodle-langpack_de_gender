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
 * @subpackage email
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Die Authentifizierung \'E-Mail basiert\' ermöglicht, dass sich Nutzer*innen selber in Moodle neu anmelden können. Die Nutzer*innen erhalten nach dem Ausfüllen des Nutzer*innenprofils automatisch eine E-Mail mit einer Bestätigungs-URL zugesendet, über die das neue Nutzer*innenkonto freigeschaltet werden muss. Anschließend wird bei der Anmeldung nur noch der Anmeldename und das Kennwort anhand der gespeicherten Daten geprüft.</p> <p>Hinweis: Zusätzlich zur Aktivierung muss für die Selbstregistrierung das Plugin \'E-Mail basiert\' auf der Seite \'Authentifizierungen verwalten\' ausgewählt werden.</p>';
