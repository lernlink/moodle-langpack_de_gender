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
 * @subpackage completion
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkcompletiontracking_help'] = '<strong>Keine:</strong> Aktivitätsabschluss wird nicht angezeigt <strong>Manuell:</strong> Teilnehmer\\*innen können die Aufgabe manuell als abgeschlossen markieren <strong>Unter Bedingung(en):</strong> Aktivität wird als abgeschlossen angezeigt, wenn die Bedingungen erfüllt sind.';
$string['completedunlockedtext'] = 'Wenn Sie Ihre Änderungen speichern, wird der Abschlussstatus für alle Nutzer*innen gelöscht. Wenn Sie dies nicht möchten, speichern Sie bitte nicht!';
$string['completionicons_help'] = 'Das Kästchen an der Seite neben der Aktivität zeigt an, ob Sie die Aktivität abgeschlossen haben. Falls ein Kästchen mit gepunktetem Rand zu sehen ist, wird darin automatisch ein Häkchen erscheinen, sobald Sie die Aktivität entsprechend den Trainer\\*innenvorgaben abgeschlossen haben. Falls ein Kästchen mit durchgezogenem Rand zu sehen ist, können Sie es anklicken, wenn diese Aktivität Ihrer Meinung nach abgeschlossen ist. (Ein erneuter Klick entfernt das Häkchen wieder, falls Sie Ihre Meinung nachträglich ändern sollten.)';
$string['completionusegrade_desc'] = 'Teilnehmer\\*innen müssen eine Bewertung erhalten, um diese Aktivität abzuschließen';
$string['completionview_desc'] = 'Teilnehmer\\*innen müssen die Aktivität aufgerufen haben, um sie abzuschließen.';
$string['configenablecompletion'] = 'Wenn diese Option aktiviert ist, können Bedingungen für den Kurs- und Aktivitätsabschluss festgelegt werden. Abschlussbedingungen für die Aktivitäten werden empfohlen, um Nutzer*innen in deren Kursübersicht im Dashboard aussagekräftige Daten anzuzeigen.';
$string['enrolmentdurationlength'] = 'Nutzer*in muss eingeschrieben bleiben';
$string['err_nousers'] = 'In diesem Kurs oder in dieser Gruppe gibt es keine Teilnehmer*innen, für die Abschlussinformationen angezeigt werden. (Abschlussinformationen werden ausschließlich für Teilnehmer*innen mit der Fähigkeit \'In Abschlussverfolgung anzeigen\' angezeigt. Die Fähigkeit ist nur für die Standardrolle Teilnehmer*in erlaubt. Wenn es also keine gibt, so sehen Sie diese Fehlermeldung. Administrator*innen können diese Einstellung im Administrationsmenü ändern.)';
$string['err_settingslocked'] = 'Die Einstellung wurde gesperrt, weil bereits jemand ein Abschlusskriterium erfüllt hat. Wenn Sie die Abschlussbedingungen entsperren, werden die vorhandenen Nutzer*innendaten gelöscht und es könnte zu Verwirrungen kommen.';
$string['err_system'] = 'Ein interner Fehler ist im Abschluss-System aufgetreten. (Systemadministratoren*innen können den Debug-Modus aktivieren um weitere Details angezeigt zu bekommen.)';
$string['manualselfcompletionnote'] = 'Hinweis: Der Kursabschluss-Block sollte im Kurs eingefügt werden, wenn den Teilnehmer*innen erlaubt werden soll, selber den Kurs anzuschließen.';
$string['privacy:metadata:coursesummary'] = 'Speichert Kursabschlussdaten für Nutzer*innen';
$string['reportpage'] = 'Teilnehmer*innen {$a->from} bis {$a->to} von {$a->total} anzeigen';
$string['showinguser'] = 'Nutzer*innenanzeige';
$string['usernotenroled'] = 'Nutzer*in ist nicht in diesem Kurs eingeschrieben';
