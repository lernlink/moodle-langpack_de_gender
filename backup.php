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
 * @package    core
 * @subpackage backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackuperrordetail'] = 'Die Hintergrundverarbeitung ist fehlgeschlagen. Wenden Sie sich an die Administrator*innen der Website.';
$string['asyncrestoreerrordetail'] = 'Die Wiederherstellung ist fehlgeschlagen. Wenden Sie sich an die Administrator*innen.';
$string['automatedbackupsinactive'] = 'Automatische Sicherungen wurden von Administrator*innen nicht eingerichtet.';
$string['choosefilefromuserbackup'] = 'Sicherungsbereich des*der Nutzers*in';
$string['choosefilefromuserbackup_help'] = 'Sicherungsdateien mit der Option \'anonymisierte Nutzendeneinträge\' werden hier gespeichert.';
$string['configgeneralhistories'] = 'Standard für die Einbeziehung von Nutzer*innenverläufen in eine Sicherung.';
$string['configgeneralusers'] = 'Standard für die Einbeziehung von Nutzer*innenkonten in eine Sicherung.';
$string['configrestorehistories'] = 'Standard für die Wiederherstellung von Nutzer*innenverläufen setzen, falls sie in der Sicherung enthalten sind.';
$string['configrestoreusers'] = 'Standard für die Wiederherstellung von Nutzer*innenkonten setzen, falls sie in der Sicherung enthalten sind.';
$string['configrestoreuserscompletion'] = 'Wenn diese Option aktiviert ist, werden die Abschlussinformationen für Nutzer*innen standardmäßig wiederhergestellt, falls sie in der Sicherung enthalten sind.';
$string['config_overwrite_conf'] = 'Nutzer*in erlauben, die Kurseinstellungen zu überschreiben';
$string['generalusers'] = 'Nutzer*innen einbeziehen';
$string['importgeneralduplicateadminallowed'] = 'Zulassen, dass Administrator*innen den Konflikt lösen';
$string['importgeneralduplicateadminallowed_desc'] = 'Wenn es auf dem System einen Nutzendenaccount mit dem Anmeldenamen \'admin\' gibt, kann es beim Wiederherstellen einer Sicherung einen Konflikt geben, sofern darin ebenfalls ein solcher Nutzer vorhanden ist. Mit dieser Einstellung kann der Konflikt gelöst werden. Es wird dann eine neuer Nutzendenname \'admin_xyz\' erzeugt.';
$string['includeuserinfo'] = 'Nutzer*innendaten';
$string['keptroles_help'] = 'Wählen Sie aus, welche Nutzer\\*innen mit den ausgewählten Rollen in den neuen Kurs eingeschrieben werden sollen. Es werden keine Nutzendendaten dupliziert, außer wenn die Option "Nutzendendaten einbeziehen" ausgewählt ist.';
$string['privacy:metadata:backup:detailsofarchive'] = 'Das Archiv kannn verschiedene Nutzer*innendaten aus einem Kurs enthalten, z.B. Bewertungen, Einschreibungen und Aktivitätsdaten.';
$string['rootsettinganonymize'] = 'Nutzer*inneninformationen anonymisieren';
$string['rootsettingenrolments_never'] = 'Nein, Nutzer*innen als manuelle Einschreibung wiederherstellen';
$string['rootsettingenrolments_withusers'] = 'Ja, aber nur wenn Nutzer*innen einbezogen sind';
$string['rootsettingusers'] = 'Eingeschriebene Nutzer*innen einbeziehen';
$string['rootsettinguserscompletion'] = 'Nutzer*innenabschlussdetails einbeziehen';
$string['sectioninc'] = 'In die Sicherung einbezogen (ohne Nutzer*inneninformationen)';
$string['sectionincanduser'] = 'In die Sicherung einbezogen (mit Nutzer*inneninformationen)';
$string['userdata'] = 'Nutzer*innendaten einbeziehen';
$string['userdata_help'] = 'Wenn diese Option aktiviert ist, werden nutzergenerierte Daten (Forum, Wiki, Glossar, Einreichungen zu Aufgaben. usw.) in den neuen Kurs dupliziert. Dies passiert für alle Nutzer\\*innen mit einer ausgewählten Rolle in der Option "Rolleneinschreibungen einbeziehen".';
$string['userinfo'] = 'Nutzer*inneninfo';
