USE PRODUCTOS;

CREATE TABLE Fabricantes (
    cod_fabricante INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(80) NOT NULL,
    PRIMARY KEY (cod_fabricante)
);

CREATE TABLE Productos (
    cod_producto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(55) NOT NULL,
    precio FLOAT NOT NULL,
    stock INT UNSIGNED NOT NULL,
    id_fabricante INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_fabricante) REFERENCES Fabricantes (cod_fabricante) ON UPDATE CASCADE
);

