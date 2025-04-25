-- Active: 1744357566681@@127.0.0.1@3306@alumnos
	
	/* Base de Datos. */
		
		Create DATABASE Cripto;
		USE Cripto;

		
	/* Tablas. */
	
		CREATE TABLE Usuarios1 (
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50),
		contraseña VARCHAR(50) -- Un tipo varchar(), y cualquiera otro que guarde caracteres, no es adecuado para cifrar los datos contenidos.
		);
		
		CREATE TABLE Usuarios2 (
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50),
		contraseña VARBINARY(50)
		);
		
		CREATE TABLE Usuarios3 (
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50),
		contraseña BLOB
		);
		
		CREATE TABLE Usuarios4 (
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50),
		contraseña VARCHAR(50) -- Un tipo varchar(), y cualquiera otro que guarde caracteres, no es adecuado para cifrar los datos contenidos.
		);
		
		CREATE TABLE Usuarios5 (
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50),
		contraseña VARBINARY(50)
		);
		
		CREATE TABLE Usuarios6 (
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50),
		contraseña BLOB
		);
	
	/* Encriptar datos con distintas claves de encriptación. */
		
		INSERT INTO Usuarios1 (nombre, contraseña) VALUES
		("Cristina", AES_ENCRYPT("1234", "uno")),
		("Rosa", AES_ENCRYPT("abcd", "dos")),
		("Aurora", AES_ENCRYPT("xyz", "tres")); -- Campo contraseña con problemas porque es un campo para caracteres y la encriptación maneja datos binarios.
		
		INSERT INTO Usuarios2 (nombre, contraseña) VALUES
		("Cristina", AES_ENCRYPT("1234", "uno")),
		("Rosa", AES_ENCRYPT("abcd", "dos")),
		("Aurora", AES_ENCRYPT("xyz", "tres"));
		
		INSERT INTO Usuarios3 (nombre, contraseña) VALUES
		("Cristina", AES_ENCRYPT("1234", "uno")),
		("Rosa", AES_ENCRYPT("abcd", "dos")),
		("Aurora", AES_ENCRYPT("xyz", "tres"));
		
	/* Encriptar datos con la misma clave de encriptación. */
		
		INSERT INTO Usuarios4 (nombre, contraseña) VALUES
		("Cristina", AES_ENCRYPT("1234", "uno")),
		("Rosa", AES_ENCRYPT("abcd", "uno")),
		("Aurora", AES_ENCRYPT("xyz", "uno")); -- Campo contraseña con problemas porque es un campo para carateres y la encriptación maneja datos binarios.
		
		INSERT INTO Usuarios5 (nombre, contraseña) VALUES
		("Cristina", AES_ENCRYPT("1234", "dos")),
		("Rosa", AES_ENCRYPT("abcd", "dos")),
		("Aurora", AES_ENCRYPT("xyz", "dos"));
		
		INSERT INTO Usuarios6 (nombre, contraseña) VALUES
		("Cristina", AES_ENCRYPT("1234", "tres")),
		("Rosa", AES_ENCRYPT("abcd", "tres")),
		("Aurora", AES_ENCRYPT("xyz", "tres"));
	
	/* Consulta con datos encriptados. */
	
		SELECT * FROM usuarios1;
		SELECT * FROM usuarios2;
		SELECT * FROM usuarios3;
		
		SELECT nombre, contraseña FROM usuarios1;
		SELECT nombre, contraseña FROM usuarios2;
		SELECT nombre, contraseña FROM usuarios3;
		
		
	/* Consulta con datos desencriptados. Distinta clave de encriptación en el mismo campo para cada registro de la tabla. */
	
		SELECT nombre, AES_DECRYPT(contraseña,"uno") as contraseña FROM usuarios1; -- Sin desencriptación porque el tipo de datos original no cifró bien los datos.
		SELECT nombre, AES_DECRYPT(contraseña,"dos") as contraseña FROM usuarios2;
		SELECT nombre, AES_DECRYPT(contraseña,"tres") as contraseña FROM usuarios3;	
		
	/* Consulta con datos desencriptados. Misma clave de encriptación en el mismo campo para todos los registros de la tabla. */
	
		SELECT nombre, AES_DECRYPT(contraseña,"uno") as contraseña FROM usuarios4; -- Sin desencriptación porque el tipo de datos original no cifró bien los datos.
		SELECT nombre, AES_DECRYPT(contraseña,"dos") as contraseña FROM usuarios5;
		SELECT nombre, AES_DECRYPT(contraseña,"tres") as contraseña FROM usuarios6;
		
	/* Consultas usando el campo encriptado como criterio.*/
	
		SELECT nombre, AES_DECRYPT(contraseña,"tres") as contraseña FROM usuarios6
		WHERE AES_DECRYPT(contraseña,"tres") = '1234';
	
	/* Solución para campos texto a encriptar. Función hex() */
	
		CREATE TABLE Usuarios7 (
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50),
		contraseña VARCHAR(50) -- Tipo varchar(), con cadenas de caracteres convertidas a datos hexadecimales.
		);
		
		INSERT INTO Usuarios7 (nombre, contraseña) VALUES
		("Cristina", HEX(AES_ENCRYPT("1234", "uno"))),
		("Rosa", HEX(AES_ENCRYPT("abcd", "uno"))),
		("Aurora", HEX(AES_ENCRYPT("xyz", "uno"))); 
		
		SELECT nombre, contraseña FROM usuarios7; -- Dato encriptado.
		SELECT nombre, AES_DECRYPT(contraseña,"uno") as contraseña FROM usuarios7; -- Null, no se puede desencriptar por ser cadenas de caracteres.
		SELECT nombre, AES_DECRYPT(unhex(contraseña),"uno") as contraseña FROM usuarios7; -- Dato desencriptado.
		