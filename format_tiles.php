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
 * @package    format
 * @subpackage tiles
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admintools'] = 'Administrator*intools';
$string['allowlabelconversion_desc'] = 'Wenn aktiviert, wird Trainer*innen in den Einstellungen zu jedem Textfeld ein Menü angeboten, um das Textfeld in eine Textseite zu konvertieren. Dies ist eine experimentelle Einstellung.';
$string['allowphototiles_desc'] = 'Wenn diese Option ausgewählt ist, können Trainer*innen ein Foto hochladen, das als Kachelhintergrund dient. Im selben Kurs können sie auch weiterhin Standard-Kachelsymbole verwenden. (Wenn nicht ausgewählt, sind nur Kachelsymbole zulässig, und andere Einstellungen für Fotokacheln unten werden ignoriert.)';
$string['assumedatastoreconsent_desc'] = 'Wenn diese Option ausgewählt ist, wird die Zustimmung zur lokalen Datenspeicherung im Browser automatisch gegeben. Den Nutzer*innen wird <b>kein Dialog</b> angezeigt, in dem um eine Zustimmung zur Datenspeicherung gebeten wird.';
$string['basecolour_help'] = 'Die hier festgelegte Farbe wird für alle Kacheln im Kurs angewendet. Die verfügbaren Farben werden von Ihrem*Ihrer Administrator*in in den Einstellungen des Kachelformats festgelegt.';
$string['colourname_descr'] = 'Anzeigename für die Farbe. Farbnamen werden normalerweise nicht von Nutzer*innen gesehen - sie sehen stattdessen ein farbiges Feld.';
$string['contactdeveloper'] = 'Entwickler*in kontaktieren';
$string['courseshowtileprogress_help'] = '<p>Wenn ausgewählt, wird der Teilnehmer*innenfortschritt mit den Aktivitäten in jeder Kachel angezeigt, entweder als <em>Fraktion</em> (z.B. \'Fortschritt 2/10\' bedeutet 2 von 10 abgeschlossenen Aktivitäten) oder als <em>Prozentsatz</em> in einem Kreis.</p><p>Dies kann nur verwendet werden, wenn \'Aktivitätsabschluss - Abschlussverfolgung\' eingeschaltet ist.</p><p>Wenn es keine Aktivitätsabschlüsse innerhalb einer bestimmten Kachel gibt, wird der Indikator für diese Kachel nicht angezeigt.</p>';
$string['coursetoomanysections'] = 'Warnung für Trainer*innen: Dieser Kurs enthält mehr Kacheln als maximal zulässig. Den Teilnehmer*innen werden maximal {$a->max} angezeigt (bis zu "{$a->tilename}") (Trainer*innen und Administrator*innen können mehr sehen).';
$string['developer'] = 'Entwickler*in';
$string['disabledbyadmin'] = 'Von Administrator*in deaktiviert';
$string['displayfilterbar_help'] = '<p>Wenn ausgewählt, wird automatisch eine Reihe von Schaltflächen vor dem Kacheln im Kurs angezeigt. Diese können Nutzer*innen anklicken, um Kacheln zu filtern </p><p>Wurde \'basierend auf Kachelnummern\' ausgewählt, wird eine Reihe von Schaltflächen angezeigt, z.B. eine Schaltfläche für Kacheln 1-4, eine Schaltfläche für Kacheln 5-8 usw. </p><p>Wurde \'basierend auf Kursergebnissen\' ausgewählt, gibt es eine Schaltfläche pro Kursergebnis. Jede Kachel kann auf der Einstellungsseite der jeweiligen Kachel einem bestimmten Ergebnis (und damit einer bestimmten Schaltfläche) zugeordnet werden.</p>';
$string['followthemecolour_desc'] = 'Wenn auf Ja gesetzt, können Trainer*innen nicht die Kachelfarben auswählen. Stattdessen wird versucht, die Hauptmarkenfarbe des Theme beizuhalten und diese stattdessen zu verwenden.';
$string['modalresources_desc'] = 'Starten Sie diese Ressourcen in einem Modal-Fenster starten. <br>Hinweis: Wenn dies hier erlaubt ist, werden URL-Ressourcen nur in einem modalen Fenster geöffnet, wenn sie auf Aktivitätsebene auf {$a->displayembed} eingestellt sind (z.B. YouTube- oder Vimeo-Videos). Und selbst dann könnte von dem*der originalen Websitebesitzer*in verhindert worden sein, URL-Ressourcen eingebettet anzuzeigen - siehe {$a->link}';
$string['nojswarning'] = 'Ihr Browser scheint kein JavaScript zu unterstützen, oder JavaScript ist deaktiviert. Eine erweiterte Nutzer*innenführung ist verfügbar, wenn Sie JavaScript aktivieren.';
$string['notregistered'] = 'Das Plugin "Kachelformat" ist noch nicht bei den Entwickler*innen registriert.';
$string['registerintro5'] = 'Ihre Daten werden von den Entwickler*innen vertraulich behandelt, so wie es in der Datenschutzrichtlinie angegeben ist. Danke für Ihre Unterstützung!';
$string['reopenlastsection_desc'] = 'Wenn diese Option aktiviert ist, wird der letzte Abschnitt, den der*die Nutzer*in geöffnet hatte, bei seinem nächsten Besuch wieder geöffnet.';
$string['showprogresssphototiles_desc'] = 'Wenn diese Option ausgewählt ist, wird der Teilnehmer*innenfortschritt (z.B. Fortschritt 2/5) auf den Fotokacheln angezeigt.';
$string['snapwarning_help'] = 'Designs > Einstellungen > Designwechsel für Nutzer*innen erlauben';
$string['tilecolourgeneral_descr'] = 'Mit diesen Einstellungen wird festgelegt, welche Farben den Trainer*innen in ihren Kursen zur Verfügung stehen. Stellen Sie die Farbe auf Schwarz (#000000) ein, um diese Farbe zu deaktivieren. Wenn Sie die Farben nachträglich hier ändern, werden keine Änderungen an vorhandenen Kursen vorgenommen. Für die nächste Kursbearbeitung stehen den Trainer*innen aber dann nur die Farben zur Verfügung, die Sie hier festgelegt haben.';
$string['tilesoutofsequencewarning'] = 'Warnung für Trainer*innen: Die folgenden Kacheln weisen Fehler auf. Löschen Sie bitte eine oder mehrere dieser Kacheln, um die Probleme zu beheben:';
$string['usejavascriptnav_desc'] = 'Wenn diese Option aktiviert ist und Nutzer*innen in der Kursübersicht auf eine Kachel klicken, wird JavaScript für den Übergang zum Kachelinhalt verwendet. Der Kachelinhalt wird gemäß der anderen Einstellungen lokal im Browser gespeichert. Wenn diese Option nicht aktiviert ist, wird JavaScript nicht verwendet. Stattdessen wird die Legacy-Navigation verwendet und weiteren JavaScript-Einstellungen werden ignoriert.';
$string['usetooltips_desc'] = 'JavaScript Tooltipps anzeigen. wenn Nutzer*innen bestimmte Elemente berühren, z.B. Bereiche für die Fertigstellung, Kacheln für den Kachelinhalt';
