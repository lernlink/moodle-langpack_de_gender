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
 * @subpackage webservice
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcapabilitytousers'] = 'Nutzer*innenrechte prüfen';
$string['addcapabilitytousersdescription'] = 'Nutzer*innen brauchen zwei Rechte: \'webservice:createtoken\' und ein zum jeweiligen Webservice-Protokoll passendes Recht (\'webservice/rest:use\', \'webservice/soap:use\', ...). <br />Zur Konfiguration ist es sinnvoll, eine neue Rolle \'Webservice\' mit dem Recht \'webservice:createtoken\' und mehreren Protokollrechten anzulegen und anschließend diese Rolle dem*der Webservice-Nutzer*in zuzuweisen.';
$string['allusers'] = 'Alle Nutzer*innen';
$string['checkusercapability'] = 'Nutzer*innenrecht prüfen';
$string['checkusercapabilitydescription'] = 'Ein*e Webservice-Nutzer*in muss die zu den benutzten Webservice-Protokollen passendes Rechte besitzen: (\'webservice/rest:use\', \'webservice/soap:use\', ...). <br />Zur Konfiguration ist es sinnvoll, eine neue Rolle \'Webservice\' mit dem Recht \'webservice:createtoken\' und mehreren Protokollrechten anzulegen und anschließend diese Rolle dem*der Webservice-Nutzer*in zuzuweisen.';
$string['createtokenforuser'] = 'Nutzer*in-Token erzeugen';
$string['createtokenforuserdescription'] = 'Nutzer*in-Token für den Webservice erzeugen';
$string['createuser'] = 'Webservice-Nutzer*in anlegen';
$string['createuserdescription'] = 'Sie müssen eine*n spezielle*n Webservice-Nutzer*in für das System anlegen, das Moodle steuern soll';
$string['deletetokenconfirm'] = 'Möchten Sie wirklich das Nutzer*innen-Token von \'{$a->user}\' für den Webservice \'{$a->service}\' löschen?';
$string['downloadfiles_help'] = 'Nach der Aktivierung können alle Nutzer\\*innen Dateien mit ihrem Sicherheitsschlüssel herunterladen. Dies gilt nur für die Dateien für die sie eine Berechtigung haben.';
$string['eventwebserviceserviceuseradded'] = 'Webservice-Nutzer*in angelegt';
$string['eventwebserviceserviceuserremoved'] = 'Webservice-Nutzer*in entfernt';
$string['externalserviceusers'] = 'Externe Servicenutzer*innen';
$string['forbiddenwsuser'] = 'Sie können keine Token erzeugen, wenn Nutzer*innen unbestätigt, gelöscht, gesperrt oder Gäste sind.';
$string['loginrequired'] = 'Nur für angemeldete Nutzer*innen';
$string['privacy:metadata:serviceusers'] = 'Liste von Nutzer*innen, die einen bestimmten externen Dienst nutzen können';
$string['privacy:metadata:serviceusers:userid'] = 'ID des*der Nutzers*in';
$string['privacy:metadata:tokens:creatorid'] = 'ID des*der Nutzers*in, der Token erstellt hat';
$string['privacy:metadata:tokens:token'] = 'Nutzer*innentoken';
$string['privacy:metadata:tokens:userid'] = 'ID des*der Nutzers*in, dem Token gehört';
$string['requiredcapability_help'] = 'Wenn die Option aktiviert ist, können ausschließlich Nutzer\\*innen mit den notwendigen Rechten diesen Webservice nutzen.';
$string['selectspecificuser'] = 'Spezielle*n Nutzer*in auswählen';
$string['selectspecificuserdescription'] = 'Den*die Webservice-Nutzer*in als autorisierte*n Nutzer*in hinzufügen.';
$string['servicehelpexplanation'] = 'Ein Webservice ist ein Set von Funktionen. Er kann von allen oder ausschließlich von speziell ausgewählten Nutzern*innen verwendet werden.';
$string['serviceusersettings'] = 'Nutzer*innen-Einstellungen';
$string['testauserwithtestclientdescription'] = 'Simulieren Sie einen externen Dienstzugriff mit dem Webservice-Testclient. Loggen Sie sich zuerst als Nutzer*in mit der Berechtigung "moodle/webservice:createtoken" ein. Suchen Sie die Option \'Sicherheitsschlüssel\' (Token) auf der Nutzer*innenseite \'Einstellungen\'. Verwenden Sie das Token im Testclient. Wählen Sie im Testclient ein aktiviertes Protokoll mit Token-Authentifizierung. <strong>Achtung: Die getesteten Funktionen werden für dieses Nutzer*innenkonto tatsächlich ausgeführt. Seien Sie deswegen vorsichtig mit der Auswahl Ihrer Tests.</strong>';
$string['testclientdescription'] = '* Der Webservice-TestClient <strong>führt die Funktionen tatsächlich aus </strong>. Testen Sie keine Funktionen, die Ihnen unbekannt sind.<br /> * Die Webservice-Funktionen sind bisher noch nicht alle in den TestClient implementiert.<br /> * Um zu prüfen, dass ein*e Nutzer*in auf manche Funktionen nicht zugreifen kann, geben Sie auch einige Funktionen an, die Sie nicht zugelassen haben.<br /> * Um aussagekräftigere Fehlermeldungen zu bekommen, setzen Sie den Debugmodus auf <strong>{$a->mode}</strong> unter {$a->atag}.';
$string['tokencreatedbyadmin'] = 'Kann ausschließlich von Administrator*innen zurückgesetzt werden (*)';
$string['uploadfiles_help'] = 'Wenn diese Option aktiviert ist, können alle Nutzer\\*innen Dateien unter Verwendung ihrer Sicherheitsschlüssel in \'Meine Dateien\' oder in einen Entwurfsbereich hochladen. Alle Dateiquotas gelten.';
$string['userasclients'] = 'Nutzer*in als Clients mit Token';
$string['userasclientsdescription'] = 'Die folgenden Schritte helfen Ihnen, den Webservice für Nutzer*innen als Clients zu konfigurieren. Dabei wird auch das Erzeugen des empfohlenen Sicherheitsschlüssels (Token) zur Authentifizierung gezeigt. Im Anwendungsfall erzeugen Nutzer*innen selber ihr persönliches Token über die Option \'Sicherheitsschlüssel\' auf ihrer Nutzer*innenseite \'Einstellungen\'.';
$string['usernameoridnousererror'] = 'Es wurde kein Nutzer*inkonto mit diesem Anmeldenamen oder dieser Nutzer-ID gefunden.';
$string['usernameoridoccurenceerror'] = 'Es wurde mehrere Nutzer*innenkonten mit diesem Anmeldenamen gefunden. Geben Sie die Nutzer-ID ein.';
$string['usernotallowed'] = 'Das Nutzer*innenkonto ist nicht für diesen Service zugelassen. Zuerst müssen Sie das Nutzer*inkonto in die Nutzer*innenadministration für {$a} eintragen.';
$string['userservices'] = 'Nutzer*innenservices: {$a}';
$string['usersettingssaved'] = 'Nutzer*inneneinstellungen gespeichert';
$string['validuntil_help'] = 'Der Service wird für Nutzer\\*innen deaktiviert nach dem eingegeben Datum.';
$string['wsaccessuserdeleted'] = 'Verweigerter Webservicezugriff für gelöschtes Nutzer*inkonto: {$a}';
$string['wsaccessuserexpired'] = 'Webservicezugriff für Nutzer*innenkonto mit abgelaufenem Kennwort verweigert: {$a}';
$string['wsaccessusernologin'] = 'Webservicezugriff für gesperrtes Nutzer*inkonto verweigert: {$a}';
$string['wsaccessusersuspended'] = 'Webservicezugriff für gesperrtes Nutzer*inkonto verweigert: {$a}';
$string['wsaccessuserunconfirmed'] = 'Webservicezugriff für unbestätigtes Nutzer*inkonto verweigert: {$a}';
