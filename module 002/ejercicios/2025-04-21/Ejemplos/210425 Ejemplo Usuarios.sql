-- Active: 1744357566681@@127.0.0.1@3306@personal

/* USUARIOS en MySQL. */

	USE personal;

/* Creación de usuarios. */

	CREATE USER 'euge'@'localhost' IDENTIFIED BY "333";
	CREATE USER "rosa"@"localhost" IDENTIFIED BY "abc";
	CREATE USER 'luis'@'localhost' IDENTIFIED BY'1234';
	CREATE USER 'pepe'@'localhost' IDENTIFIED BY'0987';

/* Asignación de permisos.*/

	GRANT ALL ON *.* TO 'euge'@'localhost' WITH GRANT OPTION;
	GRANT USAGE ON *.* TO 'rosa'@'localhost'; /* Sólo puede conectarse. */
	GRANT SELECT ON personal.departamentos TO 'luis'@'localhost'; /* Sólo puede consultar una tabla de la base. */
	GRANT CREATE, ALTER, SELECT,INSERT, UPDATE ON personal.* TO 'pepe'@'localhost'; /* Puede realizar varias operaciones LMD y LDD sobre todas las tablas de la base. */
	GRANT ALL ON tienda.* TO 'pepe'@'localhost'; /* Todos los permisos sobre la base de datos tienda. */


/* Modificación del usuario. */
	/*Cambio de contraseña.*/
	
	ALTER USER "rosa"@"localhost" IDENTIFIED BY "cba";

/* Eliminar o revocar permisos. */

	REVOKE ALTER ON personal.* FROM 'pepe'@'localhost'; /* Eliminacion del permiso para modificar las tablas. */
	REVOKE ALL ON tienda.* FROM 'pepe'@'localhost';

/* Eliminación de usuarios. */

	DROP USER 'euge'@'localhost'; /* Un sólo usuario. */
	DROP USER 'rosa'@'localhost', 'luis'@'localhost';  /* Varios usuarios a la vez. */

/* Recargar permisos. Sólo necesario si se modifican los permisos en la tabla de privilegios user. */
	
	/* Eliminar el permiso select para pepe usando la tabla de privilegios user.*/
	
		UPDATE mysql.user set Select_priv = 'N' WHERE user = 'pepe';
		
		FLUSH PRIVILEGES; /* Recargar para que se realice la actualizacion sin reconectar el usuario. */

/* Información sobre usuarios. */

	SELECT CURRENT_USER(); /* Usuario conectado actual.*/
	
	SHOW GRANTS; /* Permisos del usuario actual.*/
	SHOW GRANTS FOR "pma"@"localhost"; /* Permisos de otros usuarios registrados en el sevidor.*/

/* Información sobre usuarios conectados y sus estados. */

	SELECT user, host, command FROM information_schema.processlist;
	
/* Información sobre usuarios accediendo a la tabla user.*/

	/* Sin la base de datos mysql en uso. */

		SELECT DISTINCT USER FROM mysql.user;
		SELECT USER,host FROM mysql.user;
		SELECT * FROM mysql.user;
	
	/* Con la base de datos mysql en uso. */

		USE mysql;
		
		SELECT USER FROM user;
		SELECT USER,host FROM user;
		SELECT * FROM user;