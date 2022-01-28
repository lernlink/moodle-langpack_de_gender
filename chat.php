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
 * @subpackage chat
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configmethod'] = 'Die Chat-Methode AJAX bietet eine AJAX-basierte Chat-Oberfläche, die den Server regelmäßig kontaktiert, um Aktualisierungen zu erhalten. Bei der Chat-Methode Normal wenden sich Clients regelmäßig an den Server, um Aktualisierungen zu erhalten. Es erfordert keine Konfiguration und funktioniert überall, kann jedoch eine große Belastung des Servers verursachen, wenn viele Nutzer*innen chatten. Die Verwendung eines Server-Daemons erfordert Shell-Zugriff auf Unix, führt jedoch zu einer schnell skalierbaren Chat-Umgebung.';
$string['configoldping'] = 'Nach welcher Zeit (in Sekunden) kann jemand aus der Nutzer*innenliste gelöscht werden, wenn die Kommunikation abgebrochen scheint? Dieser Wert legt die maximale Zeit dafür fest, denn normalerweise werden Kommunikationsabbrüche schnell erkannt. Zu kleine Werte führen zu einer sehr hohen Serverbelastung! Setzen Sie den Wert für den "Standard-Chat" <strong>niemals</strong> kleiner als 2 * chat_refresh_room!!';
$string['configrefreshroom'] = 'Nach welcher Zeit (in Sekunden) soll der Chat aktualisiert werden? Ein niedriger Wert lässt den Chat schneller erscheinen, führt aber bei hohen Nutzer*innenzahlen zu einer wesentlich höheren Serverbelastung. Falls Sie den Modus <em>Stream</em> verwenden, können Sie kleinere Werte wählen (probieren Sie es mit 2 Sekunden).';
$string['configrefreshuserlist'] = 'Nach welcher Zeit (in Sekunden) soll die Nutzer*innenliste aktualisiert werden?';
$string['configservermax'] = 'Maximal erlaubte Nutzer*innenzahl im Chat';
$string['currentusers'] = 'Aktuelle Nutzer*innen';
$string['modulename_help'] = 'Die Chat-Aktivität ermöglicht eine textbasierte synchrone Diskussion. Der Chat in Moodle ist für den Einsatz mit kleinen Gruppen konzipiert. Bei großen Gruppen entsteht eine hohe Belastung auf den Webservern. Ein Chat kann eine einmalige Aktivität sein, aber auch täglich oder wöchentlich nach Terminabsprache wiederholt werden. Chat-Sitzungen können gespeichert und veröffentlicht werden. Chats sind besonders nützlich, wenn die Gruppe sich nicht persönlich treffen kann, wie z.B. \\* Regelmäßige Treffen von Teilnehmer\\*innen, die an Online-Kursen teilnehmen, damit sie Erfahrungen mit anderen im selben Kurs, aber an einem anderen Ort austauschen können \\* Ein\\*e Teilnehmer\\*in, der vorübergehend nicht persönlich teilnehmen kann, um mit ihrem\\*seinen Trainer\\*in zu chatten und seine Arbeit nachzuholen \\* Teilnehmer\\*innen, die ein Praktikum machen, treffen sich, um ihre Erfahrungen miteinander und mit ihrer\\*m Trainer\\*in zu diskutieren \\* Jüngere Kinder nutzen den Chat zu Hause am Abend als kontrollierte (überwachte) Einführung in die Welt der sozialen Netzwerke \\* Eine Frage- und Antwortsitzung mit einem eingeladenen Redner an einem anderen Ort \\* Sitzungen zur Unterstützung der Teilnehmer\\*innen bei der Vorbereitung auf Tests, bei denen die\\*der Trainer\\*in oder andere Teilnehmer\\*innen Beispielfragen stellen würden';
$string['privacy:metadata:chat_users'] = 'Zeichnet auf, welche Nutzer*innen gerade in welchem Chat-Raum sind';
$string['privacy:metadata:chat_users:lang'] = 'Nutzer*insprache';
$string['privacy:metadata:chat_users:version'] = 'Wie der*die Nutzer*in auf den Chatraum zugriff (sockets/basic/ajax/header_js)';
$string['refreshuserlist'] = 'Nutzer*innenliste aktualisieren';
$string['servermax'] = 'Maximale Nutzer*innenzahl';
$string['studentseereports_help'] = 'Mit der Einstellung \'Nein\' dürfen ausschließlich Nutzer\\*innen mit dem Recht \'mod/chat:readlog\' die Chat-Protokolle sehen.';
$string['userlist'] = 'Teilnehmer*innenliste';
