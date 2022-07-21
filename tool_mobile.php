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
 * @subpackage mobile
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apppolicy_help'] = 'Die URL zur Datenschutzinfo für Nutzer\\*innen der mobilen App, die auf der Seite \'Info\' in der App aufgeführt ist. Wenn das Feld leer bleibt, wird stattdessen die URL der Datenschutzinfo für die Website verwendet.';
$string['autologinnotallowedtoadmins'] = 'Das Auto-Login ist für Administrator*innen der Website nicht erlaubt.';
$string['forcelogout_desc'] = 'Diese Einstellung legt fest, dass der Menüpunkt \'Website wechseln\' auf \'Abmelden\' geändert wird. Nutzer\\*innen werden dann vollständig aus der Website abgemeldet und müssen ihr Kennwort beim nächsten Zugriff neu eingeben.';
$string['invaliduserquotawarning'] = 'Das Nutzer*inkontingent (userquota) hat einen ungültigen Wert. In den Sicherheitseinstellungen der Website sollte ein gültiger ganzzahliger Wert eingetragen werden.';
$string['minimumversion'] = 'Wenn eine minimal erforderliche Version für die Moodle-App (ab 3.8.0) vorgegeben ist, werden Nutzer*innen mit einer älteren Version zur Aktualisierung der App aufgefordert, bevor sie auf die Website zugreifen können.';
$string['notificationslimitreached'] = 'Das monatliche Limit für aktive Endgeräte wurde überschritten. Für einige Nutzer*innen werden keine Systemnachrichten gesendet. Es wird empfohlen, dass Sie im Moodle-Apps-Portal <a href="{$a}" target="_blank"> Ihren App-Plan aktualisieren </a>.';
$string['privacy:metadata:core_userkey'] = 'Nutzer*innenschlüssel zum Erstellen eines Auto-Login für die aktuelle Person.';
$string['qrcodetype_desc'] = 'Für Nutzer\\*innen der mobilen App kann ein QR-Code zum Scannen bereitgestellt werden. Der QR-Code kann verwendet werden, um die Website-URL einzugeben oder um die Person automatisch anzumelden, ohne einen Anmeldenamen oder ein Kennwort eingeben zu müssen.';
$string['qrsiteadminsnotallowed'] = 'Aus Sicherheitsgründen ist eine Anmeldung über QR-Code nicht zulässig für Website-Administrator*innen oder wenn Sie als andere Person angemeldet sind.';
$string['setuplink_desc'] = 'Link zum Download der mobilen App im App Store und bei Google Play. Der Link zum Download wird in der Fußzeile jeder Seite und in der Übersicht aller Nutzendenprofile angezeigt. Wenn das Feld leer ist, wird kein Link angezeigt.';
$string['typeoflogin_desc'] = 'Wenn Ihre Website eine SSO-Authentifizierung verwendet, wählen Sie entweder \'Im Browser\' oder \'Im integrierten Browser\'. Der integrierte Browser sorgt für eine bessere Nutzendenführung, funktioniert aber nicht mit allen SSO-Plugins.';
