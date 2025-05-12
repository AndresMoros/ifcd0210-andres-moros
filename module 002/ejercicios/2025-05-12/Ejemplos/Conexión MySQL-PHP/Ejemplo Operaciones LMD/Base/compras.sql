-- Active: 1744357566681@@127.0.0.1@3306@banco


	/*Conexion PHP y MySQL. Base de datos de usuarios a consultar.*/
		
		/*Creación y puesta en uso de la base de datos.*/
		
		create database compras;
		
		use compras;
		
		/*Creación de la tabla.*/
		
		create table usuarios
		(codigo varchar(10) primary key,
		nombre varchar(30) not null,
		apellidos varchar(50) not null,
		cuenta varchar(30) not null);
		
		/*Inserción de registros.*/
		
		INSERT INTO usuarios VALUES 
			("20A", "Rosa", "Pérez", "2342 00 9822 231232942"),
			("67B", "Antonio", "Jiménez", "1234 70 7642 118931294"),
			("5CC", "Álvaro", "Rodríguez", "8722 12 4528 412024611");

			DROP DATABASE alumnos; 