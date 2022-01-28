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
 * @package    local
 * @subpackage profilecohort
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addintro'] = 'In diesem Tab können Sie eine neue Regel anlegen, mit der der Wert eines Profilfelds eines*einer Nutzers*Nutzerin auf eine globale Gruppe, die diesem*dieser Nutzer*Nutzerin zugewiesen wird, abgebildet wird.';
$string['cohortsintro'] = 'In diesem Tab wählen Sie die globalen Gruppen, welche mit diesem Plugin verwaltet werden.<br>Sobald eine globale Gruppe ausgewählt ist, werden Sie die Nutzer*innen, die der globalen Gruppe zugewiesen sind, nicht mehr manuell festlegen können. Außerdem werden alle Nutzer*innen, die derzeit der globalen Gruppe zugewiesen sind, aus der globalen Gruppe entfernt und die globale Gruppe danach von Grund auf mit den Nutzern*Nutzerinnen befüllt, auf die die mit diesem Plugin definierten Regeln zutreffen.<br>Wenn Sie sich später dazu entscheiden, eine globale Gruppe dann doch nicht mehr mit diesem Plugin zu verwalten und sie hier abwählen, werden alle Nutzer*innen, die der globalen Gruppe zu diesem Zeitpunkt zugewiesen sind, zugewiesen bleiben und die globale Gruppe kann wieder manuell verwaltet werden.';
$string['membersintro'] = 'In diesem Tab sehen Sie die Nutzer*innen, die derzeit den globalen Gruppen, welche mit diesem Plugin verwaltet werden, zugewiesen sind.';
$string['nousers'] = 'Diese globale Gruppe enthält, derzeit, noch keine Nutzer*innen.';
$string['privacy:metadata'] = 'Das Plugin \'Profilfeld-basierende Zuweisung globaler Gruppen\' bietet Moodle-Administrator*innen erweiterte Funktionalitäten an, speichert aber keine personenbezogenen Daten.';
$string['selectvalue'] = 'wird der*die Nutzer*in zugewiesen zur globalen Gruppe';
$string['viewintro'] = 'In diesem Tab definieren Sie die Regeln, mit der die Werte der Profilfelder eines*einer Nutzers*Nutzerin auf die globalen Gruppen, welchen er zugewiesen wird, abgebildet werden.<br>Die Regeln werden in der dargestellten Reihenfolge abgearbeitet, ein*e Nutzer*in wird jedoch allen globalen Gruppen mit zutreffenden Regeln zugewiesen.<br>Bitte beachten Sie: Sobald Sie eine Regel ändern und speichern wird ein Hintergrundprozess angestoßen, welcher alle betroffenen Nutzer*innen und ihre Zuweisung zu den globalen Gruppen aktualisiert - nach einer kurzen Zeit (ein paar Minuten, abhängig von der Cronjob-Konfiguration des Servers und der Konfiguration der geplanten Vorgänge in Moodle) sind alle Zuweisungen der globalen Gruppen aktualisiert. Nichtsdestotrotz wird jede*r Nutzer*in welcher sich in der Zeit, in der der Hintergrundprozess arbeitet, einloggt sofort zu den zutreffenden globalen Gruppen zugewiesen.';
