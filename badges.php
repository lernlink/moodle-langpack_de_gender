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
 * @subpackage badges
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminonly'] = 'Diese Seite ist nur für Administrator*innen erlaubt!';
$string['allmethodprofile'] = 'Alle gewählten Nutzer*innenprofilfelder sind vollständig';
$string['allowexternalbackpack_desc'] = 'Wenn diese Option aktiviert ist, können Nutzer\\*innen eine Verbindung zu einem externen Backpack herstellen und ihre Badges von dieser Website freigeben. Nutzer\\*innen können außerdem festlegen, dass alle öffentlichen Badge Collections von ihrem externen Backpack auf ihrer Profilseite angezeigt werden. Es wird empfohlen, diese Option deaktiviert zu lassen, wenn Ihre Website nicht über das Internet erreichbar ist (z.B. ein lokales Moodle).';
$string['anymethodprofile'] = 'Eines der gewählten Nutzer*innenprofilfelder ist vollständig';
$string['archivehelp'] = '<p>Mit dieser Option wird der Badge \'zurückgezogen\' und erscheint nicht mehr in der Liste der Badges. Der Badge kann nicht mehr neu erworben werden. Alle diejenigen, die den Badge bereits erworben haben, können ihn weiterhin auf ihrer Profilseite anzeigen und in ihren externen Backpack exportieren.</p><p>Wenn Sie möchten, dass Nutzer*innen ihre erworbenen Badges behalten sollen, müssen Sie diese Option wählen, anstatt den Badge vollständig zu löschen.</p>';
$string['awardoncron'] = 'Der Zugriff auf die Badges wurde erfolgreich aktiviert. Zu viele Nutzer*innen können dieses Badge jetzt sofort erwerben. Um die Leistung der Website sicherzustellen, wird der Vorgang einige Zeit dauern.';
$string['awards'] = 'Empfänger*innen';
$string['backpackavailability_help'] = 'Für die Verifizierung von Badges müssen externe Backpack-Dienste auf die Website zugreifen. Im Moment scheint diese Verbindung nicht möglich zu sein, so dass verliehene Badges der Website nicht von extern verifiziert werden können. \\*\\*Warum sehe ich diese Mitteilung?\\*\\* Eventuell verhindert eine Firewall, dass jemand von außerhalb zugreifen kann. Möglicherweise ist die Website kennwortgeschützt oder ist nicht über das Internet erreichbar (z.B. ein lokales Moodle). \\*\\*Ist das ein Problem?\\*\\* Auf einer produktiven Website sollten Sie das Problem lösen. Andernfalls können Nutzer*innen nicht nachweisen, dass ein Badge auf der Website verliehen wurde. \\*\\*Was muss ich tun, wenn nicht die gesamte Website öffentlich erreichbar sein soll?\\*\\* Die einzige URL, die für die Verifizierung benötigt wird, ist [website]/badges/assertion.php. Wenn die Firewall so konfiguriert ist, dass sie den Zugriff auf dieses Skript erlaubt, funktioniert die Verifizierung von Badges.';
$string['backpackemailverifyemailbody'] = 'Guten Tag, unter Verwendung Ihrer E-Mail-Adresse wurde von \'{$a->sitename}\' eine neue Verbindung zu Ihrem Badges-Backpack angefordert. Um die Verbindung zu prüfen und zu aktivieren, klicken Sie bitte auf den nachfolgenden Link. {$a->link} In den meisten E-Mail-Programmen sollte dieser Link blau und anklickbar sein. Falls das nicht funktioniert, kopieren Sie die Adresse vollständig und fügen Sie sie in die Adresszeile Ihres Webbrowsers ein. Wenn Sie Hilfe benötigen, wenden Sie sich an die Administrator*innen der Website, {$a->admin} Ihr E-Learning-Team';
$string['backpackimport_help'] = 'Wenn die Verbindung zum Backpack erfolgreich hergestellt ist, können Badges aus Ihrem Backpack auf der Seite \'Meine Badges\' und in Ihrem Nutzendenprofil angezeigt werden. An dieser Stelle können Sie die Badge Collections auswählen, die Sie in Ihrem Profil anzeigen möchten.';
$string['badgeprivacysetting_help'] = 'Sie können erworbene Badges in Ihren Nutzendenprofil anzeigen lassen. Diese Einstellung legt fest, ob neue Badges automatisch sichtbar werden. Sie können die Sichtbarkeit eines Badge jederzeit auf der Seite \'Meine Badges\' ändern.';
$string['badgeprivacysetting_str'] = 'Meine Badges automatisch im Nutzer*innenprofil anzeigen';
$string['badgesalt'] = 'Hash-Salt für Empfänger*in-E-Mail-Adresse';
$string['badgesalt_desc'] = 'Mit Verwendung des Hash können Backpack-Dienste die Empfänger\\*innen eines Badge bestätigen, ohne deren E-Mail-Adresse zu kennen. Der Hash Salt ist eine zusätzliche Sicherung, die dem Hash hinzugefügt wird. Verwenden Sie für den Salt ausschließlich Ziffern und Buchstaben. Hinweis: Vermeiden Sie bei der Absicherung der Badge-Verifikation unbedingt, nachträglich den Salt zu ändern, wenn bereits Badges verliehen wurden.';
$string['badgestatus_0'] = 'Nicht verfügbar für Nutzer*innen';
$string['badgestatus_1'] = 'Verfügbar für Nutzer*innen';
$string['badgestatus_2'] = 'Nicht verfügbar für Nutzer*innen';
$string['badgestatus_3'] = 'Verfügbar für Nutzer*innen';
$string['bawards'] = 'Empfänger*innen ({$a})';
$string['configenablebadges'] = 'Wenn diese Option aktiviert ist, können Sie Badges erstellen und an Nutzer*innen der Website vergeben.';
$string['contact_help'] = 'Tragen Sie hier die E-Mail-Adresse des\\*der Verleihers\\*in des Badge ein.';
$string['coursecompletion'] = 'Teilnehmer*innen müssen diesen Kurs abschließen.';
$string['criteria_4_help'] = 'Dieses Kriterium ermöglicht es, dass der Badge an Teilnehmer\\*innen verliehen wird, die den Kurs abgeschlossen haben. Bei diesem Kriterium können Sie zusätzliche Parameter festlegen, z.B. eine Mindestbewertung, die im Kurs erreicht werden muss, oder ein Datum für den Kursabschlusses.';
$string['criteria_5_help'] = 'Dieses Kriterium ermöglicht es, dass der Badge an Nutzer\\*innen verliehen wird, die mehrere Kurse abgeschlossen haben. Für jeden dieser Kurse können Sie zusätzliche Parameter festlegen, z.B. eine Mindestbewertung, die im Kurs erreicht werden muss, oder ein Datum für den Kursabschlusses.';
$string['criteria_6'] = 'Vervollständigung des Nutzer*innenprofils';
$string['criteria_6_help'] = 'Dieses Kriterium ermöglicht es, die Verleihung eines Badge daran zu knüpfen, dass bestimmte Profilfelder im Nutzendenprofil vervollständigt wurden. Das können Standardprofilfelder oder selbst definierte Profilfelder sein.';
$string['criteria_9_help'] = 'Ermöglicht die Vergabe eines Badges an Nutzer\\*innen basierend auf den von ihnen abgeschlossenen Kompetenzen.';
$string['criteria_descr'] = 'Nutzer*innen erhalten den Badge, wenn sie folgende Bedingung erfüllen:';
$string['criteria_descr_0'] = 'Nutzer*innen erhalten den Badge, wenn sie <strong>{$a}</strong> folgenden Bedingungen erfüllen:';
$string['criteria_descr_2'] = 'Dieser Badge muss von Nutzer*innen mit <strong>{$a}</strong> Rollen verliehen werden:';
$string['criteria_descr_4'] = 'Teilnehmer*innen müssen den Kurs abschließen.';
$string['criteria_descr_6'] = '<strong>{$a}</strong> folgenden Nutzer*innenprofilfelder müssen vervollständigt sein:';
$string['criteria_descr_single_2'] = 'Dieser Badge muss von Nutzer*innen mit folgender Rolle verliehen werden:';
$string['criteria_descr_single_4'] = 'Teilnehmer*innen müssen den Kurs abschließen';
$string['criteria_descr_single_6'] = 'Das folgende Nutzer*innenprofilfeld muss vervollständigt sein:';
$string['criterror_help'] = 'Die Übersicht zeigt alle Parameter, die ursprünglich mit diesem Badge verbunden waren, aber nicht mehr verfügbar sind. Diese Parameter sollten deaktiviert werden, damit Nutzer\\*innen diesen Badge in Zukunft überhaupt erlangen können.';
$string['defaultissuercontact'] = 'E-Mail-Adresse des*der Badge-Verleihers*in';
$string['defaultissuercontact_desc'] = 'Tragen Sie hier eine E-Mail-Adresse ein, die mit dem\\*der Badge-Verleiher\\*in verknüpft ist. Für ein Open-Badge-Backpack 2.0 dient diese der Authentifizierung, wenn Badges in ein Backpack veröffentlicht werden.';
$string['defaultissuername'] = 'Name des*der Badge-Verleihers*in';
$string['defaultissuername_desc'] = 'Tragen Sie hier einen Namen ein, den Verleiher\\*innen von Badges auf der Website verwendet wird (z.B. den Namen der verleihenden Institution).';
$string['defaultissuerpassword'] = 'Kennwort des*der Badge-Verleihers*in';
$string['defaultissuerpassword_help'] = 'Auf der Backpack-Website ist ein Konto mit der E-Mail-Adresse erforderlich, die in der Einstellung für die E-Mail-Adresse des\\*der Badge-Verleihers\\*in unter "Website-Administration / Badges / Badge-Einstellungen angegeben ist. Das Kennwort für das Konto sollte hier eingegeben werden.';
$string['deletehelp'] = '<p>Vollständiges Löschen von Badges führt dazu, dass alle verliehenen Badges verschwinden und nicht mehr verfügbar sind. Löschen bedeutet, sie endgültig zu entfernen.</p><p>Hinweis: Wenn Nutzer*innen vor dem Löschen einen Badge exportiert haben, bleibt dieser erhalten. Der Link zur Prüfseite, wo der Badge herkommt, wird jedoch beim Löschen entfernt und kann nicht mehr genutzt werden.</p>';
$string['donotaward'] = 'Derzeit ist der Badge nicht verfügbar, d.h. er kann nicht an Nutzer*innen verliehen werden. Wenn Sie den Badge verleihen wollen, müssen Sie ihn aktivieren. Klicken Sie dazu auf die Taste \'\'Zugriff erlauben\'\'.';
$string['error:cannotawardbadge'] = 'Der Badge kann nicht an Nutzer*in verliehen werden.';
$string['error:cannotrevokebadge'] = 'Das Badge kann von Nutzer*in nicht zurückgezogen werden.';
$string['error:guestuseraccess'] = 'Sie sind im Moment als Gast angemeldet. Um Badges zu sehen, müssen Sie sich mit Ihren Nutzer*innendaten anmelden.';
$string['error:nopermissiontoview'] = 'Sie haben kein Recht, Empfänger*innen mit dem Badge zu sehen.';
$string['error:nosuchfield'] = 'Warnung: Dieses Nutzer*innenprofilfeld existiert nicht mehr.';
$string['error:nosuchuser'] = 'Die Person mit dieser E-Mail-Adresse hat kein Nutzer*inkonto beim aktuellen Backpack-Dienst.';
$string['error:userdeleted'] = '{$a->user} (Dieses Nutzer*innenkonto wurde in {$a->site} gelöscht)';
$string['existingrecipients'] = 'Vorhandene Empfänger*innen';
$string['issuerdetails'] = 'Verleiher*in';
$string['issuername'] = 'Verleiher*in';
$string['issuername_help'] = 'Tragen Sie hier den Namen des\\*der Verleihers\\*in oder der verleihenden Institution ein.';
$string['issuerurl'] = 'URL von Verleiher*in';
$string['localbadgesh_help'] = 'Diese Seite zeigt alle Badges, die Ihnen auf dieser Website für den Abschluss von Kursen, Aktivitäten oder anderer Kriterien verliehen wurden. Sie können für Ihre Badges einstellen, welche in Ihrem Nutzendenprofil angezeigt werden sollen und welche nicht. Sie können alle oder einzelne Badges herunterladen und auf Ihrem Computer speichern. Heruntergeladene Badges können zu externen Backpack-Diensten hinzugefügt werden.';
$string['nobackpack'] = 'Mit diesem Nutzer*innenkonto ist kein Backpack-Dienst verbunden.<br/>';
$string['notification'] = 'Ersteller*in benachrichtigen';
$string['notification_help'] = 'Diese Einstellung legt fest, wie Ersteller\\*innen benachrichtigt werden, wenn der Badge verliehen wird. Folgende Optionen sind möglich: \\* \\*\\*Nie\\*\\*: Keine Nachrichten. \\* \\*\\*Jederzeit\\*\\*: Nachricht, sobald der Badge verliehen wird. \\* \\*\\*Täglich\\*\\*: Nachricht einmal täglich. \\* \\*\\*Wöchentlich\\*\\*: Nachricht einmal wöchentlich. \\* \\*\\*Monatlich\\*\\*: Nachricht einmal monatlich.';
$string['potentialrecipients'] = 'Mögliche Empfänger*innen';
$string['privacy:metadata:backpack'] = 'Datensatz von Nutzer*innen-Backpacks (Badges)';
$string['privacy:metadata:external:backpacks:issuer'] = 'Information zum*zur Verleiher*in';
$string['recipientdetails'] = 'Empfänger*innendetails';
$string['recipientidentificationproblem'] = 'Empfänger*in für diesen Badge kann unter den vorhandenen Nutzer*innen nicht gefunden werden.';
$string['recipients'] = 'Empfänger*innen';
$string['recipientvalidationproblem'] = 'Nutzer*in kann nicht als Empfänger*in des Badge verifiziert werden.';
$string['reviewconfirm'] = '<p>Hiermit machen Sie Ihren Badge für Nutzer*innen sichtbar und erlauben ihnen den Erwerb.</p> <p>Möglicherweise haben Nutzer*innen bereits früher die Kriterien für den Badge erfüllt. Ihnen wird der Badge nun umgehend zugewiesen.</p> <p>Sobald der Badge einmal verliehen wurde, wird er <strong>gesperrt</strong>.</p> <p>Möchten Sie für den Badge \'{$a}\' nun den Zugriff aktivieren?</p>';
$string['sitebackpack_help'] = 'Der externe Backpack, mit dem Nutzer\\*innen von dieser Website aus eine Verbindung herstellen können. Wenn Sie diese Einstellung ändern, nachdem Nutzer\\*innen ihre Backpacks verbunden haben, müssen alle Nutzer*innen ihre Backpack-Einstellungen aufrufen, die Verbindung trennen und dann wieder neu herstellen.';
$string['sitebadges_help'] = 'Website-Badges können nur für systemweite Leistungen verliehen werden, wie z.B. das Abschließen mehrerer Kurse oder die Vervollständigung des Nutzendenprofils. Website-Badges können auch manuell von einer Person an eine andere verliehen werden. Badges für kursbezogene Leistungen müssen für den jeweiligen Kurs angelegt werden. Sie finden die entsprechenden kursbezogenen Badges unter \'Kurs-Administration > Badges\'.';
$string['statusmessage_0'] = 'Dieser Badge ist derzeit für Nutzer*innen nicht verfügbar. Klicken Sie auf \'\'Zugriff aktivieren\'\', damit der Badge von Nutzer*innen erworben werden kann.';
$string['statusmessage_1'] = 'Dieser Badge ist derzeit für Nutzer*innen verfügbar. Klicken Sie auf \'\'Zugriff verhindern\'\', wenn Sie Änderungen vornehmen möchten.';
$string['statusmessage_2'] = 'Dieser Badge ist derzeit für Nutzer*innen nicht verfügbar und seine Kriterien sind gesperrt. Klicken Sie auf \'\'Zugriff aktivieren\'\', damit er wieder von Nutzer*innen erworben werden kann.';
$string['statusmessage_3'] = 'Dieser Badge ist derzeit für Nutzer*innen verfügbar und seine Kriterien sind gesperrt.';
$string['status_help'] = 'Der Status eines Badge legt fest, wie er verwendet werden kann: \\* \\*\\*Verfügbar\\*\\*: Der Badge kann von Nutzer\\*innen erworben werden. Während ein Badge verfügbar ist, können keine Änderungen an den Kriterien vorgenommen werden. \\* \\*\\*Nicht verfügbar\\*\\*: Der Badge kann nicht erworben und auch nicht manuell verliehen werden. Solange ein Badge nicht verliehen wurde, können seine Kriterien verändert werden. Sobald ein Badge einmal verliehen wurde, wird er automatisch \\*\\*gesperrt\\*\\*. Gesperrte Badges können weiterhin erworben werden, die Kriterien sind aber nicht mehr änderbar. Falls Sie Details oder Kriterien eines gesperrten Badges bearbeiten möchten, können Sie den Badge duplizieren und dann alle Einstellungen vornehmen. \\*Warum werden Badges gesperrt?\\* Wir möchten sicherstellen, dass immer dieselbe Leistung erbracht werden muss, um den Badge zu erwerben. Derzeit ist es nicht möglich, einmal erworbene Badges zurückzuziehen. Wenn die Kriterien für Badges nachträglich geändert werden könnten, würden Nutzer*innen mit dem gleichen Badge möglicherweise ganz andere Anforderungen erfüllt haben.';
$string['variablesubstitution_help'] = 'In der Mitteilung, die an Badge-Empfänger\\*innen versendet wird, stehen verschiedene Platzhalter im Text bzw. im Betreff. Diese Platzhalter werden automatisch durch geeignete Werte ersetzt, wenn die Mitteilung erzeugt und versendet wird. Das funktioniert jedoch nur, wenn die Syntax genau so wie nachfolgend beschrieben verwendet wird: %badgename% : An dieser Stelle wird der Name des Badge eingesetzt. %username% : An dieser Stelle wird der vollständige Name der Person eingesetzt, die den Badge erworben hat. %badgelink% : An dieser Stelle wird die öffentliche URL zu einer Seite eingesetzt, die Informationen zum Badge anzeigt.';
