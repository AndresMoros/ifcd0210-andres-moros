-- Active: 1744357566681@@127.0.0.1@3306@agenda


	/* Base de datos para el ejercicio Conexión BD 1.*/
	
		create database agenda;
		use agenda;

		create table agenda(
			codigo varchar(4) primary key,
			nombre varchar(30) not null,
			apellidos varchar(50) not null,
			email varchar(40) not null,
			telefono varchar(10) not null);
			
		insert into agenda values ("1234","Luis Miguel","Padilla Sánchez","luismiguel@gmail.com","900123456"),
									   ("4321","Rosa","Pascual Martín","rosa@gmail.com","900544523"),
									   ("3421","Cristina","Pérez Fernández","cris@gmail.com","900876123"),
									   ("2431","Juan","López Arias","pepe@gmail.com","900456297");
