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
 * @subpackage assign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewuseroverride'] = 'Verfügbarkeitsänderung für Nutzer*in anlegen';
$string['allocatedmarker'] = 'Zugeordnete*r Bewerter*in';
$string['allocatedmarker_help'] = 'Bewerter\\*in, der\\*die dieser Abgabe zugeordnet ist';
$string['allowsubmissions'] = 'Nutzer*in erlauben, für diese Aufgabe weiter Lösungen abzugeben.';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer\\*innen nur ab dem Abgabebeginn angezeigt.';
$string['assign:editothersubmission'] = 'Weitere Teilnehmer*innenlösung bearbeiten';
$string['assign:manageallocations'] = 'Bewerter*innen verwalten, die dieser Abgabe zugeordnet sind';
$string['assign:revealidentities'] = 'Teilnehmer*innenidentität anzeigen';
$string['assign:viewblinddetails'] = 'Teilnehmer*innenidentität anzeigen, obwohl anonyme Bewertung eingeschaltet ist';
$string['attemptreopenmethod_help'] = 'Die Einstellung legt fest, ob Teilnehmer\\*innen zusätzliche Versuche bei der Aufgabe unternehmen können. Bei jedem Versuch werden die Note und das Feedback gespeichert und können von Trainer\\*in und Teilnehmer\\*in angezeigt werden. Mögliche Optionen sind: \\* Nie - Es ist nur ein Versuch möglich. \\* Manuell - Zusätzliche Versuche können von Trainer\\*innen zugelassen werden. \\* Automatisch bis zum Bestehen - Zusätzliche Versuche sind automatisch zulässig, bis Teilnehmer\\*innen die im Notenbuch für diese Aufgabe festgelegte Bestehensnote erreicht haben.';
$string['batchoperationconfirmsetmarkingallocation'] = 'Bewerter*innen-Zuordnung für alle ausgewählten Einreichungen setzen?';
$string['batchsetallocatedmarker'] = 'Bewerter*in für {$a} ausgewählte Nutzer*innen festlegen.';
$string['batchsetmarkingworkflowstateforusers'] = 'Bewertungsworkflow-Status für {$a} ausgewählte Nutzer*innen festlegen.';
$string['blindmarkingenabledwarning'] = 'Für diese Aktivität sind anonyme Abgaben aktiviert. Punkte werden erst in die Bewertungen übernommen, wenn die Identität der Teilnehmer*innen über das Aktionsmenü für die Benotung bekannt gegeben ist.';
$string['blindmarking_help'] = 'Die anonyme Einreichung verbirgt die Identität von Teilnehmer\\*innen während der Bewertung. Die Option kann nicht mehr geändert werden, nachdem die erste Lösung eingereicht oder Bewertung vorgenommen wurde.';
$string['changeuser'] = 'Nutzer*in wechseln';
$string['completionsubmit'] = 'Teilnehmer*in muss Lösung eingereicht haben, um Aktivität abzuschließen';
$string['confirmbatchgradingoperation'] = 'Möchten Sie für {$a->count} Nutzer*innen die Operation {$a->operation} ausführen?';
$string['eventbatchsetmarkerallocationviewed'] = 'Bewerter*innen-Zuordnung angezeigt';
$string['eventmarkerupdated'] = 'Zugewiesene*r Bewerter*in wurde aktualisiert.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Identität der Bewerter*innen wurde sichtbar gemacht';
$string['eventstatementaccepted'] = 'Nutzer*in hat die Abgabebedingung bestätigt.';
$string['eventsubmissionduplicated'] = 'Nutzer*in hat die Lösung dupliziert.';
$string['eventsubmissionlocked'] = 'Die Abgabe wurde für Nutzer*in gesperrt.';
$string['eventsubmissionunlocked'] = 'Die Abgabe wurde für Nutzer*in freigeschaltet.';
$string['eventsubmissionupdated'] = 'Nutzer*in hat Lösung gesichert.';
$string['gradestudent'] = 'Bewertung für Teilnehmer*in: (id={$a->id}, Name={$a->fullname}).';
$string['gradingduedate_help'] = 'Dieser voraussichtliche Termin markiert den Abschluss der Abgabe. Das Datum wird verwendet, um Benachrichtigungen für Trainer\\*innen im Dashboard zu priorisieren.';
$string['grantextensionforusers'] = 'Verlängerung für {$a} Teilnehmer*innen zulassen';
$string['hiddenuser'] = 'Teilnehmer*in';
$string['hidegrader'] = 'Bewerter*innenidentität für Teilnehmer*innen verbergen';
$string['hidegrader_help'] = 'Wenn diese Option aktiviert ist, wird die Identität von Personen verborgen, die eine Aufgabeneinreichung bewerten. Teilnehmer\\*innen können nicht sehen können, wer ihre Arbeit bewertet. Beachten Sie, dass diese Einstellung keine Auswirkungen auf das Kommentarfeld auf der Bewertungsseite hat.';
$string['inactiveoverridehelp'] = '* Diese Nutzer*innenänderung ist inaktiv, weil kein Zugang zur Aktivität besteht. Das kann aufgrund der Gruppenzugehörigkeit oder Rolle sein, aufgrund anderer Zugriffsbeschränkungen oder weil die Aktivität verborgen ist.';
$string['marker'] = 'Bewerter*in';
$string['markerfilter'] = 'Bewerter*in filtern';
$string['markerfilternomarker'] = 'Kein*e Bewerter*in';
$string['markingallocation'] = 'Bewerter*innen-Zuordnung verwenden';
$string['markingallocation_help'] = 'Nach der Aktivierung können einzelnen Nutzer\\*innen Bewerter\\*innen zugewiesen werden. Dazu muss der Bewertungsablaufstatus aktiviert worden sein.';
$string['markingworkflowstate_help'] = 'Die Liste der Workflowstati, die Sie auswählen können, wird durch die Berechtigungungen in der Aufgabe festgelegt. Es gibt folgende Stati: \\* Unbewertet: Es wurde noch keine Bewertung begonnen. \\* In Bewertung: Die Bewertung wurde begonnen, ist jedoch noch nicht abgeschlossen. \\* Bewertung abgeschlossen: Die Bewertung wurde vorgenommen, ist jedoch noch nicht für die Teilnehmer\\*innen freigegeben. \\* In weiterer Überprüfung: Die Bewertung wird im Review-Verfahren von weiteren Trainer\\*innen durchgesehen. \\* Fertig zur Freigabe: Die abschließende Bewertung steht fest, wartet jedoch noch mit der Freigabe für die Teilnehmer\\*innen. \\* Freigegeben: Teilnehmer\\*innen können ihre Bewertungen sowie das Feedback einsehen und erhalten, sofern dies aktiviert wird, eine Benachrichtgung per E-Mail.';
$string['maxattempts_help'] = 'Maximale Anzahl von Abgabeversuchen. Nach dieser Anzahl von Versuchen können Teilnehmer\\*innen ihre Abgabe nicht mehr neu öffnen oder ändern.';
$string['maxperpage_help'] = 'Die Höchstzahl von Aufgaben, die in der Bewertungsübersicht angezeigt werden. Diese Einstellung ist sinnvoll zur Vermeidung von Timeout-Effekten bei Kursen mit sehr großen Nutzer\\*innenzahlen.';
$string['modulename_help'] = 'Stellen Sie Aufgaben bereit, um Lösungen einzusammeln und Bewertungen und Feedback zu geben. Teilnehmer*innen können beliebige digitale Inhalte (Dateien) einreichen, wie z.B. Textdokumente, Tabellenkalkulationen, Bilder, Audio- oder Videoclips. Alternativ oder zusätzlich kann die Aufgabe verlangen, Texte direkt in ein Textfeld einzugeben. Sie können mit einer Aufgabe auch daran erinnern, dass die Teilnehmer\\*innen "reale" Dinge offline erledigen sollen, aber keine digitalen Inhalte erfordern, wie z.B. Kunstwerke oder Sporttraining. Die Teilnehmer\\*innen können ihre Arbeiten einzeln oder als Mitglied einer Gruppe einreichen. Die Bewertungsmöglichkeiten umfassen Text-Feedback, Dateianhänge, wie z.B. Musterlösungen, korrigierte Lösungen, Dokumente mit Kommentaren oder gesprochenes Audio-Feedback. Die Aufgaben können mit einer vorgegebenen oder selbst erstellten Bewertungsskala oder mit einer fortgeschrittenen Bewertungsmethode, wie z.B. Rubriken (Bewertungsrastern), benotet werden. Die Endnote wird in den Bewertungen festgehalten.';
$string['multipleteams_desc'] = 'Diese Aufgabe wird in Gruppen abgegeben. Sie sind Mitglied in mehr als einer Gruppe. Um etwas abgeben zu können, dürfen Sie nur Mitglied in einer Gruppe sein. Kontaktieren Sie Ihre Trainer\\*innen, um Ihre Gruppenzugehörigkeit zu aktualisieren.';
$string['noteam_desc'] = 'Diese Aufgabe wird in Gruppen abgegeben. Sie sind kein Mitglied in einer Gruppe und können die Aufgabe deswegen nicht abgeben. Kontaktieren Sie Ihre Trainer\\*innen, um zu einer Gruppe hinzugefügt zu werden.';
$string['nousers'] = 'Keine Nutzer*innen';
$string['numberofparticipants'] = 'Teilnehmer*innen';
$string['overridedeleteusersure'] = 'Möchten Sie wirklich die Überschreibung für Nutzer*in {$a} löschen?';
$string['overrideuser'] = 'Nutzer*in überschreiben';
$string['participant'] = 'Teilnehmer*in';
$string['preventsubmissions'] = 'Verhindert die Abgabe von Lösungen für diese Aufgabe durch Teilnehmer*innen';
$string['privacy:metadata:assigndownloadasfolders'] = 'Nutzer*inpräferenz, ob mehrere Dateien in einer Aufgabenlösung in Ordnern sortiert heruntergeladen werden sollen.';
$string['privacy:metadata:assigngrades'] = 'Speichert Bewertungen des*der Nutzers*in für die Aufgabe';
$string['privacy:metadata:assignmessageexplanation'] = 'Mitteilungen an den*die Nutzer*in über das Mitteilungssystem.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Speichert Informationen zur Lösung des*der Nutzers*in';
$string['privacy:metadata:assignuserflags'] = 'Speichert Metadaten des*der Nutzers*in wie Verlängerungsdaten';
$string['privacy:metadata:grader'] = 'Dies ist die Nutzer-ID der bewertenden Person.';
$string['privacy:metadata:groupid'] = 'Dies ist die ID der Gruppe, zu der der*die Nutzer*in gehört.';
$string['privacy:metadata:mailed'] = 'Wurde dem*der Nutzer*in bereits eine E-Mail geschickt?';
$string['privacy:studentpath'] = 'Abgaben von Teilnehmern*innen';
$string['relativedatessubmissiontimeleft'] = 'Für alle Teilnehmer*innen berechnet';
$string['removealluseroverrides'] = 'Alle Verfügbarkeitsänderungen für Nutzer*in löschen';
$string['removesubmissionforstudent'] = 'Abgabe entfernen für Teilnehmer*in: (id={$a->id}, fullname={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Die Option \'Lösungen erneut bearbeitbar\' ist mit der anonymen Bewertung nicht kompatibel, da die Bewertungen erst in den Bewertungsbereich übertragen werden, wenn die Identitäten der Teilnehmer*innen aufgedeckt werden.';
$string['requiresubmissionstatement_help'] = 'Teilnehmer\\*innen müssen die Erklärung zur Eigenständigkeit bei Lösungen für diese Aufgabe abgeben.';
$string['revealidentitiesconfirm'] = 'Möchten Sie wirklich die Teilnehmer*innenidentität für diese Aufgabe aufgedeckten? Die Einstellung kann nicht zurückgesetzt werden. Sobald die Teilnehmer*innenidentität aufgedeckt ist, werden die Bewertungen in der Bewertungsübersicht angezeigt.';
$string['selectedusers'] = 'Ausgewählte Nutzer*innen';
$string['sendlatenotifications'] = 'Bewerter*innen über verspätete Abgaben von Lösungen informieren.';
$string['sendlatenotifications_help'] = 'Mit der Aktivierung werden die Bewerter\\*innen (meist die Trainer\\*innen) benachrichtigt wenn eine Lösung verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendnotifications_help'] = 'Mit der Aktivierung werden die Bewerter\\*innen (meist die Trainer\\*innen) benachrichtigt wenn eine Lösung zeitgerecht oder verspätet abgegeben wird. Die Zustellung der Benachrichtigung ist individuell einstellbar.';
$string['sendstudentnotifications'] = 'Teilnehmer*innen benachrichtigen';
$string['sendstudentnotificationsdefault'] = 'Standardeinstellung für "Teilnehmer*innen benachrichtigen"';
$string['sendstudentnotificationsdefault_help'] = 'Den Standardwert für Auswahlfeld "Teilnehmer\\*innen benachrichtigen" im Bewertungsformular festlegen.';
$string['sendstudentnotifications_help'] = 'Wenn diese Option aktiviert ist, erhalten Teilnehmer\\*innen eine Benachrichtigung über aktualisierte Bewertungen oder Feedbacks. Wenn in dieser Aufgabe der Bewertungsworkflow verwendet wird, werden Benachrichtigungen erst verschickt, nachdem dessen Status auf "Freigegeben" gesetzt wird.';
$string['sendsubmissionreceipts'] = 'Abgabebestätigung an Teilnehmer*innen versenden';
$string['sendsubmissionreceipts_help'] = 'Diese Option aktiviert Bestätigungen, die bei der Einreichung von Aufgabenlösungen an die Teilnehmer\\*innen gesendet werden.';
$string['setmarkingallocation'] = 'Zugewiesene Bewerter*innen festlegen';
$string['studentnotificationworkflowstateerror'] = 'Der Status für den Ablauf muss \'Freigegeben\' sein, um Teilnehmer*innen zu benachrichtigen.';
$string['submissiondrafts_help'] = 'Diese Option legt fest, dass Teilnehmer\\*innen die Taste zum Abgeben klicken müssen, um ihre Einreichung als fertig zu deklarieren. Auf diese Weise können Aufgabenlösungen zunächst als Entwurf hinterlegt und weiterhin überarbeitet werden. Wenn diese Einstellung von "Nein" in "Ja" geändert wird und Teilnehmer\\*innen bereits Entwürfe eingereicht haben, gelten diese Einreichungen als endgültig.';
$string['submissioneditable'] = 'Teilnehmer*innen können die eingereichte Lösung bearbeiten';
$string['submissionlog'] = 'Teilnehmer*in: {$a->fullname}, Status: {$a->status}';
$string['submissionnoteditable'] = 'Teilnehmer*innen können die eingereichte Lösung nicht bearbeiten';
$string['teamsubmission'] = 'Teilnehmer*innen geben in Gruppen ab';
$string['teamsubmission_help'] = 'Wenn diese Option aktiviert ist, werden die Teilnehmer\\*innen anhand der Standardgruppen oder einer benutzerdefinierten Gruppierung in Gruppen eingeteilt. Eine Gruppeneinreichung wird unter den Gruppenmitgliedern geteilt, und alle sehen die Änderungen der jeweils anderen Personen an der Einreichung.';
$string['ungroupedusersoptional'] = 'Die Einstellung \'Teilnehmer*innen reichen in Gruppen ein\' ist aktiviert. Es gibt Teilnehmer*innen, die entweder kein Mitglied einer Gruppe oder Mitglied in mehr als einer Gruppe sind. Diese Teilnehmer*innen geben als Mitglieder der Standardgruppe ab.';
$string['unlocksubmissionforstudent'] = 'Abgabe für Teilnehmer*in erlauben: (id={$a->id}, Name={$a->fullname})';
$string['userassignmentdefaults'] = 'Standardwerte für die Nutzer*inzuordnung';
$string['usergrade'] = 'Nutzer*inbewertung';
$string['useridlistnotcached'] = 'Abbruch des Speichervorgangs. Moodle konnte nicht erkennen für welche*n Nutzer*in die Bewertung gespeichert werden soll.';
$string['useroverrides'] = 'Verfügbarkeitsänderung für Nutzer*in';
$string['useroverridesdeleted'] = 'Verfügbarkeitsänderungen für Nutzer*in gelöscht';
$string['usersnone'] = 'Kein*e Teilnehmer*in hat Zugriff auf diese Aufgabe.';
$string['userswhoneedtosubmit'] = 'Nutzer*innen, die noch nicht abgegeben haben: {$a}';
$string['viewbatchmarkingallocation'] = 'Stapelverarbeitung für Bewerter*innenzuordnung anzeigen.';
$string['viewgradingformforstudent'] = 'Bewertungsseite für Teilnehmer*in: (id={$a->id}, fullname={$a->fullname}) anzeigen.';
$string['viewrevealidentitiesconfirm'] = 'Bestätigungsseite mit Teilnehmer*innennamen anzeigen';
