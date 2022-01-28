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
 * @package    antivirus
 * @subpackage clamav
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configclamfailureonupload'] = 'Wenn "Dateien als OK behandeln" ausgewählt ist, werden die Dateien in das Zielverzeichnis verschoben. Wenn "Hochladen ablehnen, erneut versuchen" ausgewählt ist, werden Nutzer*innen aufgefordert, es später erneut zu versuchen. <br />Wenn "Dateien wie Viren behandeln" ausgewählt ist, werden Dateien in den Quarantänebereich verschoben oder gelöscht. <br />Warnung: Wenn mit dieser Option aus irgendeinem Grund die clam nicht ausgeführt werden kann (z.B. aufgrund eines ungültigen pathtoclam), werden ALLE hochgeladenen Dateien in den angegebenen Quarantänebereich verschoben oder gelöscht.';
$string['pathtounixsocketdesc'] = 'Wenn die Ausführungsmethode als \'Unix Domain Socket\' gesetzt ist, geben Sie hier den Pfad zum ClamAV Unix Socket ein. Auf Debian Linux ist dies /var/run/clamav/clamd.ctl. Stellen Sie sicher, dass der ClamAV-Daemon über Lesezugriff auf hochgeladene Dateien verfügt. Am einfachsten ist es, den*die  Benutzer*in \'clamav\' zur Webservergruppe ( \'www-data\' im Debian Linux) hinzuzufügen.';
