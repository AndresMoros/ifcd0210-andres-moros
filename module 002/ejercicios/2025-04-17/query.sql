-- Active: 1745156308057@@127.0.0.1@3306@banco_conjunto

-- • Crear la BD BancoConjuntos y ponerla en uso.
DROP DATABASE banco_conjunto;
CREATE DATABASE banco_conjunto;

USE banco_conjunto;

-- • Crear las siguientes tablas especificando el tipo de campo y sus características más adecuadas.
-- • Relacionar las tablas.
-- • Tablas:
-- o Clientes.
-- ▪ (Cod_Cliente (PK), Nombre, Ciudad).

CREATE TABLE IF NOT EXISTS banco_conjunto.Clientes (
    codCliente CHAR(6) PRIMARY KEY,
    nombre VARCHAR(30),
    Ciudad VARCHAR(50)
);

-- o Sucursal.
-- ▪ (Cod_Sucursal (PK Nombre, Ciudad).
CREATE TABLE IF NOT EXISTS banco_conjunto.Sucursales (
    codSucursal CHAR(8) PRIMARY KEY,
    nombre VARCHAR(40),
    direccion VARCHAR(60)
);

-- o Préstamo.
-- ▪ (Num_prestamo (PK), Cod_Sucursal(FK), Cod_Cliente(FK), Importe).
CREATE TABLE IF NOT EXISTS banco_conjunto.Prestamo (
    numPrestamo INT NOT NULL AUTO_INCREMENT,
    codSucursal CHAR(8),
    codCliente CHAR(6),
    PRIMARY KEY (numPrestamo),
    FOREIGN KEY (codSucursal) REFERENCES banco_conjunto.Sucursales (codSucursal),
    FOREIGN KEY (codCliente) REFERENCES banco_conjunto.Clientes (codCliente)
);

-- o Deposito.
-- ▪ (Num_cuenta (PK), Cod_Sucursal(FK), Cod_Cliente(FK), Saldo).

CREATE TABLE IF NOT EXISTS banco_conjunto.Deposito (
    numCuenta INT NOT NULL PRIMARY KEY,
    codSucursal CHAR(8),
    codCliente CHAR(6),
    saldo FLOAT (12,2) UNSIGNED CHECK (saldo > 0),
    FOREIGN KEY (codSucursal) REFERENCES banco_conjunto.Sucursales(codSucursal),
    FOREIGN KEY (codCliente) REFERENCES banco_conjunto.Clientes(codCliente)
);
