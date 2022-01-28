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
 * @subpackage scorm
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aiccuserid_desc'] = 'Der AICC-Standard für Nutzer\\*innennamen ist sehr restriktiv und erlaubt ausschließlich alphanumerische Zeichen und die Sonderzeichen Bindestrich und Unterstrich. Punkte, Leerzeichen und das Symbol @ sind nicht zugelassen. Wenn diese Option aktiviert ist, werden die Nutzer\\*in-ID-Nummern an das AICC-Lernpaket übergeben und nicht die Anmeldenamen.';
$string['allowtypeaicchacp_desc'] = 'Die Aktivierung ermöglicht AICC HACP die externe Kommunikation ohne ein Nutzer\\*inlogin zu benötigen, um Anfragen des externen AICC Pakets zu verarbeiten.';
$string['apidebugmask'] = 'API Debug Capture Mask (simple regex on <username>:<activityname>) z.B. admin:* zeigt die Debugmitteilungen nur für den*die Nutzer*in admin';
$string['completionscorerequired_help'] = 'Wenn diese Option aktiviert ist, müssen Teilnehmer\\*innen neben anderen Anforderungen auch die angegebene Mindestpunkte erreichen, um dieses Lernpaket als \'abgeschlossen\' markieren zu können.';
$string['completionstatusrequireddesc'] = 'Teilnehmer*in muss mindestens einen der folgenden Status erreichen: {$a}';
$string['completionstatusrequired_help'] = 'Wenn Sie einen oder mehrere Punkte anwählen, müssen Teilnehmer\\*innen neben anderen Anforderungen auch mindestens einen dieser Punkte erledigen, um dieses Lernpaket als \'abgeschlossen\' markieren zu können.';
$string['confirmloosetracks'] = 'Warnung: Das Lernpaket scheint verändert worden zu sein. Evtl. ist die Paketstruktur geändert worden. Beim Update könnten Protokolldaten der Nutzer*innen verloren gehen.';
$string['displayattemptstatusdesc'] = 'Die Option legt fest, ob eine Zusammenfassung der Nutzer*innenversuche in der Kursübersicht im Dashboard und/oder der Anfangsseite des Lernpakets angezeigt werden soll.';
$string['displayattemptstatus_help'] = 'Diese Option legt fest, ob eine Zusammenfassung der Nutzer\\*innenversuche in der Kursübersicht im Dashboard und/oder auf der Anfangsseite des Lernpakets angezeigt wird.';
$string['eventuserreportviewed'] = 'Nutzer*inbericht angezeigt';
$string['forcenewattempts_help'] = 'Es gibt drei Optionen: \\* Nein - Wenn ein vorheriger Versuch abgeschlossen, bestanden oder gescheitert ist, erhält der\\*die Nutzer\\*in die Option den Rückblick-Modus zu beginnen oder einen neuen Versuch zu starten. \\* Wenn vorherige Versuche, abgeschlossen, bestanden oder gescheitert sind. Dies hängt von den Einstellungen des SCORM Pakets ab, was passiert wenn der Versuch \'abgeschlossen\', \'bestanden\' oder \'gescheitert\' ist.';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person in einer Lernpaketaktivität erreicht hat.';
$string['lastattemptlock_help'] = 'Diese Option legt fest, ob Teilnehmer\\*innen nach dem Erreichen der Anzahl zulässiger Versuche weiter auf das Lernpaket zugreifen können oder ob der Zugriff zum Lernpaket nach dem letzten zulässigen Versuch gesperrt wird. Dazu muss ein Wert für die Anzahl der Versuche angegeben sein.';
$string['optallstudents'] = 'alle Nutzer*innen';
$string['optattemptsonly'] = 'Nutzer*innen mit Versuchen';
$string['optnoattemptsonly'] = 'Nutzer*innen ohne Versuche';
$string['privacy:metadata:userid'] = 'ID des*der Nutzers*in, der*die die SCORM Aktivität nutzte';
$string['reportcountallattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbattempts} Versuche von {$a->nbusers} Nutzer*innen)';
$string['reportcountattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbusers} Nutzer*innen)';
$string['scormresponsedeleted'] = 'Gelöschte Nutzer*inversuche';
$string['scormstandarddesc'] = 'Wenn deaktiviert, ermöglicht Moodle dem SCORM 1.2 Paket mehr zu speichern als die Spezifikation vorsieht und verwendet den vollständigen Namen des*der Modle-Nutzers*in im SCORM Paket.';
$string['tracklatency_help'] = 'Verstrichene Zeit zwischen der Anzeige der Seite<br />und der ersten Beantwortung durch den\\*die Teilnehmer\\*in.';
$string['trackresponse_help'] = 'Diese Antwort wurde von dem\\*der Teilnehmer\\*in auf die Frage gegeben';
$string['trackresult_help'] = 'Ergebnis auf Grundlage der Teilnehmer\\*innenantwort <br />und dem richtigen Ergebnis';
$string['tracksuspenddata_help'] = 'Platz zum Speichern und Wiederfinden von Daten<br />zwischen den Sessions der Teilnehmer\\*innen';
$string['viewalluserreports'] = 'Berichte für {$a} Nutzer*innen anzeigen';
$string['whatgrade_help'] = 'Bei mehreren Versuchen legt diese Einstellung fest, welcher Versuch bewertet wird (z.B. beste Bewertung, erste oder letzte Bewertung oder Durchschnittswert). Die Option \'letzte Bewertung\' lässt fehlgeschlagene Versuche unberücksichtigt. Hinweise zur Nutzung mehrfacher Versuche: \\* Die Option zum Starten eines neuen Versuchs wird mit einer Checkbox auf der Übersichtsseite angezeigt. Prüfen Sie, ob Sie mehr als einen Versuch zulassen möchten. \\* Einige Lernpakete unterstützen erneute Versuchen, viele aber nicht. Wenn Teilnehmer\\*innen erneut in einen bereits beendeten Versuch einsteigen, könnte die Bewertung des vorherigen Versuchs überschrieben werden, selbst wenn der Versuch als \'abgeschlossen\' oder \'erfolgreich\' markiert war. \\* Die Einstellungen \'Abschluss einfordern\', \'Neuen Versuch einfordern\' und \'Nach letztem Versuch sperren\' bieten zusätzliche Möglichkeiten für mehrerer Versuche.';
