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
 * @package    enrol
 * @subpackage ldap
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Rolle \'{$a->role_shortname}\' an Nutzer*in \'{$a->user_username}\' im Kurs \'{$a->course_shortname}\' (ID {$a->course_id}) zuweisen';
$string['assignrolefailed'] = 'Fehler beim Zuweisen der Rolle \'{$a->role_shortname}\' an Nutzer*in \'{$a->user_username}\' im Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['bind_dn'] = 'Wenn Sie einen sog. bind-user für die LDAP-Suche nach Nutzer*innen verwenden wollen, geben Sie diesen hier an, z.B. \'cn=ldapuser,ou=public,o=org\\';
$string['couldnotfinduser'] = 'Nutzer*in \'{$a}\' konnte nicht gefunden werden, überspringen';
$string['createcourseextid'] = 'CREATE Nutzer*in ist in einen nicht bestehenden Kurs \'{$a->courseextid}\' eingeschrieben';
$string['createnotcourseextid'] = 'Nutzer*in in einen nicht bestehenden Kurs \'{$a->courseextid}\' eingeschrieben';
$string['enroluserenable'] = 'Aktivierte Einschreibung von Nutzer*in \'{$a->user_username}\' in den Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() unterstützt nicht den ausgewählten Nutzer*innentyp: {$a}';
$string['extremovedsuspend'] = 'Deaktivierte Einschreibung von Nutzer*in \'{$a->user_username}\' in den Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Deaktivierte Einschreibung und entfernte Rollen von Nutzer*in \'{$a->user_username}\' in den Kurs \'{$a->course_shortname}\' (ID {$a->course_id})';
$string['extremovedunenrol'] = 'Nutzer*in \'{$a->user_username}\' vom Kurs \'{$a->course_shortname}\' (id {$a->course_id}) abmelden';
$string['group_memberofattribute'] = 'Name des Attribut, das die Zugehörigkeit eine*s Nutzers*in zu einer Gruppe festlegt (z.B. memberOf, groupMembership, etc).';
$string['pluginname_desc'] = '<p>Sie können einen LDAP-Server nutzen, um die Kurseinschreibung von Teilnehmer\\*innen zu verwalten. Dafür muss der LDAP-Baum Gruppen und Mitgliedschaften enthalten, die auf Kurse und Kursrollen übertragen werden.</p> <p>Es wird vorausgesetzt, dass Kurse als Gruppen in LDAP definiert sind und jede Gruppe mehrere Mitgliedsfelder hat (<em>member</em> oder <em>memberUid</em>), die eine eindeutige Identifizierung des\\*der Nutzer\\*in ermöglichen.</p> <p>Um LDAP als Kurs-Anmeldeverfahren zu verwenden, <strong>muss</strong> jede\\*r Nutzer\\*in eine gültige ID-Nummer besitzen. Die LDAP-Gruppen müssen diese ID-Nummer in den Mitgliedsfeldern aufweisen, um den\\*die Nutzer\\*in als Teilnehmer\\*in in den Kurs einzuschreiben. Dies funktioniert normalerweise sehr gut, wenn Sie LDAP auch zur Nutzer\\*innenauthentifizierung nutzen.</p> <p>Kursanmeldungen werden aktualisiert, wenn der\\*die Nutzer\\*in sich in Moodle einloggt. Sie können auch ein Skript nutzen, um Kursanmeldungen zu synchronisieren. Moodle liefert ein solches Skript: <em>enrol/ldap/enrol_ldap_sync.php</em>.</p> <p>Sie können das LDAP-Anmeldeverfahren auch so konfigurieren, dass automatisch neue Kurse angelegt werden, wenn neue Gruppen in LDAP eingerichtet werden.</p>';
$string['unassignrole'] = 'Rollenzuordnung \'{$a->role_shortname}\' für Nutzer*in \'{$a->user_username}\' im Kurs \'{$a->course_shortname}\' (id {$a->course_id}) aufheben';
$string['unassignrolefailed'] = 'Rollenaufhebung \'{$a->role_shortname}\' für Nutzer*in \'{$a->user_username}\' im Kurs \'{$a->course_shortname}\' (id {$a->course_id}) gescheitert';
$string['unassignroleid'] = 'Rolle \'{$a->role_id}\' für Nutzer*in id \'{$a->user_id}\' aufheben';
$string['user_attribute'] = 'Wenn die Gruppenmitgliedschaft eindeutige Namen enthält, geben Sie das Attribut an, das zum Benennen / Suchen nach Benutzern*innen verwendet wird. Wenn Sie die LDAP-Authentifizierung verwenden, sollte dieser Wert mit dem Attribut übereinstimmen, das in der Zuordnung "ID-Nummer" im LDAP-Authentifizierungs-Plugin angegeben ist.';
$string['user_contexts'] = 'Wenn die Gruppenzugehörigkeit bevorzugte Namen enthält, legen Sie die Kontexte fest, wo Nutzer*innen gefunden werden sollen. Trennen Sie unterschiedliche Kontexte mit einem Semikolon \';\' wie z.B. \'ou=users,o=org; ou=others,o=org\'.';
$string['user_search_sub'] = 'Wenn die Gruppenzugehörigkeit bevorzugte Namen enthält, legen Sie die Nutzer*innensuche in Subkontexten gesondert fest.';
$string['user_settings'] = 'Nutzer*insuche (user lookup)';
$string['user_type'] = 'Wenn die Gruppenzugehörigkeit bevorzugte Namen enthält, legen Sie fest, wie Nutzer*innen in LDAP gespeichert werden.';
$string['user_type_key'] = 'Nutzer*intyp';
