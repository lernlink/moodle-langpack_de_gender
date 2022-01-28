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
 * @subpackage mnet
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authfail_usermismatch'] = 'Fehler bei der Autorisierung: Das Nutzer*inkonto passt nicht!';
$string['deleteuserrecord'] = 'SSO ACL: Datensatz für Nutzer*innen \'{$a->user}\' von {$a->host} löschen.';
$string['duplicate_usernames'] = 'Beim Anlegen eines Index für die Spalten "mnethostid" und "username" in Ihrer Nutzer*innentabelle ist ein Fehler aufgetreten. <br /> Dies kann passieren, wenn ein <a href="{$a}" target="_blank">doppelter Anmeldename in der Nutzer*innentabelle</a> vorhanden ist.<br /> Das Update sollte dennoch erfolgreich abgeschlossen worden sein. Klicken Sie auf den Link und die Hinweise zur Problemlösung öffnen sich in einem neuen Fenster. Sie können sich mit diesem Problem nach Abschluss des Updates befassen.<br/>';
$string['error7020'] = 'Dieser Fehler tritt normalerweise auf, wenn die Remote-Server einen Dateneintrag für wwwroot falsch erzeugt hat, z.B. http://domain.de statt http://www.domain.de. Sie sollten den*die Administrator*in der Remote-Server über die richtige Einstellung für wwwroot informieren (so wie in config.php angegeben), damit der dortige Dateneintrag für Ihren Server korrigiert werden kann.';
$string['expireyourkeyexplain'] = 'Moodle wechselt Ihren PublicKey automatisch alle 28 Tage (Standard). Sie haben aber jederzeit die Möglichkeit, den PublicKey <em>manuell</em> zu löschen. Dies ist nur dann sinnvoll, wenn Sie fürchten, Ihr PublicKey könnte gefälscht sein. Ein Ersatz wird dann umgehend automatisch erstellt.<br />Das Löschen des PublicKey macht es unmöglich, dass andere Moodle mit Ihrem Moodle kommunizieren können, solange bis Sie Ihren neuen PublicKey manuell an die anderen Administrator*innen übermittelt haben.';
$string['failedaclwrite'] = 'Fehler beim Schreiben in die MNet-Access-Kontrollliste für Nutzer*in \'{$a}\\';
$string['hidelocal'] = 'Lokale Nutzer*innen verbergen';
$string['hideremote'] = 'Entfernte Nutzer*innen verbergen';
$string['loginlinkmnetuser'] = '<br />Falls Sie ein*e MNet-Remote-Nutzer*in sind und hier <a href="{$a}">Ihre E-Mail-Adresse bestätigen</a>, können Sie zu Ihrer Login-Seite weitergeleitet werden.<br />';
$string['mnet_session_prohibited'] = 'Teilnehmer*innen Ihres Moodle-Servers sind aktuell nicht für einen Wechsel auf {$a} zugelassen.';
$string['nolocaluser'] = 'Für diese*n Remote-Nutzer*in ist kein lokaler Datensatz vorhanden. Ein Datensatz konnte auch nicht erzeugt werden, weil dieser Rechner Nutzer*innenkonten nicht automatisch anlegt. Bitte melden Sie sich bei Ihrer*m Administrator*in!';
$string['notenoughidpinfo'] = 'Ihr Server (identity provider) liefert nicht genügend Informationen, um Ihr Nutzer*inkonto lokal zu erstellen oder zu aktualisieren.';
$string['notpermittedtojumpas'] = 'Sie können keine Remote Session starten, solange Sie mit einem fremden Nutzer*inkonto angemeldet sind.';
$string['peerprofilefielddesc'] = 'Hier können Sie die globalen Einstellungen ändern, die beim Hinzufügen neuer Nutzer*innen gesendet und importiert werden.';
$string['profilefielddesc'] = 'Hier können Sie die Liste der Profilfelder konfigurieren, die MNET sendet und empfängt, sobald Nutzer*innenkonten erstellt oder aktualisiert werden. Sie können diese auch für jede MNet-Verbindung individuell anpassen. Hinweis: Die folgenden Felder werden immer übertragen: {$a}';
$string['remoteuser'] = 'Remote-Nutzer*in {$a->remotetype}';
$string['remoteuserinfo'] = 'Nutzer*innenprofil von <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['showlocal'] = 'Lokale Nutzer*innen anzeigen';
$string['showremote'] = 'Remote-Nutzer*innen anzeigen';
$string['ssl_acl_allow'] = 'SSO ACL: Nutzer*in {$a->user} von {$a->host} zulassen';
$string['ssl_acl_deny'] = 'SSO ACL: Nutzer*in {$a->user} von {$a->host} zurückweisen';
$string['ssoacldescr'] = 'Diese Seite regelt die Erlaubnis/das Verbot des Zugriffs spezifischer Nutzer*innen von anderen Moodle-Netzwerk Hosts. Diese ist hilfreich wenn SSO Services für externe Nutzer*innen angeboten wird. Zur Kontrolle der <em>lokalen</em> Nutzer*innenberechtigungen für andere Moodle-Netzwerk Hosts gewähren Sie den Zugriff durch die <em>mnetlogintoremote</em> Berechtigung.';
$string['usercannotchangepassword'] = 'Als Remote-Nutzer*in können Sie Ihr Kennwort hier nicht ändern.';
$string['usernotfullysetup'] = 'Ihre Nutzer*inneneinstellungen sind unvollständig. Sie müssen <a href="{$a}">zurück zu Ihrem Provider</a> gehen, um dort das Nutzer*inprofil zu vervollständigen. Änderungen werden erst wirksam, wenn Sie sich danach ab- und wieder anmelden.';
$string['usersareonline'] = 'Warnung: {$a} Nutzer*innen sind aktuell von diesem Server in Ihrer Website eingeloggt.';
