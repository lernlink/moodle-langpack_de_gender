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
 * @subpackage boostnavigation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['inc_customwhoadmins'] = 'Administrator*innen';
$string['inc_customwhousers'] = 'alle Nutzer*innen';
$string['setting_collapsenodessessionexplanation'] = 'Nach dem nächsten Logout und Login eines*einer Nutzers*Nutzerin wird der Status wieder auf den Standardwert, welcher weiter oben definiert ist, gesetzt. Wenn die Einstellung deaktiviert ist, wird der Status sitzungsübergreifend gespeichert.';
$string['setting_collapsenodestechnicalhint'] = 'Technischer Hintergrund: Diese Funktionalität wird erreicht, indem etwas JavaScript und CSS zur Seite hinzugefügt wird, welche die Knoten zweiter Ebene anzeigt oder verbirgt, sobald der*die Nutzer*in auf den Knoten klickt. Der Zuammenklapp-Status des Knoten wird in der Session jedes*jeder Nutzers*Nutzerin verarbeitet und in einer persönlichen Nutzer*ineinstellung gespeichert. Die Knoten werden also nur in der Navigation verborgen, sie verbleiben aber im internen Navigationsbaum und können weiterhin von anderen Teilen von Moodle genutzt werden.';
$string['setting_customnodesusageadminsparameternote'] = 'Eigene Knoten für Administratoren*Administratorinnen werden von der selben Funktion verarbeitet wie eigene Knoten für alle Nutzer*innen. Daher stehen für eigene Knoten für Administratoren*Administratorinnen neben den oben angegebenen Parametern prinzipiell dieselben Parameter wie für eigene Knoten für alle Nutzer*innen zur Verfügung. Sie können diese problemlos einsetzen falls Sie sie für einen speziellen Bedarf benötigen, auch wenn sie hier aus Gründen der Vereinfachung nicht noch einmal dokumentiert werden.';
$string['setting_customnodesusagechildnodes'] = 'Eigene Knoten können mit einer Hierarchieebene verschachtelt werden. Dies bedeutet, dass ein benutzerdefinierter Knoten Kindknoten haben kann. Um einen Knoten als einen Kindknoten zu deklarieren, stellen Sie diesem einfach einen Bindestrich voran.';
$string['setting_customnodesusageparametercohortdd'] = 'Der Knoten wird nur Mitgliedern der hier angegebenen globalen Gruppen angezeigt. Nutzen Sie die Gruppen-ID, nicht den Namen. Mehrere globale Gruppen werden über Komma separiert. Um den Knoten allen Nutzer*innen unabhängig von globalen Gruppen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparameterlanguagedd'] = 'Der Knoten wird nur Nutzer*innen angezeigt, die die entsprechende Sprache eingestellt haben. Mehrere unterstütze Sprachen werden über Komma separiert. Um den Knoten in allen Sprachen anzuzeigen, lassen Sie dieses Feld leer.';
$string['setting_customnodesusageparameterlogicaldd'] = 'Dieser Parameter kann dazu verwendet werden um die logische Verknüpfung der Parameter für globale Gruppen, Rollen und globale Rollen abzuändern. Wenn Sie diesen Parameter auf AND setzen oder ihn weglassen werden die Parameter für globale Gruppen, Rollen und globale Rollen mit AND logisch verknüpft und der Knoten wird nur sichtbar sein wenn ALLE Parameter zutreffen. Wenn Sie diesen Parameter auf OR setzen oder ihn weglassen werden die Parameter für globale Gruppen, Rollen und globale Rollen mit OR logisch verknüpft und der Knoten wird nur sichtbar sein wenn mindestens EINER der Parameter zutrifft. Dies gibt Ihnen die Flexibilität um einen Knoten zu erstellen, der beispielsweise Nutzern*Nutzerinnen mit einer bestimmten Kursrolle als auch Nutzern*Nutzerinnen mit einer bestimmten globalen Rolle angezeigt wird wie in unserem Beispiel oben angegeben.';
$string['setting_customnodesusageparameterroledd'] = 'Der Knoten wird nur Nutzer*innen mit bestimmten Rollen angezeigt. Nutzen Sie jeweils den Kurznamen der Rollen. Mehrere Rollen werden über Komma separiert. Um den Knoten allen Nutzer*innen unabhängig von Rollen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusageparametersystemroledd'] = 'Der Knoten wird nur Nutzer*innen mit bestimmten globalen Rollen angezeigt. Nutzen Sie jeweils den Kurznamen der globalen Rollen. Der Kurzname \'admin\' identifiziert die Administratoren*Administratorinnen. Mehrere Rollen werden über Komma separiert. Um den Knoten allen Nutzer*innen unabhängig von globalen Rollen anzuzeigen, lassen Sie dieses Feld einfach leer.';
$string['setting_customnodesusagepleasenotecheck'] = 'Falls der hinzugefügte Knoten nicht in der Navigation erscheint, prüfen Sie bitte, ob Sie alle Pflichtparameter korrekt eingestellt sind, ob der Knoten in der eingestellten Nutzer*innensprache überhaupt angezeigt werden kann und ob die anderen optionalen Parameter für die Nutzer*innen zutreffen.';
$string['setting_customnodesusagepleasenotemultilang'] = 'Der Link-Titel Parameter kann <a href="https://docs.moodle.org/en/Multi-language_content_filter">mehrsprachige Texte</a> enthalten, mit denen Knoten erzeugt werden können, deren Titel sich abhängig von der Sprache des*der Nutzers*Nutzerin anpasst.';
$string['setting_customnodesusagepleasenotephuserfullnamedd'] = 'Der Name des*der angemeldeten Nutzers*Nutzerin';
$string['setting_customnodesusagepleasenotephuseriddd'] = 'Die (interne) ID des*der angemeldeten Nutzers*Nutzerin';
$string['setting_customnodesusagepleasenotephuserusernamedd'] = 'Der Anmeldename des*der angemeldeten Nutzers*Nutzerin';
$string['setting_customnodesusageusersexample'] = 'Moodle|http://www.moodle.org|en,de<br /> Unsere Universität|http://www.our-university.edu<br /> Mathematische Fakultät|http://www.our-university.edu/math||math<br /> Handbuch für Trainer*innen|http://www.our-university.edu/teacher-handbook|||editingteacher,teacher<br /> Informationen für Studenten*Studentinnen|/course/view.php?id=1234||||||fa-graduation-cap<br /> {editingtoggle}|/course/view.php?id={courseid}&sesskey={sesskey}&edit={editingtoggle}|||editingteacher|admin,manager|OR|fa-pencil|editing|participants';
$string['setting_modifymycoursesrootnodefilterhint_desc'] = 'Durch Aktivieren dieser Einstellung wird am Ende der "Meine Kurse"-Liste in der Hauptnavigation ein weiterer Knoten angehängt, der dem\\*der Nutzer\\*in anzeigt wieso die Liste die Einträge hat die sie aktuell eben hat (d.h. welcher aktive Filter zur gegebenen Kursliste geführt hat).';
$string['setting_modifymycoursesrootnodefilterlink_desc'] = 'Durch Aktivieren dieser Einstellung wird am Ende der "Meine Kurse"-Liste in der Hauptnavigation ein weiterer Knoten angehängt, der dem\\*der Nutzer\\*in hilft den aktiven Filter zu ändern (das heißt der Link zeigt direkt auf das Dashboard).<br /><em>Diese Einstellung ist verknüpft mit der Einstellung "Knoten mit Hinweis über aktive Filter anzeigen". Falls Sie beide Einstellungen aktivieren, dann wird ein kombinierter Knoten angezeigt anstatt zweier Knoten.</em>';
$string['setting_modifymycoursesrootnodeshowfiltered_desc'] = 'Durch Aktivieren dieser Einstellung passen Sie die "Meine Kurse"-Liste in der Hauptnavigation dahingehend an dass nur die Kurse gelistet werden, die aktuell im "Kursübersicht" Block gemäß des jeweils gewählten Filter eines\\*einer Nutzers\\*Nutzerin dargestellt werden. Durch Deaktivieren dieser Einstellung wird die "Meine Kurse"-Liste in der Hauptnavigation die Kurs anzeigen, die als "Laufend" eingestuft werden, was Moodle\'s Standardverhalten entspricht.';
$string['setting_movecontentbanknodeincoursecontextbefore_desc'] = 'Mit dieser Einstellung definieren Sie vor welchen {$a->coursenode} der {$a->rootnode} "{$a->contentbank}" verschoben werden wird. Bitte beachten Sie dabei dass es an Ihnen liegt sicherzustellen dass der konfigurierte {$a->coursenode} auch derselben Menge von Nutzern\\*Nutzerinnen angezeigt wird wie denen welche den "{$a->contentbank}" {$a->rootnode} sehen. Falls der konfigurierte {$a->coursenode} einem\\*einer bestimmten Nutzern\\*Nutzerin nicht angezeigt wird, wird der "{$a->contentbank}" {$a->rootnode} an das Ende des {$a->coursenode} Abschnitts verschoben werden und eine Debug Warnung wird angezeigt / ins Logfile geschrieben werden.';
$string['setting_removebadgescoursenodeexplanation'] = 'Der Knoten wird nur entfernt falls im Kurs keine Auszeichnungen angelegt sind. Trainer*innen können weiterhin immer auf die Auszeichnungen über das Kursmenü (Zahnrad-Menü) zugreifen.<br /><em>Diese Einstellung wird nur verwendet, wenn das Subsystem für Auszeichnungen in Moodle auch aktiviert ist.</em>';
$string['setting_removecompetenciescoursenodeexplanation'] = 'Der Knoten wird nur entfernt falls im Kurs keine Kompetenzen angelegt sind. Für Trainer*innen wird ein neuer "Kompetenzen" Eintrag zum Kursmenü (Zahnrad-Menü) hinzugefügt.<br /><em>Diese Einstellung wird nur verwendet, wenn das Subsystem für Kompetenzen in Moodle auch aktiviert ist.</em>';
$string['setting_removegradescoursenodeexplanation'] = 'Der Knoten wird für alle Nutzer*innen entfernt, ungeachtet ob sie berechtigt wären den Knoten zu sehen und ungeachtet der Einstellung \'Bewertungen anzeigen\' in der Kurs-Administration.';
$string['setting_removenotselectedhomerootnodeexplanation'] = 'Die nicht ausgewählte Startseite / Dashboard ist die Seite welche der*die Nutzer*in nicht als seine Startseite festgelegt hat.';
$string['setting_removeparticipantscoursenodeexplanation'] = 'Der Knoten wird für alle Nutzer*innen entfernt, ungeachtet ob sie berechtigt wären den Knoten zu sehen.';
$string['setting_removeselectedhomerootnodeexplanation'] = 'Die ausgewählte Startseite / Dashboard ist die Seite welche der*die Nutzer*in als seine Startseite festgelegt hat.';
