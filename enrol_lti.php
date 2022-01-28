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
 * @subpackage lti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enrolenddate_help'] = 'Diese Option legt fest, dass Nutzer\\*innen nur bis zu diesem Termin zugreifen können.';
$string['enrolstartdate_help'] = 'Diese Option legt fest, dass Nutzer\\*innen nur nach diesem Termin zugreifen können.';
$string['incorrecttoken'] = 'Das Token war falsch. Überprüfen Sie die URL und versuchen Sie es erneut oder kontaktieren Sie die Administrator*innen dieses Tools.';
$string['lti:unenrol'] = 'Nutzer*innen vom Kurs abmelden';
$string['maxenrolled'] = 'Maximal eingeschriebene Nutzer*innen';
$string['maxenrolledreached'] = 'Die Höchstzahl der zugelassenen Nutzer*innen, die vom externen System zugreifen dürfen, wurde erreicht.';
$string['maxenrolled_help'] = 'Legt die Höchstzahl der Nutzer\\*innen fest, die vom externen System zugreifen dürfen. Der Wert \'0\' bedeutet keine Begrenzung.';
$string['membersync'] = 'Nutzer*insynchronisation';
$string['membersyncmode'] = 'Nutzer*innensynchronisierungsmodus';
$string['membersyncmodeenrolandunenrol'] = 'Neue Nutzer*innen einschreiben und fehlende abmelden';
$string['membersyncmodeenrolnew'] = 'Neue Nutzer*innen einschreiben';
$string['membersyncmodeunenrolmissing'] = 'Fehlende Nutzer*innen abmelden';
$string['membersyncmode_help'] = 'Die Option legt fest, ob Remote-Nutzer\\*innen in diesem Kurs eingeschrieben und/oder abgemeldet werden sollen.';
$string['membersync_help'] = 'Diese Option legt fest, ob ein regelmäßiger Task externe Nutzer\\*innen aus einem anderen System mit den Einschreibungen dieses Kurses synchronisiert, wobei für externe Nutzer\\*innen ein Nutzer\\*inkonto angelegt und die Einschreibung bzw. Abmeldung vorgenommen wird. Bei \'Nein\' werden für externe Nutzer\\*innen in dem Moment des Zugriffs automatisch Nutzer\\*innenkonten angelegt und Einschreibungen vorgenommen, eine Abmeldung findet nicht statt.';
$string['pluginname_desc'] = 'Das Plugin für die Bereitstellung von Zugriffen durch externe Nutzer\\*innen ermöglicht Nutzern\\*innen anderer Systeme auf einen Kurs oder eine Aktivität zuzugreifen. Sie benötigen dazu lediglich einen Link. Das LTI Authentifizierungsplugin muss aktiv sein. Moodle arbeitet dabei als LTI Tool Provider.';
$string['privacy:metadata:enrol_lti_users'] = 'Liste der Nutzer*innen, die über den LTI-Provider eingeschrieben sind.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Zeitpunkt zu dem Nutzer*innen zuletzt den Kurs genutzt hat';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Letzte Bewertung, die für den*die Nutzer*in erstellt wurde';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID des*der Nutzers*in';
$string['roleinstructor'] = 'Rolle für Trainer*in';
$string['roleinstructor_help'] = 'Die Rolle, die in diesem Tool Trainer\\*innen zugewiesen wird, wenn sie von einem externen System zugreifen.';
$string['rolelearner'] = 'Rolle für Teilnehmer*in';
$string['rolelearner_help'] = 'Die Rolle, die in diesem Tool dem\\*der Schüler\\*in, der von einem externen System zugreift, zugewiesen ist.';
$string['tasksyncmembers'] = 'LTI-Tool Benutzer*innen synchronisieren';
$string['userdefaultvalues'] = 'Standardnutzer*inwerte';
