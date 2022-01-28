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
 * @subpackage db
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbdeleteuser'] = 'Gelöschtes Nutzer*innenkonto {$a->name} ID {$a->id}';
$string['auth_dbdeleteusererror'] = 'Fehler beim Löschen von Nutzer*in {$a}';
$string['auth_dbextrafields'] = '<p>Diese Felder sind optional. Sie können Nutzer*innenprofilfelder mit Informationen aus der <b>externen Datenbank</b> belegen, wobei Sie hierfür eine Zuordnung angeben müssen.</p> <p>Wenn Sie ein Feld leer lassen, wird der Standardwert eingetragen.</p> <p>Wenn ein Feld nicht gesperrt ist, dürfen die Nutzer*innen das Feld nach der Anmeldung selber ausfüllen, den Inhalt ändern oder auch löschen.</p>';
$string['auth_dbfielduser'] = 'Name des Feldes, das den Nutzer*innennamen enthält. Dieses Feld muss den Datentyp varchar haben.';
$string['auth_dbfielduser_key'] = 'Nutzer*innennamenfeld';
$string['auth_dbinsertuser'] = 'Eingefügte Nutzer*in {$a->name} ID {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Fehler beim Anlegen des*der Nutzers*in {$a->username}. Ein*e Nutzer*in mit diesem Nutzer*innennamen wurde bereits mit der Authentifizierung über \'{$a->auth}\' angelegt.';
$string['auth_dbinsertusererror'] = 'Fehler beim Einfügen von Nutzer*in {$a}';
$string['auth_dbnouserfield'] = 'Externes Nutzer*innen-Datenfeld ist nicht spezifiziert.';
$string['auth_dbpass'] = 'Kennwort, das zum Nutzer*innennamen gehört';
$string['auth_dbpasstype'] = '<p>Geben Sie das Format an, das im Kennwortfeld verwendet wird.</p> <p>Verwenden Sie \'intern\', wenn die externe Datenbank Nutzer*innennamen und E-Mail-Adressen verwalten soll, aber Moodle für die Kennwörter zuständig ist. In diesem Fall müssen Sie ein ausgefülltes E-Mail-Adressfeld in der externen Datenbank angeben und die geplante Task \\auth_db\\task\\sync_users aktivieren. Moodle sendet automatisch eine E-Mail mit einem temporären Kennwort an neue Nutzer*innen.</p>';
$string['auth_dbreviveduser'] = 'Entsperrte Nutzer*in {$a->name} ID {$a->id}';
$string['auth_dbrevivedusererror'] = 'Fehler beim Entsperren von Nutzer*in {$a}';
$string['auth_dbsuspenduser'] = 'Gesperrte Nutzer*in {$a->name} ID {$a->id}';
$string['auth_dbsuspendusererror'] = 'Fehler beim Sperren von Nutzer*in {$a}';
$string['auth_dbsyncuserstask'] = 'Nutzer*innensynchronisierung';
$string['auth_dbupdateusers'] = 'Nutzer*innen aktualisieren';
$string['auth_dbupdateusers_description'] = 'Neue Nutzer*innen hinzufügen, existierende Nutzer*innen aktualisieren';
$string['auth_dbupdatinguser'] = 'Aktualisierte Nutzer*in {$a->name} ID {$a->id}';
$string['auth_dbuser'] = 'Nutzer*innenname mit Schreibzugriff auf die Datenbank';
$string['auth_dbuserstoadd'] = 'Nutzer*inneneinträge zum Hinzufügen: {$a}';
$string['auth_dbuserstoremove'] = 'Nutzer*inneneinträge zum Entfernen: {$a}';
$string['auth_dbuser_key'] = 'Datenbanknutzer*in';
