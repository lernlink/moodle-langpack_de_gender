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
 * @package    tool
 * @subpackage generator
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursewithoutusers'] = 'Ausgewählter Kurs hat keine Nutzer*innen';
$string['downloadusersfile'] = 'Nutzer*innenliste herunterladen';
$string['notenoughusers'] = 'Der ausgewählte Kurs hat zu wenig Nutzer*innen.';
$string['progress_checkaccounts'] = 'Nutzer*inaccounts prüfen ({$a})';
$string['progress_createaccounts'] = 'Nutzer*inkonten erstellen ({$a->from} - {$a->to})';
$string['progress_enrol'] = 'Nutzer*innen in Kurse einschreiben ({$a})';
$string['updateuserspassword'] = 'Aktualisierung Zugangskennwörter für Nutzer*innen';
$string['updateuserspassword_help'] = 'JMeter benötigt einen Login als Kursnutzer. Das Nutzendenkennwort können Sie mit der Variable $CFG->tool_generator_users_password in der config.php erzeugen; Diese Einstellung aktualisiert das Kennwort, das zu $CFG->tool_generator_users_password gehört. Dies kann hilfreich sein wenn ein Kurs verwandt wird, der nicht mit dem Tool-Generator oder über $CFG->tool_generator_users_password nicht beim Erstellen der Testkurse erstellt wurde.';
