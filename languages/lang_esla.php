<?php
// Español LatinoAmericano.
// Traducido por Leandro G. Ortega - SuperBalgas - leandro@g-ortega.com.ar
// Idioma: Español Latino Americano - Argentina

$lang = [
	// Agregado para la version 1.9.5
	"no" => "No",
	"none" => "ninguno",
	"as_defined" => "Personalizado",
	"expression" => "Expresi&oacute;n",
	"ques_primarykey_add" => "&iquest;Est&aacute; seguro de querer agregar una PRIMARY KEY para la columna (s) %s en la tabla '%s'?",
	"ques_column_delete" => "&iquest;Est&aacute; seguro de que desea eliminar la columna (s) %s de la tabla '%s'?",

	"direction" => "LTR",
	"date_format" => 'd-m-Y \a \l\a\s g:ia (T)',  // Formato Argentino, 19-01-1992 a las 8:00AM
	"ver" => "versi&oacute;n",
	"for" => "para",
	"to" => "a",
	"go" => "Ir",
	"yes" => "Si",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "Esa tabla CSV, pertenece a",
	"srch" => "Buscar",
	"srch_again" => "Hacer otra b&uacute;squeda",
	"login" => "Ingresar",
	"logout" => "Salir",
	"view" => "Ver",
	"confirm" => "Confirmar",
	"cancel" => "Cancelar",
	"save_as" => "Guardar Como",
	"options" => "Opciones",
	"no_opt" => "Sin opciones",
	"help" => "Ayuda",
	"installed" => "instalado",
	"not_installed" => "no instalado",
	"done" => "hecho",
	"insert" => "Insertar",
	"export" => "Exportar",
	"import" => "Importar",
	"rename" => "Renombrar",
	"empty" => "Vaciar",
	"drop" => "Borrar",
	"tbl" => "Tabla",
	"chart" => "Tabla",
	"err" => "ERROR",
	"act" => "Accion",
	"rec" => "Archivos",
	"col" => "Columna",
	"cols" => "Columnas",
	"rows" => "fila(s)",
	"edit" => "Editar",
	"del" => "Borrar",
	"add" => "Agregar",
	"backup" => "Archivo de DB de respaldo",
	"before" => "Antes",
	"after" => "Despues",
	"passwd" => "Contrase&ntilde;a",
	"passwd_incorrect" => "Contrase&ntilde;a incorrecta.",
	"chk_ext" => "Compruebe la extenci&oacute;n de SQLite en su PHP",
	"autoincrement" => "Incremento autom&aacute;tico",
	"not_null" => "No NULL",
	"attention" => "Atenci&oacute;n",
	
	"sqlite_ext" => "Extensi&oacute;n SQLite",
	"sqlite_ext_support" => "Parece que ninguna de las extensiones de la biblioteca SQLite est&aacute;n disponibles en su instalaci&oacute;n de PHP. Por el momento no puede usar %s hasta que instale por lo menos uno de ellos.",
	
	"sqlite_v" => "SQLite versi&oacute;n",
	"sqlite_v_error" => "Parece que tu base de datos es de SQLite %s, pero tu instalaci&oacute;n de PHP no contiene las extensiones necesarias para manejar esta versi&oacute;n. Para solucionar el problema, elimine la base de datos y permita que %s pueda crear autom&aacute;ticamente o vuelva a crear de forma manual como SQLite %s.",
	"report_issue" => "El problema no se puede diagnosticar correctamente. Por favor, enviar un informe de asunto",
	"sqlite_limit" => "Debido a las limitaciones de SQLite, s&oacute;lo el nombre del campo y tipo de datos se pueden modificar.",
	
	"php_v" => "PHP versi&oacute;n",
	
	"db_dump" => "database dump",
	"db_f" => "Archivo database",
	"db_ch" => "Cambiar database",
	"db_event" => "Eventos de la database",
	"db_name" => "Nombre de la database",
	"db_rename" => "Renombrar database",
	"db_renamed" => "La base de datos '%s' ha sido renombrada a",
	"db_del" => "Borar Database",
	"db_path" => "Ruta de database",
	"db_size" => "Tama&ntilde;o de la database",
	"db_mod" => "&Uacute;ltima modificaci&oacute;n",
	"db_create" => "Crear Nueva Database",
	"db_vac" => "La database, '%s', ha sido limpiado.",
	"db_not_writeable" => "La base de datos, '%s', no existe y no se puede crear porque el directorio que contiene, '%s', no tiene permisos de escritura. La aplicaci&oacute;n no se puede usar hasta que lo hagas de escritura.",
	"db_setup" => "Hubo un problema para establecer su base de datos, %s. Se har&aacute; un intento de averiguar lo que est&aacute; pasando para que pueda solucionar el problema con mayor facilidad",
	"db_exists" => "Una base de datos, otro archivo o directorio del nombre '%s' ya existe.",
	
	"exported" => "Exportado",
	"struct" => "Estructura",
	"struct_for" => "estructura para",
	"on_tbl" => "en tabla",
	"data_dump" => "Voltear data en",
	"backup_hint" => "Sugerencia: Para una copia de seguridad de base de datos, la forma m&aacute;s f&aacute;cil es %s.",
	"backup_hint_linktext" => "descargar la base de datos en archivo",
	"total_rows" => "un total de %s filas",
	"total" => "Total",
	"not_dir" => "El directorio especificado para buscar bases de datos no existe o no es un directorio.",
	"bad_php_directive" => "Parece que la directiva de PHP, 'register_globals' est&aacute; habilitada. Esto es malo. Tiene que desactivar antes de continuar.",
	"page_gen" => "P&aacute;gina generada en %s segundos.",
	"powered" => "Powered by",
	"remember" => "Recordarme",
	"no_db" => "Bienvenido a %s. Parece que usted ha seleccionado para escanear un directorio de bases de datos para la gesti&oacute;n. Sin embargo, %s no pudo encontrar ninguna base de datos SQLite v&aacute;lida. Usted puede utilizar el siguiente formulario para crear su primera base de datos.",
	"no_db2" => "El directorio especificado no contiene las bases de datos existentes para la gesti&oacute;n y el directorio no tiene permisos de escritura. Esto significa que no se puede crear ninguna nueva base de datos utilizando %s. Haga el directorio escribible o cargue manualmente las bases de datos en el directorio.",
	
	"create" => "Crear",
	"created" => "ha sido creado",
	"create_tbl" => "Crear nueva tabla",
	"create_tbl_db" => "Crear nueva tabla en database",
	"create_trigger" => "Crear nuevo trigger en la tabla",
	"create_index" => "Crear nuevo &iacute;ndice en la tabla",
	"create_index1" => "Crear &Iacute;ndice",
	"create_view" => "Crear una nueva vista en la base de datos",
	
	"trigger" => "Trigger",
	"triggers" => "Triggers",
	"trigger_name" => "Nombre del Trigger",
	"trigger_act" => "Acci&oacute;n del Trigger",
	"trigger_step" => "Trigger Steps (punto y coma terminado)",
	"when_exp" => "Expresi&oacute;n WHEN (type expression without 'WHEN')",
	"index" => "&Iacute;ndice",
	"indexes" => "&Iacute;ndices",
	"index_name" => "Nombre del &Iacute;ndice",
	"name" => "Nombre",
	"unique" => "&Uacute;nico",
	"seq_no" => "Seq. No.",
	"emptied" => "se ha vaciado",
	"dropped" => "se ha borrado",
	"renamed" => "se ha renombrado a",
	"altered" => "ha sido alterado con &eacute;xito",
	"inserted" => "insertado",
	"deleted" => "borrado",
	"affected" => "afectado",
	"blank_index" => "El nombre del &iacute;ndice, no puede estar en blanco.",
	"one_index" => "Debe especificar al menos una columna de &iacute;ndice.",
	"docu" => "Documentaci&oacute;n",
	"license" => "Licencia",
	"proj_site" => "Sitio del proyecto",
	"bug_report" => "Esto puede ser un error que debe ser reportado",
	"return" => "Volver",
	"browse" => "Navegar",
	"fld" => "Campo",
	"fld_num" => "N&uacute;mero de Campos",
	"fields" => "Campos",
	"type" => "Tipo",
	"operator" => "Operador",
	"val" => "Valor",
	"update" => "Actualizar",
	"comments" => "Comentararios",
	
	"specify_fields" => "Debe especificar el n&uacute;mero de campos de la tabla.",
	"specify_tbl" => "Debe especificar el nombre de la tabla.",
	"specify_col" => "Debe especificar una columna.",
	
	"tbl_exists" => "Ya existe una tabla con el mismo nombre.",
	"show" => "Mostrar",
	"show_rows" => "Mostrando %s filas(s). ",
	"showing" => "Mostrando",
	"showing_rows" => "Mostrando filas",
	"query_time" => "(La consulta tom&oacute; %s seg)",
	"syntax_err" => "Hay un problema con la sintaxis de la consulta (La Query no se ha ejecutado)",
	"run_sql" => "Ejecutar consultas SQL/consultas en base de datos '%s'",
	
	"ques_empty" => "&iquest;Est&aacute; seguro de querer vaciar la tabla '%s'?",
	"ques_drop" => "&iquest;Est&aacute; seguro de querer borrar la tabla '%s'?",
	"ques_drop_view" => "&iquest;Est&aacute; seguro de querer borrar la vista '%s'?",
	"ques_del_rows" => "&iquest;Est&aacute; seguro de querer borrar la(s) fila(s) %s de la tabla '%s'?",
	"ques_del_db" => "&iquest;Est&aacute; seguro de querer borrar la base de datos '%s'?",
	"ques_del_index" => "&iquest;Est&aacute; seguro de querer borrar el &iacute;ndice '%s'?",
	"ques_del_trigger" => "&iquest;Est&aacute; seguro de querer borrar el trigger '%s'?",
	
	"export_struct" => "Exportar con estructura",
	"export_data" => "Exportar con datos",
	"add_drop" => "A&ntilde;adir DROP TABLE",
	"add_transact" => "A&ntilde;adir TRANSACTION",
	"fld_terminated" => "Campos terminadas en",
	"fld_enclosed" => "Fields enclosed by",
	"fld_escaped" => "Campos escapados por",
	"fld_names" => "Los nombres de campo en la primera fila",
	"rep_null" => "Reemplazar NULL por",
	"rem_crlf" => "Remover caracteres CRLF dentro de los campos",
	"put_fld" => "Poner los nombres de campo en la primera fila.",
	"null_represent" => "NULL es representado por",
	"import_suc" => "Importaci&oacute;n realizada correctamente.",
	"import_into" => "Importar into",
	"import_f" => "Archivo para importar",
	"rename_tbl" => "Renombrar tabla '%s' a",
	
	"rows_records" => "fila(s) partiendo del registro # ",
	"rows_aff" => "fila(s) afectadas. ",
	
	"as_a" => "como un",
	"readonly_tbl" => "'%s' es un view, lo que significa que es una instrucci&oacute;n SELECT, se trata de una tabla de s&oacute;lo lectura. No puedes editar o insertar registros.",
	"chk_all" => "Seleccionar Todo",
	"unchk_all" => "Deseleccionar todo",
	"with_sel" => "Acciones",
	
	"no_tbl" => "No hay tablas, en la base de datos.",
	"no_chart" => "Si usted puede leer esto, significa que el gr&aacute;fico no se puede generar. Los datos que est&aacute; intentando ver no pueden ser apropiados para un gr&aacute;fico.",
	"no_rows" => "No hay registros en la tabla para el rango seleccionado.",
	"no_sel" => "No ha seleccionado nada.",
	
	"chart_type" => "Tipo de gr&aacute;fico",
	"chart_bar" => "Gr&aacute;fico de barras",
	"chart_pie" => "Gr&aacute;fico de sectores",
	"chart_line" => "Gr&aacute;fico de l&iacute;neas",
	"lbl" => "Etiquetas",
	"empty_tbl" => "Esta tabla est&aacute; vacia.",
	"click" => "Click aqu&iacute;",
	"insert_rows" => "para insertar filas.",
	"restart_insert" => "Reiniciar inserci&oacute;n con ",
	"ignore" => "Ignorar",
	"func" => "Funci&oacute;n",
	"new_insert" => "Insertar como una nueva fila",
	"save_ch" => "Guardar Cambios",
	"def_val" => "Valor Predeterminado",
	"prim_key" => "Clave Primaria",
	"tbl_end" => "campos(s) al final de la tabla",
	"query_used_table" => "Consulta usada para crear esta tabla",
	"query_used_view" => "Consulta usada para crear esta View",
	"create_index2" => "Crear un &iacute;ndice en",
	"create_trigger2" => "Crear un nuevo trigger",
	"new_fld" => "Agregar un nuevo campo(s) a la tabla '%s'",
	"add_flds" => "Agregar Campo",
	"edit_col" => "Editar columna '%s'",
	"vac" => "Vacuum",
	"vac_desc" => "Grandes bases de datos a veces tienen que limpiarse para reducir su huella en el servidor. Haga click en el bot&oacute;n de abajo para limpiar la base de datos '%s'.",
	"event" => "Evento",
	"each_row" => "For Each Row",
	"define_index" => "Definir propiedades del &iacute;ndice",
	"dup_val" => "Duplicar valores",
	"allow" => "Permitido",
	"not_allow" => "No Permitido",
	"asc" => "Ascendente",
	"desc" => "Descendente",
	"warn0" => "Estas advertido.",
	"warn_passwd" => "Est&aacute; usando la contrase&ntilde;a por defecto, y puede ser peligrosa. Puede cambiarla f&aacute;cilmente en la parte superior de %s.",
	"warn_dumbass" => "No cambi&oacute; el valor",
	"sel_state" => "Seleccione declaraci&oacute;n",
	"delimit" => "Delimitador",
	"back_top" => "Volver al principio",
	"choose_f" => "Elija un Archivo",
	"instead" => "En lugar de",
	"define_in_col" => "Defina indice de columna(s)",
	
	"delete_only_managed" => "S&oacute;lo puede eliminar bases de datos gestionadas por esta herramienta!",
	"rename_only_managed" => "S&oacute;lo puede cambiar el nombre de las bases de datos gestionadas por esta herramienta!",
	"db_moved_outside" => "Usted trat&oacute; de mover la base de datos a un directorio donde no se puede administrar, o comprobar. Si usted hizo este intento fracas&oacute; debido a la falta de derechos.",
	"extension_not_allowed" => "La extensi&oacute;n proporcionada no est&aacute; dentro de la lista de extensiones. Por favor use una de las siguientes extensiones",
	"add_allowed_extension" => "Usted puede agregar extensiones a esta lista mediante la adici&oacute;n de su extensi&oacute;n a \$allowed_extensions en la configuraci&oacute;n.",
	"directory_not_writable" => "La base de datos de archivo en s&iacute; es modificable, pero para escribir en &eacute;l, el directorio debe tener permisos de escritura as&iacute;. Esto es debido a que SQLite pone los archivos temporales all&iacute; por bloqueos.",
	"tbl_inexistent" => "La tabla %s no existe",

	// errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
	"alter_failed" => "Falla al alterar la tabla %s ",
	"alter_tbl_name_not_replacable" => "no podr&iacute;a reemplazar el nombre de tabla con el temporal",
	"alter_no_def" => "no hay definici&oacute;n ALTER",
	"alter_parse_failed" =>"no se pudo analizar la definci&oacute;n ALTER",
	"alter_action_not_recognized" => "Acci&oacute;n ALTER no pudo ser reconocido",
	"alter_no_add_col" => "no se detect&oacute; la columna a agregar en la sentencia ALTER",
	"alter_pattern_mismatch"=>"Patr&oacute;n no encontrado en su sentencia CREATE TABLE",
	"alter_col_not_recognized" => "no se pudo reconocer el nuevo o viejo nombre de la columna",
	"alter_unknown_operation" => "Operaci&oacute; ALTER desconocida!",
	
	/* Help documentation */
	"help_doc" => "Documentaci&oacute;n de Ayuda",
	"help1" => "Librer&iacute;a de Extensiones SQLite",
	"help1_x" => "%s utiliza extensiones de la biblioteca de PHP que permiten la interacci&oacute;n con bases de datos SQLite. Actualmente,%s soporta PDO, SQLite3 y SQLiteDatabase. PDO y SQLite3 lidian con la versi&oacute;n 3 de SQLite, mientras que SQLiteDatabase trata con la versi&oacute;n 2. Por lo tanto, si su instalaci&oacute;n de PHP incluye m&aacute;s de una extensi&oacute;n de la biblioteca SQLite,PDO y SQLite3 tendr&aacute;n prioridad para hacer uso de la mejor tecnolog&iacute;a. Sin embargo, si tiene bases de datos existentes que son de la versi&oacute;n 2 de SQLite,%s se ven obligados a utilizar SQLiteDatabase solo para aquellas bases de datos. No todas las bases de datos tienen que ser de la misma versi&oacute;n. Durante la creaci&oacute;n de bases de datos, sin embargo, se utilizar&aacute; la extensi&oacute;n m&aacute;s avanzada.",
	"help2" => "Crear una nueva base de datos",
	"help2_x" => "Cuando se crea una nueva base de datos, el nombre que haya especificado se anexar&aacute; con la extensi&oacute;n de archivo apropiado (.db, .db3, .sqlite, etc.) si no se incluye lo mismo. La base de datos se crear&aacute; en el directorio especificado en la variable \$directory.",
	"help3" => "Tablas vs. Views",
	"help3_x" => "En la p&aacute;gina de base de datos principal, hay una lista de tablas y view. Las view son de s&oacute;lo lectura, por lo que ciertas operaciones se desactivar&aacute;n. Estas operaciones con discapacidad ser&aacute; evidentes por su omisi&oacute;n en el lugar donde deben aparecer en la fila para ver. Si desea cambiar los datos en una view, Tienes que dejar ese punto de vista y crear una nueva vista con la correspondiente instrucci&oacute;n SELECT que consulta otras tablas existentes. Para obtener m&aacute;s informaci&oacute;n, consulte <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://es.wikipedia.org/wiki/Vista_(base_de_datos)</a>",
	"help4" => "Escribir una instrucci&oacute;n Select para una Nueva View",
	"help4_x" => "Cuando se crea una nueva view, usted debe escribir una instrucci&oacute;n SQL SELECT que utilizar&aacute; como sus datos. Una view es simplemente una tabla de s&oacute;lo lectura que se puede acceder y consultar como una tabla regular, excepto que no se puede modificar a trav&eacute;s de la inserci&oacute;n, edici&oacute;n de columna o fila. Se utiliza &uacute;nicamente para la busqueda de datos.",
	"help5" => "Exportar Estructura a un Archivo SQL",
	"help5_x" => "Durante el proceso de exportaci&oacute;n a un Archivo SQL, puede optar por incluir las consultas que crean tablas y columnas.",
	"help6" => "Exportar Datos a un Archivo SQL",
	"help6_x" => "Durante el proceso de exportaci&oacute;n a un Archivo SQL, puede optar por incluir las consultas que prueban la tabla(s) con los registros actuales de la misma.",
	"help7" => "Agregar Drop Table a Archivo SQL Exportado",
	"help7_x" => "Durante el proceso para exportar a un archivo SQL, puede optar por incluir las consultas para eliminar las tablas ya existentes antes de a&ntilde;adirlos. De forma que no se produzcan problemas al intentar crear las tablas que ya existen.",
	"help8" => "Agregar Transaction a Archivo SQL Exportado",
	"help8_x" => "Durante el proceso para exportar a un archivo SQL, puede optar por concluir las consultas en torno a una Transaction de modo que si se produce un error en cualquier momento durante el proceso de importaci&oacute;n bas&aacute;ndose en el archivo exportado, la base de datos se puede revertir a su estado anterior, lo que impide parcialmente datos actualizados de poblar la base de datos.",
	"help9" => "Agregar Comentarios a Archivo SQL Exportado",
	"help9_x" => "Durante el proceso para exportar a un archivo SQL, puede optar por incluir comentarios que explican cada paso del proceso para que un ser humano puede entender mejor lo que est&aacute; sucediendo."
	
	];
?>