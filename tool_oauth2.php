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
 * @subpackage oauth2
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['createnewuserfieldmapping'] = 'Neue Nutzer*infeldzuordnung für Service/Identitätsaussteller \'{$a}\' erstellen';
$string['deleteuserfieldmappingconfirm'] = 'Möchten Sie wirklich die Nutzer*infeldzuordnung für den Aussteller \'{$a}\' löschen?';
$string['discovered_help'] = 'Eine erfolgreiche Serviceerkennung bedeutet, dass die OAuth 2-Endpoints automatisch aus der Basis-URL für den OAuth 2-Service ermittelt werden konnten. Das funktioniert aber nicht bei allen Diensten automatisch, so dass die Endpoints und die Nutzer\\*infeldzuordnung in diesem Fall manuell eingegeben werden müssen.';
$string['edituserfieldmapping'] = 'Nutzer*infeldzuordnung für Service/Identitätsaussteller {$a} bearbeiten';
$string['edituserfieldmappings'] = 'Nutzer*infeldzuordnung konfigurieren';
$string['issuerloginparams_help'] = 'Einige Systeme brauchen zusätzliche Parameter für eine Anmeldeanforderung, um ein Nutze\\*inrgrundprofil zu lesen.';
$string['issuerloginscopes_help'] = 'Einige OAuth-Systeme erfordern zusätzliche Scopes (d. h. Berechtigungen) für eine Anmeldeanforderung, um das Nutze\\*inrgrundprofil zu lesen. Die Standard-Scopes für ein zu OpenID-Connect kompatibles System sind "openid profile email".';
$string['issuerrequireconfirmation_help'] = 'Diese Option legt fest, dass alle Nutzer\\*innen ihre E-Mail-Adresse bestätigen müssen, bevor sie sich mit OAuth anmelden können. Bei neu erstellten Nutzer\\*innenkonten ist dies dann ein Teil des Anmeldeprozesses. Bei bestehenden Nutzer\\*innenkonten werden übereinstimmende E-Mail-Adressen mit dem OAuth-Login verbunden.';
$string['issuershowonloginpage_help'] = 'Wenn dieses Plugin zur OAuth 2-Authentifizierung aktiviert ist, wird dieser Identitätsausteller auf der Anmeldeseite aufgelistet, damit Nutzer\\*innen sich mit Konten des Identitätsausstellers bei Moodle anmelden können.';
$string['userfieldexternalfield_help'] = 'Name des Nutzer\\*indatenfeldes, das vom externen OAuth 2-System bereit gestellt wird.';
$string['userfieldinternalfield_help'] = 'Name des Nutzer\\*indatenfeldes in Moodle, das mit dem externen Feld abgeglichen wird.';
$string['userfieldmappingdeleted'] = 'Nutzer*indatenfeldzuordnung gelöscht';
$string['userfieldmappingsforissuer'] = 'Nutzer*indatenfeldzuordnung für Service/Identitätsaussteller: {$a}';
