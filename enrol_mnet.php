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
 * @subpackage mnet
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['instancename_help'] = 'Sie haben die Möglichkeit, diese Instanz der MNet Einschreibemethode umzubenennen. Wenn das Feld leer bleibt, wird der Standardwert genutzt. Dieser enthält den Namen des externen Hosts und die dort zugewiesenen Rollenbezeichnungen für Nutzer\\*innen.';
$string['mnet_enrol_description'] = 'Veröffentlichen Sie diesen Dienst, um Administrator*innen von {$a} zu erlauben, deren Teilnehmer*innen in Kursen anzumelden, die Sie auf Ihrem Server erstellt haben.<br/> <ul><li><em>Voraussetzung</em>: Sie müssen den SSO-Dienst (Service Provider) für {$a} <strong> veröffentlichen </strong>.</li> <li><em>Voraussetzung</em>: Sie müssen auch den SSO-Dienst (Identity Provider) von {$a} <strong>abonnieren</strong>. </li></ul><br/> Abonnieren Sie diesen Dienst, um die Teilnehmer*innen Ihres Moodles in Kursen auf {$a} anmelden zu können.<br/> <ul><li><em>Voraussetzung</em>: Sie müssen den SSO-Dienst (Service Provider) von {$a} <strong>abonnieren</strong>. </li> <li><em>Voraussetzung</em>: Sie müssen den SSO-Dienst (Identity Provider) für {$a} <strong> veröffentlichen</strong>.</li></ul><br/>';
$string['pluginname_desc'] = 'Ermöglicht externen MNet Hosts ihre Nutzer\\*innen auf diesem System in Kurse einzuschreiben.';
$string['remotesubscriber_help'] = 'Mit der Funktion \'Alle Hosts\' wird dieser Kurs für alle MNet Peers, denen die externe Einschreibung erlaubt ist, geöffnet. Wählen Sie statt dessennureinen bestimmten Host aus, haben nur dessen Nutzer\\*innen Zugriff auf den Kurs.';
$string['roleforremoteusers_help'] = 'Welche Rolle der\\*die Remotenutzer\\*in aus dem gewählten Host erhält.';
