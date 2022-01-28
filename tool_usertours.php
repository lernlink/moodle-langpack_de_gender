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
 * @subpackage usertours
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filter_accessdate_enabled_help'] = 'Tour nur anzeigen für neue Nutzer\\*innen oder Nutzer\\*innen, die kürzlich auf die Website zugegriffen haben.';
$string['filter_help'] = 'Wählen Sie die Bedingungen, unter denen die Tour angezeigt wird. Alle Filter müssen passen, damit die Tour für Nutzer\\*innen angezeigt wird.';
$string['filter_role_help'] = 'Eine Tour kann auf Nutzer\\*innen mit bestimmten Rollen in dem Kontext beschränkt sein, in dem die Tour angezeigt wird. Das Beschränken einer Dashboard-Tour auf Nutzer\\*innen mit der Rolle "Teilnehmer\\*in" funktioniert besipielsweise nicht, wenn die Nutzer\\*innen die Rolle "Teilnehmer\\*in" nur in einem Kurs haben (was normalerweise der Fall ist). Eine Dashboard-Tour kann nur auf Nutzer\\*innen mit einer globalen Rolle beschränkt werden.';
$string['pathmatch_help'] = 'Touren werden auf jeder Seite angezeigt, deren URL diesem Wert entspricht. Sie können das % -Zeichen als Wildcard benutzen. Beispiele dafür sind: \\* /my/% - für das Dashboard \\* /course/view.php?id=2 - für einen spezifischen Kurs \\* /mod/forum/view.php% - für die Diskussionsliste des Forums \\* /user/profile.php% - für die Nutzer\\*innenprofilseite Wenn Sie eine Tour auf der Startseite anzeigen lassen möchten, können Sie den Wert "FRONTPAGE" verwenden.';
$string['tour1_content_end'] = 'Dies war eine Nutzer*in-Tour. Sie wird nicht wieder angezeigt, es sei denn Sie setzen sie zurück, indem Sie auf den Link in der Fußzeile klicken. Als Admin können Sie zudem solche Touren selbst erstellen.';
$string['tour2_content_end'] = 'Dies war eine Nutzer*in-Tour. Sie wird nicht wieder angezeigt, es sei denn Sie setzen die Tour zurück, indem Sie auf den Link in der Fußzeile klicken. Die*der Administrator*in der Seite kann zudem weitere Touren erstellen, falls notwendig.';
$string['tour2_content_participants'] = 'Zeigen Sie hier die Teilnehmer*innen an. An dieser Stelle werden auch die Teilnehmer*innen hinzugefügt oder entfernt.';
$string['tour2_title_participants'] = 'Kursteilnehmer*innen';
$string['tour4_title_messaging'] = 'Mitteilungen: Verbesserte Nutzer*inoberfläche';
$string['tour_final_step_content'] = 'Sie sind am Ende Ihrer Nutzer*intour angekommen. Die Tour wird nur einmal angezeigt, es sei denn, Sie starten die Tour über den Link in der Fußzeile der Seite erneut.';
$string['tour_resetforall'] = 'Der Status der Tour wurde zurückgesetzt. Die Tour wird allen Nutzer*innen erneut gezeigt.';
$string['viewtour_edit'] = 'Sie können die <a href="{$a->editlink}">Tour bearbeiten</a> und für alle Nutzer*innen die <a href="{$a->resetlink}">Tour erneut anzeigen</a>.';
