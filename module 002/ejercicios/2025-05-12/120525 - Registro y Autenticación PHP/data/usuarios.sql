-- Active: 1745156308057@@127.0.0.1@3306@usuarios

/* Base de datos Compras para el ejercicio Conexión PHP-MySQL BD1. */

	create database Usuarios;

	use usuarios;

	create table usuarios(
    Usuario VARCHAR(15) primary key,
	Nombre varchar(25) not null,
	Apellidos varchar(60) not null,
	CorreoElectronico varchar(40) UNIQUE not null,
	Contraseña varchar(15) not null)