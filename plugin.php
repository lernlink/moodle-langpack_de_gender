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
 * @package    core
 * @subpackage plugin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['uninstallconfirm'] = 'Möchten Sie das Plugin \'{$a->name}\' wirklich löschen? Gleichzeitig werden alle mit dem Plugin verbundenen Daten aus der Datenbank gelöscht, die Konfiguration, alle Logdaten und Nutzer*innendaten. Diese Daten gehen verloren und können nicht wiederhergestellt werden.';
$string['uninstallextraconfirmenrol'] = 'Es gibt {$a->enrolments} Nutzer*inneneinschreibungen.';
$string['validationmsg_maturity_help'] = 'Das Plugin kann seinen Entwicklungsstand angeben. Wenn der\\*die Entwickler\\*in als Entwicklungsstand des Plugin als \'stabil\' definiert, wird MATURITY_STABLE angezeigt. Alle anderen Entwicklungsstände (wie alpha oder beta) werden als unstable bestätigt und ein Warnhinweis wird angezeigt.';
