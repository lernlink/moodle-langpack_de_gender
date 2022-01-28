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
 * @subpackage question
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['howquestionsbehave_help'] = 'Fragen des Tests können beim Beantworten unterschiedliche Reaktionsweisen zeigen. Häufig müssen Teilnehmer\\*innen erst den gesamten Test bearbeiten, bevor die Bewertung erfolgt und ein Feedback angezeigt wird. Das wäre die \'Spätere Auswertung\'. Alternativ könnte nach der Beantwortung jeder einzelnen Frage eine sofortige Rückmeldung gegeben werden. Bei falscher Beantwortung der Frage könnten sie eine neue Antwort abgeben. Bei der dann richtigen Antwort könnte ein Punktabzug vom Höchstwert erfolgen (Mehrfachbeantwortung (mit Abzügen)). Dies sind die am häufigsten genutzten Frageverhalten.';
$string['penaltyforeachincorrecttry_help'] = 'Sofern der Test im Modus \'Mehrfachbeantwortung (mit Hinweisen)\' oder im Modus \'Mehrfachbeantwortung (mit Abzügen)\' durchgeführt wird, bei dem die Teilnehmer\\*innen mehrere Versuche zur Beantwortung haben, steuert diese Option die Abzüge für jeden falschen Versuch. Der Abzug ist ein Anteil der erreichbaren Punktzahl. Wenn die Frage z.B. drei Punkte wert ist und der Abzug 0,3333333 beträgt, würde eine richtige Antwort im ersten Versuch mit 3 Punkten gewertet, im zweiten Versuch mit 2 Punkten und im dritten Versuch nur noch mit einem Punkt. Bei einigen mehrteiligen Fragen wird diese Bewertungslogik separat auf jeden Teil der Frage angewendet. Die Details hängen von der Art der Frage ab und können kompliziert sein, aber das Prinzip besteht darin, den Teilnehmer\\*innen ihr Wissen so fair wie möglich anzuerkennen.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Kennzeichen, dass der*die Nutzer*in beim Frageversuch Frage markiert hat';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Nutzer*in, der*die Schrittverarbeitung ausgeführt hat';
$string['specificfeedback_help'] = 'Spezifisches Feedback, das von der Teilnehmer\\*innenantwort abhängt';
$string['technicalinfo_help'] = 'Diese technische Information wendet sich ausschließlich an Entwickler\\*innen von neuen Fragetypen. Sie kann auch für die Diagnose von Problemen mit Fragen verwendet werden.';
