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
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldapdescription'] = 'Diese Anmeldemethode ermöglicht die Authentifizierung gegenüber einem externen LDAP-Server. Wenn der angegebene Anmeldename und das angegebene Kennwort gültig sind, erstellt Moodle ein neues Nutzer*innenkonto in seiner Datenbank. Dieses Plugin kann Nutzer*innenattribute aus LDAP lesen und gewünschte Felder in Moodle vorab ausfüllen. Bei nachfolgenden Anmeldungen werden nur noch der Anmeldename und das Kennwort überprüft.';
$string['auth_ldapextrafields'] = 'Die folgenden Felder sind optional. Im Nutzer*innenprofil können automatisch einige Moodle-Felder mit ausgewählten Nutzer*innendaten aus <b>LDAP-Feldern</b> vorbelegt werden. <p>Wenn Sie die nachfolgenden Einträge leer lassen, wird nichts von LDAP übertragen und die Moodle-Voreinstellungen werden verwendet. In diesem Fall muss das Nutzer*innenprofil beim ersten Login selbst fertig ausgefüllt werden.</p> <p>Zusätzlich wird eingestellt, welche Felder im Nutzer*innenprofil bearbeitbar sein sollen.</p>';
$string['auth_ldap_ad_create_req'] = 'Im Active Directory konnte kein neues Nutzer*innenkonto angelegt werden. Stellen Sie sicher, dass die Voraussetzungen stimmen (LDAPS-Verbindung, Bind-User mit den notwendigen Rechten, usw.)';
$string['auth_ldap_attrcreators_key'] = 'Merkmal für Kursersteller*innen';
$string['auth_ldap_auth_user_create_key'] = 'Nutzer*innen extern anlegen';
$string['auth_ldap_bind_dn'] = 'Falls Sie für die Nutzer*innenabfrage einen \'Bind-User\' verwenden müssen, tragen Sie hier dessen Anmeldenamen ein. Der Eintrag hat üblicherweise die Form:
\'cn=ldapuser,ou=public,o=org\'.';
$string['auth_ldap_contexts'] = 'Liste der Kontexte, in denen Nutzer*innen zu finden sind. Mehrere Kontexte werden durch ein \';\' (Semikolon) getrennt, wie z.B.: \'ou=users,o=org; ou=others,o=org\\';
$string['auth_ldap_create_context'] = 'Wenn Sie die Nutzer*innenerstellung mit E-Mail-Bestätigung aktivieren, geben Sie den Kontext an, in dem die Nutzer*innen erstellt werden sollen. Dieser Kontext sollte sich von dem anderer Nutzer*innen unterscheiden, um Sicherheitsrisiken zu vermeiden. Sie brauchen diesen Kontext nicht zur Variablen ldap_contexts hinzuzufügen. Moodle sucht in diesem Kontext automatisch nach Nutzer*innen. <br /><b>Achtung!</b> Sie müssen die Funktion user_create() in der Datei auth/ldap/auth.php anpassen, damit die Nutzer*innenerstellung funktioniert.';
$string['auth_ldap_create_context_key'] = 'Kontext für neue Nutzer*innen';
$string['auth_ldap_create_error'] = 'Fehler beim Anlegen des Nutzer*innenkontos in LDAP';
$string['auth_ldap_gracelogins_desc'] = 'LDAP-GraceLogin aktivieren. Wenn das Gültigkeitsende von Kennwörtern erreicht ist, können sich die Nutzer*innen weiter einloggen, bis der GraceLogin-Zähler den Wert 0 hat. Mit dem Aktivieren wird eine GraceLogin-Mitteilung angezeigt, sobald das Gültigkeitsende erreicht ist.';
$string['auth_ldap_memberattribute'] = 'Optional: Mitgliedsmerkmal ändern, mit dem Nutzer*innen zu einer Gruppe gehören. Normalerweise \'member\\';
$string['auth_ldap_no_mbstring'] = 'Die PHP-Extension mbstring ist erforderlich, um Nutzer*innen in LDAP anzulegen.';
$string['auth_ldap_objectclass'] = 'Optional: Überschreibt die ObjectClass zur Nutzer*innensuche in LDAP (ldap_user_type). Die Voreinstellung muss normalerweise nicht geändert werden.';
$string['auth_ldap_search_sub'] = 'Nutzer*innensuche auch in Subkontexten durchführen';
$string['auth_ldap_suspended_attribute'] = 'Optional: Falls verfügbar wird dieses Merkmal verwendet, um das erstellte lokale Nutzer*innenkonto zu aktivieren oder auszublenden.';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() unterstützt den gewählten Nutzer*innentyp nicht: \'{$a}\\';
$string['auth_ldap_update_userinfo'] = 'Nutzer*innendaten (Vorname, Name, Adresse...) von LDAP nach Moodle übertragen. Ändern Sie die Einstellungen zur Datenzuordnung entsprechend Ihren Anforderungen.';
$string['auth_ldap_user_attribute'] = 'Optional: Merkmal zur Nutzer*innenbenennung und -suche ändern. Normalerweise \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Nutzer*innenmerkmal';
$string['auth_ldap_user_settings'] = 'Nutzer*innensuche (user lookup)';
$string['auth_ldap_user_type'] = 'Wählen Sie, wie Nutzer*innenkonten in LDAP gespeichert werden. Diese Einstellung legt auch fest, wie das Ablaufdatum für Kennwörter, die GraceLogins und das Anlegen neuer Nutzer*innenkonten in LDAP funktionieren.';
$string['auth_ldap_user_type_key'] = 'Nutzer*innentyp';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Der Nutzer*innenname konnte aus dem Header des REMOTE_USER nicht ausgelesen werden. Ist das Format richtig konfiguriert?';
$string['auth_ntlmsso_missing_username'] = 'Sie müssen zumindest den %username% im Format des entfernten Nutzer*innennamen festlegen.';
$string['auth_ntlmsso_remoteuserformat'] = 'Wenn Sie \'NTLM\' als \'Authentifizierungstyp\' verwenden, können Sie hier das Format von externen Nutzer*innennamen angeben. Bleibt der Eintrag leer, wird das Standardformat DOMAIN\\username verwendet. Verwenden Sie den optionalen <b>%domain%</b> Platzhalter, um festzulegen wo der Domainname erscheint, und den erforderlichen Platzhalter <b>%username%</b> für den Nutzer*innennamenort. <br /><br />Häufig genutzte Formate sind <tt>%domain%%username%</tt> (MS Windows default), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> und einfach <tt>%username%</tt> (wenn kein Domainteil verwendet wird).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Format externer Nutzer*innennamen';
$string['auth_ntlmsso_type'] = 'Diese Methode ist beim Webserver eingestellt, um Nutzer*innen zu authentifizieren. Falls Sie sich nicht sicher sind, wählen Sie bitte NTLM.';
$string['diag_toooldversion'] = 'Es ist sehr unwahrscheinlich, dass ein moderner LDAP-Server das LDAPv2-Protokoll verwendet. Durch falsche Einstellungen können die Werte in Nutzer*innenfeldern beschädigt werden. Wenden Sie sich an Ihre*n LDAP-Administrator*in.';
$string['didntgetusersfromldap'] = 'Kein Nutzer*innenkonto über LDAP einlesbar! Fehler?';
$string['morethanoneuser'] = 'Mehr als ein Nutzer*innenkonto in LDAP gefunden! Es wird nur das erste dieser Nutzerkontos verwendet.';
$string['nouserentriestoremove'] = 'Keine Nutzer*innenkonten zum Entfernen gefunden';
$string['nouserentriestorevive'] = 'Keine Nutzer*innenkonten zum Reaktivieren gefunden';
$string['nouserstobeadded'] = 'Keine Nutzer*innenkonten zum Hinzufügen';
$string['synctask'] = 'Synchronisierung von LDAP-Nutzer*innenkonten';
$string['updateusernotfound'] = 'Nutzer*inneneintrag konnte bei der externen Aktualisierung nicht gefunden werden. <br />Details: search base: \'{$a->userdn}\'; search filter: \'(objectClass=*)\'; search attributes: {$a->attribs}';
$string['userentriestoadd'] = 'Nutzer*innenkonten zum Hinzufügen: {$a}';
$string['userentriestoremove'] = 'Nutzer*innenkonten zum Löschen: {$a}';
$string['userentriestorevive'] = 'Nutzer*innenkonten zur Reaktivierung: {$a}';
$string['userentriestoupdate'] = 'Nutzer*innenkonten zur Aktualisierung: {$a}';
$string['usernotfound'] = 'Nutzer*innenkonto in LDAP nicht gefunden';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() unterstützt nicht den ausgewählten Nutzer*innentyp: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() unterstützt nicht den ausgewählten Nutzer*innentyp: {$a}';
