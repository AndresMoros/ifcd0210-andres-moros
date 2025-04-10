# Ejercio 2

CREATE DATABASE zulia_abogados;

USE zulia_abogados;

CREATE TABLE Juicios (
    num_exp INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fecha_inicio DATE NOT NULL COMMENT "YYYY/MM/DD",
    fecha_archivo DATE NOT NULL COMMENT "YYYY/MM/DD",
    estado VARCHAR(10) CHECK(estado IN ("Activo", "Archivado")),
    cliente VARCHAR(10) NOT NULL COMMENT "DNI Cliente",
    abogado VARCHAR(10) NOT NULL COMMENT "DNI Abogado",
    FOREIGN KEY (cliente) REFERENCES Clientes (dni),
    FOREIGN KEY (abogado) REFERENCES Abogados (dni)
);

CREATE TABLE Clientes(
    dni VARCHAR(10) NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL
);

CREATE TABLE Abogados(
    dni VARCHAR(10) NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL
);

INSERT INTO Abogados VALUES (
    "Z32013184Y",
    "Daniela Araujo",
    "C./ Londres, 5"
),
(
    "Z1432758G",
    "Dariana Olivares",
    "C./ La Concepción, 14"
);

INSERT INTO Clientes VALUES (
    "Z1449234",
    "Marye Char",
    "C./ Porto Quila"
), (
    "Z123876C",
    "Jorge Rodriguez",
    "C./ Batan"
);

