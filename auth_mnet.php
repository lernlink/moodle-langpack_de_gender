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
 * @package    auth
 * @subpackage mnet
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnetdescription'] = 'Nutzer*innen werden als vertrauensvoll authentifiziert, wenn sie in den MNET-Einstellungen (Moodle Network) definiert wurden.';
$string['auth_mnet_auto_add_remote_users'] = 'Die Einstellung "Ja" bewirkt, dass ein lokaler Datensatz automatisch angelegt wird, sobald sich ein*e Remote-Nutzer*in erstmalig einloggt.';
$string['auth_mnet_roamin'] = 'Nutzer*innen können sich von diesen Hosts auf Ihre Website verbinden.';
$string['auth_mnet_roamout'] = 'Nutzer*innen können sich von Ihrer Website zu diesen Hosts verbinden.';
$string['auto_add_remote_users'] = 'Remote-Nutzer*innen automatisch hinzufügen';
$string['privacy:metadata:mnet_external:address'] = 'Die Adresse des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:autosubscribe'] = 'Voreinstellung, dass Nutzer*innen automatisch Foren abonnieren wenn sie darin posten.';
$string['privacy:metadata:mnet_external:calendartype'] = 'Nutzer*inneneinstellung wie der Kalender genutzt wird';
$string['privacy:metadata:mnet_external:city'] = 'Stadt des*der Nutzers*in';
$string['privacy:metadata:mnet_external:country'] = 'Land aus dem der*die Nutzer*in kommt';
$string['privacy:metadata:mnet_external:currentlogin'] = 'Der letzte Login des*der Nutzers*in';
$string['privacy:metadata:mnet_external:department'] = 'Abteilung des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:description'] = 'Allgemeine Details über den*die Nutzer*in.';
$string['privacy:metadata:mnet_external:firstaccess'] = 'Zeitpunkt des ersten Zugriffs des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:firstname'] = 'Vorname des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:firstnamephonetic'] = 'Phonetische Aussprache des Nutzer*innennamens';
$string['privacy:metadata:mnet_external:icq'] = 'ICQ-Nummer des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:imagealt'] = 'Alternativer Text für Bild des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:institution'] = 'Institution aus der der*die Nutzer*in kommt';
$string['privacy:metadata:mnet_external:lang'] = 'Nutzer*inneneinstellung zur Sprache';
$string['privacy:metadata:mnet_external:lastlogin'] = 'Letzter Login des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:lastname'] = 'Nachname des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:maildigest'] = 'Einstellung der E-Mail-Zusammenfassung des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:maildisplay'] = 'Einstellung des Nutzers zur Anzeige der E-Mail-Adresse für andere Nutzer*innen.';
$string['privacy:metadata:mnet_external:middlename'] = 'Mittlerer Name des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:phone1'] = 'Telefonnummer des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:phone2'] = 'Zusätzliche Telefonnummer des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:picture'] = 'Bilddetails des Profilfotos des*der Nutzers*in.';
$string['privacy:metadata:mnet_external:policyagreed'] = 'Kennzeichen, ob der*die Nutzer*in die Richtlinien der Seite bestätigt hat.';
$string['privacy:metadata:mnet_external:suspended'] = 'Kennzeichen ob der Nutzer*innenaccount gesperrt wurde';
$string['privacy:metadata:mnet_external:url'] = 'URL für Nutzer*innen';
$string['privacy:metadata:mnet_external:username'] = 'Nutzer*innenname des*der Nutzers*in';
$string['privacy:metadata:mnet_log'] = 'Details zum Zugriff des*der Nutzers*in auf ein Remote-System';
$string['privacy:metadata:mnet_log:action'] = 'Von dem*der Nutzer*in ausgelöste Aktion';
$string['privacy:metadata:mnet_log:remoteid'] = 'Remote-ID des*der Nutzers*in der Aktion in Remote-System auslöste';
$string['privacy:metadata:mnet_log:userid'] = 'Lokale ID des*der Nutzers*in, der Aktion im Remote-System ausführte';
$string['privacy:metadata:mnet_session'] = 'Die Details einer MNet-Nutzer*innensession im Remote-System werden temporär gespeichert.';
$string['privacy:metadata:mnet_session:userid'] = 'ID des*der Nutzers*in, der auf Remote-System zugreift.';
$string['privacy:metadata:mnet_session:username'] = 'Nutzer*innenname des*der Nutzers*in, der Remote-System nutzt.';
$string['sso_idp_description'] = 'Veröffentlichen Sie diesen Dienst, um Ihren Nutzer*innen einen Zugriff auf {$a} zu ermöglichen, ohne sich dort erneut anmelden zu müssen. <ul><li><em>Voraussetzung</em>: Sie müssen außerdem den SSO-Dienst (Service Provider) auf {$a} <strong>abonnieren </strong>.</li></ul> <br />Abonnieren Sie diesen Dienst, um allen angemeldeten Nutzer*innen von {$a} zu erlauben, auf Ihre Website zuzugreifen, ohne sich hier erneut anmelden zu müssen. <ul><li><em>Voraussetzung</em>: Sie müssen außerdem den SSO-Dienst (Service Provider) für {$a} <strong>veröffentlichen </strong>.</li></ul>';
$string['sso_sp_description'] = 'Veröffentlichen Sie diesen Dienst, um angemeldeten Nutzer*innen von {$a} einen Zugriff auf Ihre Website zu erlauben, ohne sich hier erneut anmelden zu müssen. <ul><li><em>Voraussetzung</em>: Sie müssen ebenfalls den SSO-Dienst (Identity Provider) auf {$a} <strong>abonnieren </strong>.</li></ul> <br />Abonnieren Sie diesen Dienst, um Ihren Nutzer*innen einen Zugriff auf {$a} zu ermöglichen, ohne sich dort erneut anmelden zu müssen. <ul><li><em>Voraussetzung</em>: Sie müssen zusätzlich den SSO-Dienst (Identity Provider) für {$a} <strong> veröffentlichen </strong>.</li></ul>';
