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
 * @package    block
 * @subpackage configurable_reports
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anyone_summary'] = 'Jede*r Nutzer*in kann diesen Bericht aufzurufen';
$string['comp_calcs_help'] = '<p>Hier können Berechnungen für die Spalten hinzugefügt werden, z.B.: durchschnittliche Anzahl an Nutzern\\*Nutzerinnen die in Kursen eingeschrieben sind</p> <p>Weitere Hilfe: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations_help'] = '<p>Hier können Berechnungen für die Spalten hinzugefügt werden, z.B.: durchschnittliche Anzahl an Nutzern\\*Nutzerinnen die in Kursen eingeschrieben sind</p>';
$string['comp_conditions_help'] = '<p>Hier können Bedingungen definiert werden (z.B., nur Kurse einer Kategorie, nur Nutzer\\*innen aus Spanien, etc.. </p> <p>Es können logische Ausdrücke verwendet werden wenn es mehr als eine Bedingung gibt.</p> <p>Weiter Hilfe: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_filters_help'] = '<p>Hier kann ausgewählt werden welcher Filter dargestellt werden soll.</p> <p>Ein Filter gibt dem*der Nutzer\\*in die Möglichkeit eine Spalte zu wählen über die das Ergebnis des Berichts gefiltert wird.</p> <p>Weiter Informationen zur Verwendung von Filtern finden Sie auf: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p> <p>Weitere Informationen: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['currentuser'] = 'Derzeitige*r Nutzer*in';
$string['currentusercourses'] = 'Kurse in denen der*die momentane Nutzer*in eingeschrieben ist';
$string['currentusercourses_summary'] = 'Eine Liste der Kurse des*der momentanen Nutzers*Nutzerin (nur sichtbare Kurse)';
$string['currentuserfinalgrade'] = 'Die Endnote des*der momentanen Nutzers*Nutzerin im Kurs';
$string['currentuserfinalgrade_summary'] = 'Diese Spalte zeigt die Endnoten des*der momentanen Nutzers*Nutzerin in den Kursen';
$string['currentuser_summary'] = 'Der*die Nutzer*in der diesen Bericht betrachtet';
$string['cuserfield'] = 'Nutzer*in Feldbedingung';
$string['dbpassinfo'] = 'Remote-Datenbank-Passwort (für obigen Benutzer*innennamen)';
$string['dbuser'] = 'DB Benutzer*innennamen';
$string['dbuserinfo'] = 'Remote-Datenbank-Benutzer*innenname (sollte SELECT-Privilegien auf der obigen DB haben)';
$string['enrolledstudents'] = 'Eingeschriebene Studenten*Studentinnen';
$string['excludedeletedusers'] = 'Gelöschte Benutzer*innen ausschließen (nur für SQL-Berichte)';
$string['filterenrolledstudents'] = 'Eingeschriebene Kursteilnehmer*innen';
$string['filterenrolledstudents_summary'] = 'Einen*einer Benutzer*in (nach ID) aus den eingeschriebenen Kursteilnehmern*Kursteilnehmerinnen filtern';
$string['filterrole_summary'] = 'Systemrollen filtern (Dozent*in, Student*in, ...)';
$string['filteruser'] = 'Aktueller Kursteilnehmer*innen';
$string['filterusers'] = 'Systembenutzer*innen';
$string['filterusers_summary'] = 'Filtern eines*einer Benutzers*Benutzerin (nach ID) aus der Systembenutzerliste';
$string['filteruser_summary'] = 'Einen*einer Benutzer*in (id) aus den aktuellen Kursbenutzern*Kursbenutzerinnen filtern';
$string['fsearchuserfield'] = 'Nutzer*infeld-Suche';
$string['fuserfield'] = 'Nutzer*innen Feldfilter';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'Die ID des*der Benutzers*Benutzerin, der diesen Bericht erstellt hat';
$string['puserfield'] = 'Nutzer*innen Feld abhängig';
$string['puserfield_summary'] = 'Nutzer*in mit dem ausgewählten Wert im ausgewählten Feld';
$string['reportlimitinfo'] = 'Beschränken Sie die Anzahl der Zeilen, die in der Berichtstabelle angezeigt werden (Standard ist 5000 Zeilen. Es ist besser, ein gewisses Limit zu haben, damit die Benutzer*innen die DB-Engine nicht überlasten)';
$string['reportscapabilities_summary'] = 'Nutzer*in mit der Möglichkeit moodle/site:viewreports aktiviert';
$string['reporttableui'] = 'Berichtstabelle Benutzer*innenoberfläche';
$string['report_users'] = 'Nutzer*in-Bericht';
$string['roleincourse'] = 'Nutzer*in/nen mit der/n gewählten Rolle/n im Kurs';
$string['roleusersn'] = 'Anzahl der Nutzer*innen mit der Rolle...';
$string['student'] = 'Student*in';
$string['user'] = 'Kurs-Teilnehmer*innen (id)';
$string['usercompletion'] = 'Abschlussstatus des*der Benutzers*Benutzerin im Kurs';
$string['userfield'] = 'Nutzer*innenprofilfeld';
$string['userfieldorder'] = 'Nutzer*infeld Sortierung';
$string['usermodactions'] = 'Nutzer*inmodul Aktionen';
$string['usermodoutline'] = 'Nutzer*inmodul Übersichtsstatistiken';
$string['users'] = 'Systembenutzer*in (id)';
$string['usersincohorts'] = 'Benutzer*in/nen, die Mitglied einer/mehrerer globalen Gruppen sind';
$string['usersincohorts_summary'] = 'Nur die Benutzer*innen, die Mitglieder der ausgewählten globalen Gruppen sind';
$string['usersincoursereport'] = 'Jede*r Nutzer*in des Kurses';
$string['usersincoursereport_summary'] = 'Jede*r Nutzer*in des Kurses';
$string['usersincurrentcourse'] = 'Nutzer*innen des Kurses';
$string['usersincurrentcourse_summary'] = 'Nutzer*innen mit der ausgewählten Rolle im Kurs';
$string['userstats'] = 'Nutzer*innenstatistiken';
