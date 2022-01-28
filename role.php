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
 * @subpackage role
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowroletoassign'] = 'Nutzer*innen mit der Rolle {$a->fromrole} erlauben, die Rolle {$a->targetrole} zuzuweisen';
$string['allowroletooverride'] = 'Nutzer*innen mit der Rolle {$a->fromrole} erlauben, die Rolle {$a->targetrole} zu verändern';
$string['allowroletoswitch'] = 'Nutzer*innen mit der Rolle {$a->fromrole} erlauben, in die Rolle {$a-targetrole} zu wechseln';
$string['allowroletoview'] = 'Nutzer*innen mit der Rolle {$a->fromrole} erlauben, die Rolle {$a->targetrole} zu sehen';
$string['allsiteusers'] = 'Alle Nutzer*innen der Website';
$string['archetypecoursecreator'] = 'Basisrolle: Kursersteller*in';
$string['archetypeeditingteacher'] = 'Basisrolle: Trainer*in';
$string['archetypefrontpage'] = 'Basisrolle: Authentifizierte*r Nutzer*in der Startseite';
$string['archetypemanager'] = 'Basisrolle: Manager*in';
$string['archetypestudent'] = 'Basisrolle: Teilnehmer*in';
$string['archetypeteacher'] = 'Basisrolle: Trainer*in ohne Bearbeitungsrecht';
$string['archetypeuser'] = 'Basisrolle: Authentifizierte*r Nutzer*in';
$string['assignerror'] = 'Fehler beim Zuweisen der Rolle {$a->role} zum Nutzer*innenkonto {$a->user}';
$string['assignrolesrelativetothisuser'] = 'Rollen relativ zu diesem Nutzer*innenkonto zuweisen';
$string['assignroles_help'] = 'Durch die Rollenzuweisung in einem Kontext werden alle Fähigkeiten der Rolle übertragen, u.z. im aktuellen Kontext und in allen nachrangigen Kontexten. Wird z.B. Nutzer*innen die Teilnehmer*innenrolle in einem Kurs zugewiesen, so haben sie die Teilnehmer*innenrolle auch für alle Aktivitäten und Blöcke innerhalb des Kurses.';
$string['backup:anonymise'] = 'Nutzer*innendaten bei Sicherung anonymisieren';
$string['backup:userinfo'] = 'Nutzer*innendaten sichern';
$string['badges:awardbadge'] = 'Badge an Nutzer*in verleihen';
$string['badges:revokebadge'] = 'Badge von Nutzer*in zurückziehen';
$string['competency:usercompetencycomment'] = 'Nutzer*innenkompetenz kommentieren';
$string['competency:usercompetencycommentown'] = 'Eigene Nutzer*inkompetenz kommentieren';
$string['competency:usercompetencyrequestreview'] = 'Überprüfung der Nutzer*innenkompetenz anfragen';
$string['competency:usercompetencyrequestreviewown'] = 'Überprüfung der eigenen Nutzer*inkompetenz anfragen';
$string['competency:usercompetencyreview'] = 'Nutzer*innenkompetenz überprüfen';
$string['competency:usercompetencyview'] = 'Nutzer*innenkompetenz anzeigen';
$string['confirmaddadmin'] = 'Möchten Sie wirklich <strong>{$a}</strong> als neue*n Administrator*in hinzufügen?';
$string['course:markcomplete'] = 'Nutzer*innen in \'Kursabschluss\' als \'abgeschlossen\' markieren';
$string['course:reviewotherusers'] = 'Beobachtung anderer Nutzer*innen';
$string['course:viewhiddenuserfields'] = 'Verborgene Nutzer*innenfelder sehen';
$string['course:viewparticipants'] = 'Kursteilnehmer*innen sehen';
$string['course:viewsuspendedusers'] = 'Gesperrte Nutzer*innen anzeigen';
$string['existingadmins'] = 'Aktuelle Administrator*innen';
$string['existingusers'] = '{$a} Nutzer*innen';
$string['extusers'] = 'Derzeit zugewiesene Nutzer*innenaccounts';
$string['extusersmatching'] = 'Nutzer*innen, die zu \'{$a}\' passen';
$string['frontpageuser'] = 'Authentifizierte*r Nutzer*in der Startseite';
$string['frontpageuserdescription'] = 'Alle authentifizierten Nutzer*innen auf der Startseite';
$string['globalroleswarning'] = 'ACHTUNG! Jede hier zugewiesene Rolle wird für die gesamte Webseite angelegt. Die jeweiligen Nutzer*innen besitzen die Rolle dann wirklich für alle Kurse und auch für die Startseite.';
$string['legacy:admin'] = 'Basisrolle: Administrator*in';
$string['legacy:coursecreator'] = 'Basisrolle: Kursersteller*in';
$string['legacy:editingteacher'] = 'Basisrolle: Trainer*in';
$string['legacy:student'] = 'Basisrolle: Teilnehmer*in';
$string['legacy:teacher'] = 'Basisrolle: Trainer*in mit Bearbeitungsrecht';
$string['legacy:user'] = 'Basisrolle: Authentifizierte*r Nutzer*in';
$string['mainadmin'] = 'Primäre*r Administrator*in';
$string['mainadminset'] = 'Primäre*r Administrator*in';
$string['manageadmins'] = 'Administrator*innen verwalten';
$string['manager'] = 'Manager*in';
$string['managerdescription'] = 'Manager*innen dürfen alle Kurse ansehen und bearbeiten, ohne in die Kurse eingeschrieben zu sein.';
$string['noneinthisxmatching'] = 'Keine Nutzer*innen für die Suche nach \'{$a->search}\' im Kontext {$a->contexttype}\' gefunden';
$string['noroleassignments'] = 'Diesem Nutzer*inkonto wurde systemweit keine Rolle zuwiesen.';
$string['notabletoassignroleshere'] = 'Rollenzuweisungen wurden in diesem Kontext von den Administrator*innen nicht aktiviert.';
$string['permissionsforuser'] = 'Rechte für Nutzer*innenkonto \'{$a}\\';
$string['permission_help'] = 'Rechte sind Einstellungen für bestimmte Nutzer*innenfähigkeiten, für die es 4 Optionen gibt: \\* Nicht gesetzt - Die Fähigkeit wird vererbt, d.h. sie wird unverändert von einem übergeordneten (weniger speziellen) Kontext übernommen \\* Erlauben - Die Fähigkeit wird erlaubt und darf ausgeführt werden \\* Entziehen - Die Fähigkeit wird entzogen, auch wenn sie in übergeordnetem Kontext erlaubt ist \\* Verbieten - Die Fähigkeit wird vollständig verboten und kann in keinem untergeordneten (spezielleren) Kontext wieder erlaubt werden.';
$string['potentialusers'] = '{$a} mögliche Nutzer*innen';
$string['potusers'] = 'Mögliche Nutzer*innen';
$string['potusersmatching'] = 'Mögliche Nutzer*innen passend zu \'{$a}\\';
$string['privacy:metadata:role_assignments:modifierid'] = 'ID des*der Nutzers*in, der die Rollenzuweisung erstellte oder veränderte';
$string['restore:createuser'] = 'Nutzer*innenkonten beim Wiederherstellen anlegen';
$string['restore:userinfo'] = 'Nutzer*innendaten wiederherstellen';
$string['role:assign'] = 'Rollen an Nutzer*innen zuweisen';
$string['rolesforuser'] = 'Rollen für Nutzer*in {$a}';
$string['roles_help'] = 'Eine Rolle ist definiert durch einen Satz von Rechten, die für die gesamte Website festgelegt sind. Rollen können einzelnen Nutzer*innen in bestimmten Kontexten (Zusammenhängen) zugewiesen werden.';
$string['selectanotheruser'] = 'Weitere Nutzer*innen auswählen';
$string['selectauser'] = 'Nutzer*in auswählen';
$string['showthisuserspermissions'] = 'Rechte für dieses Nutzer*innenkonto';
$string['site:deleteownmessage'] = 'Mitteilungen dieses*r Nutzers*in und an diesen Nutzer löschen.';
$string['site:manageallmessaging'] = 'Kontakte für alle Nutzer*innen hinzufügen, entfernen, blocken oder freigeben';
$string['site:messageanyuser'] = 'Einstellungen des*der Nutzers*in für Mitteilungen aller Nutzer*innen überschreiben';
$string['site:uploadusers'] = 'Neue Nutzer*innen aus Datei importieren';
$string['site:viewfullnames'] = 'Vollständige Nutzer*innennamen sehen';
$string['site:viewparticipants'] = 'Alle Nutzer*innen sehen';
$string['site:viewuseridentity'] = 'Alle Nutzer*inneninformationen als Liste sehen';
$string['siteadministrators'] = 'Administrator*innen';
$string['unassignconfirm'] = 'Wollen Sie wirklich Teilnehmer*in "{$a->user}" die Rolle "{$a->role}" entziehen?';
$string['unassignerror'] = 'Es ist ein Fehler während der Entfernung der Rolle {$a->role} des*r Nutzer*in {$a->user} aufgetreten.';
$string['user:create'] = 'Nutzer*innen anlegen';
$string['user:delete'] = 'Nutzer*innen löschen';
$string['user:editownprofile'] = 'Eigenes Nutzer*inprofil bearbeiten';
$string['user:editprofile'] = 'Nutzer*innenprofile bearbeiten';
$string['user:ignoreuserquota'] = 'Obergrenze des*der Nutzer*innenquota ignorieren';
$string['user:loginas'] = 'Login als andere*r Nutzer*in';
$string['user:manageblocks'] = 'Blöcke im Nutzer*innenprofil anderer Nutzer*innen verwalten';
$string['user:manageownblocks'] = 'Blöcke im eigenen öffentlichen Nutzer*innenprofil verwalten';
$string['user:managesyspages'] = 'Standardlayout für die öffentlichen Nutzer*innenprofile konfigurieren';
$string['user:readuserblogs'] = 'Alle Nutzer*innenblogs anzeigen';
$string['user:readuserposts'] = 'Alle Nutzer*innenbeiträge im Forum sehen';
$string['user:update'] = 'Nutzer*innenprofile aktualisieren';
$string['user:viewalldetails'] = 'Alle Nutzer*inneninformationen sehen';
$string['user:viewdetails'] = 'Nutzer*innenprofile sehen';
$string['user:viewhiddendetails'] = 'Verborgene Nutzer*innendetails sehen';
$string['user:viewuseractivitiesreport'] = 'Nutzer*innenberichte sehen';
$string['user:viewusergrades'] = 'Nutzer*innenbewertungen sehen';
$string['usersfrom'] = 'Nutzer*innen von {$a}';
$string['usersfrommatching'] = 'Nutzer*innen im Kontext {$a->contextname} passen zur Suche \'{$a->search}\\';
$string['usersinthisx'] = 'Nutzer*innen in diesem {$a}';
$string['usersinthisxmatching'] = 'Nutzer*innen in diesem {$a->contexttype} passen zur Suche \'{$a->search}\\';
$string['userswithrole'] = 'Alle Nutzer*innen mit Rollenzuweisung';
$string['userswiththisrole'] = 'Nutzer*innen mit Rollenzuweisung';
$string['webservice:managealltokens'] = 'Webservice Token für alle Nutzer*innen verwalten';
$string['xuserswiththerole'] = 'Nutzer*innen mit der Rolle \'{$a->role}\\';
