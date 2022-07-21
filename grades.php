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
 * @subpackage grades
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregationcoefextrasum_help'] = 'Bei der Einstellung "Summe der Bewertungen" als Berechnungsverfahren kann eine Bewertung als Sonderpunkte definiert werden. Das bedeutet, dass die höchste hierbei mögliche Bewertung nicht in die Summe der Bewertungen der Kategorie eingerechnet wird. Die Bewertung selber wird als Bonus dennoch mit berechnet. Das folgende Beispiel kann dies verdeutlichen: <ul> <li>Wert 1 ist bewertet mit 0-100</li> <li>Wert 2 ist bewertet mit 0-75</li> <li>Wert 1 ist als "Extrapunkte" aktiviert, Wert 2 jedoch nicht.</li> <li>Beide Werte gehören zur Kategorie 1. Für diese gilt, dass die Summe der Bewertungen ermittelt werden soll </li> <li>Kategorie 1 wird gesamt mit 0-75 bewertet</li> <li>Ein\\*e Teilnehmer\\*in erhält nun die Bewertung 20 für Wert 1 und 75 für Wert 2</li> <li>Die Berechnung für Kategorie 1 ist nun 75/75 (20+70 = 95; Wert 1 wird als Extrapunkte gewertet. Der Höchstwert kann jedoch nur 75 sein, daher ist die Endnote 75.)</li> </ul>';
$string['aggregationcoefextraweight_help'] = 'Bei der Berechnung der Extrapunkte wird folgendes Verfahren angewandt. Bewertungen für die Extrapunkte vergeben werden werden erst mit dem Multiplikator multipliziert. Dann werden die Einzelwerte addiert und durch die Zahl der Bewertungen dividiert. Die Zahl durch die dividiert wird umfasst nur die Berwertungen, für die es keine Extrapunkte gibt. Im folgenden Beispiel erfolgt daher nur eine Division durch 2 und nicht durch 3. <ul> <li>Wert 1 wird bewertet mit 0-100 und "Extrapunkte" Wert wird gesetzt auf 2</li> <li>Wert 2 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li> <li>Wert 3 wird bewertet mit 0-100 und "Extrapunkte" Wert bleibt auf 0.0000</li> <li>Alle 3 Werte gehören in Kategorie 1, mit der Bewertungsstrategie "Durchschnitt der Einzelbewertungen (mit Extrapunkten)" als Berechnungsverfahren</li> <li>Ein\\*e Teilnehmer\\*in erhält nun folgende Einzelbewertungen 20 für Wert 1, 40 für Wert 2 und 70 für Wert 3</li> <li>Die Gesamtbewertung für Kategorie 1 ist nun 50/100 (20\\*2 + 40 + 70) / 3</li> </ul>';
$string['aggregationcoefextra_help'] = 'Wenn die Ergebnisse \'Natürlich\' oder \'Einfach gewichteter Durchschnitt\' zusammengefasst werden und die Option \'Zusatzpunkte\' aktiviert ist, wird die höchste Bewertung nicht zur höchsten Bewertung der Kategorie hinzugezählt. Daher kann hierbei die Höchstnote erreicht werden, obwohl nicht bei allen Bewertungen die Höchstnote erreicht wurde. Wenn in der Systemverwaltung festgelegt wurde, dass Bewertungen vergeben werden können, die den Höchstwert übersteigen, kann die Bewertungsberechnung ein Ergebnis anzeigen, dass höher ist als der eingestellte Höchstwert. Wenn die Berechnung auf Basis des \'Durchschnitts (mit Zusatzpunkten)\' gesetzt ist und Extrapunkte einen Wert größer als Null haben, so wird der Wert für den Extrapunkte erst multipliziert und dann dem Durchschnitt der Bewertungen hinzuaddiert.';
$string['allstudents'] = 'Alle Teilnehmerinnen';
$string['allusers'] = 'Alle Nutzer*innen';
$string['baduser'] = 'Ungültiger Teilnehmerin';
$string['coursesettingsexplanation'] = 'Die Kurseinstellungen legen fest, wie die Bewertungen für alle Teilnehmerinnen im Kurs gezeigt werden';
$string['coursesiamtaking'] = 'Kurse - Teilnehmerin';
$string['coursesiamteaching'] = 'Kurse - Trainer*in';
$string['enableajax_help'] = 'Ajax-Funktionalität für die Bewerter\\*innenübersicht bereitstellen, um allgemeine Operationen zu vereinfachen und zu beschleunigen. Ajax arbeitet mit JavaScript, das deswegen anwenderseits im Webbrowser aktiviert sein muss.';
$string['errorsettinggrade'] = 'Fehler beim Speichern "{$a->itemname}" der Bewertung für Nutzer*in (userid) {$a->userid}';
$string['eventusergraded'] = 'Nutzer*in bewertet';
$string['exportonlyactive'] = 'Nutzer*in bewertet';
$string['exportonlyactive_help'] = 'Nur Teilnehmer\\*innen exportieren, deren Einschreibung aktiv ist und die nicht gesperrt wurden.';
$string['feedback_help'] = 'Diese Einstellung erlaubt Anmerkungen zur Bewertung durch Trainer\\*innen. Das Feedback kann ein ausführlicher Text, eine sehr persönliche Rückmeldung oder ein Code sein, der üblicherweise in der Bildungseinrichtung verwandt wird.';
$string['fixedstudents_help'] = 'Ermöglicht es, Bewertungen horizontal zu scrollen, ohne die Spalte Teilnehmer\\*innen aus den Augen zu verlieren, indem sie fixiert wird.';
$string['forstudents'] = 'Für Teilnehmer*innen';
$string['gradealreadyupdated'] = '{$a} Bewertungen wurden nicht importiert, da diese Bewertungen älter waren als die in der Bewerter*innenübersicht vorhandenen. Um den Import dennoch fortzuführen, verwenden Sie die \'Import erzwingen\'-Funktion.';
$string['gradebookhiddenerror'] = 'Die Bewertungen sind zur Zeit für die Teilnehmer*innen nicht sichtbar.';
$string['gradedisplaytype_help'] = 'Diese Einstellung legt fest, wie Bewertungen in der Bewerter\\*innenübersicht und in Nutzendenberichten angezeigt werden. \\* Buchstabe - Buchstaben (A, B, C,..) oder Wörter werden angezeigt, um eine Auswahl an Bewertungen zu repräsentieren \\* Prozent - relativ zum höchsten/niedrigsten Wert \\* Punktwert - effektive Bewertungen';
$string['gradeexportcustomprofilefields'] = 'Individuelle Nutzer*innenprofilfelder für Bewertungsexport';
$string['gradeexportcustomprofilefields_desc'] = 'Die folgenden individuellen Nutzendenprofilfelder sollen in den Bewertungsexport eingebunden werden. Einträge durch Kommas trennen.';
$string['gradeexportuserprofilefields'] = 'Nutzer*innenprofilfelder für Bewertungsexport';
$string['gradeexportuserprofilefields_desc'] = 'Die folgenden Nutzendenprofilfelder sollen in den Bewertungsexport eingebunden werden. Einträge durch Kommas trennen.';
$string['gradepublishing_help'] = 'Aktiviert die Export und Importfunktion: Exportierte Bewertungen können für andere verlinkt werden, ohne dass sie sich im Moodle-System einloggen müssen. Bewertungen können auf die gleiche Art und Weise importiert werden. Damit können Bewertungen, die aus anderen Systemen stammen integriert werden. Normalerweise können nur Administrator\\*innen diese Funktion nutzen. Falls dieses Recht weitergegeben wird, sind die betroffenen Personen darauf hinzuweisen, dass mit entsprechender Sorgfalt mit diesen persönlichen Daten umgegangen wird. Das Veröffentlichen von Bewertungen ist eine Möglichkeit, Bewertungen über eine URL zu importieren und zu exportieren, ohne bei Moodle angemeldet zu sein. Wenn diese Option aktiviert ist, werden für Administrator\\*innen und Nutzer\\*innen mit der Berechtigung zum Veröffentlichen von Bewertungen (meist nur Benutzer\\*in mit der Managementrolle) die Einstellungen zum Veröffentlichen von Bewertungsexporten angeboten.';
$string['graderreport'] = 'Bewerter*innenübersicht';
$string['hiddenasdate_help'] = 'Falls Nutzer\\*innen verborgene Bewertungen nicht sehen können, soll das Abgabedatum anstelle von \'-\' angezeigt werden.';
$string['hidden_help'] = 'Wenn diese Option aktiviert ist, wird die Bewertungen vor den Teilnehmer\\*innen verborgen. \'Verborgen bis...\' kann auf Wunsch eingestellt werden, um die Bewertungen so lange zu verbergen, bis der Bewertungsdurchlauf abgeschlossen wurde.';
$string['hidetotalifhiddenitems_help'] = 'Die Einstellung legt fest ob die Gesamtbewertung angezeigt wird oder durch ein (-) ersetzt wird, wenn es verborgene Einzelbewertungen gibt. Soll sie angezeigt werden kann festgelegt werden, ob die verborgene Bewertung in das angezeigte Gesamtergebnisse einbezogen wird oder nicht. Wenn verborgene Werte ausgeschlossen werden, ist die sichtbare Gesamtbewertung für Trainer\\*innen und Teilnehmer\\*innen jeweils nicht identisch. Trainer\\*innen sehen immer sichtbare und verborgene Ergebnisse als Gesamtergebnis. Sollen verborgene Werte für Teilnehmer\\*innen in die Bewertung eingehen, können diese von den Teilnehmer\\*innen u.U. aus dem Gesamtergebnis errechnet werden.';
$string['identifier'] = 'Teilnehmer*in identifizieren durch';
$string['importcsv_help'] = 'Bewertungen können aus einer CSV-Datei im folgenden Format importiert werden: \\* Jede Zeile enthält einen Datensatz \\* Jeder Datensatz enthält eine Reihe von Daten, die durch Kommas oder ein anderes Trennzeichen abgetrennt werden \\* Die erste Zeile enthält eine Liste der genutzten Feldnamen und definieren die Struktur für die folgenden Datensätze \\* Ein Feld mit dem Nutzendennamen, der ID-Nummer oder der E-Mail-Adresse ist erforderlich, um die Bewertungen dem\\*der Nutzer\\*in zuzuordnen. Eine Datei mit der richtigen Struktur kann eingesehen werden indem man zunächst einige Bewertungen exportiert. Diese Datei kann dann bearbeitet und als CSV-Datei gespeichert werden.';
$string['intersectioninfo'] = 'Info zu Teilnehmer*Bewertung';
$string['linkedactivity_help'] = 'Diese Einstellung legt die Zuordnung einer Aktivität zu einem Lernziel fest. Dies ist sinnvoll, um Leistungen der Teilnehmer\\*innen zu messen, die nicht über Bewertung von Aktivitäten erfasst werden sollen.';
$string['mapfrom_help'] = 'Wählen Sie die Spalte in der Tabelle, die Daten zur Identifizierung des\\*r Nutzers\\*in enthält. Das können sein: Nutzendenname, Nutzer-ID oder E-Mail-Adresse.';
$string['mygrades_desc'] = 'Die Einstellung fügt den Link zu einer externen Bewertungsverwaltung zum Nutzendenmenu hinzu.';
$string['noreports'] = 'Sie sind in keinem Kurs als Teilnehmer*in oder als Trainer*in eingeschrieben.';
$string['notteachererror'] = 'Diese Funktionen können nur Trainer*innen nutzen.';
$string['nousersloaded'] = 'Es wurden keine Nutzer*innen importiert.';
$string['nouserstograde'] = 'Keine Nutzer*innen zu bewerten';
$string['overridden_help'] = 'Wenn diese Option aktiviert ist, kann die Bewertung nicht mehr innerhalb der zugehörigen Aktivität geändert werden. Wenn eine Bewertung in der Bewerter\\*innenübersicht bearbeitet wird, wird die Option Überschrieben automatisch angekreuzt. Sie kann jedoch deaktiviert werden, um eine Änderung der Bewertung über die zugehörige Aktivität zu ermöglichen.';
$string['overridecat_help'] = 'Das Deaktivieren dieser Einstellung verhindert, dass Nutzer\\*innen Kategoriebewertungen überschreiben können.';
$string['privacy:metadata:grades:userid'] = 'ID des*der bewerteten Nutzers*in';
$string['privacy:metadata:grades:usermodified'] = 'ID des*der Nutzers*in, der Datensatz zuletzt bearbeitet hat';
$string['privacy:metadata:grade_import_newitem:importer'] = 'Nutzer*in, der*die Daten importiert';
$string['privacy:metadata:grade_import_values:importer'] = 'Nutzer*in, der*die Daten importiert';
$string['privacy:metadata:grade_import_values:userid'] = 'Nutzer*in, dessen*deren Bewertung importiert wurde';
$string['privacy:metadata:history:loggeduser'] = 'ID des*r Nutzers*in, der eingeloggt war als Versionierung erfolgte';
$string['privacy:metadata:outcomes:usermodified'] = 'Nutzer*in der*die den Datensatz zuletzt verändert hat';
$string['privacy:metadata:scale:userid'] = 'Nutzer*in, der*die den Datensatz zuletzt bearbeitet hat';
$string['profilereport'] = 'Bericht zum Nutzer*innenprofil';
$string['profilereport_help'] = 'Der Bewertungsbericht wird auf der Seite des Nutzendenprofils angezeigt.';
$string['quickgrading_help'] = 'Wenn diese Option aktiviert ist, erscheint bei eingeschalteter Bearbeitung ein Eingabefeld mit einem gestrichelten Rand in jeder Zelle. Damit können mehrere Bewertungen auf einer Seite schnell eingegeben werden. Mit einem Klick auf den Aktualisierungsbutton werden alle Bewertungen auf einmal abgespeichert. Beachten Sie, dass bei der Eingabe einer Bewertung in der Bewerter\\*innenübersicht ein Übersteuerungsflag gesetzt wird, so dass die Bewertung nicht mehr innerhalb der zugehörigen Aktivität geändert werden kann.';
$string['recovergradesdefault_help'] = 'Alte Bewertungen werden wiederhergestellt, wenn Nutzer\\*innen erneut in einen Kurs eingeschrieben werden.';
$string['selectauser'] = 'Nutzer*in wählen';
$string['showallstudents'] = 'Alle Teilnehmer*innen anzeigen';
$string['showaverages_help'] = 'Wenn die Option aktiviert ist, wird die Bewerter\\*innenübersicht eine zusätzliche Zeile aufweisen, die den Durchschnitt für jede Kategorie und jeden Bewertungsaspekt enthält.';
$string['showaverage_help'] = 'Spalte mit Durchschnittswertung anzeigen? Beachten Sie, dass die Teilnehmer\\*innen fremde Bewertungen abschätzen können, wenn der Durchschnitt aus einer kleinen Anzahl berechnet wird. Aus Performancegründen ist der Durchschnitt ungenau, wenn er von versteckten Elementen abhängig ist.';
$string['showeyecons_help'] = 'Wenn diese Option aktiviert ist, wird bei eingeschalteter Bearbeitung für jeden Bewertungsaspekt ein Symbol zur Sichtbarkeit (Auge) neben jeder Bewertung angezeigt, um die Sichtbarkeit für Teilnehmer\\*innen zu steuern.';
$string['showonlyactiveenrol_help'] = 'Diese Einstellung legt fest, ob nur aktiv eingeschriebene Nutzer\\*innen im Bewertungsbericht angezeigt werden. Wenn die Einstellung aktiviert ist, werden gesperrte Nutzer\\*innen nicht angezeigt.';
$string['showquickfeedback_help'] = 'Wenn diese Option aktiviert ist, erscheint bei eingeschalteter Bearbeitung ein Eingabefeld mit einem gestrichelten Rand in jeder Zelle. Damit können mehrere Feedbacks auf einer Seite schnell eingegeben werden. Mit einem Klick auf den Aktualisierungsbutton werden alle Feedbacks auf einmal abgespeichert. Beachten Sie, dass bei der Eingabe von Feedback in der Bewerter\\*innenübersicht ein Übersteuerungsflag gesetzt wird, so dass das Feedback nicht mehr innerhalb der zugehörigen Aktivität geändert werden kann.';
$string['showranges_help'] = 'Wenn diese Option aktiviert ist, wird die Bewerter\\*innenübersicht eine zusätzliche Zeile aufweisen, die den Bewertungsbereich für jede Kategorie und jeden Bewertungsaspekt enthält.';
$string['showuserimage'] = 'Nutzer*innenbilder anzeigen';
$string['showuserimage_help'] = 'Nutzendenbild neben dem Namen in der Bewerter\\*innenübersicht anzeigen';
$string['student'] = 'Teilnehmer*in';
$string['studentsperpage'] = 'Teilnehmer*innen pro Seite';
$string['studentsperpage_help'] = 'Diese Einstellung legt die Anzahl der Teilnehmer\\*innen fest, die pro Seite in der Bewerter\\*innenübersicht gezeigt werden.';
$string['unenrolledusersinimport'] = 'Beim Import werden Bewertungen der folgenden Teilnehmer*innen importiert, die zur Zeit nicht im Kurs registriert sind: {$a}';
$string['user'] = 'Nutzer*in';
$string['userenrolmentsuspended'] = 'Nutzer*inneneinschreibung gesperrt';
$string['userfields_show'] = 'Nutzer*innenfelder anzeigen';
$string['userfields_show_help'] = 'Diese Option legt fest, ob zusätzliche Nutzendenfelder wie z.B. die E-Mail-Adresse in der Bewerter\\*innenübersicht angezeigt werden. Welche Felder angezeigt werden, wird über die Einstellung showuseridentity gesteuert.';
$string['usergrade'] = 'Nutzer*in {$a->fullname} ({$a->useridnumber}) mit Wert {$a->gradeidnumber}';
$string['useridnumberwarning'] = 'Nutzer*innen ohne ID-Nummer sind vom Export ausgeschlossen, da sie nicht importiert werden können.';
$string['usermappingerror'] = 'Nutzer*innenzuordnungsfehler: Nutzer mit {$a->field} von "{$a->value}" wurde nicht gefunden.';
$string['usermappingerrorcurrentgroup'] = 'Nutzer*in ist nicht Mitglied dieser Gruppe.';
$string['usermappingerrormultipleusersfound'] = 'Fehler bei der Benutzer*innenzuordnung: Mehrere Benutzer*innen mit {$a->field} von "{$a->value}" gefunden. Bitte verwenden Sie ein eindeutigeres Mapping-Feld.';
$string['usermappingerrorusernotfound'] = 'Nutzer*innen-Zuordnungsfehler. Nutzer*innen kann nicht gefunden werden.';
$string['userpreferences'] = 'Nutzer*inneneinstellungen';
