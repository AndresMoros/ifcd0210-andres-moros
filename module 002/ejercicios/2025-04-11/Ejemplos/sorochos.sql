CREATE TABLE SOROCHOS(
    idPersona INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT CHECK (edad BETWEEN 15 AND 90),
    nivelSorochocidad FLOAT CHECK (nivelSorochocidad BETWEEN 0 AND 5)
);

INSERT INTO sorochos.sorochos (nombre, apellido, edad, nivelSorochocidad) VALUES (
    "Francisco",
    "Sorochin",
    31,
    4.99
);

SELECT * from sorochos.sorochos;

USE Sorochos;

drop table sorochos;
