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
 * @subpackage messageinbound
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalid_recipient_handler'] = 'Wenn eine Mitteilung empfangen wird, der Sender aber nicht identifiziert werden kann, verbleibt die Mitteilung auf dem E-Mail-Server. Der*die Nutzer*in wird anhand der E-Mail-Adresse im Nutzer*inprofil benachrichtigt. Er wird damit aufgefordert, die Authentizität der E-Mail zu bestätigen. Diese Funktion verarbeitet solche Antworten. Es ist nicht möglich, die Absender-Prüfung abzuschalten, da es möglich ist, dass der*die Nutzer*in mit einer falschen E-Mail-Absenderadresse antwortet, weil sein Mail-Client falsch eingerichtet ist.';
$string['messageinboundgeneralconfiguration_desc'] = 'Moodle kann eingehende E-Mail-Mitteilungen verarbeiten. So können Antworten auf Forumsbeiträge per E-Mail vorgenommen werden oder Dateien in die persönliche Dateiablage eines\\*einer Nutzers\\*in geschickt werden.';
$string['messageinboundhostuser'] = 'Nutzer*inname';
$string['messageinboundhostuser_desc'] = 'Diesen Nutzer\\*innamen haben Sie für den Login zu dem E-Mail-Postfach hinterlegt.';
$string['messageprocessingfailedunknown'] = 'Die E-Mail \'{$a->subject}\' konnte nicht verarbeitet werden. Für weitere Informationen wenden Sie sich an eine*n Administrator*in.';
$string['privacy:metadata:coreuserkey'] = 'Nutzer*innenschlüssel zur Prüfung der empfangenen E-Mail';
$string['privacy:metadata:messagelist:userid'] = 'ID des*der Nutzers*in, der Mitteilung bestätigen muss';
$string['validateaddress_help'] = 'Wenn eine Mitteilung von einem\\*r Nutzer\\*in empfangen wird, versucht Moodle die Nachricht anhand der E-Mail-Adresse im Profil diesem\\*r Nutzer\\*in zuzuordnen. Wenn der Absender nicht passend ist, erhält der\\*die Nutzer\\*in eine Nachricht, um zu prüfen, ob die Nachricht tatsächlich von ihm versandt wurde. Wenn die Einstellung deaktiviert ist, wird die E-Mail-Adresse des Absenders nicht geprüft.';
