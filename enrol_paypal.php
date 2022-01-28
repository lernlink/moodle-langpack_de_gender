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
 * @package    enrol
 * @subpackage paypal
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enrolenddate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer\\*innen nur bis zu diesem Zeitpunkt eingeschrieben werden.';
$string['enrolstartdate_help'] = 'Wenn diese Option aktiviert ist, können Nutzer\\*innen ab diesem Zeitpunkt eingeschrieben werden.';
$string['expiredaction_help'] = 'Wählen Sie die Aktionen, die beim Ablauf der Kurseinschreibung ausgeführt werden sollen. Beim Austragen des\\*der Nutzers\\*in aus dem Kurs werden einige Nutzer\\*indaten und Einstellungen entfernt.';
$string['mailstudents'] = 'Teilnehmer*innen benachrichtigen';
$string['mailteachers'] = 'Trainer*innen benachrichtigen';
$string['paypal:manage'] = 'Eingeschriebene Nutzer*innen verwalten';
$string['paypal:unenrol'] = 'Nutzer*innen aus dem Kurs abmelden';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'E-Mail-Adresse oder Paypal-Account-ID des*der Zahlungsempfängers*in';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Eine Notiz, die der*die zahlende Teilnehmer*in während des Zahlungsvorgang auf der Paypal-Seite hinterlegt hat';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Primäre E-Mail-Adresse des*der Zahlungsempfängers*in';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Eindeutige Paypal Account-ID des*der Zahlungsempfängers*in';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID des*der Nutzers*in, der Kurs gebucht hat';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Das Paypal-Einschreibungsplugin überträgt Nutzer*indaten an Paypal.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Stadt des*der kaufenden Nutzers*in';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Land des*der kaufenden Nutzers*in';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Semikolongetrennte Liste mit der ID des*der Nutzers*in (Käufer), ID des Kurses, ID der Einschreibeinstanz.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'E-Mail-Adresse des*der kaufenden Nutzers*in.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Vorname des*der kaufenden Nutzers*in.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Nachname des*der kaufenden Nutzers*in.';
$string['status_desc'] = 'Nutzer\\*innen erlauben, PayPal zur Kurseinschreibung zu benutzen.';
