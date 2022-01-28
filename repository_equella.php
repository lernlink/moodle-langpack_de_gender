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
 * @package    repository
 * @subpackage equella
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['privacy:metadata'] = 'Das Equella-Repository-Plugin speichert keine personenbezogenen Daten. Es überträgt aber Nutzer*innendaten von Moodle an das entfernte System.';
$string['selectrestriction.desc'] = 'Diese Option legt fest, ob Trainer*innen die Zusammenfassung, eine verbundene Ressource oder beides auswählen können.';
$string['sharedsecretshelp'] = '<p>Unten können Sie einen geschützten Standardwert für Nutzer*innen von Equella mit Single Sign-On hinterlegen. Es können separate Einträge mit reinem Lesezugriff und mit Schreibzugriff, der rollenbasiert vergeben wird, hinterlegt werden. Fehlt der zweite Eintrag, wird der Standardwert verwandt.</p><p>Die Shared Secret IDs und Kennwörter (shraed secrets) müssen ebenfalls in Equella direkt hinterlegt werden. Sie finden diese Option in Equella in der Administrationskonsole unter User Management > Shared Secrets.</p>';
