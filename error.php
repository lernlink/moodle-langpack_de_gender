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
 * @subpackage error
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatebackupdir'] = 'Das Verzeichnis \'backupdata\' konnte nicht erstellt werden. Administrator*innen müssen die Zugriffsrechte korrigieren.';
$string['cannotcreatedboninstall'] = '<p>Die Datenbank konnte nicht angelegt werden.</p><p>Die angegebene Datenbank existiert nicht und das genannte Nutzer*inkonto hat keine Rechte, die Datenbank neu anzulegen. Die Datenbank-Konfiguration muss überprüft werden.</p>';
$string['cannotcreatesitedir'] = 'Das Verzeichnis für die Website konnte nicht angelegt werden. Administrator*innen müssen die Dateirechte auf dem Server korrigieren.';
$string['cannotcreateuploaddir'] = 'Das Upload-Verzeichnis konnte nicht angelegt werden. Administrator*innen müssen die Dateirechte auf dem Server korrigieren.';
$string['cannotcustomisefiltersblockuser'] = 'Sie dürfen keine Filtereinstellungen im Nutzer*innen- oder Blockkontext ändern.';
$string['cannotdeletethisrole'] = 'Sie können die Rolle nicht löschen, weil sie vom System genutzt wird oder die letzte verbliebende Administrationsrolle ist.';
$string['cannotedituserpreferences'] = 'Diese Nutzer*inneneinstellungen können nicht geändert werden.';
$string['cannotedityourprofile'] = 'Sie können Ihr Nutzer*innenprofil nicht bearbeiten.';
$string['cannotfindteacher'] = 'Trainer*in wurde nicht gefunden.';
$string['cannotfinduser'] = 'Nutzer*innenkonto \'{$a}\' wurde nicht gefunden:';
$string['cannotgradeuser'] = 'Nutzer*in kann nicht bewertet werden.';
$string['cannotrestoreadminorcreator'] = 'Sie müssen Kursersteller*in oder Administrator*in sein, um die Daten in einen neuen Kurs wiederherzustellen!';
$string['cannotrestoreadminoredit'] = 'Sie müssen Trainer*in oder Administrator*in sein, um die Daten im ausgewählten Kurs wiederherzustellen!';
$string['cannotsignup'] = 'Sie können kein neues Nutzer*innenkonto anlegen, weil Sie bereits als {$a} angemeldet sind.';
$string['cannotunassignrolefrom'] = 'Dieses Nutzer*innenkonto konnte nicht aus der Rollenzuweisung gelöscht werden: {$a}';
$string['cannotupdateprofile'] = 'Fehler beim Aktualisieren des Nutzer*innendatensatzes';
$string['cannotupdateusermsgpref'] = 'Die Mitteilungseinstellungen des Nutzer*innenkontos können nicht aktualisiert werden.';
$string['cannotupdateuseronexauth'] = 'Die Aktualisierung der Nutzer*innendaten für die externe Authentisierung ist fehlgeschlagen: {$a}. Schauen Sie bitte in die Logdateien des Servers, um weitere Details zu erfahren.';
$string['cannotuseadmin'] = 'Sie müssen Administrator*in sein, um diese Seite nutzen zu können';
$string['cannotuseadminadminorteacher'] = 'Sie müssen Trainer*in oder Administrator*in sein, um diese Seite nutzen zu können.';
$string['cannotusepage'] = 'Ausschließlich Trainer*innen und Administrator*innen können diese Seite nutzen.';
$string['cannotviewprofile'] = 'Sie dürfen dieses Nutzer*inprofil nicht sehen';
$string['confirmationnotenabled'] = 'Nutzer*innen-Bestätigung ist auf dieser Seite nicht aktiviert';
$string['couldnotupdatenoexistinguser'] = 'Nutzer*in konnte nicht aktualisiert werden - Nutzer*in existiert nicht';
$string['couldnotverifyagedigitalconsent'] = 'Beim Versuch, das Alters zu überprüfen, ist ein Fehler aufgetreten. <br />Wenden Sie sich an die Administrator*innen.';
$string['courserequestdisabled'] = 'Die Kursanträge wurden von Administrator*innen deaktiviert.';
$string['dbconnectionfailed'] = '<p>Fehler: Datenbankverbindung fehlgeschlagen</p> <p>Es ist möglich, dass die Datenbank überlastet ist oder nicht ordentlich läuft.</p> <p>Server-Administrator*innen sollten zusätzlich prüfen, ob die Datenbankdetails richtig in der config.php eingetragen sind.</p>';
$string['dbdriverproblem'] = '<p>Fehler: Datenbanktreiber-Problem aufgetreten</a> <p>Server-Administrator*innen sollten die Servereinstellungen prüfen.</p> <p>{$a}</p>';
$string['dbsessionbroken'] = 'Ein schwerwiegendes Problem mit der Datenbank-Session wurde erkannt<br /><br />Bitte benachrichtigen Sie die Administrator*innen des Servers';
$string['dbsessionhandlerproblem'] = 'Das Einrichten der Datenbank-Session ist fehlgeschlagen. Bitte benachrichtigen Sie die Administrator*innen des Servers';
$string['dbsessionmysqlpacketsize'] = 'Ein schwerwiegender Session-Fehler wurde erkannt. Bitte informieren Sie die Administrator*innen des Servers, dass dieses Problem auftreten kann, wenn der Wert max_allowed_packet in den MySQL-Einstellungen zu klein festgelegt wurde.';
$string['errorsettinguserpref'] = 'Fehler beim Setzen der Nutzer*inneneinstellungen';
$string['groupalready'] = 'Nutzer*in gehört bereits zur Gruppe {$a}';
$string['groupusernotmember'] = 'Nutzer*in ist nicht Mitglied dieser Gruppe.';
$string['guestcantaccessprofiles'] = 'Gäste dürfen nicht auf die Nutzer*innenprofile zugreifen. Loggen Sie sich mit Ihren persönlichen Zugangsdaten ein.';
$string['guestnoeditprofile'] = 'Gäste dürfen das Nutzer*innenprofil nicht bearbeiten.';
$string['guestnoeditprofileother'] = 'Das Nutzer*innenprofil für Gäste kann nicht bearbeitet werden.';
$string['invalidbulkenrolop'] = 'Ungültige Nutzer*innenverarbeitung (Bulk) angefordert';
$string['invaliduser'] = 'Ungültige Nutzer*in';
$string['invaliduserdata'] = 'Ungültige Nutzer*innendaten: {$a}';
$string['invaliduserfield'] = 'Ungültiges Nutzer*innenfeld: {$a}';
$string['messageundeliveredbynotificationsettings'] = 'Die Nachricht konnte nicht gesendet werden, da persönliche Nachrichten zwischen Benutzern*innen (in den Benachrichtigungseinstellungen) von einem*einer Site-Administrator*in deaktiviert wurden.';
$string['mnetlocal'] = 'Externe MNET-Nutzer*innen können sich nicht lokal anmelden';
$string['mustbeteacher'] = 'Diese Seite können Sie nur als Trainer*in ansehen.';
$string['noadmins'] = 'Keine Adminstratoren*innen!';
$string['nocapabilitytousethisservice'] = 'Nutzer*in besitzt nicht die notwendige Berechtigung, um diesen Service zu nutzen.';
$string['noparticipants'] = 'Keine Teilnehmer*innen für diesen Kurs gefunden';
$string['notallowedtoupdateprefremotely'] = 'Sie sind nicht berechtigt, die Nutzer*inneneinstellungen aus der Ferne zu aktualisieren.';
$string['notownerofkey'] = 'Sie sind nicht der*die Eigentümer*in dieses Schlüssels';
$string['nousers'] = 'Kein*e Nutzer*in vorhanden!';
$string['onlyadmins'] = 'Diese Funktion können nur Administratoren*innen ausführen';
$string['onlyeditingteachers'] = 'Diese Funktion können nur Trainer*innen mit Bearbeitungsrecht ausführen.';
$string['prefixcannotbeempty'] = '<p>Fehler: Datenbanktabellen-Prefix kann nicht leer sein.({$a})</p> <p>Administrator*innen müssen dieses Problem beseitigen.</p>';
$string['prefixtoolong'] = '<p>Fehler: Datenbanktabellen-Prefix ist zu lang ({$a->dbfamily})</p> <p>Administrator*innen müssen dieses Problem anpassen. Tabellen- Prefixes in {$a->dbfamily} sind max. {$a->maxlength} Zeichen lang.</p>';
$string['privatefilesupload'] = 'Direktupload in die privaten Dateibereiche der Nutzer*innen wird nicht mehr unterstützt. Upload in einen Entwurfsbereich und anschließende Verschiebung der Dateien mit core_user::add_user_private_files';
$string['restore_path_element_missingmethod'] = 'Die Wiederherstellungsmethode {$a} fehlt. Sie muss von einem*einer Entwickler*in definiert werden.';
$string['reverseproxyabused'] = 'Der Reverse Proxy ist aktiviert, so dass Sie nicht direkt auf den Server zugreifen können.<br />Wenden Sie bitte an die Server-Administrator*innen.';
$string['rpcerror'] = 'Ihre MNET-Verbindung ist fehlgeschlagen! Bitte leiten Sie die Fehlermeldung an die Administrator*innen weiter: {$a}';
$string['sessiondiskfull'] = 'Die Session-Partition ist voll. Ein Login ist zurzeit nicht möglich. Bitte benachrichtigen Sie die Server-Administrator*innen.';
$string['sessionipnomatch'] = 'Die IP-Adresse scheint sich seit Ihrem letzten Login geändert zu haben. Dieses Sicherheitsfeature schützt Sie vor dem Diebstahl Ihrer Identität durch Hacker, während Sie auf der Seite arbeiten. Normale Nutzer*innen sollten diese Mitteilung nicht sehen - bitten Sie die Administrator*innen um Hilfe.';
$string['sessionipnomatch2'] = '<p>Ihre IP-Adresse hat sich geändert, seit Sie sich eingeloggt haben. Diese Sicherheitsoption schützt davor, dass Ihre Identität gestohlen werden kann, während Sie eingeloggt sind. Sie könnten diese Fehlermeldung auch erhalten, wenn Sie ein Funknetzwerk benutzen oder zwischen unterschiedlichen Netzwerken pendeln (roaming). Bitte fragen Sie für weitere Hilfe die Administrator*innen Ihrer Website. </p><p>Falls Sie weitermachen möchten, aktualisieren Sie bitte die Seite (F5-Taste).</p>';
$string['unknownuseraction'] = 'Diese Nutzer*innenaktion wurde nicht verstanden.';
$string['unknownuserselector'] = 'Unbekannter Nutzer*innenauswähler';
$string['useradmineditadmin'] = 'Nur Administrator*innen können andere Administrationsaccounts bearbeiten.';
$string['useradminodelete'] = 'Nutzer*innenkonten von Administrator*innen können nicht gelöscht werden.';
$string['usermustbemnet'] = 'Nutzer*innen in der MNET-Zugangskontrolle müssen Remote-MNET-Nutzer*innen sein.';
$string['usernotaddederror'] = 'Fehler. Nutzer*in wurde nicht hinzugefügt';
$string['usernotaddedregistered'] = 'Nutzer*in wurde nicht hinzugefügt - er*sie war bereits registriert.';
$string['usernotdeletedadmin'] = 'Nutzer*inkonto nicht gelöscht. Nutzer*innenkonten von Administrator*innen können nicht gelöscht werden.';
$string['usernotdeleteddeleted'] = 'Dieses Nutzer*inkonto ist bereits gelöscht.';
$string['usernotdeletederror'] = 'Nutzer*in nicht gelöscht. Unbekannter Fehler';
$string['usernotdeletedmissing'] = 'Nutzer*in nicht gelöscht. Der Anmeldename wurde nicht gefunden';
$string['usernotdeletedoff'] = 'Nutzer*in nicht gelöscht - Löschen ist nicht erlaubt';
$string['usernotfullysetup'] = 'Nutzer*inkonto unvollständig';
$string['usernotincourse'] = 'Der*die Nutzer*in ist nicht in diesem Kurs!';
$string['usernotrenamedexists'] = 'Nutzer*in wurde nicht umbenannt - der eingegebene Nutzername wird bereits verwendet';
$string['usernotrenamedmissing'] = 'Nutzer*in nicht umbenannt. Der alte Anmeldename wurde nicht gefunden.';
$string['usernotrenamedoff'] = 'Nutzer*in nicht umbenannt - Umbenennen ist nicht erlaubt.';
$string['usernotupdatederror'] = 'Nutzer*in nicht aktualisiert. Unbekannter Fehler';
$string['usernotupdatednotexists'] = 'Nutzer*in nicht aktualisiert. Das Nutzer*innenkonto existiert nicht.';
$string['userselectortoomany'] = 'Die Auswahl user_selector erhielt mehr als eine/n ausgewählten Nutzer*in, obwohl die Mehrfachauswahl (multiselect) deaktiviert ist.';
$string['wrongusernamepassword'] = 'Nutzer*in oder Kennwort falsch';
$string['wwwrootmismatch'] = 'Ein falscher Zugriff wurde festgestellt. Entschuldigung, aber auf diesen Server sollte ausschließlich über die Adresse "{$a}" zugegriffen werden. Bitte benachrichtigen Sie die Administrator*innen Ihres Servers.';
$string['wwwrootslash'] = 'In der Datei config.php wurde eine falsche Einstellung für $CFG->wwwroot festgestellt. Es darf kein abschließender Slash \'/\' gesetzt sein.<br />Bitte benachrichtigen Sie die Administrator*innen Ihres Servers.';
