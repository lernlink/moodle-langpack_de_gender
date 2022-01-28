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
 * @subpackage lpmigrate
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['explanation'] = 'Diese Anwendung kann benutzt werden, um einen Kompetenzrahmen zu einer neueren Version zu aktualisieren. Es sucht in Kursen und Aktivitäten nach Kompetenzen , die im alten Kompetenzrahmen aufgelistet waren, und stellt die Links auf den neuen Rahmen um. Es wird nicht empfohlen, die alte Liste von Kompetenzen direkt zu bearbeiten, weil das auch alle Kompetenzen verändern würde, die schon in den Lernplänen der Teilnehmer*innen vergeben wurden. Üblicherweise wird die neue Version des Kompetenzrahmens importiert, der alte Kompetenzrahmen unsichtbar geschaltet und dann wird diese Anwendung zur Migration der neuen Kurse zu dem neuen Kompetenzen verwendet.';
