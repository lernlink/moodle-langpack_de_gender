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
 * @package    quizaccess
 * @subpackage seb
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['privacy:metadata:quizaccess_seb_template'] = 'Safe Exam Browser Template. Dies beinhaltet auch die ID des*der Nutzers*in, der*die das Template erstellt oder zuletzt geändert hat.';
$string['seb:manage_seb_userconfirmquit'] = 'SEB-Einstellungen: Nutzer*in muss das Beenden bestätigen';
$string['seb_allowreloadinexam_help'] = 'Wenn die Option aktiviert ist, ist das erneute Laden einer Webseite erlaubt (Neuladen-Taste in der SEB-Taskleiste, Browser-Toolbar, iOS-Seiten-Schiebereglermenü, Tastatur-Kurzbefehl F5, Befehlstaste-R). Das Offline-Caching kann unterbrochen werden, wenn der\\*die Nutzer\\*in versucht, eine Seite ohne Internetverbindung neu zu laden.';
$string['seb_allowuserquitseb_help'] = 'Wenn die Option aktiviert ist, können Nutzer\\*innen SEB mit dem "Beenden"-Button in der SEB-Taskleiste, durch Drücken der Cmd-Q (Befehl-Q) oder der Fenster-Schliessen-Taste beenden.';
$string['seb_requiresafeexambrowser_help'] = 'Wenn die Option aktiviert ist, können Teilnehmer\\*innen den Test nur mit dem Safe Exam Browser durchführen. Die verfügbaren Optionen sind: \\* Nein <br/>Der Safe Exam Browser ist nicht erforderlich, um den Test zu versuchen. \\* Ja – Bestehendes Template verwenden <br/>Zur Konfiguration des Safe Exam Browser wird ein Template verwendet. Die Templates werden von dem\\*der Moodle-Administrator\\*in verwaltet. Ihre manuellen Einstellungen überschreiben die Einstellungen im Template. \\* Ja – Manuell konfigurieren <br/>Zur Konfiguration des Safe Exam Browser wird kein Template verwendet. Sie können den Safe Exam Browser manuell konfigurieren. \\* Ja – Meine eigene Konfiguration hochladen <br/>Sie können Ihre eigene Konfigurationsdatei für den Safe Exam Browser hochladen. Alle manuellen Einstellungen und die Verwendung von Templates werden deaktiviert. \\* Ja – SEB-Client-Konfiguration verwenden <br/>Es gibt keine Konfiguration des Safe Exam Browser auf der Moodle-Seite. Der Test kann mit jeder Konfiguration des Safe Exam Browser durchgeführt werden.';
$string['seb_userconfirmquit'] = 'Benutzer*in muss das Beenden bestätigen';
$string['setting:autoreconfigureseb_desc'] = 'Wenn die Option aktiviert ist, wird bei Benutzern\\*innen, die mit dem Safe Exam Browser zum Test navigieren, der Safe Exam Browser automatisch neu konfiguriert.';
$string['setting:showseblinks_desc'] = 'Entscheiden Sie, ob Links für Nutzer\\*innen angezeigt werden sollen, um auf die SEB-Konfigurationsdatei zuzugreifen, wenn der Zugriff auf den Test verhindert wird. Beachten Sie, dass seb://-Links möglicherweise nicht für jeden Browser funktionieren.';
