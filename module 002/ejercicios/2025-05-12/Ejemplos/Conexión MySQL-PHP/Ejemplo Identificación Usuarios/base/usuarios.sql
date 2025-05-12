
/* Base de datos Usuarios para Ejemplo Identificación de Usuarios | PHP y MySQL.*/

CREATE DATABASE Usuarios;

USE Usuarios;

CREATE TABLE usuarios(
idusuario INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(30) NOT NULL,
apellidos varchar(50) NOT NULL,
usuario VARCHAR (30) NOT NULL,
clave VARCHAR(25) not NULL,
email varchar(50) NOT NULL);

INSERT INTO usuarios (nombre,apellidos,usuario,clave,email) VALUES
("Cristina","Padilla Sánchez","cris21","1234","cris@gmail.com"),
("Pepe","López Arias","pepito","4321","pepe@gmail.com"),
("Rosa","Pascual Martín","ro","0000","rosa@gmail.com");

