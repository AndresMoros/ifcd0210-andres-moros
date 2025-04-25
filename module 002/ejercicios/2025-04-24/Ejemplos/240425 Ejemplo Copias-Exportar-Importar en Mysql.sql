-- Active: 1744357566681@@127.0.0.1@3306@operacionesbancarias


/* Poner en uso la base cuyo contenido se va a exportar.  */

	USE operacionesbancarias;


-- Copia de seguridad textual en:

	-- MariaDB.
	
		SELECT *
		INTO OUTFILE 'copiabanco1.txt' -- La copia se crea por defecto en la carpeta donde están los archivos físicos de la base de datos.
		FROM clientes;
	
	--MySQL.

		SELECT *
		INTO OUTFILE 'copiabanco2.txt' -- Error. No es la ruta correcta para guardar la copia.
		FROM clientes;

-- Consultar la variable secure_file_priv para conocer la ruta donde se guardará el archivo en My_SQl.

	SHOW VARIABLES LIKE 'secure_file_priv';

	--MySQL. (Tras cambiar la ruta de acceso).
	
		SELECT *
		INTO OUTFILE 'C:\\ProgramData\\MySQL\\MySQL Server 8.0\\Uploads\\copiabanco3.txt' -- Ruta correcta, obtenida con la consulta anterior. Doble contrabarra para las rutas de Windows.
		FROM clientes;

-- Destinos personalizados de la exportación.

	-- MariaDB.
	
		SELECT *
		INTO OUTFILE 'c:\\backupSQL\\backup_operacionesbancarias.txt' -- Destino: la carpeta CopiasSeguridad creada en la unidad de disco C:.
		FROM clientes;

	--MySQL.
	
		/* Nueva ruta a la carpeta Copias en la ruta c:/BaseDatos, al modificar la variable 'secure_file_priv' en el archivo my.ini. */
	
		SELECT *
		INTO OUTFILE 'C:/BaseDatos/Copias/copiabanco5.txt' 
		FROM clientes;
	
-- Con modificadores para separar comas y registros.	
	
		SELECT *
		INTO OUTFILE 'c:\\CopiasBD\\copiabanco6.txt'
		FIELDS TERMINATED BY ',' -- Separador de campos con una coma.
		LINES TERMINATED BY '\n' -- Separador de filas con un salto de línea.
		FROM clientes;
		
		SELECT *
		INTO OUTFILE 'c:\\CopiasBD\\copiabanco7.txt'
		FIELDS TERMINATED BY ', ' -- Separador de campos con una coma y un espacio en blanco.
		ENCLOSED BY '\"' -- Datos entrecomillados con comilla doble.
		LINES TERMINATED BY '\n\r' -- Separador de filas con un salto de línea y retorno de carro.
		FROM clientes;
		
		SELECT *
		INTO OUTFILE 'c:\\CopiasBD\\copiabanco8.txt'
		FIELDS TERMINATED BY ',' -- Separador de campos con una coma.
		LINES TERMINATED BY '\n' -- Separador de filas con un salto de línea.
		FROM cuentas;
	
			
/* Copia de la tabla clientes. Para no crear de nuevo la tabla clientes
 y rellenar con los datos de la copia.*/

		CREATE TABLE clientes2 LIKE clientes;
		CREATE TABLE cuentas2 LIKE cuentas;
	
-- Restaurar los datos de una tabla. 

		LOAD DATA INFILE 'c:\\CopiasBD\\copiabanco6.txt'
		INTO TABLE clientes2
		FIELDS TERMINATED BY ',';
		
		LOAD DATA INFILE 'c:\\CopiasBD\\copiabanco8.txt'
		INTO TABLE cuentas2
		FIELDS TERMINATED BY ',';

-- Confirmación de datos recuperados.

		SELECT * FROM clientes2;
		SELECT * FROM cuentas2;