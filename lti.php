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
 * @package    mod
 * @subpackage lti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['delegate'] = 'An Trainer*in zuweisen';
$string['display_description_help'] = 'Die oben eingegebene Beschreibung wird bei Aktivierung über dem Inhalt des Tools angezeigt. Die Beschreibung kann genutzt werden, um Teilnehmern\\*innen zusätzliche Hinweise zugeben. Sie ist nicht unbedingt erforderlich. Wenn die Darstellung im neuen Fenster erfolgt, kann die Beschreibung nie angezeigt werden.';
$string['enableemailnotification_help'] = 'Nach der Aktivierung erhalten Teilnehmer\\*innen E-Mail-Systemnachrichten, wenn ihre Leistungen bewertet wurden.';
$string['errormisconfig'] = 'Das Tool wurde falsch konfiguriert. Ihr*e Administrator*in kann Ihnen weiter helfen.';
$string['external_tool_type_help'] = '\\* \\*\\*Automatisch mit Tool-URL\\*\\* - Diese Einstellung ist meistens ausreichend. Moodle verwendet dann die passendste Konfiguration über die Tool-URL. Es können Tools verwendet werden, die von dem\\*der Administrator\\*in vorkonfiguriert oder im Kurs angelegt wurden. Sofern eine Start-URL definiert ist, erzeugt Moodle ein Feedback, ob dieses erkannt wird oder nicht. Sollte dieser Zugang scheitern, können Konfigurationsinformationen manuell eingetragen werden. \\* \\*\\*Ein spezifischer vorkonfigurierter Tool-Typ\\*\\* - Die Auswahl erzwingt eine bestimmte Konfiguration zur Kommunikation mit dem Tool-Anbieter zu nutzen. Sollte die eingetragene Start-URL nicht zu dem Tool-Anbieter passen, erfolgt eine Warnung. Manchmal ist es nicht nötig eine Start-URL einzutragen falls ein spezifischer Tool-Typ verwandt wird. \\* \\*\\*Individuelle Konfiguration\\*\\* - Die spezifische Konfiguration wird nur für die spezielle Instanz verwandt. Unter erweiterten Einstellungen können Anwenderschlüsssel und Kennwörter (shared secret) eingetragen werden. Beide werden durch den Tool Provider zur Verfügung gestellt. Falls das Tool diese Einstellungen nicht benötigt, können die Felder leer bleiben. ##Tool-Typ bearbeiten Drei Icons erscheinen in der Liste \\* \\*\\*Hinzufügen\\*\\* - Eine Tool-Konfiguration auf Kursebene erstellen. Alle Instanzen in diesem Kurs werden diese verwenden. \\* \\*\\*Bearbeiten\\*\\* - Typ aus Dropdownmneu auswählen und die Details konfigurieren. \\* \\*\\*Löschen\\*\\* - Ausgewählten Typ im Kurs löschen.';
$string['lti:admin'] = 'Tool als Administrator*in ausführen';
$string['lti:manage'] = 'Als Trainer*in auf das ext. Tool zugreifen';
$string['lti_launch_error_tool_request'] = '<p>Zum Versand einer Anfrage an Administrator*innen zur Vervollständigung der Tool-Konfiguration klicken Sie <a href="{$a->admin_request_url}" target="_top">hier</a>. </p>';
$string['lti_tool_request_added'] = 'Die Konfigurationsanfrage wurde erfolgreich weitergeleitet. Kontakten Sie die Administrator*innen nun, um den Prozess abzuschließen.';
$string['main_admin_help'] = 'Externe Tools ermöglichen es Moodle-Nutzern\\*innen nahtlos mit externen Lernanwendungen zu arbeiten und Daten auszutauschen. Durch ein spezielles Start-Protokoll erhält das externe Tool Zugriff auf bestimmte Daten des\\*der  Nutzers\\*in. Dies können sein: Institutionsbezeichnung, Kurs-ID, Nutzer\\*in-ID, Nutzer\\*inname oder E-Mail. Die Tools auf dieser Seite sind in drei unterschiedliche Typen klassifiziert: \\* \\*\\* Aktiv\\*\\* - Diese Toolanbieter wurden durch eine\\*n Administrator\\*in geprüft und konfiguriert. Sie können in jedem Kurs genutzt werden. Wenn ein Anwenderschlüssel und ein Kennwort eingegeben werden, wird eine geschützte Verbindung zwischen Moodle und dem Toolanbieter aufgebaut. \\* \\*\\*Abwarten\\*\\* - Diese Tool Anbieter wurden im Rahmen eines Paketimports im System hinterlegt. Sie sind noch nicht von einer\\*m Administrator\\*in konfiguriert worden. Trainer\\*innen können diese Tools verwenden, wenn sie selber über einen Anwenderschlüssel und ein Kennwort verfügen, oder dies nicht erforderlich ist. \\* \\*\\*Gesperrt\\*\\* - Diese Toolanbieter sind von Administrator\\*innen nicht zur systemweiten Nutzung freigegeben worden. Trainer\\*innen
können die Tools dennoch nutzen, wenn sie über einen Anwenderschlüssel und ein Kennwort für dieses Tool verfügen, oder dies nicht erforderlich ist.';
$string['modulename_help'] = 'Mit der Schnittstelle \'Externe Tools\' geben Sie den Teilnehmer\\*innen direkten Zugriff auf Lernprogramme außerhalb von Moodle. Die Teilnehmer\\*innen benötigen kein zusätzliches Login. Die Verbindung zwischen Moodle und dem externen Lernprogramm erfolgt über den LTI-Standard, den das andere Lernprogramm unterstützen muss. Sie erhalten vom Anbieter einen Link und Zugangsschlüssel. Hinweis zum Datenschutz: Häufig werden Namen und E-Mail-Adressen Ihrer Teilnehmer\\*innen an den externen Anbieter übertragen. Fragen Sie den Anbieter. Externe Tool-Aktivitäten unterscheiden sich in einigen Punkten von URL-Ressourcen: \\* Externe Tools sind kontextabhängig, d.h. sie haben Zugriff auf Informationen über den\\*die Benutzer\\*in, der das Tool gestartet hat, wie z.B. Institution, Kurs und Name. \\* Externe Tools unterstützen das Lesen, Aktualisieren und Löschen von Bewertungen, die mit der Aktivitätsinstanz verbunden sind \\* Konfigurationen von externen Tools schaffen eine wechselseitige Beziehung zwischen Ihrer Website und dem Werkzeuganbieter und ermöglichen eine sichere Kommunikation zwischen ihnen.';
$string['noviewusers'] = 'Keine Nutzer*innen mit diesem Recht gefunden.';
$string['opensslconfiginvalid'] = 'Für LTI 1.3 muss eine gültige openssl.cnf konfiguriert sein und Ihrem Webserver zur Verfügung stehen. Wenden Sie sich an den*die Website-Administrator*in, um openssl für diese Site zu konfigurieren und zu aktivieren.';
$string['privacy:metadata:coursefullname'] = 'Vollständiger Name des Kurses aus dem der*die Nutzer*in den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:courseid'] = 'ID des Kurses aus dem der*die Nutzer*in den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:courseidnumber'] = 'ID-Nummer des Kurses aus dem der Nutzer den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:courseshortname'] = 'Kurzbezeichnung des Kurses, aus dem der*die Nutzer*in den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:createdby'] = 'Nutzer*in, der Datensatz erzeugt hat';
$string['privacy:metadata:email'] = 'E-Mail-Adresse des*der Nutzers*in, der den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:externalpurpose'] = 'Der LTI Consumer hält Nutzer*innen- und Kontextinformationen für den LTI Toolprovider vor.';
$string['privacy:metadata:firstname'] = 'Vorname des*der Nutzers*in, der*die den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:fullname'] = 'Vollständiger Name des*der Nutzers*in, der*die den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:lastname'] = 'Vollständiger Name des*der Nutzers*in, der*die den LTI Consumer aufgerufen hat.';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Bewertung des*der Nutzers*in in Prozent';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Originalbewertung für den*die Nutzer*in';
$string['privacy:metadata:lti_submission:userid'] = 'ID des*der Nutzers*in der*die die LTI-Aktivität bearbeitete';
$string['privacy:metadata:role'] = 'Rolle im Kurs für den*die Nutzer*in, der*die den LTI Consumer aufgerufen hat';
$string['privacy:metadata:userid'] = 'ID des*der Nutzers*in, der*die den LTI Consumer aufgerufen hat';
$string['privacy:metadata:useridnumber'] = 'ID-Nummer des*der Nutzers*in, der*die den LTI Consumer aufgerufen hat';
$string['privacy:metadata:username'] = 'Nutzer*inname des*der Nutzers*in, der*die den LTI Consumer aufgerufen hat';
$string['resourcekey_admin_help'] = 'Der Anwenderschlüssel ist eine Art Nutzer\\*inname zur Authentifizierung gegenüber dem externen Tool. Es wird vom Tool-Anbieter vergeben, um das Moodle System eindeutig zu identifizieren Der Anwenderschlüssel wird vom Tool-Anbieter bereitgestellt. Dies kann automatisch oder nach Kontaktaufnahme mit dem Anbieter erfolgen. Tools, die keine sichere Kommunikation von Moodle erfordern oder keine zusätzlichen Dienste (z. B: Bewertungen zurück liefern) anbieten verzichten häufig auf Anwenderschlüssel.';
$string['resourcekey_help'] = 'Für vorkonfigurierte Tools ist es nicht notwendig einen Ressourcen Schlüssel einzugeben. Der Anwenderschlüssel wird bereits bei der Konfiguration eingegeben. Das Feld sollte ausgefüllt werden falls noch keine Konfiguration für das Tool erstellt wurde. Falls das Angebot dieses Anbieters mehrfach genutzt werden soll, ist die Kurs Konfiguration sinnvoll, um dich mehrfache Arbeit zu ersparen. Der Anwenderschlüssel ist eine Art Nutzer\\*inname zur Authentifizierung gegenüber dem externen Tool. Es wird vom Tool-Anbieter vergeben, um das Moodle System eindeutig zu identifizieren Der Anwenderschlüssel wird vom Tool-Anbieter bereitgestellt. Dies kann automatisch oder nach Kontaktaufnahme mit dem Anbieter erfolgen. Tools, die keine sichere Kommunikation von Moodle erfordern oder keine zusätzlichen Dienste (z. B: Bewertungen zurück liefern) anbieten verzichten häufig auf Anwenderschlüssel.';
$string['share_email_admin_help'] = 'Legen Sie fest, ob die E-Mail Adresse des\\*der Nutzers\\*in übergeben werden soll. Dies kann notwendig sein, um bestimmte Informationen im Tool anzuzeigen, oder aufgrund von Aktivitäten im externen Tool E-Mails zu versenden.';
$string['share_email_help'] = 'Diese Option legt fest, ob die Nutzer\\*in-E-Mail-Adresse an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer\\*innen können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen per E-Mails erhalten. Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['share_name_help'] = 'Diese Option legt fest, ob der vollständige Nutzer\\*inname an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer\\*innen können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen erhalten. Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['share_roster'] = 'Tool Zugriff auf Teilnehmer*innenliste geben';
$string['share_roster_admin'] = 'Tool kann auf Teilnehmer*innenliste zugreifen.';
$string['share_roster_admin_help'] = 'Festlegen, ob das Tool auf die Liste der Teilnehmer\\*innen derjenigen Kurse zugreifen darf, in denen das Tool gestartet wurde.';
$string['share_roster_help'] = 'Diese Option legt fest, ob das Tool auf die Teilnehmendenliste des Kurses zugreifen darf. Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['show_in_course_lti1_help'] = 'Dieses Tool kann in der Aktivitätsauswahl für Trainer\\*innen angezeigt werden, um es zu einem Kurs hinzuzufügen. Alternativ kann es ist im vorkonfigurierten Tool-Menü angezeigt werden, wenn ein externes Tool zu einem Kurs hinzugefügt wird. Des Weiteren kann die Tool-Konfiguration auch verwendet werden, um die genaue Tool-URL zu erfahren, wenn ein externes Tool zu einem Kurs hinzugefügt wird.';
$string['show_in_course_lti2_help'] = 'Dieses Tool kann für Trainer\\*innen in der Aktivitätsauswahl angezeigt werden, um es zu einem Kurs hinzuzufügen. Alternativ kann es ist im vorkonfigurierten Tool-Menü angezeigt werden, wenn ein externes Tool zu einem Kurs hinzugefügt wird.';
$string['tooldescription_help'] = 'Die Beschreibung des Tools, die Trainer\\*innen in der Aktivitätsliste angezeigt wird. Die Beschreibung sollte darstellen, wofür das Tool ist und was es tut. Außerdem sollte sie alle zusätzlichen Information enthalten, die die Trainer\\*innen kennen müssen.';
$string['toolproxy_help'] = 'Administrator\\*innen können hier externe Tools registrieren, die den LTI 2.0 Standard bereitstellen. Für den Beginn ist nur eine URL des Anbieters des Tools erforderlich. Die Berechtigungen und Service-Zugänge werden dann beim Anlegen einer neuen Aktivität festgelegt. Die registrierten Tools werden in vier Kategorien angezeigt: \\* \\*\\*Konfiguriert\\*\\* - Das Tool wurde angelegt, der Registrierungsprozess wurde jedoch noch nicht begonnen. \\* \\*\\*Wartend\\*\\* - Der Registrierungsprozess wurde begonnen, jedoch noch nicht abgeschlossen. Verschieben Sie die Einstellungen zurück zu \'konfiguriert\' und speichern Sie sie erneut. \\* \\*\\*Akzeptiert\\*\\* - Die Tool-Einstellungen wurden bestätigt. Die Ressourcen erscheinen unter Wartend. \\* \\*\\*Zurückgewiesen\\*\\* - Die Registrierung wurde vom Anbieter abgewiesen. Prüfen Sie die Einstellungen und verschieben Sie sie zurück in die Kategorie \'Konfiguriert\', damit der Prozess erneut starten kann.';
$string['typename_help'] = 'Die Toolbezeichnung wird verwendet, um den Toolanbieter in Moodle zu identifizieren. Die Bezeichnung wird Trainer\\*innen gezeigt, wenn sie externe Tools in ihren Kursen einbinden.';
$string['useraccountinformation'] = 'Angaben zum Nutzer*inkonto';
