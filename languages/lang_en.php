<?php
// English language-texts.
# REMOVE_FROM_BUILD
// This file is only meant as a basis for you to do your own translation!
# END REMOVE_FROM_BUILD
// Read our wiki on how to translate: http://code.google.com/p/phpliteadmin/wiki/Localization
$lang = array(
	"direction" => "LTR",
	"date_format" => 'g:ia \o\n F j, Y (T)',  // see http://php.net/manual/en/function.date.php for what the letters stand for
	"ver" => "version",
	"for" => "for",
	"to" => "to",
	"go" => "Go",
	"yes" => "Yes",
	"no" => "No",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "Table that CSV pertains to",
	"srch" => "Search",
	"srch_again" => "Do Another Search",
	"login" => "Log In",
	"logout" => "Logout",
	"view" => "View",
	"confirm" => "Confirm",
	"cancel" => "Cancel",
	"save_as" => "Save As",
	"options" => "Options",
	"no_opt" => "No options",
	"help" => "Help",
	"installed" => "installed",
	"not_installed" => "not installed",
	"done" => "done",
	"insert" => "Insert",
	"export" => "Export",
	"import" => "Import",
	"rename" => "Rename",
	"empty" => "Empty",
	"drop" => "Drop",
	"tbl" => "Table",
	"chart" => "Chart",
	"err" => "ERROR",
	"act" => "Action",
	"rec" => "Records",
	"col" => "Column",
	"cols" => "Columns",
	"rows" => "row(s)",
	"edit" => "Edit",
	"del" => "Delete",
	"add" => "Add",
	"backup" => "Backup database file",
	"before" => "Before",
	"after" => "After",
	"passwd" => "Password",
	"passwd_incorrect" => "Incorrect password.",
	"chk_ext" => "Checking supported SQLite PHP extensions",
	"autoincrement" => "Autoincrement",
	"not_null" => "Not NULL",
	"attention" => "Attention",
	"none" => "None",
	"as_defined" => "As defined",
	"expression" => "Expression",
	
	"sqlite_ext" => "SQLite extension",
	"sqlite_ext_support" => "It appears that none of the supported SQLite library extensions are available in your installation of PHP. You may not use %s until you install at least one of them.",
	"sqlite_v" => "SQLite version",
	"sqlite_v_error" => "It appears that your database is of SQLite version %s but your installation of PHP does not contain the necessary extensions to handle this version. To fix the problem, either delete the database and allow %s to create it automatically or recreate it manually as SQLite version %s.",
	"report_issue" => "The problem cannot be diagnosed properly. Please file an issue report at",
	"sqlite_limit" => "Due to the limitations of SQLite, only the field name and data type can be modified.",
	
	"php_v" => "PHP version",
	
	"db_dump" => "database dump",
	"db_f" => "database file",
	"db_ch" => "Change Database",
	"db_event" => "Database Event",
	"db_name" => "Database name",
	"db_rename" => "Rename Database",
	"db_renamed" => "Database '%s' has been renamed to",
	"db_del" => "Delete Database",
	"db_path" => "Path to database",
	"db_size" => "Size of database",
	"db_mod" => "Database last modified",
	"db_create" => "Create New Database",
	"db_vac" => "The database, '%s', has been VACUUMed.",
	"db_not_writeable" => "The database, '%s', does not exist and cannot be created because the containing directory, '%s', is not writable. The application is unusable until you make it writable.",
	"db_setup" => "There was a problem setting up your database, %s. An attempt will be made to find out what's going on so you can fix the problem more easily",
	"db_exists" => "A database, other file or directory of the name '%s' already exists.",
	
	"exported" => "Exported",
	"struct" => "Structure",
	"struct_for" => "structure for",
	"on_tbl" => "on table",
	"data_dump" => "Data dump for",
	"backup_hint" => "Hint: To backup your database, the easiest way is to %s.",
	"backup_hint_linktext" => "download the database-file",
	"total_rows" => "a total of %s rows",
	"total" => "Total",
	"not_dir" => "The directory you specified to scan for databases does not exist or is not a directory.",
	"bad_php_directive" => "It appears that the PHP directive, 'register_globals' is enabled. This is bad. You need to disable it before continuing.",
	"page_gen" => "Page generated in %s seconds.",
	"powered" => "Powered by",
	"free_software" => "This is free software.",
	"please_donate" => "Please donate.",
	"remember" => "Remember me",
	"no_db" => "Welcome to %s. It appears that you have selected to scan a directory for databases to manage. However, %s could not find any valid SQLite databases. You may use the form below to create your first database.",
	"no_db2" => "The directory you specified does not contain any existing databases to manage, and the directory is not writable. This means you can't create any new databases using %s. Either make the directory writable or manually upload databases to the directory.",
	
	"create" => "Create",
	"created" => "has been created",
	"create_tbl" => "Create new table",
	"create_tbl_db" => "Create new table on database",
	"create_trigger" => "Creating new trigger on table",
	"create_index" => "Creating new index on table",
	"create_index1" => "Create Index",
	"create_view" => "Create new view on database",
	
	"trigger" => "Trigger",
	"triggers" => "Triggers",
	"trigger_name" => "Trigger name",
	"trigger_act" => "Trigger Action",
	"trigger_step" => "Trigger Steps (semicolon terminated)",
	"when_exp" => "WHEN expression (type expression without 'WHEN')",
	"index" => "Index",
	"indexes" => "Indexes",
	"index_name" => "Index name",
	"name" => "Name",
	"unique" => "Unique",
	"seq_no" => "Seq. No.",
	"emptied" => "has been emptied",
	"dropped" => "has been dropped",
	"renamed" => "has been renamed to",
	"altered" => "has been altered successfully",
	"inserted" => "inserted",
	"deleted" => "deleted",
	"affected" => "affected",
	"blank_index" => "Index name must not be blank.",
	"one_index" => "You must specify at least one index column.",
	"docu" => "Documentation",
	"license" => "License",
	"proj_site" => "Project Site",
	"bug_report" => "This may be a bug that needs to be reported at",
	"return" => "Return",
	"browse" => "Browse",
	"fld" => "Field",
	"fld_num" => "Number of Fields",
	"fields" => "Fields",
	"type" => "Type",
	"operator" => "Operator",
	"val" => "Value",
	"update" => "Update",
	"comments" => "Comments",
	
	"specify_fields" => "You must specify the number of table fields.",
	"specify_tbl" => "You must specify a table name.",
	"specify_col" => "You must specify a column.",
	
	"tbl_exists" => "Table of the same name already exists.",
	"show" => "Show",
	"show_rows" => "Showing %s row(s). ",
	"showing" => "Showing",
	"showing_rows" => "Showing rows",
	"query_time" => "(Query took %s sec)",
	"syntax_err" => "There is a problem with the syntax of your query (Query was not executed)",
	"run_sql" => "Run SQL query/queries on database '%s'",
	"recent_queries" => "Recent Queries",
	"full_texts" => "Show full texts",
	"no_full_texts" => "Shorten long texts",
	
	"ques_empty" => "Are you sure you want to empty the table '%s'?",
	"ques_drop" => "Are you sure you want to drop the table '%s'?",
	"ques_drop_view" => "Are you sure you want to drop the view '%s'?",
	"ques_del_rows" => "Are you sure you want to delete row(s) %s from table '%s'?",
	"ques_del_db" => "Are you sure you want to delete the database '%s'?",
	"ques_column_delete" => "Are you sure you want to delete column(s) %s from table '%s'?",
	"ques_del_index" => "Are you sure you want to delete index '%s'?",
	"ques_del_trigger" => "Are you sure you want to delete trigger '%s'?",
	"ques_primarykey_add" => "Are you sure you want to add a primary key for the column(s) %s in table '%s'?",
	
	"export_struct" => "Export with structure",
	"export_data" => "Export with data",
	"add_drop" => "Add DROP TABLE",
	"add_transact" => "Add TRANSACTION",
	"fld_terminated" => "Fields terminated by",
	"fld_enclosed" => "Fields enclosed by",
	"fld_escaped" => "Fields escaped by",
	"fld_names" => "Field names in first row",
	"rep_null" => "Replace NULL by",
	"rem_crlf" => "Remove CRLF characters within fields",
	"put_fld" => "Put field names in first row",
	"null_represent" => "NULL represented by",
	"import_suc" => "Import was successful.",
	"import_into" => "Import into",
	"import_f" => "File to import",
	"rename_tbl" => "Rename table '%s' to",
	
	"rows_records" => "row(s) starting from record # ",
	"rows_aff" => "row(s) affected. ",
	
	"as_a" => "as a",
	"readonly_tbl" => "'%s' is a view, which means it is a SELECT statement treated as a read-only table. You may not edit or insert records.",
	"chk_all" => "Check All",
	"unchk_all" => "Uncheck All",
	"with_sel" => "With Selected",
	
	"no_tbl" => "No table in database.",
	"no_chart" => "If you can read this, it means the chart could not be generated. The data you are trying to view may not be appropriate for a chart.",
	"no_rows" => "There are no rows in the table for the range you selected.",
	"no_sel" => "You did not select anything.",
	
	"chart_type" => "Chart Type",
	"chart_bar" => "Bar Chart",
	"chart_pie" => "Pie Chart",
	"chart_line" => "Line Chart",
	"lbl" => "Labels",
	"empty_tbl" => "This table is empty.",
	"click" => "Click here",
	"insert_rows" => "to insert rows.",
	"restart_insert" => "Restart insertion with ",
	"ignore" => "Ignore",
	"func" => "Function",
	"new_insert" => "Insert As New Row",
	"save_ch" => "Save Changes",
	"def_val" => "Default Value",
	"prim_key" => "Primary Key",
	"tbl_end" => "field(s) at end of table",
	"query_used_table" => "Query used to create this table",
	"query_used_view" => "Query used to create this view",
	"create_index2" => "Create an index on",
	"create_trigger2" => "Create a new trigger",
	"new_fld" => "Adding new field(s) to table '%s'",
	"add_flds" => "Add Fields",
	"edit_col" => "Editing column '%s'",
	"vac" => "Vacuum",
	"vac_desc" => "Large databases sometimes need to be VACUUMed to reduce their footprint on the server. Click the button below to VACUUM the database '%s'.",
	"event" => "Event",
	"each_row" => "For Each Row",
	"define_index" => "Define index properties",
	"dup_val" => "Duplicate values",
	"allow" => "Allowed",
	"not_allow" => "Not Allowed",
	"asc" => "Ascending",
	"desc" => "Descending",
	"warn0" => "You have been warned.",
	"warn_passwd" => "You are using the default password, which can be dangerous. You can change it easily at the top of %s.",
	"warn_dumbass" => "You didn't change the value dumbass ;-)",
	"counting_skipped" => "Counting of records has been skipped for some tables because your database is comparably big and some tables don't have primary keys assigned to them so counting might be slow. Add a primary key to these tables or %sforce counting%s.",
	"sel_state" => "Select Statement",
	"delimit" => "Delimiter",
	"back_top" => "Back to Top",
	"choose_f" => "Choose File",
	"instead" => "Instead of",
	"define_in_col" => "Define index column(s)",
	
	"delete_only_managed" => "You can only delete databases managed by this tool!",
	"rename_only_managed" => "You can only rename databases managed by this tool!",
	"db_moved_outside" => "You either tried to move the database into a directory where it cannot be managed anylonger, or the check if you did this failed because of missing rights.",
	"extension_not_allowed" => "The extension you provided is not within the list of allowed extensions. Please use one of the following extensions",
	"add_allowed_extension" => "You can add extensions to this list by adding your extension to \$allowed_extensions in the configuration.",
	"directory_not_writable" => "The database-file itself is writable, but to write into it, the containing directory needs to be writable as well. This is because SQLite puts temporary files in there for locking.",
	"tbl_inexistent" => "Table %s does not exist",

	// errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
	"alter_failed" => "Altering of Table %s failed",
	"alter_tbl_name_not_replacable" => "could not replace the table name with the temporary one",
	"alter_no_def" => "no ALTER definition",
	"alter_parse_failed" =>"failed to parse ALTER definition",
	"alter_action_not_recognized" => "ALTER action could not be recognized",
	"alter_no_add_col" => "no column to add detected in ALTER statement",
	"alter_pattern_mismatch"=>"Pattern did not match on your original CREATE TABLE statement",
	"alter_col_not_recognized" => "could not recognize new or old column name",
	"alter_unknown_operation" => "Unknown ALTER operation!",
	
	/* Help documentation */
	"help_doc" => "Help Documentation",
	"help1" => "SQLite Library Extensions",
	"help1_x" => "%s uses PHP library extensions that allow interaction with SQLite databases. Currently, %s supports PDO, SQLite3, and SQLiteDatabase. Both PDO and SQLite3 deal with version 3 of SQLite, while SQLiteDatabase deals with version 2. So, if your PHP installation includes more than one SQLite library extension, PDO and SQLite3 will take precedence to make use of the better technology. However, if you have existing databases that are of version 2 of SQLite, %s will be forced to use SQLiteDatabase for only those databases. Not all databases need to be of the same version. During the database creation, however, the most advanced extension will be used.",
	"help2" => "Creating a New Database",
	"help2_x" => "When you create a new database, the name you entered will be appended with the appropriate file extension (.db, .db3, .sqlite, etc.) if you do not include it yourself. The database will be created in the directory you specified as the \$directory variable.",
	"help3" => "Tables vs. Views",
	"help3_x" => "On the main database page, there is a list of tables and views. Since views are read-only, certain operations will be disabled. These disabled operations will be apparent by their omission in the location where they should appear on the row for a view. If you want to change the data for a view, you need to drop that view and create a new view with the appropriate SELECT statement that queries other existing tables. For more information, see <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
	"help4" => "Writing a Select Statement for a New View",
	"help4_x" => "When you create a new view, you must write an SQL SELECT statement that it will use as its data. A view is simply a read-only table that can be accessed and queried like a regular table, except it cannot be modified through insertion, column editing, or row editing. It is only used for conveniently fetching data.",
	"help5" => "Export Structure to SQL File",
	"help5_x" => "During the process for exporting to an SQL file, you may choose to include the queries that create the table and columns.",
	"help6" => "Export Data to SQL File",
	"help6_x" => "During the process for exporting to an SQL file, you may choose to include the queries that populate the table(s) with the current records of the table(s).",
	"help7" => "Add Drop Table to Exported SQL File",
	"help7_x" => "During the process for exporting to an SQL file, you may choose to include queries to DROP the existing tables before adding them so that problems do not occur when trying to create tables that already exist.",
	"help8" => "Add Transaction to Exported SQL File",
	"help8_x" => "During the process for exporting to an SQL file, you may choose to wrap the queries around a TRANSACTION so that if an error occurs at any time during the importation process using the exported file, the database can be reverted to its previous state, preventing partially updated data from populating the database.",
	"help9" => "Add Comments to Exported SQL File",
	"help9_x" => "During the process for exporting to an SQL file, you may choose to include comments that explain each step of the process so that a human can better understand what is happening."

);
