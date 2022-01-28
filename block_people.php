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
 * @package    block
 * @subpackage people
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['noparticipantslist'] = 'Die Anzeige der Teilnehmer*innenliste wurde in diesem Kurs deaktiviert';
$string['participantslist'] = 'Teilnehmer*innenliste anzeigen';
$string['privacy:metadata'] = 'Das Plugin \'Personen\' bietet Moodle-Nutzer*innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['setting_hideblock_desc'] = 'Wenn diese Einstellung aktiviert wird, kann der Block durch die Nutzer*innen verborgen werden.<br/> Wichtiger Hinweis:<br/> Wenn Sie diese Einstellung deaktivieren, wird dies den Menüeintrag zum Verbergen / Wiederanzeigen des Blocks komplett entfernen. Dies hat zur Folge, dass Nutzer*innen den Block nicht mehr verbergen können, aber andererseits können bereits verborgene Blöcke damit auch nicht wieder sichtbar gemacht werden. Wenn Sie dies nutzen möchten, ziehen Sie die nachfolgende Funktion in Betracht, mit der Sie die Sichtbarkeit für alle Instanzen des Blocks "Personen" zurückzusetzen können.';
$string['setting_linkparticipantspage'] = 'Link zur Teilnehmer*innenliste zeigen';
$string['setting_linkparticipantspage_desc'] = 'Wenn Sie diese Einstellung aktivieren, wird innerhalb des Blocks ein Link zur Teilnehmer*innenliste angezeigt.';
$string['setting_multipleroles_desc'] = 'Mit dieser Einstellung können Sie steuern, ob Teilnehmer*innen mit mehr als einer der obigen Rollen im Kurs auch mehrfach im Block angezeigt werden. Wenn diese Einstellung deaktiviert ist, werden Teilnehmer*innen nur mit der ersten (gemäß der globalen Rollensortierung) Rolle angezeigt. Wenn diese Einstellung aktiviert ist, werden Teilnehmer*innen mit jeder ihrer Rollen angezeigt';
$string['setting_participantspageheading'] = 'Teilnehmer*innen';
$string['setting_roles_desc'] = 'Mit dieser Einstellung können Sie steuern, welche Rollen im Block angezeigt werden. Teilnehmer*innen, die mindestens eine dieser Rollen in einem Kurs haben, werden im Block angezeigt.';
