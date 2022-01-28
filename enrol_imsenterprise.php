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
 * @subpackage imsenterprise
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowunenrol'] = 'IMS-Datei erlauben, Teilnehmer*innen bzw. Trainer*innen abzumelden';
$string['createnewcourses_desc'] = 'Funktion: Das IMS-Einschreibungsplugin kann neue Kurse anlegen wenn es diese in der IMS Datei, nicht aber in der Moodle-Datenbank findet. Jeder neue Kurs wird so angelegt, dass er für Teilnehmer\\*innen nicht verfügbar ist.';
$string['createnewusers'] = 'Erstelle neue Nutzer*innenzugänge, wenn Nutzer*innen noch nicht in Moodle registriert';
$string['createnewusers_desc'] = 'Die IMS Enterprise Einschreibungsdatei enthält in der Regel eine Liste von Teilnehmer\\*innen. Mit der Funktion kann für Personen, die noch nicht in Moodle registriert sind, ein Nutzer\\*innenkonto angelegt werden. Teilnehmer\\*innen werden zunächst aufgrund der ID-Nummer und dann nach dem Anmeldenamen in Moodle gesucht. Aus dem IMS Enterprise Plugin werden keine Kennwörter importiert. Hierfür wird die Nutzung eines Authentifizierungsplugin empfohlen.';
$string['deleteusers'] = 'Nutzer*innenzugänge löschen, falls so in IMS-Daten definiert';
$string['deleteusers_desc'] = 'Funktion: Mit den IMS-Enterprise-Einschreibungsdaten kann man auch Nutzer\\*innenaccounts löschen, indem der "recstatus" auf auf \'3\' gesetzt wird. In Moodle wird der Datensatz des\\*der Nutzers\\*in dann nicht gelöscht, sondern der Flag auf gelöscht gesetzt.';
$string['fixcaseusernames'] = 'Nutzer*innennamen in Kleinbuchstaben umwandeln';
$string['mailadmins'] = 'Administrator*innen per E-Mail benachrichtigen';
$string['mailusers'] = 'Nutzer*innen per E-Mail benachrichtigen';
$string['processphoto'] = 'Nutzer*innenfoto zu Profil hinzufügen';
$string['processphotowarning'] = 'Warnung: Die Bildverarbeitung stellt hohe Anforderungen an die Leistung des Servers. Es wird empfohlen, diese Funktion nicht zu nutzen, wenn eine große Zahl von Nutzer*innen auf diesem Wege ins System integriert werden soll.';
$string['sourcedidfallback_desc'] = 'Im IMS Datensatz wird im <sourceid>-Feld die dauerhafte persönliche ID-Bezeichnung des\\*der Nutzers\\*in aus dem Ursprungssystem hinterlegt. Das <userid>-Feld ist ein zusätzliches Feld und enthält einen ID-Code, mit dem der\\*die Nutzer\\*in sich einloggen kann. Manchmal – jedoch nicht immer – sind die Einträge identisch. Einige Nutzer\\*innenverwaltungssysteme haben Probleme beim Export des <userid>-Feldes. In solch einem Fall aktivieren Sie diese Einstellung, damit Moodle den Inhalt des Feldes <sourceid> als Moodle-Nutzer-ID verwendet. Ist das nicht der Fall, lassen Sie die Funktion deaktiviert.';
$string['updateusers'] = 'Nutzer*innen-Accounts aktualisieren, falls dies in IMS Daten festgelegt ist';
$string['updateusers_desc'] = 'Bei Aktivierung können IMS Enterprise Einschreibungs-Daten Veränderungen in Nutzer\\*innen Accounts festlegen (wenn die "recstatus"-Markierung durch \'2\' ein Update signalisiert).';
$string['usecapitafix_desc'] = 'Nur für Nutzer\\*innen des Teilnehmer\\*innenverwaltungssystems CAPITA: Der XML Output von Capita enthält einen Fehler. Bei Verwendung von Capita sollte diese Einstellung deaktiviert sein.';
$string['usersettings'] = 'Nutzer*innendateneinstellungen';
