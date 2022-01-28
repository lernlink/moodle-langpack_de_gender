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
 * @subpackage glossary
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowprintview_help'] = 'Wenn diese Option aktiviert ist, wird allen Personen ein Link zu einer druckfreundlichen Version des Glossars angezeigt. Trainer\\*innen sehen diesen Link immer.';
$string['cnfapprovalstatus'] = 'Wenn diese Option aktiviert ist, müssen Glossareinträge nicht durch Trainer*innen geprüft und freigegeben werden.';
$string['cnfstudentcanpost'] = 'Teilnehmer*innen dürfen eigene Einträge anlegen, bearbeiten und löschen.';
$string['completionentries'] = 'Teilnehmer*innen müssen Einträge anlegen:';
$string['completionentriesdesc'] = 'Teilnehmer*in muss mindestens {$a} Einträge anlegen';
$string['defaultapproval_help'] = 'Diese Option legt fest, ob Glossareinträge sofort ohne Prüfung sichtbar werden: \\* Ja - Einträge werden sofort nach dem Speichern für alle angezeigt \\* Nein - Einträge werden von Trainer\\*innen geprüft und freigegeben';
$string['deletenotenrolled'] = 'Einträge von nicht eingeschriebenen Nutzer*innen löschen';
$string['editalways_help'] = 'Diese Option legt fest, wie Teilnehmer\\*innen ihre Einträge bearbeiten dürfen: \\* Ja - Einträge sind jederzeit bearbeitbar \\* Nein - Einträge sind nur im festgelegten Zeitraum bearbeitbar (oft 30 Minuten)';
$string['entryusedynalink_help'] = 'Wenn diese Option aktiviert ist, werden Einträge automatisch verlinkt. Wenn der Begriff in einem innerhalb des Kurses erstellten Text vorkommt, wird dieser Begriff automatisch mit diesem Eintrag verlinkt. In hochgeladen Dateien (doc, odt, pdf) werden keine Links erzeugt. Voraussetzung ist die globale Freischaltung der Glossarverlinkung durch die Administrator\\*innen.';
$string['isglobal_help'] = 'Ein kursübergreifendes Glossar enthält Einträge, die im gesamten Moodle verlinkt werden. Ist ein Glossar nicht global, werden die Einträge nur lokal im Kurs verlinkt. Ausschließlich Administrator\\*innen können Glossare als kursübergreifend definieren.';
$string['linkcategory_help'] = 'Wenn die Option \'Eintrag automatisch verlinken\' und zusätzlich diese Option aktiviert sind, wird automatisch der Kategoriename verlinkt, wo immer er im Kurs erscheint. Wenn Teilnehmer\\*innen einem Kategorielink folgen, werden sie auf die Anzeige \'Nach Kategorie\' im Glossar geleitet.';
$string['modulename_help'] = 'Das Glossar ermöglicht es den Teilnehmer\\*innen, eine Liste von Definitionen, wie ein Wörterbuch, zu erstellen und zu pflegen oder Ressourcen oder Informationen zu sammeln und zu organisieren. Zuerst legen Sie das Glossar an, danach werden die Begriffe und die Erläuterungen eingetragen. Trainer\\*innen können zulassen, dass Dateien an Glossareinträge angehängt werden. Angehängte Bilder werden im Eintrag angezeigt. Einträge können alphabetisch oder nach Kategorie, Datum oder Autor dargestellt oder durchsucht werden. Einträge können standardmäßig genehmigt werden oder müssen von einer\\*m Trainer\\*in genehmigt werden, bevor sie von allen angezeigt werden können. Tipp: Wenn die Autoverlinkung für Glossare aktiviert ist, werden Glossarbegriffe in allen Texten Ihres Kurses direkt verlinkt. Diese Funktion ist z.B. für Tests abschaltbar. Trainer\\*innen können Kommentare zu den Einträgen zulassen. Die Einträge können auch von Trainer\\*innen oder Teilnehmer\\*innen bewertet werden (Peer-Bewertung). Die Bewertungen können zu einer Endnote aggregiert werden, die in den Bewertungen festgehalten wird. Die Glossar-Aktivität hat viele Verwendungsmöglichkeiten, wie z.B. \\* Eine kollaborative Sammlung von Schlüsselbegriffen \\* Ein Bereich zum Kennenlernen, in welchem neue Teilnehmer\\*innen ihren Namen und ihre persönlichen Daten eingeben \\* Eine Ressource mit praktischen Tipps für good practices in einem Arbeitsgebiet \\* Ein Bereich zur gemeinsamen Sammlung von nützlichen Videos, Bildern oder Audiodateien \\* Eine Sammlung für die Repetition von Dingen, die Sie sich merken sollten';
$string['privacy:metadata:glossary_entries'] = 'Informationen über Nutzer*inneneinträge in einer Glossaraktivität';
$string['privacy:metadata:glossary_entries:attachment'] = 'Anhänge am Eintrag eines*einer Nutzers*in';
$string['privacy:metadata:glossary_entries:concept'] = 'Konzept des hinzugefügten Nutzer*ineintrags';
$string['privacy:metadata:glossary_entries:definition'] = 'Definition des Nutzer*ineintrags';
$string['privacy:metadata:glossary_entries:timemodified'] = 'Zeitpunkt wann Glossareintrag von dem*der Nutzer*in bearbeitet wurde';
$string['privacy:metadata:glossary_entries:userid'] = 'ID des*der Nutzers*in der Glossareintrag erstellt hat';
$string['studentcanpost'] = 'Teilnehmer*innen können eigene Einträge anlegen, bearbeiten und löschen.';
$string['usedynalink_help'] = 'Wenn diese Option aktiviert ist, wird beim Hinzufügen eines neuen Eintrages die Option "Eintrag automatisch verlinken" angezeigt. Voraussetzung ist die globale Freischaltung der Glossarverlinkung durch die Administrator\\*innen.';
