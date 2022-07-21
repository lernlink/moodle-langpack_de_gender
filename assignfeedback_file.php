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
 * @package    assignfeedback
 * @subpackage file
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Eine oder mehrere Feedbackdateien für alle ausgewählten Teilnehmer*innen hochladen?';
$string['batchuploadfiles'] = 'Feedbackdateien für mehrere Teilnehmer*innen';
$string['batchuploadfilesforusers'] = 'Feedbackdateien für {$a} ausgewählte Nutzer*innen';
$string['enabled_help'] = 'Trainer\\*innen können ihr Feedback zur Aufgabenlösung als Datei zur Verfügung stellen. Diese Dateien können z.B. eine korrigierte Version der Teilnehmendenlösung, eine kommentierte Musterlösung oder ein gesprochener Kommentar als Audiodatei sein.';
$string['feedbackfileadded'] = 'Neue Feedbackdatei "{$a->filename}" für Teilnehmer*in "{$a->student}"';
$string['feedbackfileupdated'] = 'Geänderte Feedbackdatei"{$a->filename}" für Teilnehmer*in "{$a->student}"';
$string['feedbackzip_help'] = 'Eine Zip-Datei kann Feedbackdateien für einen oder mehrere Nutzer\\*innen enthalten. Die Zuordnung der Dateien zu den Nutzer\\*innen erfolgt mittels der id-Nummer des\\*der Nutzers*in im Dateinamen, die dem vollständigen Namen des\\*der Nutzers*in folgt. Am einfachsten ist es, alle eingereichten Lösungen herunterzuladen. Die Dateinamen folgen dann bereits der obigen Konvention. Kommentieren Sie dann in den heruntergeladenen Dateien und packen Sie diese zum Upload wieder ohne die Dateinamen zu ändern. Dateien an denen keine Änderungen vorgenommen wurden, werden ignoriert.';
$string['selectedusers'] = 'Ausgewählte Nutzer*innen';
$string['userswithnewfeedback'] = 'Nutzer*innen mit aktualisierten Feedbacks: {$a}';
