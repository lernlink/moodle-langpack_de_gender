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
 * @package    block
 * @subpackage coupon
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirm_coupons_sent_body'] = 'Hallo,<br /><br /> Wir haben die Gutscheine, die Sie am {$a->timecreated} erstellt haben, versendet.<br /><br /> Mit freundlichen Grüßen,<br /><br /> Moodle Administrator*in';
$string['coupon_mail_csv_content'] = 'Hallo ##to_gender## ##to_name##,<br /><br /> Sie sind in unserem Kurs ##course_fullnames## eingeschrieben. Während des Kurses haben Sie Zugriff auf unser online Lernsystem : ##site_name##.<br /><br /> In diesem Lernsystem bekommen Sie, abgesehen von Kursunterlagen, auch Möglichkeiten, sich mit anderen Teilnehmern*innen zu vernetzen. Der Kurs fängt mit vorbereitenden Aufgaben an. Wir bitten Sie, diese Aufgaben spätestens 3 Arbeitstage vor dem Kursanfang genauer anzuschauen. So können Sie und der*die Dozent*in sich ordentlich auf den Kurs vorbereiten.<br /><br /> Alle Kursunterlagen werden Ihnen spätestens 4 Tage vor dem Kursanfang zur Verfügung stehen. Möglicherweise fügt der*die Dozent*in später weitere Unterlagen hinzu, z.B. nach einer Präsenzeinheit. In einem solchen Fall werden Sie die Unterlagen auch hier im Lernsystem wiederfinden. Während den Treffen werden keine Papierunterlagen verteilt. Wir empfehlen, ein Laptop oder Tablet mitzubringen. <br /><br /> Der Gutschein für den Kurs ist als Anhang angefügt. Dieser Gutschein ist persönlich und einmalig. Er verleiht Ihnen Zugang zu den passenden Kursen für Ihre Ausbildung. Lesen Sie die Anweisungen auf dem Gutschein bitte sorgfältig.<br /><br /> Sollten Sie noch Fragen haben über das Anmelden oder über sonstige Probleme, können Sie unseren Helpdesk kontaktieren. Informationen dazu finden Sie in unserem Lernsystem. Wenn unser Helpdesk nicht besetzt sein sollte, bitten wir Sie, Ihren Namen, Mailadresse und Telefonnummer anzugeben. Wir werden uns dann so schnell wie möglich melden.<br /><br /> Viel Erfolg mit dem Kurs.<br /><br /> Mit freundlichen Grüßen,<br /><br /> ##site_name##';
$string['coupon_mail_csv_content_cohorts'] = 'Hallo ##to_gender## ##to_name##,<br /><br /> Sie sind in unserem Kurs ##course_fullnames## eingeschrieben. Während des Kurses haben Sie Zugriff auf unser online Lernsystem : ##site_name##.<br /><br /> In diesem Lernsystem bekommen SIe, abgesehen von Kursunterlagen, auch Möglichkeiten, sich mit anderen Teilnehmern*innen zu vernetzen. Der Kurs fängt mit vorbereitenden Aufgaben an. Wir bitten Sie, diese Aufgaben spätestens 3 Arbeitstage vor dem Kursanfang genauer anzuschauen. So können Sie und der*die Dozent*in sich ordentlich auf den Kurs vorbereiten.<br /><br /> Alle Kursunterlagen werden Ihnen spätestens 4 Tage vor dem Kursanfang zur Verfügung stehen. Möglicherweise fügt der*die Dozent*in später weitere Unterlagen hinzu, z.B. nach einer Präsenzeinheit. In einem solchen Fall werden Sie die Unterlagen auch hier im Lernsystem wiederfinden. Während den Treffen werden keine Papierunterlagen verteilt. Wir empfehlen, ein Laptop oder Tablet mitzubringen. <br /><br /> Der Gutschein für den Kurs ist als Anhang angefügt. Dieser Gutschein ist persönlich und einmalig. Er verleiht Ihnen Zugang zu den passenden Kursen für Ihre Ausbildung. Lesen Sie die Anweisungen auf dem Gutschein bitte sorgfältig.<br /><br /> Sollten Sie noch Fragen haben über das Anmelden oder über sonstige Probleme, können Sie unseren Helpdesk kontaktieren. Informationen dazu finden Sie in unserem Lernsystem. Wenn unser Helpdesk nicht besetzt sein sollte, bitten wir Sie, Ihren Namen, Mailadresse und Telefonnummer anzugeben. Wir werden uns dann so schnell wie möglich melden.<br /><br /> Viel Erfolg mit dem Kurs.<br /><br /> Mit freundlichen Grüßen,<br /><br /> ##site_name##';
$string['coupon_recipients_desc'] = 'Die folgenden Spalten müssen in der hochgeladenen CSV-Datei vorhanden sein (die Reihenfolge ist nicht wichtig): E-Mail, Geschlecht, Name.<br/> Für jede Person in der CSV, wird ein Gutschein erstellt und dem*der Teilnehmer\\*in zugeschickt.<br/> Beachten Sie, dass diese Gutscheine von einem Hintergrundprogramm asynchron erstellt werden. Sie werden <i>nicht</i> sofort verfügbar sein. Der Grund dafür ist, dass die Erstellung von Gutscheinen lange dauern kann, besonders wenn mehrere Gutscheine für mehrere Teilnehmer erstellt werden sollen.';
$string['error:coupon_reserved'] = 'Der Gutschein mit dieser Nummer wurde für eine*n andere*n Teilnehmer*in ausgestellt.';
$string['error:recipients-empty'] = 'Bitte mindestens eine*n Teilnehmer*in eingeben.';
$string['label:api_user'] = 'API Benutzer*inname';
$string['label:api_user_desc'] = 'Der API Benutzendenname wird gebraucht, um mit Hilfe des API einen Gutschein zu erstellen.';
$string['label:coupon_cohorts_help'] = 'Wählen Sie eine globale Gruppe (oder mehrere) zu denen Ihre Teilnehmer\\*innen gehören sollen.';
$string['label:coupon_connect_course_help'] = 'Wählen Sie alle Kurse, die zu der globalen Gruppe gehören sollen. <br /><b><i>Beachte: </i></b>Alle Teilnehmer\\*innen, die bereits zu dieser globalen Gruppe gehören, werden ebenfalls automatisch in die genannten Kurse eingeschrieben!';
$string['label:coupon_courses_help'] = 'Wählen Sie alle Kurse in die Ihre Teilnehmer\\*innen eingeschrieben werden sollen.';
$string['label:coupon_groups_help'] = 'Wählen Sie die Gruppen, zu denen Ihre Teilnehmer\\*innen gehören sollen, wenn sie in die Kurse eingeschrieben werden.';
$string['label:coupon_recipients'] = 'Empfänger*in';
$string['label:coupon_recipients_help'] = 'Mit diesem Feld können Sie eine CSV-Datei mit Teilnehmendendaten hochladen.';
$string['label:coupon_recipients_txt'] = 'Empfänger*in';
$string['label:coupon_recipients_txt_help'] = 'In diesem Feld können Sie letzte Änderungen an der hochgeladenen CSV-Datei vornehmen.';
$string['label:date_send_coupons_help'] = 'Datum, an dem die Gutscheine an den\\*die Empfänger*in oder die Empfänger\\*innen geschickt werden.';
$string['label:enrolment_period_help'] = 'Dauer (in Tagen) bevor der\\*die Teilnehmer*in automatisch aus dem Kurs ausgeschrieben wird. Wenn 0 eingestellt ist, wird der*die Teilnehmer\\*in nie ausgeschrieben.';
$string['label:redirect_url_help'] = 'Die Adresse, an die die Teilnehmer\\*innen weitergeleitet werden, nachdem sie ihren Gutschein eingelöst haben.';
$string['report:heading:user'] = 'Nutzer*in';
$string['report:owner'] = 'Eigner*in';
$string['showform-manual'] = 'Ich möchte die Empfänger*innen manuell konfigurieren';
$string['th:owner'] = 'Eigner*in';
