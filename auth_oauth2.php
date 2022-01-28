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
 * @package    auth
 * @subpackage oauth2
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Es existiert bereits ein*e Nutzer*in mit diesem Benutzer*innamen. Falls es sich dabei um Ihren Nutzer*inaccount handelt, melden Sie sich bitte mit Ihrem Benutzer*innamen und Kennwort an und fügen Sie ihn über Ihre Favoritenseite als verbundenen Login hinzu.';
$string['alreadylinked'] = 'Dieser externe Account ist bereits mit einem Nutzer*innenkonto auf dieser Seite verknüpft.';
$string['confirmaccountemail'] = 'Guten Tag {$a->fullname}, auf \'{$a->sitename}\' wurde ein neuer Account mit Ihrer E-Mailadresse angelegt. Bitte folgen Sie diesem Link, um das neue Profil zu bestätigen: {$a->link} In den meisten E-Mail-Programmen sollte dieser Link in blau angezeigt werden, so dass Sie ihn anklicken können. Sollte dies nicht der Fall sein, kopieren Sie bitte den Link und fügen ihn in der Adresszeile Ihres Browserfensters ein. Falls Sie Hilfe benötigen, kontaktieren Sie bitte den*die Administrator*in der Website, {$a->admin} Ihr E-Learning-Team';
$string['confirmaccountemailsubject'] = '{$a}: Bestätigung für das Nutzer*innenkonto';
$string['confirmationpending'] = 'Dieses Nutzer*innenkonto wartet auf eine E-Mail-Bestätigung.';
$string['confirmlinkedloginemail'] = 'Guten Tag {$a->fullname}, unter Angabe Ihrer E-Mail-Adresse wurde eine Anfrage gestellt, das {$a->issuername}-Login \'{$a->linkedemail}\' mit Ihrem Nutzer*inkonto auf \'{$a->sitename}\' zu verbinden. Bestätigen Sie über diesen Link die Anfrage zum Verbinden mit Ihrem Nutzer*inkonto: {$a->link} In den meisten E-Mail-Programmen sollte dieser Link in blau angezeigt werden und anklickbar sein. Sollte dies nicht der Fall sein, kopieren Sie bitte den Link und fügen Ihn in der Adresszeile Ihres Browserfensters ein. Falls Sie Hilfe benötigen, kontaktieren Sie bitte Administrator*innen der Website, {$a->admin} Ihr E-Learning-Team
Hi {$a->fullname}, A request has been made to link the {$a->issuername} login {$a->linkedemail} to your account at \'{$a->sitename}\' using your email address. To confirm this request and link these logins, please go to this web address: {$a->link} In most mail programs, this should appear as a blue link which you can just click on. If that doesn\'t work, then cut and paste the address into the address line at the top of your web browser window. If you need help, please contact the site administrator, {$a->admin} If you did not do this, someone else could be trying to compromise your account. Please contact the site administrator immediately.
auth_oauth2/confirmlinkedloginemail';
$string['createaccountswarning'] = 'Dieses Authentifizierungsplugin ermöglicht es Nutzer*innen, ein Nutzerkonto auf Ihrer Seite anzulegen. Wenn Sie dieses Plugin verwenden, sollten Sie die Einstellung \'authpreventaccountcreation\' aktivieren.';
$string['createnewlinkedlogin'] = 'Neues Nutzer*innenkonto ({$a}) verlinken';
$string['emailconfirmlink'] = 'Ihre Nutzer*innenkonten verlinken';
$string['emailconfirmlinksent'] = '<p>Zu dieser E-Mail-Adresse wurde ein bereits existierendes Nutzer*innenkonto gefunden, das jedoch bisher noch nicht verlinkt ist.</p> <p>Die Nutzer*innenkonten müssen verlinkt werden, bevor Sie sich einloggen können.</p> <p>Eine E-Mail sollte an Ihre Emailadresse bei <b>{$a}</b> versandt worden sein.</p> <p>Diese E-Mail enthält einfache Anweisungen, wie Sie Ihre Nutzer*innenkonten miteinander verbinden.</p> <p>Kontaktieren Sie die Administrator*innen der Website, falls Probleme auftreten.</p>';
$string['emailpasswordchangeinfo'] = 'Hallo {$a->firstname}, jemand (wahrscheinlich Sie) hat ein neues Kennwort für Ihr Nutzer*innenkonto auf "{$a->sitename}" angefordert. Ihr Kennwort kann jedoch nicht zurückgesetzt werden, da Sie Ihr Nutzer*inkonto zur Anmeldung auf einer anderen Website nutzen. Bitte melden Sie sich wie bisher über den Link auf der Anmeldeseite an. {$a->admin}';
$string['info'] = 'Externes Nutzer*innenkonto';
$string['loginerror_cannotcreateaccounts'] = 'Ein Nutzer*innenkonto mit dieser E-Mail-Adresse konnte nicht gefunden werden.';
$string['loginerror_nouserinfo'] = 'Es wurden keine Nutzer*inneninfos zurückgegeben. Der OAuth 2 Service ist möglicherweise falsch konfiguriert.';
$string['loginerror_userincomplete'] = 'Die zurückgegebenen Nutzer*inneninfos enthalten keinen Nutzer*innennamen und keine E-Mail-Adresse. Der OAuth 2 Service ist möglicherweise falsch konfiguriert.';
$string['notwhileloggedinas'] = 'Weitere Logins können nicht verwaltet werden, wenn Sie mit einem anderen Nutzer*innenkonto eingeloggt sind.';
$string['oauth2:managelinkedlogins'] = 'Weitere eigene verlinkte Nutzer*innenkonten verwalten';
$string['plugindescription'] = 'Dieses Authentifizierungs-Plugin zeigt auf der Anmeldeseite eine Liste der konfigurierten Identity Provider. Mit der Auswahl des Identity Provider können Nutzer*innen sich mit ihren Anmeldedaten eines OAuth 2 Providers anmelden.';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'OAuth2-Accounts, die mit einem Moodle-Nutzer*innenaccount verbunden sind.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Zeitstempel mit dem der*die Nutzer*in mit dem OAuth2-Login verknüpft wurde.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID des*der Nutzers*in, der diesen Account bearbeitet hat.';
$string['privacy:metadata:auth_oauth2:username'] = 'Der externe Nutzer*innenname, der mit diesem Account verbunden ist.';
