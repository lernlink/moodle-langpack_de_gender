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
 * @package    tool
 * @subpackage uploaduser
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowsuspends'] = 'Nutzer*insperrung und -aktivierung erlauben';
$string['errormnetadd'] = 'Remote-Nutzer*innen können nicht hinzugefügt werden';
$string['examplecsv_help'] = 'Um die Beispiel-Textdatei zu verwenden, laden Sie sie herunter und öffnen Sie sie dann mit einem Text- oder Tabellenkalkulationsprogramm. Lassen Sie die erste Zeile unverändert, bearbeiten Sie dann die folgenden Zeilen (Datensätze) und fügen Sie Ihre Nutzendendaten hinzu, indem Sie bei Bedarf weitere Zeilen hinzufügen. Speichern Sie die Datei im CSV-Format und laden Sie sie hoch. Die Beispiel-Textdatei kann auch zum Testen verwendet werden, da Sie eine Vorschau der Nutzendendaten erhalten und die Aktion abbrechen können, bevor Nutzendenkonten erstellt werden.';
$string['invaliduserdata'] = 'Für den*die Nutzer*in {$a} wurden ungültige Daten entdeckt und automatisch bereinigt.';
$string['pluginname'] = 'Nutzer*inupload';
$string['privacy:metadata'] = 'Das Plugin \'Nutzer*in-Upload\' speichert keine personenbezogenen Daten.';
$string['uploadpictures'] = 'Nutzer*inbilder hochladen';
$string['uploadpictures_help'] = 'Nutzendenbilder können als ZIP-Paket mit mehreren Bilddateien hochgeladen werden. Moodle ordnet die enthaltenen Dateien den Nutzendenkonten als Portrait zu, wenn die Bilddateien geeignet benannt sind. Wenn Sie als Nutzendenattribut den Nutzendennamen gewählt haben, wird die Bilddatei nutzer1234.jpg für das Nutzendenkonto nutzer1234 verwendet. Zulässige Bilddateitypen sind gif, jpg und png.';
$string['uploadpicture_baduserfield'] = 'Die gewählte Nutzer*inmerkmal ist ungültig. Versuchen Sie es noch einmal.';
$string['uploadpicture_cannotsave'] = 'Das Nutzer*inbild für {$a} kann nicht gespeichert werden. Prüfen Sie die ursprüngliche Bilddatei.';
$string['uploadpicture_overwrite'] = 'Vorhandene Nutzer*inbilder überschreiben?';
$string['uploadpicture_userfield'] = 'Nutzer*inmerkmal für die Zuordnung der Nutzerbilder:';
$string['uploadpicture_usernotfound'] = 'Nutzer*in mit \'{$a->userfield}\'-Wert von \'{$a->uservalue}\' existiert nicht. Wird übersprungen.';
$string['uploadpicture_userskipped'] = 'Nutzer*inbild {$a} existiert bereits und wird nicht überschrieben.';
$string['uploadpicture_userupdated'] = 'Nutzer*inbild {$a} aktualisiert';
$string['uploaduser:uploaduserpictures'] = 'Nutzer*inbilder hochladen';
$string['uploadusers'] = 'Nutzer*innenliste hochladen';
$string['uploaduserspreview'] = 'Vorschau Nutzer*innen-Upload';
$string['uploadusersresult'] = 'Ergebnisse Nutzer*innen-Upload';
$string['uploadusers_help'] = 'Nutzer\\*innen können als Textdatei hochgeladen (und optional auch in Kurse eingeschrieben) werden. Das Format der Textdatei sollte folgendermaßen aussehen: \\* Jede Zeile enthält genau einen Datensatz \\* Jeder Datensatz besteht aus Datenfeldern, die durch Kommas (oder andere Trennzeichen) getrennt sind \\* Der erste Datensatz enthält eine Liste der benutzten Feldnamen und legt die Struktur der restlichen Zeilen fest \\* Notwendige Feldnamen sind username, password, firstname, lastname, email';
$string['useraccountupdated'] = 'Nutzer*in aktualisiert';
$string['useraccountuptodate'] = 'Nutzer*in aktuell';
$string['userdeleted'] = 'Nutzer*in gelöscht';
$string['userrenamed'] = 'Nutzer*in umbenannt';
$string['userscreated'] = 'Nutzer*innen angelegt';
$string['usersdeleted'] = 'Nutzer*innen gelöscht';
$string['usersrenamed'] = 'Nutzer*innen umbenannt';
$string['usersskipped'] = 'Nutzer*innen übersprungen';
$string['usersupdated'] = 'Nutzer*innen aktualisiert';
$string['usersweakpassword'] = 'Nutzer*innen mit schwachem Kennwort';
$string['userthemesnotallowed'] = 'Nutzer*indesigns sind nicht aktiviert, so dass alle in der Datei enthaltenen Designs ignoriert werden.';
$string['uubulkall'] = 'Alle Nutzer*innen';
$string['uubulknew'] = 'Neue Nutzer*innen';
$string['uubulkupdated'] = 'Aktualisierte Nutzer*innen';
$string['uuupdatetype'] = 'Vorhandene Nutzer*indetails';
