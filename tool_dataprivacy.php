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
 * @subpackage dataprivacy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['automaticdeletionrequests_desc'] = 'Wenn diese Option aktiviert ist, wird automatisch eine Abfrage zur Datenlöschung für alle bereits manuell gelöschten Nutzendenkonten erzeugt.';
$string['categorydefault_help'] = 'Die Standardkategorie wird allen neuen Instanzen als Standardwert zugewiesen. Wenn vererben gewählt ist, wird die Datenkategorie der darüber liegenden Ebene zugewiesen. Kontexte sind (von unten nach oben): Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer\\*in > Website';
$string['category_help'] = 'Eine Kategorie in der Datenregistrierung beschreibt einen Datentyp/Datenkategorie. Eine neue Kategorie kann hinzugefügt werden. Wenn \'vererben\' ausgewählt ist, wird eine Kategorie von der darüberliegenden Ebene gewählt. Kontexte sind (von unten nach oben): Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer\\*in > Website';
$string['confirmcompletion'] = 'Möchten Sie wirklich diese Nutzer*inanfrage als erledigt markieren?';
$string['confirmcontextdeletion'] = 'Möchten Sie wirklich die ausgewählten Kontexte löschen? Es werden auch alle damit verbundenen Nutzer*indaten der Unterkontexte gelöscht.';
$string['contextlevelname30'] = 'Nutzer*innen';
$string['dataregistryinfo'] = 'Die Datenregistrierung aktiviert Kategorien (für Datentypen/Datenkategorien) und Zwecke (Gründe für die Verarbeitung von Daten), die dem gesamten Inhalt der Website zugeordnet werden können. Dies kann für Personen, Kurse und bis hinunter zu einzelnen Aktivitäten und Blöcken erfolgen. Für jeden Zweck kann eine Speicherdauer festgelegt werden. Wenn die Speicherdauer abgelaufen ist, wird der Inhalt zum Löschen gekennzeichnet. Ein*e Administrator*in kann den Löschvorgang durchführen.';
$string['datarequestcreatedfromscheduledtask'] = 'Automatisch erzeugt durch geplanten Prozess (bereits gelöschtes Nutzer*inkonto).';
$string['datarequestcreatedupondelete'] = 'Beim Löschen eines Nutzer*inkontos automatisch erstellt.';
$string['defaultexpired'] = 'Daten aller Nutzer*innen';
$string['deleteexistingdeleteduserstask'] = 'Löschanforderung für bereits gelöschte Nutzer*innenkonten';
$string['dporolemapping'] = 'Rollenzuordnung für Ansprechpartner*innen zum Datenschutz';
$string['dporolemapping_desc'] = 'Ein\\*e Datenschutzansprechpartner\\*in kann Anfragen zum Datenschutz verwalten. Die Berechtigung \'tool/dataprivacy:managedatarequests\' muss für eine Rolle erlaubt sein, um für die Rollenzuordnung als Datenschutzansprechpartner\\*in gelistet zu werden.';
$string['errornocapabilitytorequestforothers'] = 'Nutzer*in {$a->requestedby} hat nicht die Berechtigung, Datenanfragen im Namen einer anderen Person {$a->userid} auszulösen.';
$string['exceptionnotificationbody'] = '<p>Beim Aufruf von <b>{$a->fullmethodname}</b> ist ein Fehler aufgetreten.<br>Das Plugin <b>{$a->component}</b> konnte die Verarbeitung der Daten nicht beenden. Folgende Informationen könnten den Entwickler*innen helfen:</p><pre>{$a->message}<br> {$a->backtrace}</pre>';
$string['httpwarning'] = 'Daten, die von dieser Website heruntergeladen werden, sind evtl. nicht verschlüsselt. Nehmen Sie Kontakt mit dem*der Administrator*in auf, um SSL für diese Website zu installieren.';
$string['privacy:metadata:request:requestedby'] = 'Die ID des*der anfragenden Nutzers*in, falls im Namen einer anderen Person erstellt.';
$string['privacy:metadata:request:timecreated'] = 'Zeitstempel wann Anfrage von Nutzer*in erstellt wurde.';
$string['privacy:metadata:request:userid'] = 'ID des*der anfragenden Nutzers*in';
$string['protectedlabel'] = 'Die Aufbewahrung der Daten hat Vorrang vor der Anfrage des*der Nutzers*in zur Datenlöschung. Die Daten werden nach Ablauf der Aufbewahrungsfrist gelöscht.';
$string['purposedefault_help'] = 'Der Standardzweck wird allen neuen Instanzen als Standardwert zugewiesen. Wenn vererben gewählt wird, wird der Zweck der darüber liegenden Ebene zugewiesen. Kontexte sind von unten nach oben: Block > Aktivitätsmodul > Kurs > Kursbereich >Nutzer\\*in > Site';
$string['purpose_help'] = 'Eine Kategorie in der Datenregistrierung beschreibt einen Datentyp/Datenkategorie. Ein Zweck beschreibt den Zweck der Verarbeitung der Daten . Ein neuer Zweck kann hinzugefügt werden oder wenn \'vererben\' ausgewählt ist wird ein Zweck von der darüberliegenden Ebene gewählt. Kontexte sind von unten nach oben: Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer\\*in > Site';
$string['requestfor'] = 'Nutzer*in';
$string['requireallenddatesforuserdeletion_desc'] = 'Beim Ablauf werden verschiedene Faktoren berücksichtigt: \\* Die letztmalige Anmeldung einer Person wird mit der Aufbewahrungsfrist für personenbezogene Daten verglichen; und \\* Die Person ist in Kursen angemeldet und nimmt aktiv teil. Wenn bei der aktiven Anmeldung der Kurs kein Kursende hat, wird über diese Einstellung bestimmt, ob die Teilnahme im Kurs als aktiv angesehen wird oder nicht. Wenn der Kurs kein Kursende hat und diese Einstellung aktiviert ist, können Nutzer\\*innen nicht gelöscht werden.';
$string['resultdeleted'] = 'Sie haben kürzlich darum gebeten Ihren persönlichen Nutzer*inaccount und alle persönlichen Daten auf {$a} zu löschen. Dieser Prozess wurde inzwischen abgeschlossen. Sie können sich nicht mehr einloggen.';
$string['retentionperiod_help'] = 'Die Speicherdauer legt fest wie lange Daten gespeichert werden sollen. Wenn die Speicherdauer abgelaufen ist, werden die Daten zum Löschen gekennzeichnet und ein\\*e Administrator\\*in kann dies bestätigen.';
$string['roleoverrideoverview'] = 'Die Standardfestlegung für die Löschregeln für spezifische Nutzerrollen kann überschrieben werden falls diese länger oder kürzer sein sollen. Ein Nutzer*inaccount gilt nur als abgelaufen wenn alle seine Rollen als abgelaufen gelten.';
$string['showdataretentionsummary_desc'] = 'Wenn diese Option aktiviert ist, wird ein Link zur den Fristen zur Datenlöschung im Footer-Bereich der Website und in Nutzendenprofilseiten angezeigt.';
$string['user'] = 'Nutzer*in';
