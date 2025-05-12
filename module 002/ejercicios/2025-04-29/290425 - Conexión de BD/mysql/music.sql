-- Active: 1745156308057@@127.0.0.1@3306@phpmyadmin
CREATE DATABASE Musica;

USE Musica;

CREATE TABLE IF NOT EXISTS Ventas_discos(
    cod INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    author VARCHAR(50),
    genre VARCHAR(25),
    purch_date DATE NULL,
    price FLOAT(12,2)
);

SHOW TABLES;

DROP TABLE ventas;

SHOW GRANTS;
