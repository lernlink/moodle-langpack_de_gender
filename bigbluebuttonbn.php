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
 * @subpackage bigbluebuttonbn
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionattendance'] = 'Teilnehmer*innen müssen am Meeting teilnehmen für:';
$string['completionattendancedesc'] = 'Teilnehmer*innen müssen am Meeting teilnehmen und mindestens {$a} Minute(n) bleiben.';
$string['completionengagementdesc'] = 'Teilnehmer*innen müssen während des Meetings an Aktivitäten teilnehmen';
$string['config_hideuserlist_default'] = '"Teilnehmer*innenliste verbergen" standardmäßig aktiviert';
$string['config_hideuserlist_default_description'] = 'Diese Option "Teilnehmer*innenliste verbergen" ist standardmäßig aktiviert.';
$string['config_hideuserlist_editable'] = '"Teilnehmer*innenliste verbergen" bearbeitbar';
$string['config_hideuserlist_editable_description'] = 'Die Option "Teilnehmer*innenliste verbergen" kann bearbeitet werden, wenn die Instanz angelegt oder aktualisiert wird.';
$string['config_locksettings_description'] = 'Diese Einstellungen aktivieren oder deaktivieren verschiedene Sperroptionen in der Nutzer*innenoberfläche. Außerdem werden standardmäßige Werte für diese Sperroptionen festgelegt.';
$string['config_muteonstart_description'] = 'Diese Einstellungen aktivieren bzw. deaktivieren Optionen in der Nutzer*innenoberfläche. Außerdem definieren sie Standardwerte für einige Optionen.';
$string['config_participant'] = 'Teilnehmer*inneneinstellung';
$string['config_participant_description'] = 'Diese Einstellungen definieren die voreingestellte Rolle von Teilnehmer*innen im Meeting.';
$string['config_participant_moderator_default'] = 'Standardmäßige Moderator*innen';
$string['config_recordings_validate_url_description'] = 'Diese Option legt fest, dass die Wiedergabe-URL geprüft wird, bevor Nutzer*innen darauf zugreifen können.';
$string['config_sendnotifications_description'] = 'Diese Einstellungen aktivieren bzw. deaktivieren Optionen in der Nutzer*innenoberfläche. Außerdem definieren sie Standardwerte für einige Optionen.';
$string['config_userlimit'] = 'Einstellungen für das "Nutzer*in-Limit"';
$string['config_userlimit_default'] = 'Nutzer*in-Limit standardmäßig';
$string['config_userlimit_default_description'] = 'Die Option legt die Anzahl der Nutzer*innen fest, die standardmäßig in einem Meeting zugelassen werden, wenn ein neuer Raum bzw. eine neue Konferenz angelegt wird. Falls die Nummer auf 0 gesetzt ist, wird kein Limit festgelegt.';
$string['config_userlimit_description'] = 'Diese Einstellungen aktivieren bzw. deaktivieren Optionen in der Nutzer*inoberfläche. Außerdem definieren sie Standardwerte für einige Optionen.';
$string['config_userlimit_editable'] = 'Nutzer*in-Limit bearbeitbar';
$string['config_userlimit_editable_description'] = 'Die maximale Anzahl von Nutzer*innen im Meeting kann geändert werden, wenn der Raum oder die Konferenz angelegt oder aktualisiert wird.';
$string['config_voicebridge_description'] = 'Diese Einstellungen aktivieren bzw. deaktivieren Optionen in der Nutzer*inoberfläche. Außerdem definieren sie Standardwerte für einige Optionen.';
$string['config_waitformoderator'] = 'Einstellungen für "Warten auf Moderator*in"';
$string['config_waitformoderator_default'] = '"Warten auf Moderator*in" ist standardmäßig aktiviert';
$string['config_waitformoderator_default_description'] = '"Warten auf Moderator*in" ist standardmäßig aktiviert, wenn ein neuer Raum oder eine Konferenz hinzugefügt wird.';
$string['config_waitformoderator_editable'] = '"Warten auf Moderator*in" bearbeitbar';
$string['config_waitformoderator_editable_description'] = 'Die Option "Warten auf Moderator*in" kann bearbeitet werden, wenn der Raum bzw. die Konferenz angelegt oder aktualisiert wird.';
$string['config_waitformoderator_ping_interval'] = '"Warten auf Moderator*in"-Ping (Sekunden)';
$string['config_waitformoderator_ping_interval_description'] = 'Wenn die Funktion "Warten auf Moderator*in" aktiviert ist, pingt der Client alle [number] Sekunden nach dem Status der Sitzung. Dieser Parameter definiert das Intervall für Anfragen an den Moodle-Server';
$string['general_error_not_allowed_to_create_instances'] = 'Nutzer*in darf keine Art von Instanzen erstellen.';
$string['index_heading_moderator'] = 'Moderator*innen';
$string['index_heading_users'] = 'Nutzer*innen';
$string['index_heading_viewer'] = 'Zuschauer*innen';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die der*die Schüler*in in einer BigBlueButton-Aktivität erreicht hat.';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die der*die Student*in in einer BigBlueButton-Aktivität erreicht hat.';
$string['mod_form_field_hideuserlist'] = 'Teilnehmer*innenliste verbergen';
$string['mod_form_field_notification_created_help'] = 'Versenden Sie eine Nachricht, um alle eingeschriebenen Nutzer*innen zu informieren, dass diese Aktivität angelegt wurde.';
$string['mod_form_field_notification_help'] = 'Versenden Sie eine Nachricht, um alle eingeschriebenen Nutzer*innen zu informieren, dass diese Aktivität angelegt oder bearbeitet wurde.';
$string['mod_form_field_notification_modified_help'] = 'Versenden Sie eine Nachricht, um alle eingeschriebenen Nutzer*innen zu informieren, dass diese Aktivität bearbeitet wurde.';
$string['mod_form_field_participant_add'] = 'Teilnehmer*in hinzufügen';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Moderator*in';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Zuschauer*in';
$string['mod_form_field_participant_list'] = 'Teilnehmer*innenliste';
$string['mod_form_field_participant_list_type_all'] = 'Alle eingeschriebenen Teilnehmer*innen';
$string['mod_form_field_participant_list_type_owner'] = 'Eigentümer*in';
$string['mod_form_field_participant_list_type_user'] = 'Nutzer*in';
$string['mod_form_field_userlimit'] = 'Nutzer*in-Limit';
$string['mod_form_field_userlimit_help'] = 'Maximale Teilnehmer*innenzahl in einem Meeting. Wenn die Option auf 0 gesetzt wird, ist die Teilnehmer*innenzahl nicht begrenzt.';
$string['mod_form_field_voicebridge_help'] = 'Telefonkonferenznummer, die Nutzer*innen eingeben, um über Telefon an der Konferenz teilnehmen. Eine Nummer zwischen 1 und 9999 muss eingegeben werden. Wenn der Wert 0 eingegeben wird, wird die eine statische Voice Bridge-Nummer ignoriert und eine zufällige Rufnummer zugewiesen. Die Ziffer 7 wird der Nummer vorangestellt.';
$string['mod_form_field_wait'] = 'Warten auf Moderator*in';
$string['mod_form_field_wait_help'] = 'Zuschauer*innen müssen warten, bis ein/e Moderator*in dem Meeting beitritt, bevor sie dies tun können.';
$string['privacy:metadata:bigbluebutton'] = 'Um Sessions mit BigBlueButton anzulegen und daran teilzunehmen, müssen Nutzer*innendaten mit dem Server ausgetauscht werden.';
$string['privacy:metadata:bigbluebutton:userid'] = 'Nutzer-ID der Person, die auf dem BigBlueButton-Server zugegriffen hat.';
$string['privacy:metadata:bigbluebuttonbn:participants'] = 'Eine Liste von Regeln, die die Rolle definieren, die Personen im Live-Meeting übernehmen werden. Eine Nutzer-ID könnte gespeichert werden, da Berechtigungen pro Rolle oder pro Nutzer*in zugewiesen werden.';
$string['view_error_no_group_student'] = 'Sie sind in keiner Gruppe eingetragen. Wenden Sie sich an Ihre*n Trainer*in oder an den*die Administrator*in.';
$string['view_error_no_group_teacher'] = 'Keine Gruppen verfügbar. Legen Sie Gruppen an oder wenden Sie sich an den*die Administrator*in.';
$string['view_error_unable_join_student'] = 'Die Verbindung zum BigBlueButton-Server ist nicht möglich. Wenden Sie sich an Ihre*n Trainer*in oder an den*die Administrator*in.';
$string['view_error_unable_join_teacher'] = 'Die Verbindung zum BigBlueButton-Server ist nicht möglich. Wenden Sie sich an den*die Administrator*in.';
$string['view_error_userlimit_reached'] = 'Die maximale Teilnehmer*innenzahl für dieses Meeting ist erreicht.';
$string['view_login_moderator'] = 'Als Moderator*in anmelden...';
$string['view_login_viewer'] = 'Als Zuschauer*in anmelden...';
$string['view_message_conference_wait_for_moderator'] = 'Sie können teilnehmen, wenn ein*e Moderator*in eingetroffen ist.';
$string['view_message_moderator'] = 'Moderator*in';
$string['view_message_moderators'] = 'Moderator*innen';
$string['view_message_user'] = 'Nutzer*in';
$string['view_message_users'] = 'Nutzer*innen';
$string['view_message_viewer'] = 'Zuschauer*in';
$string['view_message_viewers'] = 'Zuschauer*innen';
