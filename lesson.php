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
 * @package    mod
 * @subpackage lesson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewuseroverride'] = 'Nutzer*inüberschreibung hinzufügen';
$string['allowofflineattempts_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer\\*innen die Lektion mit Moodle Mobile herunterladen und sie offline versuchen. Alle möglichen Antworten (auch die korrekten Antworten) werden heruntergeladen. Hinweis: Es ist nicht möglich, dass eine Lektion offline versucht wird, wenn sie eine zeitliche Begrenzung hat.';
$string['cannotfinduser'] = 'Fehler: Nutzer*innen konnten nicht gefunden werden';
$string['completiontimespent'] = 'Teilnehmer*in muss diese Zeit mit dieser Aktivität verbringen';
$string['completiontimespentdesc'] = 'Teilnehmer*in muss diese Aktivität für mindestens {$a} ausführen';
$string['displaydefaultfeedback_help'] = '<p>Bei der Einstellung <strong>Ja</strong> wird die Standardrückmeldung (Richtig/Falsch) angezeigt, sofern keine individuelle Rückmeldung vorhanden ist.</p> <p>Bei der Einstellung <strong>Nein</strong> wird keine Rückmeldung angezeigt, sofern keine individuelle Rückmeldung vorhanden ist. Die Teilnehmer\\*innen werden dann automatisch zur nächsten Seite der Lektion geführt. </p>';
$string['displayleftif_help'] = 'Diese Option legt fest, ob eine bestimmte Bewertung erreicht sein muss, damit das Menü sichtbar ist. Dies zwingt Teilnehmer\\*innen, bei ihrem ersten Versuch durch die gesamte Lektion zu gehen. Erst mit dem Erreichen einer bestimmten Punktzahl kann das Menü benutzt werden, um alle Lösungen nochmals zu kontrollieren.';
$string['displayofgrade'] = 'Anzeige der Bewertungen (für Teilnehmer*innen)';
$string['displayreview_help'] = 'Wenn diese Option aktiviert ist und eine Frage falsch beantwortet wird, haben Teilnehmer\\*innen die Möglichkeit, die Frage erneut ohne Punkte zu wiederholen oder weiter mit der Lektion fortzufahren. Wenn Teilnehmer\\*innen klicken, zu einer anderen Frage zu gehen, wird die bereits gewählte (falsche) Antwort berücksichtigt. Standardmäßig sind Sprünge bei falscher Antwort auf "diese Seite" gesetzt und haben eine Punktzahl 0. Daher wird empfohlen, den Sprung bei falscher Antwort auf eine andere Seite zu setzen, um Konfusion bei den Teilnehmer\\*innen zu vermeiden.';
$string['handlingofretakes_help'] = 'Wenn die Teilnehmer\\*innen eine Lektion wiederholen dürfen, kann die Bewertung entweder als Durchnittsnote oder als Bestnote aller Versuche eines\\*r Teilnehmenden erfolgen. Diese Option kann jederzeit geändert werden.';
$string['inactiveoverridehelp'] = '* Diese Nutzer*innenänderung ist inaktiv, da der Zugriff des*der Benutzers*in auf die Aktivität eingeschränkt ist. Dies kann durch Gruppen- oder Rollenzuordnungen, andere Zugriffsbeschränkungen oder durch das Verbergen der Aktivität bedingt sein.';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein\\*e Teilnehmer\\*in in einer Lektionsaktivität erreicht hat.';
$string['lessonpagelinkingbroken'] = 'Die erste Seite wurde nicht gefunden. Die Verlinkung der Seite weist einen Fehler auf. Sprechen Sie die Administrator*innen an.';
$string['maximumnumberofanswersbranches_help'] = 'Diese Einstellung gibt die maximale Anzahl von Antworten an, die in der Lektion verwendet werden dürfen. Wenn ausschließlich Wahr/falsch-Fragen vorkommen, kann der Wert auf 2 gesetzt werden. Die Einstellung kann jederzeit geändert werden, da sie nur das betrifft, was die Trainer\\*innen sehen, aber nicht die Daten.';
$string['modattemptsnoteacher'] = 'Navigation nur für Teilnehmer*innen möglich';
$string['modattempts_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer\\*innen erneut durch die Lektion navigieren.';
$string['modulename_help'] = 'Lektionen bestehen aus einer Reihe von Seiten und Verlinkungen zwischen den Seiten. Führen Sie die Teilnehmer\\*innen stringent von Seite zu Seite oder bieten Sie ihnen Auswahlmöglichkeiten. Je nach der Antwort der Teilnehmer\\*innen und der Art und Weise, wie die\\*der Trainer\\*in die Lektion entwickelt, können die Teilnehmer\\*innen auf die nächste Seite weitergehen, auf eine vorherige Seite zurückgeführt oder auf einen ganz anderen Weg umgeleitet werden. Eine Lektion kann bewertet werden, wobei die Endnote in den Bewertungen festgehalten wird. Alle Inhalte der Lektion können im Unterschied zu Lernpaketen oder IMS-Content direkt in Moodle erstellt werden. Eine Lektions-Aktivität kann verwendet werden \\* Zum selbstgesteuerten Lernen eines neuen Themas \\* Für Szenarien oder Simulationen/Entscheidungsübungen \\* Für differenzierte Repetitionen, mit verschiedenen Sätzen von Repetitionfragen, je nach den Antworten auf die ersten Fragen';
$string['ongoing_help'] = 'Wenn diese Option aktiviert ist, wird den Teilnehmer\\*innen auf jeder Seite ihre aktuelle Bewertung zusammen mit der maximal erreichbaren Bewertung angezeigt.';
$string['overridedeleteusersure'] = 'Möchten Sie wirklich die Überschreibung für das Nutzer*inkonto \'{$a}\' löschen?';
$string['overrideuser'] = 'Nutzer*in überschreiben';
$string['privacy:metadata:attempts:useranswer'] = 'Details der Antwort des*der Nutzers*in';
$string['privacy:metadata:overrides:deadline'] = 'Zeit, bis zu der Teilnehmer*innen die Lektion beenden müssen';
$string['progressbarteacherwarning2'] = 'Die Fortschrittsanzeige wird Ihnen nicht angezeigt, weil Sie diese Lektion als Trainer*in bearbeiten können.';
$string['removealluseroverrides'] = 'Alle Nutzer*inüberschreibungen löschen';
$string['retakesallowed_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer\\*innen die Lektion mehrfach bearbeiten.';
$string['teacherjumpwarning'] = 'In der Lektion kommt ein \'{$a->cluster}\'-Sprung oder ein \'{$a->unseen}\'-Sprung vor. Stattdessen werden \'Nächste Seite\'-Sprünge verwendet. Melden Sie sich als Teilnehmer*in an, um die Sprünge zu testen.';
$string['teacherongoingwarning'] = 'Die laufende Punktzahl wird nur für Teilnehmer*innen angezeigt. Melden Sie sich als Teilnehmer*in an, um diese Funktion zu testen.';
$string['teachertimerwarning'] = 'Die Zeitbegrenzung funktioniert nur für Teilnehmer*innen. Melden Sie sich als Teilnehmer*in an, um diese Funktion zu testen.';
$string['usepassword_help'] = 'Wenn Sie diese Option aktivieren, ist die Lektion durch ein Kennwort geschützt. Teilnehmer\\*innen haben nur Zugang, wenn sie das richtige Kennwort eingeben.';
$string['useroverrides'] = 'Nutzer*inüberschreibungen';
$string['useroverridesdeleted'] = 'Nutzer*inüberschreibungen gelöscht';
$string['usersnone'] = 'Zu dieser Lektion haben Nutzer*innen keinen Zugriff';
