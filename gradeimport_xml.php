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
 * @package    gradeimport
 * @subpackage xml
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errincorrectuseridnumber'] = 'Fehler: Die ID-Nummer \'{$a}\' aus der Importdatei passt zu keinem*keiner Nutzer*in!';
$string['importxml_help'] = 'Bewertungen können mithilfe einer XML-Datei eingelesen werden. Diese muss die Nutzer-ID-Nummer und die Aktivitäts-ID enthalten. Um das genaue Format der XML-Datei zu ermitteln, erstellen Sie zunächst einen Export mit einigen Bewertungen. Verwenden Sie dann die darin enthaltene Struktur für einen Import.';
