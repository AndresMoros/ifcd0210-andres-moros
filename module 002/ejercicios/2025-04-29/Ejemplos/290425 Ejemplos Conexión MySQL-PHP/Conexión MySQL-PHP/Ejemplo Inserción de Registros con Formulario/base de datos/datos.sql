-- Active: 1744357566681@@127.0.0.1@3306@datos


		/*Ejemplo inserción de datos en una base de datos desde un formulario HTML.*/

			CREATE DATABASE datos;

			USE datos;

			CREATE TABLE datos (
				codigo INT AUTO_INCREMENT PRIMARY KEY,
				nombre VARCHAR(50),
				direccion VARCHAR(50),
				telefono VARCHAR(10),
				email VARCHAR(50)
				);
