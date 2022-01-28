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
 * @subpackage workshop
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseuser'] = 'Nutzer*in auswählen';
$string['clearassessments_help'] = 'Die berechneten Bewertungen für Einreichungen und Beurteilungen werden zurückgesetzt. Die Information in den ausgefüllten Beurteilungsbögen bleiben erhalten. Alle Bewerter\\*innen müssen jedoch den Beurteilungsbogen noch einmal aufrufen und wieder speichern, damit die Bewertungen neu errechnet werden.';
$string['conclusion_help'] = 'Der Abschlusstext wird Teilnehmer\\*innen am Ende der gegenseitigen Beurteilung angezeigt. Er kann ein Gesamt-Feedback, eine Zusammenfassung oder Anregungen für nächste Schritte (z.B. verfassen eines Blog-Beitrages zu den gesammelten Erfahrungen) enthalten.';
$string['err_multiplesubmissions'] = 'Während der Bearbeitung des Formulars wurde eine neue Einreichung abgegeben. Mehrere Einreichungen je Nutzer*in sind jedoch nicht erlaubt.';
$string['feedbackreviewer'] = 'Rückmeldung an den*die Beurteiler*in';
$string['modulename_help'] = 'Die gegenseitige Beurteilung (Peer Assessment, früher Workshop) ist ein besonderer mehrstufiger Aufgabentyp: Die Teilnehmer\\*innen können beliebige digitalen Inhalte (Dateien), wie z.B. textverarbeitete Dokumente oder Tabellenkalkulationen einreichen und mit dem Texteditor auch direkt Text in ein Feld eingeben. Die Einreichungen werden anhand eines von der Trainerin\\*vom Trainer festgelegten Beurteilungsbogen mit mehreren Kriterien bewertet. Der Prozess der gegenseitige Beurteilung und des Verständnisses des Beurteilungsbogen kann im Voraus anhand von Beispieleinreichungen geübt werden, die von der Trainerin\\*vom Trainer zusammen mit einer Referenzbeurteilung zur Verfügung gestellt werden. Die Teilnehmer\\*innen haben die Möglichkeit, eine oder mehrere Einreichungen ihrer Kollegen\\*innen zu beurteilen. Einreichungen und Bewerter\\*innen können bei Bedarf anonym bleiben. Hinweis: Es müssen nicht alle Schritte aktiviert werden. Die Teilnehmer\\*innen erhalten in einer gegenseitigen Beurteilung zwei Bewertungen - eine Bewertung für ihre Einreichung und eine Bewertung für die Beurteilung der Einreichungen ihrer Kollegen\\*innen. Beide Noten werden in den Bewertungen festgehalten.';
$string['nosubmissionfound'] = 'Für diese*n Nutzer*in wurde keine Einreichung gefunden.';
$string['participant'] = 'Teilnehmer*in';
$string['participantrevierof'] = 'Teilnehmer*in ist Beurteiler/in von';
$string['participantreviewedby'] = 'Teilnehmer*in wird beurteilt von';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Zusammengefasste Bewertung aller Beurteilungen des*der Nutzers*in in der Aktivität gegenseitige Beurteilung';
$string['privacy:metadata:feedbackreviewer'] = 'Feedback an den*die Nutzer*in, der*die eine Beurteilung abgegeben hat';
$string['privacy:metadata:feedbackreviewerformat'] = 'Textformat des Feedbacks an den*die Nutzer*in, der*die die Beurteilung abgegeben hat';
$string['privacy:metadata:peercomment'] = 'Kommentar zur vergebenen Bewertung des*der Nutzer*in, der*die die Beurteilung abgegeben hat';
$string['privacy:metadata:preference:perpage'] = 'Anzahl der Einreichungen auf einer Seite für den*die Nutzer*in';
$string['privacy:metadata:published'] = 'Ob die Einreichungen für alle Nutzer*innen angezeigt werden sollen wenn die \'gegenseitige Beurteilung\' abgeschlossen wurde.';
$string['privacy:metadata:userid'] = 'Identifier des*der Nutzers*in, für den*die aggregierte Bewertung erstellt wird';
$string['privacy:request:delete:content'] = 'Der Inhalt wurde auf Anfrage des*der Nutzers*in oder wegen Zeitablauf gelöscht';
$string['publishsubmission_help'] = 'Wenn die gegenseitige Beurteilung beendet ist, werden die Einreichungen den anderen Teilnehmer\\*innen veröffentlicht.';
$string['switchphase10info'] = 'Sie sind dabei in die <strong>Vorbereitungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer*innen ihre Einreichungen oder Beurteilungen nicht bearbeiten. Trainer*innen können diese Phase dazu nutzen, um die Einstellungen, die Bewertungsstrategie oder Beurteilungsbögen zu ändern.';
$string['switchphase20info'] = 'Sie sind dabei in die <strong>Einreichungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer*innen ihre Einreichungen innerhalb des ggf. definierten Zeitfensters übermitteln. Trainer*innen ordnen anschließend die Einreichungen den Beurteilenden zu.';
$string['switchphase30info'] = 'Sie sind dabei in die <strong>Beurteilungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer*innen innerhalb des ggf. definierten Zeitfensters Beurteilungen zu den zugeordneten Einreichungen erstellen oder bearbeiten.';
$string['switchphase40info'] = 'Sie sind dabei in die <strong>Bewertungsphase</strong> der gegenseitigen Beurteilung zu wechseln. In dieser Phase können Teilnehmer*innen ihre Einreichungen oder Beurteilungen nicht bearbeiten. Trainer*innen nutzen die Bewertungswerkzeuge, um die abschließende Bewertung vorzunehmen und Rückmeldungen an die Beurteilenden zu geben.';
$string['switchphase50info'] = 'Sie sind dabei die gegenseitige Beurteilung zu beenden. Die errechneten Bewertungen werden in die Kursbewertung übernommen. Teilnehmer*innen können ihre Einreichungen, ihre Beurteilungen und Bewertungen aufrufen.';
$string['useexamples_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer\\*innen eine oder mehrere Beispieleinreichungen selber beurteilen und ihre eigene Beurteilung mit der Referenzbeurteilung abgleichen. Die Bewertung wird bei der Gesamtbewertung für die Beurteilung nicht berücksichtigt.';
$string['usepeerassessment_desc'] = 'Teilnehmer\\*innen beurteilen Einreichungen von anderen';
$string['useselfassessment_desc'] = 'Teilnehmer\\*innen können ihre eigene Einreichung beurteilen';
$string['useselfassessment_help'] = 'Wenn diese Option aktiviert ist, kann einem\\*einer Nutzer\\*in auch seine eigene Einreichung zur Beurteilung zugewiesen werden. Er erhält dann dafür eine Bewertung, die der Bewertung für die eigene Einreichung zugerechnet wird.';
$string['workshop:allocate'] = 'Einreichungen Beurteiler*innen zuordnen';
