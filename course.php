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
 * @subpackage course
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychoosertabmode_desc'] = 'Mit der Aktivitätenauswahl können Trainer\\*innen auf einfache Weise Aktivitäten und Arbeitsmaterialien auswählen, die sie zu ihrem Kurs hinzufügen möchten. Diese Einstellung bestimmt, welche Registerkarten darin angezeigt werden sollen. Beachten Sie, dass die Registerkarte \'Favoriten\' für eine\\*n Benutzer\\*in nur dann angezeigt wird, wenn er\\*sie eine oder mehrere Aktivitäten mit einem Sternchen versehen hat, und die Registerkarte \'Empfohlen\' nur dann angezeigt wird, wenn ein\\*e Administrator\\*in eine oder mehrere Aktivitäten als empfohlen gekennzeichnet hat.';
$string['customfield_islocked_help'] = 'Wenn das Feld gesperrt ist, können nur Personen, die gesperrte Kursfelder ändern dürfen, dies in den Kurseinstellungen ändern. Dies sind zunächst ausschließlich Personen mit der Rolle Manager\\*in.';
$string['customfield_visibletoteachers'] = 'Trainer*innen';
$string['noaccesssincestartinfomessage'] = 'Guten Tag {$a->userfirstname}, <p>einige Teilnehmer*innen im Kurs {$a->coursename} haben noch nie auf den Kurs zugegriffen.</p>';
$string['nocoursestudents'] = 'Keine Teilnehmer*innen';
$string['norecentaccessesinfomessage'] = 'Guten Tag {$a->userfirstname}, <p>einige Teilnehmer*innen im Kurs {$a->coursename} haben bisher noch nicht auf den Kurs zugegriffen.</p>';
$string['noteachinginfomessage'] = 'Guten Tag {$a->userfirstname}, <p>bei in der nächsten Woche beginnenden Kursen wurde festgestellt, dass weder Trainer*innen noch Teilnehmer*innen eingeschrieben sind.</p>';
$string['privacy:metadata:activityfavouritessummary'] = 'Das Kurssystem enthält Informationen darüber, welche Elemente aus der Aktivitätsauswahl von Nutzern*innen als Favorit markiert worden sind.';
$string['studentsatriskincourse'] = 'Gefährdete Teilnehmer*innen im Kurs {$a}';
$string['studentsatriskinfomessage'] = 'Guten Tag {$a->userfirstname}, <p>Teilnehmer*innen im Kurs {$a->coursename} wurden als gefährdet eingestuft, das Kursziel zu erreichen.</p>';
$string['target:coursecompetencies'] = 'Teilnehmer*innen, die Gefahr laufen, die einem Kurs zugeordneten Kompetenzen nicht zu erreichen.';
$string['target:coursecompletion'] = 'Teilnehmer*innen, die Gefahr laufen, die Abschlussbedingungen für den Kurs nicht zu erfüllen.';
$string['target:coursedropout'] = 'Teilnehmer*innen, die Gefahr laufen, aus dem Kurs auszusteigen.';
$string['target:coursegradetopass'] = 'Teilnehmer*innen, die Gefahr laufen, die Bestehensgrenze des Kurses nicht zu erreichen.';
$string['target:noaccesssincecoursestart'] = 'Teilnehmer*innen, die bislang noch nicht im Kurs waren';
$string['target:noaccesssincecoursestartinfo'] = 'Die folgenden Teilnehmer*innen sind in einen laufenden Kurs eingeschrieben, haben aber nie auf den Kurs zugegriffen.';
$string['target:noaccesssincecoursestart_help'] = 'Dieses Ziel beschreibt Teilnehmer\\*innen, die noch nie auf einen Kurs zugegriffen haben, obwohl sie eingeschrieben sind.';
$string['target:norecentaccesses'] = 'Teilnehmer*innen, die in letzter Zeit nicht auf den Kurs zugegriffen haben.';
$string['target:norecentaccessesinfo'] = 'Teilnehmer*innen, die innerhalb des festgelegten Analyseintervalls noch nicht auf einen Kurs zugegriffen haben, obwohl sie eingeschrieben sind (Standard: im letzten Monat).';
$string['target:norecentaccesses_help'] = 'Dieses Ziel beschreibt Teilnehmer\\*innen, die innerhalb des festgelegten Analyseintervalls noch nicht auf einen Kurs zugegriffen haben, obwohl sie eingeschrieben sind (Standard: im letzten Monat).';
$string['target:noteachingactivityinfo'] = 'Die folgenden Kurse, die in den kommenden Tagen beginnen sollen, laufen Gefahr, nicht zu beginnen, da keine Trainer*innen oder Teilnehmer*innen eingeschrieben sind.';
$string['targetlabelstudentcompetenciesno'] = 'Teilnehmer*innen, die wahrscheinlich die einem Kurs zugeordneten Kompetenzen erreichen werden.';
$string['targetlabelstudentcompetenciesyes'] = 'Teilnehmer*innen, die wahrscheinlich die einem Kurs zugeordneten Kompetenzen erreichen werden.';
$string['targetlabelstudentcompletionno'] = 'Teilnehmer*innen, die wahrscheinlich die Abschlussbedingungen für den Kurs erreichen werden.';
$string['targetlabelstudentcompletionyes'] = 'Teilnehmer*innen, die Gefahr laufen, die Abschlussbedingungen für den Kurs nicht zu erfüllen.';
$string['targetlabelstudentdropoutyes'] = 'Teilnehmer*in, die Gefahr läuft, aus dem Kurs auszusteigen.';
$string['targetlabelstudentgradetopassno'] = 'Teilnehmer*innen, die wahrscheinlich die Bestehensgrenze des Kurses erreichen werden.';
$string['targetlabelstudentgradetopassyes'] = 'Teilnehmer*innen, die Gefahr laufen, die Bestehensgrenze des Kurses nicht zu erreichen.';
$string['targetlabelteachingyes'] = 'Nutzer*innen mit Trainer*innenrechten, die Zugang zum Kurs haben';
