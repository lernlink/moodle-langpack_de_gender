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
 * @subpackage forum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Alle Nutzer*innen';
$string['blockafter'] = 'Nutzer*innen sperren';
$string['blockafter_help'] = 'Diese Zahl legt fest, wie viele Beiträge pro Nutzer\\*in im angegebenen Zeitfenster maximal ins Forum eingetragen werden dürfen. Nutzer\\*innen mit der Berechtigung mod/forum:postwithoutthrottling sind von einer Sperre ausgenommen.';
$string['blockperiod_help'] = 'In diesem Zeitfenster dürfen maximal so viele Beiträge pro Nutzer\\*in ins Forum eingetragen werden, wie mit der Zahl \'Sperre\' festgelegt sind. Nutzer\\*innen mit der Berechtigung mod/forum:postwithoutthrottling sind von einer Sperre ausgenommen.';
$string['cachedef_forum_is_tracked'] = 'Forumstracking-Status für den*die Nutzer*in';
$string['cannotadddiscussionall'] = 'Sie dürfen kein neues Thema für alle Teilnehmer*innen anlegen.';
$string['cannotaddteacherforumto'] = 'Das konvertierte Trainer*inforum konnte nicht im Kursabschnitt 0 eingefügt werden.';
$string['cannotcreateinstanceforteacher'] = 'Das neue Kursmodul für das Trainer*inforum konnte nicht erstellt werden.';
$string['cannoteditposts'] = 'Sie dürfen keine Beiträge anderer Nutzer*innen ändern!';
$string['completiondiscussions'] = 'Teilnehmer*in muss ein Thema neu beginnen:';
$string['completiondiscussionsdesc'] = 'Teilnehmer*in muss mindestens {$a} Themen anlegen';
$string['completionposts'] = 'Teilnehmer*in muss ein Thema neu beginnen oder Antworten verfassen:';
$string['completionpostsdesc'] = 'Teilnehmer*in muss mindestens {$a} Themen oder Antworten beitragen';
$string['completionreplies'] = 'Teilnehmer*in muss Antworten verfassen:';
$string['completionrepliesdesc'] = 'Teilnehmer*in muss mindestens {$a} Antworten verfassen';
$string['configlongpost'] = 'Jeder Beitrag wird als "lang" eingestuft, wenn er länger als diese Zeichenzahl ist (ohne Berücksichtigung der HTML-Tags). Beiträge auf der Startseite, auf Kursseiten im sozialen Format oder in Benutzer*innenprofilen angezeigt werden, werden auf einen natürlichen Bruch zwischen den Werten forum_shortpost und forum_longpost gekürzt.';
$string['configreplytouser'] = 'Wenn ein Forumsbeitrag per E-Mail verschickt wird, soll er die Teilnehmer*innenadresse enthalten, damit der*die Empfänger*in persönlich antworten kann (statt über das Forum)? Wenn Sie "Ja" auswählen, können die Teilnehmer*innen in ihrem Profil festlegen, ob die E-Mail-Adresse veröffentlicht werden soll oder nicht.';
$string['digestsentusers'] = 'Die E-Mail-Zusammenfassung wurde erfolgreich an {$a} Teilnehmer*innen gesendet.';
$string['disallowsubscribeteacher'] = 'Das Forum kann nicht abonniert werden (nur Trainer*innen)';
$string['discussionlistsortbystarterasc'] = 'Sortieren nach Themenstarter*in in aufsteigender Reihenfolge';
$string['discussionlistsortbystarterdesc'] = 'Sortieren nach Themenstarter*in in absteigender Reihenfolge';
$string['displayend_help'] = 'Die Einstellung legt fest, ob ein Forumsbeitrag nach einem bestimmten Datum verborgen werden soll. Beachten Sie, dass Administratoren\\*innen die Beiträge immer sehen dürfen.';
$string['displaystart_help'] = 'Die Option legt fest, ob ein Forumsbeitrag erst ab einem bestimmten Datum angezeigt werden soll. Administrator\\*innen dürfen immer alle Beiträge sehen.';
$string['emaildigesttype_help'] = 'Folgende Einstellungen stehen für die Benachrichtigung aus Foren zur Verfügung: \\* Standard - Es wird die Einstellung im individuellen Nutzer\\*inprofil verwandt. Eine Änderung im eigenen Profil wird auch hier angezeigt. \\* Keine Zusammenfassung - Sie erhalten für jeden Forenbeitrag eine Mitteilung. \\* Zusammenfassung - vollständige Beiträge - Sie erhalten täglich eine Mitteilung. Diese enthält alle Forenbeiträge mit ihrem gesamten Inhalt. \\* Zusammenfassung - nur Überschriften - Sie erhalten tägliche eine Mitteilung. Diese enthält nur die Überschriften der Forenbeiträge.';
$string['eventuserreportviewed'] = 'Nutzer*inübersicht angezeigt';
$string['forcedreadtracking_desc'] = 'Diese Option ermöglicht es in Foren, das Forumstracking für alle Nutzer\\*innen verbindlich vorzugeben. In Kursen mit vielen Foren und Beiträgen könnte sich die Ladezeit der Seite deutlich erhöhen. Wenn diese Option deaktiviert wird, wird ein vorher verbindliches Forumstracking zu einer optionalen Einstellung.';
$string['gradeusers'] = 'Nutzer*innen bewerten';
$string['hideusersearch'] = 'Nutzer*insuche verbergen';
$string['introblog'] = 'Die Beiträge in diesem Forum wurden automatisch aus Teilnehmer*innenblogs des Kurses erstellt, weil die Blogeinträge nicht mehr verfügbar sind.';
$string['introteacher'] = 'Forum für Trainer*innenanmerkungen und -diskussionen';
$string['lockdiscussionafter_help'] = 'Themen können automatisch gesperrt werden, wenn eine angegebene Zeit seit der letzten Antwort überschritten ist. Nutzer\\*innen mit dem Recht, in gesperrten Themen zu antworten, können ein Thema erneut öffnen und dort antworten.';
$string['modulename_help'] = 'Richten Sie ein Forum ein, um den Personen in Ihrem Kurs die Gelegenheit zu geben, asynchrone Diskussionen zu führen, die über einen längeren Zeitraum stattfinden. Es stehen verschiedene Forentypen zur Auswahl, z.B. ein Standardforum, in dem alle jederzeit eine neue Diskussion beginnen können; ein Forum, in dem jede\\*r Teilnehmer\\*in genau eine Diskussion posten kann; oder ein Frage-und-Antwort-Forum, in dem die Teilnehmer\\*innen zuerst Beiträge verfassen müssen, bevor sie die Beiträge anderer Teilnehmer\\*innen anzeigen können. Ein\\*e Trainer\\*in kann zulassen, dass Dateien an Forenbeiträge angehängt werden. Angehängte Bilder werden im Forumsbeitrag angezeigt. Teilnehmer\\*innen können ein Forum abonnieren, um Benachrichtigungen über neue Forenbeiträge zu erhalten. Ein\\*e Trainer\\*in kann den Abonnementmodus auf optional, verbindlich oder automatisch einstellen oder das Abonnement vollständig verhindern. Bei Bedarf können Teilnehmer\\*innen daran gehindert werden, in einem bestimmten Zeitraum mehr als eine bestimmte Anzahl von Beiträgen zu veröffentlichen. Dies kann verhindern, dass Einzelpersonen Diskussionen dominieren. Forenbeiträge können von Trainer\\*innen oder Teilnehmer\\*innen bewertet werden (Peer-Bewertung). Die Bewertungen können zu einer Endnote zusammengefasst werden, die in den Bewertungen festgehalten wird. Die Aktivität Forum hat viele Verwendungsmöglichkeiten, wie z.B. \\* Ein sozialer Raum für Teilnehmer\\*innen, um sich kennenzulernen \\* Für Kursankündigungen (über ein Ankündigungen-Forum mit Zwangsabonnement) \\* Zum Besprechen von Kursinhalten oder zum Lesen von Materialien \\* Für die Fortsetzung einer Diskussion, die in einer persönlichen Sitzung begonnen wurde \\* Für Diskussionen nur für Trainer\\*innen (über ein verborgenes Forum) \\* Ein Hilfezentrum, in dem Tutoren\\*innen und Teilnehmer\\*innen Ratschläge geben können \\* Als Bereich für eine 1:1-Unterstützung zwischen Teilnehmer\\*in und Trainer\\*in (über ein Forum mit separaten Gruppen und mit 1 Teilnehmer\\*in pro Gruppe) \\* Für Erweiterungsaktivitäten, z.B. „Denksportaufgaben“, über die die Teilnehmer\\*innen nachdenken und Lösungen vorschlagen können';
$string['namenews_help'] = 'Das Ankündigungsforum ist ein Forum, das automatisch von Moodle in jedem Kurs und auch der Startseite generiert wird. Ausschließlich Trainer\\*innen und Administrator\\*innen dürfen im Ankündigungsforum schreiben. Pro Kurs kann es nur ein Ankündigungsforum geben. Im Block "Neuste Ankündigungen" werden die aktuelle Beiträge angezeigt.';
$string['nameteacher'] = 'Trainer*innenforum';
$string['nousersmatch'] = 'Für die angegebenen Kriterien wurden keine Nutzer*innen gefunden.';
$string['posttomygroups_help'] = 'Diesen Beitrag an alle Gruppen senden, zu denen Sie Zugriff haben. Teilnehmer\\*innen in den übrigen Gruppen können Ihren Beitrag nicht sehen.';
$string['privacy:metadata:forum_subscriptions:forum'] = 'Forum, das Nutzer*innen abonniert hat';
$string['privacy:metadata:forum_subscriptions:userid'] = 'ID des*der Nutzers*in, der dem Forum zugeordnet ist';
$string['privacy:metadata:forum_track_prefs'] = 'Information welche Foren der*die Nutzer*in für die Lesemarkierung gewählt hat.';
$string['privacy:metadata:forum_track_prefs:userid'] = 'ID des*der Nutzers*in, dem Forum Lesemarkierung zugeordnet ist.';
$string['privacy:request:delete:discussion:name'] = 'Löschen auf Anfrage des*der Nutzers*in';
$string['searchusers'] = 'Teilnehmer*innensuche';
$string['sendstudentnotificationsdefault'] = 'Standardeinstellung für "Teilnehmer*innen benachrichtigen"';
$string['sendstudentnotificationsdefault_help'] = 'Setzen Sie den Standardwert für das Kontrollkästchen "Teilnehmer\\*innen benachrichtigen" auf der Bewerteroberfläche.';
$string['sendstudentnotificationsyes'] = 'Ja, Teilnehmer*innen benachrichtigen';
$string['showmoreusers'] = 'Weitere Nutzer*innen anzeigen';
$string['showusersearch'] = 'Teilnehmer*innensuche zeigen';
$string['subscribeall'] = 'Alle Teilnehmer*innen haben in dieses Forum abonniert';
$string['subscribenone'] = 'Forum für alle Teilnehmer*innen abbestellen';
$string['timedhidden'] = 'Zeitgesteuerter Status: Für Teilnehmer*innen verborgen';
$string['timedvisible'] = 'Zeitgesteuerter Status: Für Teilnehmer*innen sichtbar';
$string['trackingtype_help'] = 'Mithilfe der Leseverfolgung können Teilnehmer\\*innen sehen, welche Beiträge sie noch nicht gesehen haben. \\* Optional - Die Markierung ist ein- und ausschaltbar. Teilnehmer\\*innen finden dafür eine Einstellung im Aktionsmenü oder in der Forumsadministration. Sie müssen vorher das Forumstracking in den persönlichen Einstellungen aktiviert haben. \\* Verbindlich - Wenn in der Website-Administration die Option \'Verbindliches Forumstracking erlauben\' aktiviert ist, ist eine weitere Option \'Verbindlich\' verfügbar. Hierbei ist das Forumstracking immer aktiviert, unabhängig von den persönlichen Nutzendeneinstellungen.';
$string['unsubscribealldone'] = 'Sie haben alle optionalen Abonnements abbestellt. Trotzdem werden Sie Beiträge aus Foren mit verbindlichen Abonnements erhalten. Die Forums-Benachrichtigungen können Sie in den Einstellungen Ihres Nutzer*inprofils verwalten.';
$string['unsubscribeallempty'] = 'Sie haben kein Forum abonniert. Die Systemnachrichten können Sie in den Einstellungen Ihres Nutzer*inprofils vollständig deaktivieren.';
$string['usernavigation'] = 'Nutzer*innennavigation';
$string['warnafter_help'] = 'Vor dem Erreichen der Beitragshöchstzahl innerhalb des Zeitfensters können die Nutzer\\*innen gewarnt werden. Die Einstellung legt fest, nach wie vielen Beiträgen die Warnung gezeigt wird. Nutzer\\*innen mit der Berechtigung mod/forum:postwithoutthrottling sind von einer Sperre ausgenommen.';
