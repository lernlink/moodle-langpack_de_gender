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
 * @subpackage auth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowaccountssameemail'] = 'Nutzer*innenkonten mit gleicher E-Mail-Adresse erlauben';
$string['allowaccountssameemail_desc'] = 'Wenn diese Option aktiviert ist, können mehrere Nutzer\\*innenkonten die gleiche E-Mail-Adresse verwenden. Probleme hinsichtlich Sicherheit oder Datenschutz könnten entstehen, wenn z.B. eine Bestätigungsmitteilung zur Kennwortänderung versendet wird.';
$string['authloginviaemail_desc'] = 'Nutzer\\*innen erlauben, sich mit dem Anmeldenamen oder mit der E-Mail-Adresse anzumelden, falls die E-Mail-Adresse eindeutig ist.';
$string['auth_changepasswordhelp_expl'] = 'Nutzer*innenhilfe für vergessene {$a} Kennwörter anzeigen. Diese Hilfe wird neben oder statt der <strong>URL zur Kennwortänderung</strong> oder der Moodle internen Kennwortänderung angezeigt.';
$string['auth_fieldlocks'] = 'Nutzer*innendatenfelder sperren';
$string['auth_fieldlocks_help'] = '<p>Sie können Datenfelder im Nutzer\\*innenprofil sperren. Dies ist sinnvoll, wenn die Nutzer\\*innendaten von Administrator\\*innen gepflegt werden, manuell angelegt oder im Bulkupload (Hochladen über Textdatei) hochgeladen werden. Falls Sie von Moodle benötigte Datenfelder sperren, müssen Sie sicherstellen, dass diese Datenfelder beim Anlegen der Nutzer\\*innenprofile sinnvoll belegt werden.</p><p>Um Probleme zu vermeiden, achten Sie darauf, dass die Einstellung auf "Bearbeitbar (wenn leer)" gesetzt ist.</p>';
$string['auth_remove_user'] = 'Legen Sie fest, was mit einem internen Nutzer*inprofil passieren soll, wenn bei einer Massensynchronisierung dieser Account im externen System entfernt wurde. Nur gesperrte Nutzer*innen werden automatisch reaktiviert, wenn sie in der externen Quelle wieder erscheinen.';
$string['auth_remove_user_key'] = 'Entfernte externe Nutzer*innen';
$string['auth_sync_script'] = 'Synchronisierung von Nutzer*innenkonten';
$string['auth_sync_suspended'] = 'Die Option legt fest, dass das Ausblendemerkmal bei der Synchronisation von lokalen Nutzer*innenkonten verwendet wird.';
$string['auth_sync_suspended_key'] = 'Status von lokalen Nutzer*innenkonten synchronisieren';
$string['auth_updatelocal_expl'] = '<p><b>Lokal aktualisieren:</b> Wenn diese Option aktiviert ist, wird das Feld jedes Mal von extern (external auth) aktualisiert, wenn sich die Nutzer*innen einloggen oder eine Nutzer*innensynchronisation erfolgt. Dateneinträge sollten gesperrt sein, wenn sie lokal aktualisiert werden.</p>';
$string['auth_updateremote_expl'] = '<p><b>Extern aktualisieren:</b> Wenn diese Option aktiviert ist, wird die externe Datenbank aktualisiert, sobald der Nutzer*innendatensatz aktualisiert wird. Die Felder sollten bearbeitbar bleiben, um Datenänderungen zuzulassen.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Anmerkung:</b> Das Update externer LDAP-Daten erfordert die Einstellung \'binddn\' und \'bindpw\' für eine*n Bind-Nutzer*in mit Schreibrechten für alle Nutzer*innendatensätze. Aktuell werden mehrfach gesetzte Eigenschaften nicht unterstützt und die zusätzlichen Werte bei einem Update entfernt.</p>';
$string['auth_usernotexist'] = 'Nicht existierende*r Nutzer*in {$a} kann nicht aktualisiert werden';
$string['auth_user_create'] = 'Nutzer*innenerstellung aktivieren';
$string['auth_user_creation'] = 'Neue (anonyme) Nutzer*innen können Nutzer*innenkonten außerhalb der Authentifizierungsquelle erstellen und per E-Mail bestätigen. Wenn Sie diese Option aktivieren, müssen Sie außerdem modulspezifische Optionen zur Erstellung neuer Nutzer*innenkonten konfigurieren.';
$string['auto_add_remote_users'] = 'Automatisches Hinzufügen externer Nutzer*innen';
$string['chooseauthmethod_help'] = 'Diese Option legt die Authentifizierung für das Nutzer\\*innenkonto fest. Hier sollten nur aktive Authentifizierungen angegeben werden, denn sonst kann sich diese Person nicht mehr anmelden. Um ein Nutzer\\*innenkonto vorübergehend zu sperren, wählen Sie die Authentifizierung "Kein Login".';
$string['createpassword'] = 'Kennwort erzeugen und Nutzer*in benachrichtigen';
$string['emailnowexists'] = 'Die E-Mail-Adresse, die Sie in Ihrem Nutzer*innenprofil eintragen möchten, wird bereits von jemand anders verwendet. Der Änderungsvorgang wird abgebrochen, aber Sie können die Eingabe einer weiteren Adresse versuchen.';
$string['emailupdatemessage'] = 'Guten Tag {$a->fullname}, Sie möchten die E-Mail-Adresse für Ihr Nutzer*innenkonto bei {$a->site} ändern. Öffnen Sie bitte die folgende URL in Ihrem Browser, um die Änderung zu bestätigen. {$a->url} Wenn Sie Fragen haben, kontaktieren Sie den Support: {$a->supportemail} Ihr E-Learning-Team';
$string['eventuserloggedin'] = 'Nutzer*in angemeldet';
$string['eventuserloggedinas'] = 'Nutzer*in ist als andere Person angemeldet';
$string['eventuserloginfailed'] = 'Nutzer*innenanmeldung fehlgeschlagen';
$string['forcechangepasswordfirst_help'] = 'Nutzer\\*innen werden aufgefordert, ihr Kennwort beim ersten Anmelden zu ändern.';
$string['forcechangepassword_help'] = 'Nutzer\\*innen werden aufgefordert, ihr Kennwort beim nächsten Anmelden zu ändern.';
$string['limitconcurrentlogins_desc'] = 'Wenn diese Option aktiviert ist, wird die Anzahl der Anmeldungen für jede\\*n Benutzer\\*in eingeschränkt. Die älteste Sitzung wird beim Erreichen der Grenze beendet, alle nicht gespeicherten Daten gehen verloren. Diese Einstellung ist nicht mit einer Authentifizierung über Single-Sign-On (SSO) kompatibel.';
$string['nopasswordchangeforced'] = 'Ohne die Änderung des Kennworts können Sie nicht weitermachen. Falls die Seite zur Änderung des Kennworts nicht verfügbar ist, wenden Sie sich an Administrator*innen der Website.';
$string['potentialidps'] = 'Verwenden Sie Ihr Nutzer*innenkonto bei:';
$string['privacy:metadata:userpref:createpassword'] = 'Legt fest, dass ein Kennwort für den*die Nutzer*in erstellt werden soll.';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Legt fest, ob ein*e Nutzer*in beim Login das Kennwort ändern soll.';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Anzahl der Fehllogins des*der Nutzers*in';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Anzahl der Fehllogins des*der Nutzers*in nach seinem letzten erfolgreichen Login';
$string['privacy:metadata:userpref:loginlockout'] = 'Kennzeichnet, ob ein Nutzer*innenaccount geblockt ist weil er vergebliche Loginversuche hatte und zu welchem Zeitpunkt der Account geblockt wurde';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Kennzeichnet, dass ein Nutzer*innenaccount niemals geblockt werden soll.';
$string['privacy:metadata:userpref:loginlockoutsecret'] = '\'Kennzeichen\' mit dem ein*e geblockte*r Nutzer*in den Account entsperren kann.';
$string['selfregistration_help'] = 'Wenn die Selbstregistrierung (z.B. \'E-Mail basiert\') aktiviert ist, können sich alle Personen selbst registrieren und ein Nutzer\\*innenkonto anlegen. Auf diese Weise könnten aber auch Spammer ein Nutzer\\*innenkonto erhalten und Einträge in Foren, Blogs oder Profilen missbrauchen. Um dieses Risiko zu vermeiden, können Sie die Selbstregistrierung ausschalten oder auf bestimmte E-Mail-Domains (z.B. meinefirma.de) beschränken.';
$string['suspended'] = 'Gesperrtes Nutzer*innenkonto';
$string['suspended_help'] = 'Gesperrte Nutzer\\*innen können sich nicht einloggen und auch keine Webservices benutzen. Alle ausgehenden Mitteilungen werden gelöscht.';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() unterstützt den ausgewählten Nutzer*innentyp nicht: \'{$a}\\';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() unterstützt den ausgewählten Nutzer*innentyp nicht: \'{$a}\\';
