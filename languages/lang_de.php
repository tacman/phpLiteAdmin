<?php
// German language file by Christopher Kramer (crazy4chrissi)
// Read our wiki on how to translate: https://bitbucket.org/phpliteadmin/public/wiki/Localization
// Version 1.9.6
$lang = [
	"direction" => "LTR",
	"date_format" => '\a\m d.m.Y \u\m H:i:s (T)',
	"ver" => "Version",
	"for" => "für",
	"to" => "in",
	"go" => "Los",
	"yes" => "Ja",
	"no" => "Nein",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "Zur CSV-Datei gehörende Tabelle",
	"srch" => "Suchen",
	"srch_again" => "Erneut suchen",
	"login" => "Einloggen",
	"logout" => "Ausloggen",
	"view" => "Ansicht",
	"confirm" => "Bestätigen",
	"cancel" => "Abbrechen",
	"save_as" => "Speichern",
	"options" => "Optionen",
	"no_opt" => "Keine Optionen",
	"help" => "Hilfe",
	"installed" => "installiert",
	"not_installed" => "nicht installiert",
	"done" => "abgeschlossen",
	"insert" => "Einfügen",
	"export" => "Exportieren",
	"import" => "Importieren",
	"rename" => "Umbenennen",
	"empty" => "Leeren",
	"drop" => "Löschen",
	"tbl" => "Tabelle",
	"chart" => "Diagramm",
	"err" => "FEHLER",
	"act" => "Aktion",
	"rec" => "Datensätze",
	"col" => "Spalte",
	"cols" => "Spalten",
	"rows" => "Zeile(n)",
	"edit" => "Ändern",
	"del" => "Löschen",
	"add" => "Füge",
	"backup" => "Datenbank-Datei sichern",
	"before" => "Davor",
	"after" => "Danach",
	"passwd" => "Passwort",
	"passwd_incorrect" => "Falsches Passwort.",
	"chk_ext" => "Prüfe unterstützte SQLite PHP Erweiterungen",
	"autoincrement" => "Autoincrement",
	"not_null" => "Nicht NULL",
	"attention" => "Achtung",
	"none" => "Keiner",
	"as_defined" => "Wie definiert",
    "expression" => "Ausdruck",
	
	"sqlite_ext" => "SQLite Erweiterung",
	"sqlite_ext_support" => "Es erscheint so, dass keine der unterstützten SQLite Erweiterungen in Ihrer PHP-Installation verfügbar ist. Sie können %s nicht nutzen, bevor Sie mindestens eine davon installieren.",
	"sqlite_v" => "SQLite Version",
	"sqlite_v_error" => "Es erscheint so, also ob Ihre Datenbank das SQLite Version %s Format hat aber Ihre PHP-Installation die zugehörige Erweiterung nicht installiert hat um dieses Format zu nutzen. Um das Problem zu beheben, löschen Sie entweder die Datenbank und erzeugen Sie mit %s erneut oder erzeugen Sie sie manuell im SQLite %s Format.",
	"report_issue" => "Das Problem kann nicht ausreichend diagnostiziert werden. Bitte sende einen Problembericht auf ",
	"sqlite_limit" => "Auf Grund von Einschränkungen von SQLite kann nur der Feldname und Datentyp verändert werden.",
	
	"php_v" => "PHP Version",
	"new_version" => "Es gibte eine neue Version!",
	
	"db_dump" => "Datenbank Dump",
	"db_f" => "Datenbank Datei",
	"db_ch" => "Datenbank wechseln",
	"db_event" => "Datenbank Ereignis",
	"db_name" => "Datenbank Name",
	"db_rename" => "Datenbank umbenennen",
	"db_renamed" => "Datenbank '%s' wurde umbenannt in",
	"db_del" => "Datenbank löschen",
	"db_path" => "Pfad zur Datenbank",
	"db_size" => "Größe der Datenbank",
	"db_mod" => "Datenbank zuletzt geändert",
	"db_create" => "Erzeuge neue Datenbank",
	"db_vac" => "Die Datenbank '%s' wurde geVACUUMt.",
	"db_not_writeable" => "Die Datenbank '%s' existiert nicht und kann nicht erzeugt werden, da der Ordner '%s' nicht beschreibbar ist. Die Anwendung kann nicht benutzt werden bevor Sie den Ordner beschreibbar machen.",
	"db_setup" => "Es gab ein Problem beim Öffnen Ihrer Datenbank %s. Es wird versucht herauszufinde, was das Problem ist, damit Sie das Problem leichter lösen können",
	"db_exists" => "Eine Datenbank, eine andere Datei oder ein Verzeichnis mit Namen '%s' existiert bereits.",
	
	"exported" => "Exportiert",
	"struct" => "Struktur",
	"struct_for" => "Struktur für",
	"on_tbl" => "der Tabelle",
	"data_dump" => "Daten-Dump für",
	"backup_hint" => "Tipp: Um eine Datenbank zu sichern, ist es am einfachsten, die %s.",
	"backup_hint_linktext" => "Datenbank-Datei herunterzuladen",
	"total_rows" => "insgesamt %s Zeilen",
	"total" => "Gesamt",
	"not_dir" => "Das Verzeichnis, welches Sie angegeben haben um daran nach Datenbanken zu suchen, existiert nicht oder ist kein Verzeichnis.",
	"bad_php_directive" => "Es erscheint so, also ob die PHP-Einstellung 'register_globals' aktiv ist. Dies ist schlecht. Sie müssen die Einstellung deaktivieren bevor Sie fortfahren können.",
	"page_gen" => "Seite erzeugt in %s Sekunden.",
	"powered" => "Powered by",
	"free_software" => "Dies is freie Software.",
	"please_donate" => "Bitte spende für die Entwicklung.",
	"remember" => "Eingeloggt bleiben",
	"no_db" => "Willkommen zu %s. Es erscheint so, als ob Sie konfiguriert haben, dass in einem Verzeichnis nach zu verwaltenden Datenbanken gesucht wird. Allerdings konnte %s in dem angegebenen Verzeichnis keine SQLite Datenbank gefunden werden. Sie können das folgende Formular nutzen um Ihre erste Datenbank anzulegen.",
	"no_db2" => "Das von Ihnen angegebene Verzeichnis enthält keine SQLite Datenbanken und ist darüber hinaus nicht schreibbar. Aus diesem Grund können Sie mit %s keine neuen Datenbanken in diesem Verzeichnis anlegen. Machen Sie entweder das Verzeichnis beschreibbar oder laden Sie manuell Datenbanken in das angegebene Verzeichnis.",
	
	"create" => "Erzeugen",
	"created" => "wurde erzeugt",
	"create_tbl" => "Erzeuge neue Tabelle",
	"create_tbl_db" => "Erzeuge neue Tabelle in Datenbank",
	"create_trigger" => "Erzeuge neuen Trigger auf Tabelle",
	"create_index" => "Erzeuge neuen Index auf Tabelle",
	"create_index1" => "Erzeuge Index",
	"create_view" => "Erzeuge neue Sicht auf Datenbank",
	
	"trigger" => "Trigger",
	"triggers" => "Trigger",
	"trigger_name" => "Trigger-Name",
	"trigger_act" => "Trigger-Aktion",
	"trigger_step" => "Trigger-Schritte (Semikolon separiert)",
	"when_exp" => "WHEN Ausdruck (Ausdruck ohne 'WHEN' eingeben)",
	"index" => "Index",
	"indexes" => "Indizes",
	"index_name" => "Index-Name",
	"name" => "Name",
	"unique" => "Eindeutig",
	"seq_no" => "Seq. Nr.",
	"emptied" => "wurde geleert",
	"dropped" => "wurde gelöscht",
	"renamed" => "wurde umbenannt in",
	"altered" => "wurde erfolgreich verändert",
	"inserted" => "eingefügt",
	"deleted" => "gelöscht",
	"affected" => "betroffen",
	"blank_index" => "Index-Name darf nicht leer sein.",
	"one_index" => "Sie müssen mindestens eine Index-Spalte definieren.",
	"docu" => "Dokumentation",
	"license" => "Lizenz",
	"proj_site" => "Projekt Seite",
	"bug_report" => "Dies könnte ein Fehler sein, der auf folgender Seite gemeldet werden sollte:",
	"return" => "Zurück",
	"browse" => "Anzeigen",
	"fld" => "Feld",
	"fld_num" => "Anzahl Felder",
	"fields" => "Felder",
	"type" => "Typ",
	"operator" => "Operator",
	"val" => "Wert",
	"update" => "Aktualisieren",
	"comments" => "Kommentare",
	
	"specify_fields" => "Sie müssen die Anzahl Tabellen-Felder angeben.",
	"specify_tbl" => "Sie müssen einen Tabellen-Namen angeben.",
	"specify_col" => "Sie müssen eine Spalte angeben.",
	
	"tbl_exists" => "Es existiert bereits eine Tabelle mit demselben Namen.",
	"show" => "Anzeigen",
	"show_rows" => "Zeige %s Zeile(n). ",
	"showing" => "Zeige",
	"showing_rows" => "Zeige Zeilen",
	"query_time" => "(Abfrage benötigte %s Sekunden)",
	"syntax_err" => "Es gibt ein Problem mit dem Syntax Ihrer Abfrage (Abfrage nicht ausgeführt)",
	"run_sql" => "Führe SQL Abfragen auf der Datenbank '%s' aus",
	"recent_queries" => "Kürzliche Abfragen",
	"full_texts" => "Zeige lange Texte komplett",
	"no_full_texts" => "Kürze lange Texte",

	
	"ques_empty" => "Sind Sie sicher, dass Sie die Tabelle '%s' leeren möchten?",        
	"ques_drop" => "Sind Sie sicher, dass Sie die Tabelle '%s' löschen möchten?",
	"ques_drop_view" => "Sind Sie sicher, dass Sie die Sicht '%s' löschen möchten?",
	"ques_del_rows" => "Sind Sie sicher, dass Sie die Zeile(n) %s aus der Tabelle '%s' löschen möchten?",
	"ques_del_db" => "Sind Sie sicher, dass Sie die Datenbank '%s' löschen möchten?",
	"ques_column_delete" => "Sie Sie sicher, dass Sie die Spalten %s aus der Tabelle '%s' löschen möchten?",
	"ques_del_index" => "Sind Sie sicher, dass Sie den Index '%s' löschen möchten?",
	"ques_del_trigger" => "Sind Sie sicher, dass Sie den Trigger '%s' löschen möchten?",
 	"ques_primarykey_add" => "Sind Sie sicher, dass Sie einen Primärschlüssel für die Spalte(n) %s in der Tabelle '%s' anlegen möchten?",

	"export_struct" => "Mit Struktur exportieren",
	"export_data" => "Mit Daten exportieren",
	"add_drop" => "Füge DROP TABLE hinzu",
	"add_transact" => "Füge TRANSACTION hinzu",
	"fld_terminated" => "Felder getrennt durch",
	"fld_enclosed" => "Felder umgeben mit",
	"fld_escaped" => "Escape-Zeichen",
	"fld_names" => "Feld-Namen in erster Zeile",
	"rep_null" => "Ersetze NULL durch",
	"rem_crlf" => "Entferne Zeilenumbrüche aus Feldern",
	"put_fld" => "Setze Feld-Namen in die erste Zeile",
	"null_represent" => "NULL repräsentiert durch",
	"import_suc" => "Import war erfolgreich.",
	"import_into" => "Importiere nach",
	"import_f" => "Zu importierende Datei",
	"rename_tbl" => "Benenne Tabelle '%s' um in",
	
	"rows_records" => "Zeile(n) beginnend ab Datensatz Nr. ",
	"rows_aff" => "Zeile(n) betroffen",
	
	"as_a" => "als",
	"readonly_tbl" => "'%s' ist eine Sicht, d.h. es ist ein SELECT Ausdruck, der wie eine Tabelle behandelt wird, die man nur lesen kann. Sie können daher keine Zeilen bearbeiten oder einfügen.",
	"chk_all" => "Alle markieren",
	"unchk_all" => "Alle Markierungen aufheben",
	"with_sel" => "Die markierten",
	
	"no_tbl" => "Keine Tabelle in der Datenbank vorhanden.",
	"no_chart" => "Wenn Sie dies lesen können, bedeutet dies, dass das Diagramm nicht generiert werden konnte. Die Daten, die Sie versuchen anzuzeigen, ist evtl. für die Darstellung als Diagramm nicht geeignet.",
	"no_rows" => "In der Tabelle gibt er keine Zeilen im angegebenen Bereich.",
	"no_sel" => "Sie haben nichts ausgewählt.",
	
	"chart_type" => "Diagramm-Typ",
	"chart_bar" => "Balken-Diagramm",
	"chart_pie" => "Torten-Diagramm",
	"chart_line" => "Linien-Diagramm",
	"lbl" => "Beschriftung",
	"empty_tbl" => "Diese Tabelle ist leer.",
	"click" => "Hier klicken",
	"insert_rows" => "um Zeilen einzufügen.",
	"restart_insert" => "Starte Einfügen erneut mit ",
	"ignore" => "Ignorieren",
	"func" => "Funktion",
	"new_insert" => "Als neue Zeile einfügen",
	"save_ch" => "Änderungen speichern",
	"def_val" => "Default-Wert",
	"prim_key" => "Primär-Schlüssel",
	"tbl_end" => "Feld(er) an den Schluss der Tabelle hinzu",
	"query_used_table" => "Ausdruck, mit dem diese Tabelle erzeugt wurde",
	"query_used_view" => "Ausdruck, mit dem diese Sicht erzeugt wurde",
	"create_index2" => "Erzeuge einen Index auf",
	"create_trigger2" => "Erzeuge neuen Trigger",
	"new_fld" => "Neue Felder zur Tabelle '%s' hinzufügen",
	"add_flds" => "Felder hinzufügen",
	"edit_col" => "Bearbeite Spalte '%s'",
	"vac" => "Vacuum",
	"vac_desc" => "Große Datenbanken müssen manchmal geVACUUMt werden, um ihre Größe auf dem Server zu reduzieren. Klicke auf den folgenden Button um die Datenbank '%s' zu VACUUMen.",
	"event" => "Event",
	"each_row" => "Für jede Zeile",
	"define_index" => "Index-Eigenschaften angeben",
	"dup_val" => "Duplikate",
	"allow" => "Erlaubt",
	"not_allow" => "Nicht erlaubt",
	"asc" => "Aufsteigend",
	"desc" => "Absteigend",
	"warn0" => "Sie wurden gewarnt.",
	"warn_passwd" => "Sie verwenden das Standard-Password, was gefährlich sein kann. Sie können es leicht im oberen Bereich von %s ändern.",
	"warn_dumbass" => "Sie haben den Wert nicht verwendet.",
	"counting_skipped" => "Das Zählen der Anzahl Datensätze einiger Tabellen wurde übersprungen, da die Datenbank verhältnismäßig groß ist und 
	für einige Tabellen kein Primärschlüssel definiert ist, sodass das Zählen der Datensätze lange dauertn kann. Füge einen Primärschlüssel hinzu oder %serzwinge das Zählen%s.",
	"sel_state" => "Select-Ausdruck",
	"delimit" => "Ausdrücke trennen mit",
	"back_top" => "Zum Anfang",
	"choose_f" => "Datei wählen",
	"instead" => "Anstatt",
	"define_in_col" => "Wähle Index Spalte(n)",

	"delete_only_managed" => "Sie können nur Datenbanken löschen, die mit diesem Tool verwaltet werden!",
	"rename_only_managed" => "Sie können nur Datenbanken umbenennen, die mit diesem Tool verwaltet werden!",
	"db_moved_outside" => "Sie haben entweder versucht, die Datenbank in ein Verzeichnis zu verschieben, wo sie nicht mehr verwaltet werden kann, oder die Überprüfung, ob Sie das getan haben, schlug wegen ungenügenden Rechten fehl.",
	"extension_not_allowed" => "Die angegebene Dateierweiterung ist nicht in der Liste erlaubter Dateierweiterungen. Bitte verwenden Sie eine der folgenden Dateierweiterungen",
	"add_allowed_extension" => "Sie können die gewählte Dateierweiterung zur Liste erlaubter Dateierweiterungen hinzufügen, indem Sie sie \$allowed_extensions in der Konfiguration hinzufügen.",
	"directory_not_writable" => "Die Datenbank-Datei selbst ist schreibbar, aber um darin zu schreiben, muss auch das Verzeichnis, indem sie liegt schreibbar sein. Dies liegt daran, dass SQLite eine temporäre Sperrdatei darin ablegen muss.",
	"tbl_inexistent" => "Tabelle %s existiert nicht",

	// errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
	"alter_failed" => "Änderung der Tabelle %s fehlgeschlagen",
	"alter_tbl_name_not_replacable" => "Der Tabellenname konnte nicht mit dem temporärem ersetzt werden",
	"alter_no_def" => "keine ALTER Definition",
	"alter_parse_failed" =>"das Parsen der ALTER Definition schlug fehl",
	"alter_action_not_recognized" => "ALTER Aktion konnte nicht erkannt werden",
	"alter_no_add_col" => "keine Spalte, die hinzugefügt werden soll im ALTER Ausdruck erkannt",
	"alter_pattern_mismatch"=>"Ihr ursprünglicher CREATE TABLE Ausdruck passt nicht auf unser Muster",
	"alter_col_not_recognized" => "Konnte neuen oder alten Spaltennamen nicht erkennen",
	"alter_unknown_operation" => "Unbekannte ALTER Operation!",

	/* Help documentation */
	"help_doc" => "Dokumentation / Hilfe",
	"help1" => "SQLite-Bibliothek Erweiterungen",
	"help1_x" => "%s verwendet PHP Erweiterungen, welche den Zugriff auf SQLite Datenbanken erlauben. Aktuell unterstützt phpLiteAdmin PDO, SQLite3 und SQLiteDatabase. Sowohl PDO und SQLite3 werden für Version 3 von SQLite verwendet und SQLiteDatabase für Version 2. Falls in Ihrer PHP-Installation mehr als eine SQLite Erweiterung verfügbar ist, wird PDO und SQLite3 bevorzugt verwendet um den Vorteil der neuen Version nutzen zu können. Sollten Sie aber existierende SQLite-Datenbanken der Version 2 haben wird phpLiteAdmin SQLiteDatabase automatisch nur für diese Datenbanken verwenden. Es müssen nicht alle Datenbanken der gleichen Version sein. Zur Erzeugung neuer Datenbanken wird allerdings stets die beste verfügbare Version genutzt.",
	"help2" => "Eine neue Datenbank anlegen",
	"help2_x" => "Wenn Sie eine neue Datenbank anlegen, wird der von Ihnen eingegebene Name mit einer passenden Dateiendung erweitert (.db, .db3, .sqlite, etc.) falls Sie nicht selbst eine angeben. Die Datenbank wird in dem Verzeichnis angelegt, den Sie mit der \$directory Variable angegeben haben.",
	"help3" => "Tabellen vs. Sichten",
	"help3_x" => "Auf der Übersichtseite der Datenbank gibt es eine Liste von Tabellen und Sichten. Da Sichten nur gelesen werden können, sind einige Operationen deaktiviert und erscheinen daher auch nicht in der Liste. Wenn Sie eine Sicht ändern möchten, müssen Sie sie löschen und neu mit dem angepassten SELECT Ausdruck anlegen. Für mehr Informationen, siehe <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
	"help4" => "Schreiben eines SELECT-Ausdrucks für eine neue Sicht",
	"help4_x" => "Wenn Sie eine Sicht erstellen, müssen Sie einen SQL SELECT-Ausdruck definieren, der die Sicht definiert. Eine Sicht ist wie eine Tabelle, die nur gelesen und nicht durch Einfügen, Löschen oder Bearbeiten von Zeilen direkt geändert werden kann.",
	"help5" => "Struktur in eine SQL-Datei exportieren",
	"help5_x" => "Wenn Sie in eine SQL-Datei exportieren, können Sie auswählen, ob Sie die Ausdrücke, welche die Struktur der Tabellen, Sichten (inkl. Indizes etc.) mit exportieren möchten.",
	"help6" => "Daten in eine SQL-Datei exportieren",
	"help6_x" => "Wenn Sie eine SQL-Datei exportieren, können Sie auswählen, ob die SQL-Ausdrücke, welche die Tabelle(n) mit Daten füllen, mit exportiert werden sollen.",
	"help7" => "Füge DROP TABLE zu einer exportierten SQL-Datei hinzu",
	"help7_x" => "Wenn Sie eine SQL-Datei exportieren, können Sie auswählen, dass in der Datei Befehle zum Löschen der Tabellen vor dem Erzeugen der Tabellen eingefügt werden. Dies verhindert Probleme, die entstehen, wenn die Datei importiert wird aber die Tabellen schon existieren.",
	"help8" => "Füge TRANSACTION zu einer exportieren SQL-Datei hinzu",
	"help8_x" => "Wenn Sie eine SQL-Datei exportieren, können Sie die Anfragen mit einer Transaktion umschließen, sodass falls ein Fehler beim Importieren der Datei auftritt, die Datenbank wieder zurück in ihren Ausgangszustand gebracht werden kann, sodass nicht nur Teile der importierten Daten in der Datenbank verbleiben.",
	"help9" => "Füge Kommentare zu einer exportierten SQL-Datei hinzu",
	"help9_x" => "Wenn Sie eine SQL-Datei exportieren, können Sie auswählen, dass in die SQL-Datei Kommentare eingefügt werden, welche die einzelnen Abschnitte der Datei erklären, sodass ein Mensch den Inhalt der Datei besser nachvollziehen kann."
];
