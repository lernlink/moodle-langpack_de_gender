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
 * @subpackage quiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adaptive_help'] = 'Mit dieser Funktion wird es möglich eine Frage mehrfach innerhalb eines Testversuchs zu beantworten. Ist eine Frage falsch bewertet, können Teilnehmer\\*innen diese direkt nochmals beantworten. Ist die Option \'Punktabzüge\' aktiviert werden diese berücksichtigt.';
$string['addarandomquestion_help'] = 'Eine Zufallsfrage wird zufällig aus allen Fragen der gewählten Kategorie ausgewählt. Das führt dazu, dass verschiedene Teilnehmer\\*innen eine unterschiedliche Auswahl von Fragen im Test zur Beantwortung erhalten. Falls mehrere Versuche beim Test erlaubt sind, werden bei jedem Versuch die Fragen erneut zufällig gewählt.';
$string['addnewuseroverride'] = 'Nutzer*inänderung hinzufügen';
$string['attemptselection'] = 'Welche Versuche pro Nutzer*in analysieren:';
$string['attemptsonly'] = 'Nur Teilnehmer*innen anzeigen, die bereits Versuche durchgeführt haben.';
$string['autosaveperiod_desc'] = 'Teilnehmer\\*innenantwort können während der Testversuche regelmäßig automatisch gesichert werden. Bei jeder Eingabe einer Änderung erfolgt eine Sicherung und nach dem hier eingegebenen Zeitwert. Dies erhöht die Serverlast, verhindert aber den Verlust von Antworten. Prüfen Sie die entstehende Serverlast und passen Sie dann den Wert auf einer akzeptables Mass an. Der Eintrag \'0\' deaktiviert die automatische Sicherung.';
$string['bothattempts'] = 'Teilnehmer*innen mit und ohne durchgeführte Versuche anzeigen';
$string['completionattemptsexhausted_help'] = 'Der Test wird als abgeschlossen markiert, wenn Teilnehmer\\*innen die maximale Anzahl von Versuchen erreichen.';
$string['completionpassdesc'] = 'Teilnehmer*in muss eine Bestehensgrenze erreichen, um diese Aktivität abzuschließen';
$string['completionpass_help'] = 'Diese Option legt fest, dass diese Aktivität als abgeschlossen gilt, wenn Teilnehmer\\*innen eine Bestehensgrenze erreicht haben. Diese wird im Abschnitt \'Bewertung\' bei den Testeinstellungen festgelegt.';
$string['configadaptive'] = 'Wenn die Option \'Ja\' gewählt ist, besteht für die Teilnehmer*innen die Möglichkeit, während eines Testversuches mehrere Antworten auf eine Frage zu geben.';
$string['configdelay1'] = 'Wählen Sie eine Zeitverzögerung, wenn Sie möchten, dass Teilnehmer*innen vor einem weiteren Versuch ein Pause einhalten sollen.';
$string['configdelay1st2nd'] = 'Wenn Sie eine Zeitverzögerung aktivieren, können Teilnehmer*innen einen zweiten Testversuch erst nach der eingegeben Zeit durchführen.';
$string['configdelay2'] = 'Wählen Sie eine Zeitverzögerung, wenn Sie möchten, dass Teilnehmer*innen vor einem dritten oder weiteren Versuch ein Pause einhalten sollen.';
$string['configdelaylater'] = 'Wenn Sie eine Zeitverzögerung aktivieren, können Teilnehmer*innen einen weiteren Testversuch erst nach der eingegeben Zeit durchführen.';
$string['configgrademethod'] = 'Welche Methode soll zur Berechnung der Teilnehmer*innenbewertung im Test herangezogen werden, wenn mehrere Versuche erlaubt sind?';
$string['configrequirepassword'] = 'Teilnehmer*innen müssen ein Kennwort eingeben, bevor sie den Test durchführen können.';
$string['configrequiresubnet'] = 'Teilnehmer*innen können den Test nur von diesen Computern aus durchführen.';
$string['configreviewoptions'] = 'Diese Einstellungen geben an, welche Informationen angezeigt werden, wenn Nutzer*innen einen Testversuch oder den Testbericht überprüfen.';
$string['configshowuserpicture'] = 'Nutzer*innenbild anzeigen, während ein Versuch läuft';
$string['configshufflewithin'] = 'Wenn diese Option aktiviert ist, werden die Teile, die die individuellen Fragen darstellen, jedes Mal zufällig gewählt, wenn ein*e Teilnehmer*in einen Versuch dieses Tests startet, vorausgesetzt, dass die Auswahl auch in den Frage-Einstellungen ermöglicht wird.';
$string['generalfeedback_help'] = 'Das allgemeine Feedback besteht aus dem Text, den die Teilnehmer\\*innen nach dem Versuch sehen, eine Frage zu beantworten. Anders als das Feedback, das vom Fragetyp und der Nutzer\\*innenantwort abhängt, wird der Text des allgemeinen Fragen-Feedbacks allen Teilnehmer\\*innen gezeigt.';
$string['graceperiodmin_desc'] = 'Wenn für alle Teilnehmer\\*innen der Test zum gleichen Zeitpunkt endet, sind u.U. sehr viele Daten auf einmal abzuspeichern. Daher kann ein Zeitraum festgelegt werden für den das Abspeichern der Testdaten noch zulässig ist, obwohl der Zeitraum eigentlich abgelaufen ist. Die Länge des erforderlichen Zeitraums hängt von der Teilnehmer\\*innenzahl und vom Testumfang ab, sowie der Leistungsstärke des Servers. Der Wert wird in Sekunden eingegeben. Damit wird verhindert. dass es zu Problemen beim Abspeichern der Eingaben durch Serverengpässe kommt.';
$string['grademethod_help'] = 'Wenn mehrere Versuche erlaubt sind, gibt es unterschiedliche Möglichkeiten, eine abschließende Bewertung für die Teilnehmer\\*innen festzulegen: \\* Beste Bewertung aus allen Versuchen \\* Durchschnitt aus allen Versuchen \\* Erster Versuch (alle weiteren Versuche werden ignoriert) \\* Letzter Versuch (alle weiteren Versuche werden ignoriert)';
$string['inactiveoverridehelp'] = '* Diese Nutzer*innenänderung ist inaktiv, weil kein Zugang zur Aktivität besteht. Das kann aufgrund der Gruppenzugehörigkeit oder Rolle sein, aufgrund anderer Zugriffsbeschränkungen oder weil die Aktivität verborgen ist.';
$string['messageprovider:submission'] = 'Systemnachricht bei Testabgaben von Teilnehmer*innen';
$string['modulename_help'] = 'Führen Sie im Kurs Ihre eigenen Tests durch. Legen Sie den Ablauf des Tests für Teilnehmer\\*innen fest und erstellen Sie Ihre Testfragen. Wählen Sie aus verschiedenen Testfragetypen, darunter Multiple-Choice-Fragen, Zuordnungs-Fragen, Kurzantworten und numerische Fragen aus und geben Sie richtige und falsche Antworten für die automatische Bewertung ein. Ein Feedback zu den Fragen und Antwortoptionen gibt den Teilnehmer\\*innen Hilfe bei der eigenen Auswertung des abgeschlossenen Tests. Hinweis: Tests werden unterschiedlich eingesetzt und haben sehr umfangreiche Einstelloptionen. Jeder Versuch wird automatisch bewertet, mit Ausnahme von Freitextfragen, und die Endnote wird in den Bewertungen festgehalten. Eine Test-Aktivität kann verwendet werden \\* Als Prüfung im Kurs \\* Als Mini-Test für Leseaufträge oder am Ende eines Themas \\* Als Prüfungsübung mit Fragen aus vergangenen Prüfungen \\* Um unmittelbares Feedback zur Leistung zu geben \\* Als Selbsttest zur Selbsteinschätzung';
$string['navmethod_help'] = 'Wenn die vorgegebene Navigation aktiviert ist, müssen Teilnehmer\\*innen den Test in der definierten Reihenfolge abarbeiten, dürfen keine Seiten zurückgehen und keine Seiten überspringen.';
$string['noconnection'] = 'Es gibt derzeit keine Verbindung zu einem Webservice, der diese Frage beantworten kann. Nehmen Sie Kontakt mit dem*der Administrator*in auf.';
$string['notavailabletostudents'] = 'Hinweis: Dieser Test steht den Teilnehmer*innen zur Zeit nicht zur Verfügung.';
$string['noview'] = 'Angemeldete Nutzer*innen dürfen diesen Test nicht sehen';
$string['onlyteachersexport'] = 'Nur Trainer*innen können Fragen exportieren';
$string['onlyteachersimport'] = 'Nur Trainer*innen mit Bearbeitungsrecht können Fragen importieren';
$string['overduehandling_desc'] = 'Grundeinstellung für den Test wenn Teilnehmer\\*innen einen Testversuch nicht abschließen bevor der Zeitraum abgelaufen ist.';
$string['overduehandling_help'] = 'Die Einstellung legt fest, was passiert, wenn Teilnehmer\\*innen den Test nicht rechtzeitig abschließen. Wenn die Teilnehmer\\*innen zu diesem Zeitpunkt aktiv am Test arbeiten, wird der aktuelle Bearbeitungsstand automatisch abgegeben. Sind sie nicht angemeldet, so entscheidet diese Einstellung.';
$string['overridedeleteusersure'] = 'Sind Sie sicher, dass Sie die Änderung für Nutzer*in {$a} löschen möchten?';
$string['overrideuser'] = 'Nutzer*in ändern';
$string['popupnotice'] = 'Teilnehmer*innen sehen den Test in einem sicheren Fenster.';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'Seite, die Nutzer*in gerade bearbeitet';
$string['privacy:metadata:quiz_grades:userid'] = 'Nutzer*in, der*die bewertet wurde';
$string['privacy:metadata:quiz_overrides:userid'] = 'Nutzer*in, der*die überschrieben wurde';
$string['questiondeleted'] = 'Diese Frage wurde gelöscht. Fragen Sie bitte Ihre Trainer*innen.';
$string['quiz:emailnotifysubmission'] = 'Systemnachricht bei Testabgaben von Teilnehmer*innen empfangen';
$string['quizopenclose_help'] = 'Teilnehmer\\*innen dürfen ihre Versuche nach dem Beginn anfangen und müssen sie vor den Ende beendet haben.';
$string['removealluseroverrides'] = 'Alle Nutzer*inänderungen löschen';
$string['reportmulti_q_x_student'] = 'Mehrere Teilnehmer*innen';
$string['reportshowonlyfinished'] = 'Max. einen fertigen Versuch pro Teilnehmer*in anzeigen ({$a})';
$string['requirepassword_help'] = 'Wenn Sie ein Kennwort festlegen, müssen die Teilnehmer\\*innen erst das Kennwort eingeben, bevor sie den Test starten können.';
$string['requiresubnet_help'] = 'Sie können den Testzugriff auf bestimmte Rechner oder IP-Adressen beschränken, wenn beispielsweise nur Teilnehmer\\*innen in einem bestimmten Raum den Test durchführen dürfen. Die zugelassenen IP-Adressen geben Sie in einer kommagetrennten Liste teilweise oder vollständig an (z.B. <b>192.168. , 231.54.211.0/20, 231.3.56.211</b>).';
$string['reviewoptions'] = 'Was sollen die Teilnehmer*innen zu welchem Zeitpunkt überprüfen?';
$string['reviewoptionsheading_help'] = 'Mit diesen Optionen legen Sie fest, welche Informationen angezeigt werden, wenn Teilnehmer\\*innen einen Versuch überprüfen oder sich den Ergebnisbericht anschauen. \\*\\*Während des Versuchs\\*\\* – Einstellungen sind nur mit gewissen Frageverhalten wie \'Mehrfachbeantwortung\' relevant, und steuern zum Beispiel das Feedback im direkten Zusammenhang mit der aktuell bearbeiteten Frage. \\*\\*Direkt nach dem Versuch\\*\\* steuert, was während zwei Minuten, nachdem Test abgeschickt und beendet wurde, angezeigt wird. \\*\\*Später, während der Test noch geöffnet ist\\*\\* steuert was danach, und vor dem Zeitpunkt der Testschließung angezeigt wird. \\*\\*Wenn der Test abgeschlossen ist\\*\\* – Einstellungen treten nach dem Zeitpunkt der Testschließung in Kraft. Wenn kein Termin für die Testschließung definiert ist, kommt diese Einstellung nie zur Anwendung.';
$string['shownoattempts'] = 'Teilnehmer*innen anzeigen, die keine Versuche durchgeführt haben';
$string['shownoattemptsonly'] = 'Nur Teilnehmer*innen anzeigen, die keine Versuche durchgeführt haben';
$string['showteacherattempts'] = 'Versuche der Trainer*innen anzeigen';
$string['showuserpicture'] = 'Nutzer*innenbild anzeigen';
$string['showuserpicture_help'] = 'Wenn diese Option aktiviert ist, wird der Name und das Profilbild des\\*der
Teilnehmers*in während des Testversuchs und bei der Überprüfung angezeigt. Das macht es einfacher, während einer Prüfung festzustellen, ob der*die Teilnehmer*in die Prüfung mit seinem eigenen Account durchführt.';
$string['shufflequestions_help'] = 'Wenn diese Option aktiviert ist, werden die Testfragen in diesem Abschnitt bei jedem Versuch in einer anderen zufälligen Reihenfolge gemischt. Dies soll verhindern, dass Teilnehmer\\*innen ihre Antworten untereinander teilen, erschwert aber auch die Diskussion über eine bestimmte Frage mit Trainer\\*innen.';
$string['subnetnotice'] = 'Der Zugang zum Test wurde beschränkt. Aktuell ist der von Ihnen benutzte Computer nicht freigegeben, um damit den Test durchführen können. Als Trainer*in dürfen Sie aber von überall aus zugreifen.';
$string['theattempt_help'] = 'Diese Option bestimmt, ob Teilnehmer\\*innen ihren Versuch überprüfen dürfen';
$string['timelimit_help'] = 'In der Grundeinstellung haben Tests kein Zeitlimit. Mit der Aktivierung des Zeitlimits läuft für den\\*die Teilnehmer\\*in sichtbar eine Uhr rückwärts mit.';
$string['useroverrides'] = 'Nutzer*inänderungen';
$string['useroverridesdeleted'] = 'Nutzer*inänderungen gelöscht';
$string['usersnone'] = 'Teilnehmer*innen haben keinen Zugriff auf diesen Test.';
$string['warningmissingtype'] = '<p><b>Diese Frage ist von einem Typ, der bisher noch nicht in Ihrem Moodle installiert wurde.<br />Bitte fragen Sie Ihre*n Moodle-Administrator*in.';
$string['youneedtoenrol'] = 'Sie können den Test nur durchführen, wenn Sie in diesem Kurs als Teilnehmer*in eingetragen sind.';
