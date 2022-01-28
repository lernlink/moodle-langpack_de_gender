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
 * @package    report
 * @subpackage security
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_defaultuserrole_details'] = '<p>Jede*r eingeloggte Nutzer*in hat zunächst Rechte aus der Standardrolle für Nutzer*innen. Für diese Rolle sollten keine bedenklichen Berechtigungen vergeben worden sein.</p> <p>Die einzige Rolle, für die das zunächst zutrifft, ist die Rolle <em>authentifizierte*r Nutzer*in</em>. Die Berechtigung \'Kurse sehen\' (course view) muss dazu nicht aktiviert sein.</p>';
$string['check_defaultuserrole_name'] = 'Standardrolle für alle Nutzer*innen';
$string['check_defaultuserrole_ok'] = 'Standardrolle für alle Nutzer*innen sind richtig definiert.';
$string['check_emailchangeconfirmation_details'] = '<p>Es wird empfohlen, eine E-Mail-Bestätigung einzufordern, wenn Nutzer*innen ihre E-Mail-Adresse im Nutzer*inprofil ändern. Falls diese Einstellung deaktiviert ist, könnten Spammer versuchen, den Webserver zum Versenden von Spam zu missbrauchen.</p> <p></p>';
$string['check_embed_details'] = '<p>Die uneingeschränkte Nutzung von EMBED/OBJECT ist äußerst gefährlich, weil alle registrierten Nutzer*innen einen XSS-Angriff gegen andere Servernutzer starten könnten. Diese Einstellung sollte auf produktiven Servern deaktiviert sein.</p>';
$string['check_frontpagerole_details'] = '<p>Diese Rolle für die Startseite erhalten alle angemeldeten Nutzer*innen. Beachten Sie, dass für die Startseite keine bedenklichen Rechte vergeben werden dürfen.</p> <p>Es wird empfohlen, immer eine Rolle neu anzulegen und keine vorgegebene Rolle zu verändern.</p>';
$string['check_guestrole_details'] = '<p>Die Gastrolle wird für Gäste, nichteingeloggte Nutzer*innen und den temporären Gastzugang zu Kursen verwendet. Achten Sie unbedingt darauf, keine unsicheren Berechtigungen für diese Rolle zuzulassen.<p> </p>Der unterstützte Legacytyp für die Gastrolle ist <em>Gast</em>.</p>';
$string['check_mediafilterswf_details'] = '<p>Die automatische Einbindung von Flash-Dateien im Format .swf ist sehr gefährlich. Jede*r registrierte Nutzer*in könnte damit eine XSS-Attacke gegen den Server auslösen. Bitte deaktivieren Sie diese Funktion unbedingt auf produktiven Servern.</p>';
$string['check_openprofiles_details'] = 'Öffentlich sichtbare Nutzer*innenprofile können von Spammern missbraucht werden. Aktivieren Sie am besten die Einstellung \'Anmeldung notwendig\' bzw. \'Anmeldung notwendig, um Profile zu sehen\'.';
$string['check_openprofiles_error'] = 'Jeder kann zurzeit Nutzer*innenprofile sehen, ohne sich zuvor einzuloggen.';
$string['check_openprofiles_name'] = 'Offene Nutzer*innenprofile';
$string['check_openprofiles_ok'] = 'Ein Login ist erforderlich, um Nutzer*innenprofile sehen zu können.';
$string['check_passwordpolicy_details'] = '<p>Kennwortregeln sollten unbedingt festgelegt werden. Oft ist es ziemlich einfach, Kennwörter zu erraten und unberechtigten Zugang zu Systemen zu bekommen. Die Regeln sollten aber nicht zu kompliziert sein. Besonders strenge Regeln führen nämlich häufig dazu, dass Nutzer*innen sich die Kennwörter nicht merken können und diese daher vergessen oder sie aufschreiben.</p>';
$string['check_riskadmin_detailsok'] = '<p>Bitte prüfen Sie die folgende Liste von Serveradministrator(en):</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Prüfen Sie bitte die folgende Liste von Serveradministrator*innen:</p>{$a->admins} <p>Es wird empfohlen, die Rolle "Administrator*innen" nur auf Systemebene zu vergeben. Die folgenden Nutzer*innen verfügen über nicht unterstützte Zuweisungen zur Rolle "Administrator*innen":</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administrator*innen';
$string['check_riskadmin_warning'] = '{$a->admincount} Serveradministrator/inn/en und {$a->unsupcount} nicht unterstützte Zuweisung(en) zur Administrator*innenrolle gefunden.';
$string['check_riskbackup_detailsok'] = 'Keine Rolle erlaubt das Sichern von Nutzer*indaten. Beachten Sie aber, dass Admins mit der Berechtigung "doanything" (alles tun) auch weiterhin dazu befähigt sind.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Diese aktivierten Änderungen geben Nutzern*innen die Möglichkeit, auch Nutzer*indaten in eine Kurssicherung einzubeziehen. Bitte prüfen Sie, ob diese Berechtigung nötig ist.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Die folgenden Systemrollen erlauben es aktuell, Nutzer*innendaten in eine Kurssicherung einzubeziehen. Bitte prüfen Sie, ob diese Berechtigung nötig ist.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Mit den obigen Rollen oder lokalen Rollenänderungen haben folgende Nutzer*inkonten die Berechtigung, personenbezogene Daten von allen in ihren Kursen eingetragenen Nutzern*innen in Kurssicherungen einzubeziehen. Stellen Sie unbedingt sicher, dass diese Konten (a) vertrauenswürdig und (b) mit sicheren Kennwörtern gesichert sind:</p> {$a}';
$string['check_riskbackup_name'] = 'Sicherung von Nutzer*indaten';
$string['check_riskbackup_ok'] = 'Keine Rolle erlaubt das Sichern von Nutzer*indaten';
$string['check_riskbackup_warning'] = '{$a->rolecount} Rolle(n), {$a->overridecount} Rollenänderung(en) und {$a->usercount} Nutzer*innen mit der Möglichkeit zur Sicherung von Nutzer*innendaten gefunden.';
$string['check_riskxss_details'] = '<p>RISK_XSS bezeichnet alle bedenklichen Berechtigungen, die ausschließlich absolut vertrauenswürdige Nutzer*innen ausführen dürfen.</p> <p>Bitte prüfen Sie die folgende Nutzer*innenliste und stellen Sie sicher, dass Sie ihnen völlig trauen können:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS-vertrauenswürdige Nutzer*innen';
$string['check_riskxss_warning'] = '{$a} Nutzer*innen gefunden, denen bezüglich XSS vertraut werden muss!';
