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
 * @subpackage portfolio
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['commonsettingsdesc'] = '<p>Wenn ein Transfer bestätigt wird mit der Feststellung, dass es moderat oder evtl. hohen Zeitumfang benötigt, weiß man nicht, ob der*die Teilnehmer*in die Zeit hat darauf zu warten, bis er vollständig ist oder nicht. </p><p> Größen bis moderat werden ausgeführt, ohne den*die Nutzer*in zu fragen. Ist der Datentransfer größer kann dem*der Nutzer*in angeboten werden, ihn*sie zu informieren, dass es länger dauern kann. </p><p>Einige Plugintypen werden diesen Mechanismus ignorieren und den Datentransfer in die Warteliste einreihen. </p>';
$string['enableddesc'] = 'Wenn die Option aktiviert ist, dürfen Nutzer*innen Kursinhalte (z.B. Forumsbeiträge oder Aufgabenlösungen) in externe Portfolios oder HTML-Seiten exportieren.';
$string['insanebody'] = 'Guten Tag,<br /> Sie erhalten diese Nachricht als Administrator*in von {$a->sitename}. Einige Portfolio Plugin Instanzen wurden wegen fehlerhafter Konfiguration deaktiviert. Zur Zeit ist ein Export in diese Systeme durch Nutzer*innen nicht möglich. Folgende Portfolio Plugin Instanzen wurden deaktiviert:<br /> {$a->textlist} Prüfen und korrigieren Sie die Einstellungen alsbald. Zugriff unter {$a->fixurl}. Ihr E-Learning-Team';
$string['insanebodyhtml'] = '<p>Guten Tag,</p> <p>Sie erhalten diese Nachricht als Administrator*in von {$a->sitename}.</p> <p>Einige Portfolio Plugin Instanzen wurden wegen fehlerhafter Konfiguration deaktiviert. Zur Zeit ist ein Export in diese Systeme durch Nutzer*innen nicht möglich. </p> <p>Folgende Portfolio Plugin Instanzen wurden deaktiviert:<br /> {$a->htmllist} </p> <p>Prüfen und korrigieren Sie die Einstellungen möglichst bald über die <a href="{$a->fixurl}">Portfoliokonfiguration</a></p>. Ihr E-Learning-Team';
$string['insanebodysmall'] = 'Guten Tag, Sie erhalten diese Nachricht als Administrator*in von {$a->sitename}.<br /> Einige Portfolioplugin Instanzen wurden wegen fehlerhafter Konfiguration deaktiviert. Zur Zeit ist ein Export in diese Systeme durch Nutzer*innen nicht möglich. <br /> Prüfen und korrigieren Sie die Einstellungen möglichst bald über den Zugriff auf {$a->fixurl}. Ihr E-Learning-Team';
$string['invaliduserproperty'] = 'Dieses Konfigurationsmerkmal für Nutzer*innen konnte nicht gefunden werden ({$a->property} in {$a->class})';
$string['privacy:metadata:portfolio_log:time'] = 'Zeitpunkt des Transfers (bei einer Warteschlange ist dies der Zeitpunkt, zu dem der Transfer tatsächlich ausgeführt wurde, und nicht der Zeitpunkt, zu dem der*die Nutzer*in ihn startet)';
$string['privacy:metadata:portfolio_log:userid'] = 'ID des*der Nutzers*in, der*die Content exportierte';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Nutzer*in, der*die Export ausführt';
$string['privacy:metadata:userid'] = 'ID des*der Nutzers*in';
$string['unknownplugin'] = 'Unbekannt (u.U. von Administrator*in inzwischen entfernt)';
