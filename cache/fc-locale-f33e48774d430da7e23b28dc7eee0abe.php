<?php return array (
  'installer.additionalLocales' => 'Locales adicionales',
  'installer.administratorAccount' => 'Cuenta del administrador',
  'installer.administratorAccountInstructions' => 'Esta cuenta de usuario/a pasará a ser el administrador/a del sitio y tendrá total acceso al sistema. Tras la instalación se pueden crear más cuentas de usuario/a.',
  'installer.checkNo' => '<span class="pkp_form_error formError">NO</span>',
  'installer.checkYes' => 'Sí',
  'installer.clientCharset' => 'Conjunto de caracteres del cliente',
  'installer.clientCharsetInstructions' => 'Codificación que usar para la información enviada y recibida de los navegadores.',
  'installer.configFileError' => 'El archivo de configuración <tt>config.inc.php</tt> no existe o no se puede leer.',
  'installer.connectionCharset' => 'Conjunto de caracteres de la conexión',
  'installer.contentsOfConfigFile' => 'Contenidos del fichero de configuración',
  'installer.createDatabase' => 'Crear nueva base de datos',
  'installer.createDatabaseInstructions' => 'Para usar esta opción, el sistema de la base de datos debe ser compatible con la creación de bases de datos remotas y su cuenta de usuario/a debe tener los permisos necesarios para crear nuevas bases de datos. Si la instalación no da resultado con esta opción seleccionada, cree la base de datos manualmente en su servidor y ejecute de nuevo el instalador con la opción deshabilitada.',
  'installer.databaseCharset' => 'Conjunto de caracteres de la base de datos',
  'installer.databaseDriver' => 'Driver de la base de datos',
  'installer.databaseDriverInstructions' => '<strong>Parece que los controladores de bases de datos que se muestran entre paréntesis no tienen la extensión PHP requerida cargada y es probable que la instalación no se realice correctamente si la selecciona.</strong><br />Los controladores de bases de datos no compatibles enumerados anteriormente se recogen sólo con fines académicos y es probable que no funcionen.',
  'installer.databaseHost' => 'Servidor',
  'installer.databaseHostInstructions' => 'Deje el nombre del servidor en blanco cuando se conecte mediante sockets de dominio y no por TCP/IP. Esto no es necesario con MySQL, ya que utiliza sockets automáticamente si se introduce "localhost", pero sí lo es con otros servidores de bases de datos como PostgreSQL.',
  'installer.databaseName' => 'Nombre de la base de datos',
  'installer.databasePassword' => 'Contraseña',
  'installer.databaseSettings' => 'Configuración de la base de datos',
  'installer.databaseUsername' => 'Nombre usuario',
  'installer.filesDir' => 'Directorio para subir documentos',
  'installer.fileSettings' => 'Configuración de ficheros',
  'installer.form.clientCharsetRequired' => 'Se debe seleccionar un conjunto de caracteres del cliente.',
  'installer.form.databaseDriverRequired' => 'Se debe seleccionar un controlador de base de datos.',
  'installer.form.databaseNameRequired' => 'Es necesario el nombre de la base de datos.',
  'installer.form.emailRequired' => 'Es necesaria una cuenta de correo electrónico válida para la cuenta de administrador.',
  'installer.form.filesDirRequired' => 'Es necesario introducir el directorio usado para almacenar los ficheros subidos.',
  'installer.form.localeRequired' => 'Se debe seleccionar un locale.',
  'installer.form.passwordRequired' => 'Es necesaria una contraseña para la cuenta de administrador',
  'installer.form.passwordsDoNotMatch' => 'Las contraseñas del administrador no coinciden.',
  'installer.form.separateMultiple' => 'Separar valores múltiples con comas',
  'installer.form.usernameAlphaNumeric' => 'El nombre de usuario del administrador sólo puede contener caracteres alfanuméricos, guiones bajos, y guiones, y debe empezar y finalizar con un carácter alfanumérico.',
  'installer.form.usernameRequired' => 'Es necesario un nombre de usuario para la cuenta de administrador.',
  'installer.installationWrongPhp' => '<br/><strong>ADVERTENCIA: La versión actual de PHP no cumple los requisitos mínimos de instalación. Se recomienda actualizar a una versión más reciente de PHP.</strong>',
  'installer.installErrorsOccurred' => 'Se han producido errores durante la instalación',
  'installer.installerSQLStatements' => 'Sentencias SQL para la instalación',
  'installer.installFileError' => 'El archivo de instalación <tt>dbscripts/xml/install.xml</tt> no existe o no se puede leer.',
  'installer.installFilesDirError' => 'El directorio especificado para los ficheros subidos no existe o no tiene permisos de escritura.',
  'installer.installParseDBFileError' => 'Error al analizar el archivo de instalación <tt>{$file}</tt>.',
  'installer.installParseEmailTemplatesFileError' => 'Error al analizar el archivo de plantilla de correo electrónico <tt>{$file}</tt>.',
  'installer.installParseFilterConfigFileError' => 'Error al analizar el archivo de configuración de filtro <tt>{$file}</tt>.',
  'installer.unsupportedUpgradeError' => 'Actualización no compatible. Ver docs/UPGRADE-UNSUPPORTED para obtener más detalles.',
  'installer.locale' => 'Configuración regional',
  'installer.locale.maybeIncomplete' => 'Las traducciones marcadas pueden estar incompletas.',
  'installer.localeSettings' => 'Configuración de locales',
  'installer.oaiSettings' => 'Configuración OAI',
  'installer.oaiRepositoryIdInstructions' => 'Un identificador único que se usa para identificar los registros de metadatos indexados desde este sitio mediante el Protocolo para la recopilación de metadatos <a href="http://www.openarchives.org/" target="_blank">Open Archives Initiative</a>.',
  'installer.oaiRepositoryId' => 'Identificador de repositorio OAI',
  'installer.publicFilesDirError' => 'El directorio de ficheros públicos no existe o no tiene permiso de escritura.',
  'installer.releaseNotes' => 'Notas de lanzamiento',
  'installer.preInstallationInstructionsTitle' => 'Pasos para preinstalación',
  'installer.preInstallationInstructions' => '<p>1. Los siguientes archivos y directorios (junto con sus contenidos) tienen que cambiarse a modo editable:</p>
		<ul>
			<li><tt>config.inc.php</tt> es editable (opcional): {$writable_config}</li>
			<li><tt>public/</tt> es editable: {$writable_public}</li>
			<li><tt>cache/</tt> es editable: {$writable_cache}</li>
			<li><tt>cache/t_cache/</tt> es editable: {$writable_templates_cache}</li>
			<li><tt>cache/t_compile/</tt> es editable: {$writable_templates_compile}</li>
			<li><tt>cache/_db</tt> es editable: {$writable_db_cache}</li>
		</ul>

		<p>2. Es necesario crear un directorio para guardar los archivos subidos y que sea editable (ver "Configuración de archivo" a continuación).</p>',
  'installer.configureXSLMessage' => '<p>Su instalación PHP no tiene el módulo XSL activado. Actívelo o configure el parámetro xslt_command en su archivo config.inc.php.</p>',
  'installer.beacon' => 'Beacon',
  'installer.beacon.enable' => 'Aporte a PKP un único identificador de sitio y una URL de base OAI solo con finalidades estadísticas y de seguridad.',
); ?>