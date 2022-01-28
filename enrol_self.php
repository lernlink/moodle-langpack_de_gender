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
 * @subpackage self
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmbulkdeleteenrolment'] = 'Möchten Sie die Einschreibungen dieser Nutzer*innen wirklich löschen?';
$string['customwelcomemessage_help'] = 'Ein Begrüßungstext kann ein unformatierter Text sein oder im Moodle-Auto-Format auch HTML-Tags und Multi-lang-Tags enthalten. Sie können folgende Platzhalter im Text verwenden: \\* Kursname {$a->coursename} \\* Link zum Nutzer\\*inprofil {$a->profileurl} \\* Nutzer-E-Mail-Adresse {$a->email} \\* Vollständiger Nutzer\\*inname {$a->fullname}';
$string['defaultrole_desc'] = 'Wählen Sie eine Rolle aus, die Nutzer\\*innen bei der Selbsteinschreibung zugewiesen werden soll.';
$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer\\*innen sich bis zum angegebenen Zeitpunkt selbst einschreiben.';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer\\*innen sich ab diesem Zeitpunkt selbst in den Kurs einschreiben.';
$string['expiredaction_help'] = 'Legen Sie fest, was nach dem Ablauf der Einschreibung in einem Kurs passiert. Denken Sie daran, dass bei der Austragung von Nutzer\\*innen einige Daten nicht mehr verfügbar sind.';
$string['expirymessageenrollerbody'] = 'Guten Tag, im Kurs \'{$a->course}\' läuft für folgende Nutzer*in*nen innerhalb der nächsten {$a->threshold} die Einschreibung ab: {$a->users} Sie können auf der folgenden Seite die Teilnahmedauer indivduell verlängern oder entfristen (jeweils über das Zahnrad): {$a->extendurl} Ihr E-Learning-Team';
$string['expirynotifyall'] = 'Trainer*in und eingeschriebene Nutzer*innen';
$string['expirynotifyenroller'] = 'Nur Trainer*in';
$string['groupkey_help'] = 'Ergänzend zum Einschreibeschlüssel in den Kurs lassen sich zusätzliche Einschreibeschlüssel für Gruppen festlegen. Mit einem Einschreibeschlüssel für Gruppen können Nutzer\\*innen bei ihrer Kurseinschreibung automatisch einer Gruppe zugewiesen werden. Hinweis: Um Einschreibeschlüssel für Gruppen verwenden zu können, muss zusätzlich auch ein Einschreibeschlüssel für den Kurs vergeben sein, den aber niemand kennen muss.';
$string['maxenrolledreached'] = 'Die maximale Anzahl der erlaubten Nutzer*innen mit Selbsteinschreibung ist bereits erreicht.';
$string['maxenrolled_help'] = 'Diese Option legt die maximale Anzahl der erlaubten Nutzer\\*innen mit Selbsteinschreibung fest (0 = unbeschränkt).';
$string['newenrols_desc'] = 'Nutzer\\*innen dürfen sich selbst einschreiben.';
$string['newenrols_help'] = 'Diese Option legt fest, ob Nutzer\\*innen sich selber in diesen Kurs einschreiben dürfen.';
$string['password_help'] = 'Ein Einschreibeschlüssel erlaubt den Kurszugriff nur für diejenigen Nutzer\\*innen, die den Einschreibeschlüssel kennen. Wenn das Feld leer bleibt, können sich alle Nutzer\\*innen im Kurs einschreiben. Wenn ein Einschreibeschlüssel angegeben ist, müssen alle Nutzer\\*innen notwendigerweise bei der Kurseinschreibung den Einschreibeschlüssel eingeben. Beachten Sie, dass Nutzer\\*innen den Einschreibeschlüssel nur einmal bei der Kurseinschreibung eingeben müssen und danach dauerhaft eingeschriebene Kursteilnehmer\\*innen sind.';
$string['pluginname_desc'] = 'Das Plugin \'Selbsteinschreibung\' erlaubt es Nutzer\\*innen, selber einen Kurs zur Teilnahme auszuwählen. Kurse können mit einem Einschreibeschlüssel gesichert oder ohne Einschreibeschlüssel offen sein. Intern nutzt die Selbsteinschreibung das Plugin \'Manuelle Einschreibung\', welches deswegen im Kurs ebenfalls aktiviert sein muss.';
$string['self:manage'] = 'Eingeschriebene Nutzer*innen verwalten';
$string['self:unenrol'] = 'Nutzer*innen aus dem Kurs abmelden';
$string['sendcoursewelcomemessage_help'] = 'Wenn Nutzer\\*innen sich in den Kurs einschreiben, kann ihnen eine Begrüßungsnachricht gesendet werden. Wenn diese vom Kurskontakt geschickt wird (voreingestellt ist Trainer\\*in) und mehrere Personen diese Rolle haben, wird die E-Mail von der Person versendet, der diese Rolle zuerst zugewiesen wurde.';
$string['unenrol'] = 'Nutzer*in abmelden';
$string['unenrolusers'] = 'Nutzer*innen abmelden';
$string['welcometocoursetext'] = 'Willkommen im Kurs \'{$a->coursename}\'! Falls Sie es nicht bereits erledigt haben, sollten Sie Ihr persönliches Nutzer*inprofil bearbeiten. Auf diese Weise können wir alle mehr über Sie erfahren und besser zusammenarbeiten: {$a->profileurl}';
