-- Active: 1744357566681@@127.0.0.1@3306@taller
-- EJERCICIO 2: Creación de la Base de Datos y Tablas (2 puntos)

-- * Crear la base de datos Taller y ponerla en Uso

CREATE DATABASE IF NOT EXISTS Taller CHARACTER SET utf8;

USE TALLER;

## Crea las tablas 'Mecánicos', 'Coches' y 'Reparaciones' con las cacterísticas incluidas en el enunciado impreso.

CREATE TABLE IF NOT EXISTS Mecanicos (
    codMecanico VARCHAR(10),
    nombre VARCHAR(50) NULL,
    puesto VARCHAR(30) NULL
);

CREATE TABLE IF NOT EXISTS Coches (
    codCoche VARCHAR(10),
    marca VARCHAR(50) NULL,
    modelo VARCHAR(30) NULL
);

CREATE TABLE IF NOT EXISTS Reparaciones (
    codReparacion INT(5),
    codMecanico VARCHAR(10) NOT NULL,
    codCoche VARCHAR(10) NOT NULL,
    fechaInicioReparacion DATE NULL,
    fechaFinReparacion DATE NULL,
    horasReparacion INT NULL,
    totalFactura DECIMAL(12,2) NULL
);

###############################################################################

-- EJERCICIO 3: Modificación de Bases de Datos, Tablas y creación de Usuarios (2 puntos)

## Usando el usuario root crea un usuario con tu nombre, asígnale la contraseña '2302425' y dale todos los permisos sobre  la base de datos Taller y su contenido
CREATE USER 'andres'@'localhost' IDENTIFIED BY '230425';

GRANT ALL PRIVILEGES ON Taller.* TO andres@localhost;

## Conectate con este usuario, creando una conexión para él, y realiza las siguientes modifaciones a las tablas:

-- PS E:\ifcd2010-andres-moros> mysql -u andres -p
-- Enter password: ******
-- Welcome to the MariaDB monitor.  Commands end with ; or \g.     
-- Your MariaDB connection id is 12
-- Server version: 10.4.32-MariaDB mariadb.org binary distribution 

-- Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

-- Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

-- 1. Cambia el nombre del campo `Puesto` de la tabla Mecánicos, por el nuevo `Especialidad`

-- Instrucción
ALTER TABLE mecanicos CHANGE Puesto Especialidad VARCHAR(30) NULL;

-- Ejecución

-- MariaDB [(none)]> USE Taller;
-- Database changed  
-- MariaDB [Taller]> ALTER TABLE mecanicos CHANGE Puesto Especialidad VARCHAR(30) NULL;
-- Query OK, 0 rows affected (0.166 sec)
-- Records: 0  Duplicates: 0  Warnings: 0

-- MariaDB [Taller]> DESC Mecanicos;
-- +--------------+-------------+------+-----+---------+-------+
-- | Field        | Type        | Null | Key | Default | Extra |
-- +--------------+-------------+------+-----+---------+-------+
-- | codMecanico  | varchar(10) | NO   | PRI | NULL    |       |
-- | nombre       | varchar(50) | YES  |     | NULL    |       |
-- | Especialidad | varchar(30) | YES  |     | NULL    |       |
-- +--------------+-------------+------+-----+---------+-------+
-- 3 rows in set (0.016 sec)

-- 2. Los campos `horasReparacion` y `totalFactura` de la tabla reparaciones no deben admitir valores negativos 

-- Instrucciones:
ALTER TABLE reparaciones
MODIFY COLUMN horasReparacion INT CHECK (horasReparacion > 0);

ALTER  TABLE reparaciones
MODIFY COLUMN totalFactura DECIMAL(12, 2) CHECK (totalFactura > 0);

-- Ejecución

-- MariaDB [Taller]> ALTER TABLE reparaciones
--     -> MODIFY COLUMN horasReparacion INT CHECK (horasReparacion 
-- > 0);
-- Query OK, 0 rows affected (0.026 sec) 
-- Records: 0  Duplicates: 0  Warnings: 0

-- MariaDB [Taller]> ALTER  TABLE reparaciones
--     -> MODIFY COLUMN totalFactura DECIMAL(12, 2) CHECK (totalFactura > 0);
-- Query OK, 0 rows affected (0.025 sec) 
-- Records: 0  Duplicates: 0  Warnings: 0

-- 3. Añadir todas las claves primarias a las tablas

-- Instrucciones:
ALTER TABLE mecanicos ADD CONSTRAINT mecanicos_pk PRIMARY KEY (codMecanico);

ALTER TABLE coches ADD CONSTRAINT coches_pk PRIMARY KEY (codCoche);

ALTER TABLE reparaciones ADD CONSTRAINT rep_pk PRIMARY KEY (codReparacion);

-- Ejecución

-- MariaDB [Taller]> ALTER TABLE reparaciones ADD CONSTRAINT rep_pk PRIMARY KEY (codReparacion);
-- Query OK, 0 rows affected, 1 warning (0.533 sec)
-- Records: 0  Duplicates: 0  Warnings: 1

-- MariaDB [Taller]> ALTER TABLE mecanicos ADD CONSTRAINT mecanicos_pk PRIMARY KEY (codMecanico);
-- Query OK, 0 rows affected, 1 warning (0.390 sec)
-- Records: 0  Duplicates: 0  Warnings: 1

-- MariaDB [Taller]> ALTER TABLE coches ADD CONSTRAINT coches_pk PRIMARY KEY (codCoche);
-- Query OK, 0 rows affected, 1 warning (0.441 sec)
-- Records: 0  Duplicates: 0  Warnings: 1

-- 4. Enlaza todas las tablas entre sí de la forma más adecuada, con actualización y eliminación en cascada

ALTER TABLE reparaciones
ADD CONSTRAINT rep_fk_codmec FOREIGN KEY (codMecanico) REFERENCES mecanicos (codMecanico)
ON UPDATE CASCADE
ON DELETE CASCADE;

ALTER TABLE reparaciones
ADD CONSTRAINT rep_fk_codcoc FOREIGN KEY (codCoche) REFERENCES coches (codCoche)
ON UPDATE CASCADE
ON DELETE CASCADE;

DESC reparaciones;

-- MariaDB [Taller]> DESC reparaciones;
-- +-----------------------+---------------+------+-----+---------+-------+
-- | Field                 | Type          | Null | Key | Default | Extra |
-- +-----------------------+---------------+------+-----+---------+-------+
-- | codReparacion         | int(5)        | NO   | PRI | NULL    |       |
-- | codMecanico           | varchar(10)   | NO   | MUL | NULL    |       |
-- | codCoche              | varchar(10)   | NO   | MUL | NULL    |       |
-- | fechaInicioReparacion | date          | YES  |     | NULL    |       |
-- | fechaFinReparacion    | date          | YES  |     | NULL    |       |
-- | horasReparacion       | int(11)       | YES  |     | NULL    |       |
-- | totalFactura          | decimal(12,2) | YES  |     | NULL    |       |
-- +-----------------------+---------------+------+-----+---------+-------+
-- 7 rows in set (0.035 sec)

## Revoca todos los privilegios del usuario recien creado, y eliminalo

REVOKE ALL ON taller.* FROM 'andres'@'localhost';

SHOW GRANTS FOR andres@localhost;

MariaDB [(none)]> SHOW GRANTS FOR andres@localhost;

-- +----------------------------------------------------------------+
-- | Grants for andres@localhost
-- |
-- +----------------------------------------------------------------+
-- | GRANT USAGE ON *.* TO `andres`@`localhost` ... 
-- |
-- +----------------------------------------------------------------+
-- 1 row in set (0.000 sec)

###############################################################################

-- EJERCICIO 4: Operaciones con el Lenguaje de Manipulación de Datos I y Transacciones (2 puntos)

## Inicia una nueva transacción 

START TRANSACTION;

## Crea un punto de parada 'inser_registros'

SAVEPOINT inser_registros;

## Inserta los registros descritos en el enunciado escrito

INSERT INTO mecanicos VALUES 
(
    '001',
    'Ana',
    'Chapista'
),
(
    '002',
    'Luis',
    'Pintura'
),
(
    '003',
    'Juan',
    'Electricidad'
);

INSERT INTO coches VALUES
(
    'A-240',
    'Seat',
    'Ibiza'
),
(
    'A-141',
    'Seat',
    'Toledo'
),
(
    'A-380',
    'Dacia',
    'Sandero'
),
(
    'Z-441',
    'Ford',
    'Fiesta'
),
(
    'B-121',
    'Opel',
    'Corsa'
),
(
    'AB-125',
    'Seat',
    'Ibiza'
),
(
    'A-550',
    'Suzuki',
    'Vitara'
);

INSERT INTO Reparaciones VALUES 
(3465, '001', 'A-240', '2024-7-10', '2024-7-12', 12, 340.50),
(1234, '001', 'A-141', '2024-7-20', '2024-7-23', 10, 260.50),
(7654, '002', 'A-380', '2024-7-08', '2024-7-09', 5, 180),
(9283, '003', 'Z-441', '2024-7-24', '2024-7-30', 57, 530.50),
(3402, '002', 'B-121', '2024-7-24', '2024-7-26', 12, 290.60),
(4463, '002', 'B-121', '2024-7-26', '2024-7-27', 4, 98.20),
(7211, '003', 'Z-441', '2024-7-27', '2024-7-30', 43, 682.00),
(6500, '002', 'Z-441', '2024-7-24', '2024-7-30', 9, 150.00);

## Crea un punto de parado 'actual_registros'

SAVEPOINT actual_registros;

## Actualiza la especilidad de Juan, de 'Electricidad' a 'Electronica'

UPDATE mecanicos
SET `Especialidad` = "Electrónica"
WHERE `codMecanico` =  (
                        SELECT `codMecanico` 
                        FROM mecanicos 
                        WHERE nombre = "Juan"
                        );

## Crea un punto de parado 'borrar_registros'

SAVEPOINT borrar_registros;

DELETE FROM reparaciones
WHERE `codReparacion` = 6500;

## Si todo ha salido bien, termina y confirma la transacción
COMMIT;

###############################################################################

-- EJERCICIO 5: Operaciones con el Lenguaje de Manipulación de Datos II y Vistas (2 puntos)

## Muesttra el nombre de todos los mecánicos chapistas
SELECT nombre as "Nombre" FROM mecanicos WHERE `Especialidad` = 'Chapista';

-- +--------+
-- | Nombre |
-- +--------+
-- | Ana    | 
-- +--------+

## Muestra todos los datos de las reparaciones terminadas en la priemra quincena de julio

SELECT * FROM reparaciones
WHERE `fechaFinReparacion` BETWEEN '2024-07-01' AND '2024-7-15';

-- +---------------+-------------+----------+-----------------------+--------------------+-----------------+--------------+
-- | codReparacion | codMecanico | codCoche | fechaInicioReparacion | fechaFinReparacion | horasReparacion | totalFactura |
-- +---------------+-------------+----------+-----------------------+--------------------+-----------------+--------------+
-- |          3465 | 001         | A-240    | 2024-07-10            | 2024-07-12         |              12 |       340.50 |
-- |          7654 | 002         | A-380    | 2024-07-08            | 2024-07-09         |               5 |       180.00 |
-- +---------------+-------------+----------+-----------------------+--------------------+-----------------+--------------+

## Muestra el codigo de los coches y la fecha de inicio de su reparacion de los coches de la marca SEAT
SELECT 
    codCoche as 'Cod. Coche',
    fechaInicioReparacion as 'Inicio Mantenimiento'
    FROM reparaciones
    WHERE codCoche IN (SELECT codCoche FROM Coches WHERE Marca = "Seat");

SELECT
    codMecanico as 'Cod. Mecánico',
    SUM(totalFactura)
    FROM reparaciones
    GROUP BY codMecanico;

## Muestra todos los datos de los 3 coches en los que se hayan empleado más horas de trabajo
SELECT 
    codCoche as "Cod. Coche",
    codReparacion as "Cod. Mantenimiento",
    codMecanico as "Mecanico",
    fechaInicioReparacion as "Inicio Mant.",
    fechaFinReparacion as "Fin Mant.",
    SUM(horasReparacion) as "Total horas"
    FROM reparaciones
    GROUP BY codCoche
    ORDER BY MAX(horasReparacion) DESC
    LIMIT 3;

## Mustra los nombre de los mecanicos, el modelo del coche y las horas trabajasdas en cada uno, siempre que las horas sea mayores que 15
SELECT 
    mecanicos.nombre as "Mecánico",
    CONCAT(coches.modelo, ", ", coches.marca) as "Modelo Coche",
    reparaciones.horasReparacion as "Horas"
    FROM mecanicos INNER JOIN reparaciones
    ON mecanicos.codMecanico = reparaciones.codMecanico
    INNER JOIN coches
    ON coches.codCoche = reparaciones.codCoche
    WHERE horasReparacion > 15; 

## Muestra los datos de los coches cuyo coste de reparaciones haya excedido la media del total de los costos
SELECT *
    FROM reparaciones
    WHERE totalFactura > (SELECT AVG(reparaciones.totalFactura) FROM reparaciones);

## Crear una vista con informacion sobre las reparaciones a los coches marca SEAT con el nombre Reparaciones_SEAT, que muestre:
-- Nombre del mecanico
-- Modelo del coche reparado
-- Fechas de inicio y fin de reparaciones

CREATE VIEW Reparaciones_Seat
AS
SELECT 
    mecanicos.nombre as "Mecánico",
    coches.modelo as "Modelo",
    reparaciones.fechaInicioReparacion as "Inicio Mant.",
    reparaciones.fechaFinReparacion as "Fin Mant."
    FROM mecanicos INNER JOIN reparaciones
    ON mecanicos.codMecanico = reparaciones.codMecanico
    INNER JOIN coches
    ON coches.codCoche = reparaciones.codCoche
    WHERE marca = 'Seat'; 

## Confirma los datos de la vista recien creada con una consulta básica

SELECT * FROM reparaciones_seat;

-- MariaDB [taller]> SELECT * FROM reparaciones_seat;
-- +----------+--------+--------------+------------+
-- | Mecánico | Modelo | Inicio Mant. | Fin Mant.  |
-- +----------+--------+--------------+------------+
-- | Ana      | Toledo | 2024-07-20   | 2024-07-23 |
-- | Ana      | Ibiza  | 2024-07-10   | 2024-07-12 |
-- +----------+--------+--------------+------------+
-- 2 rows in set (0.002 sec)

## Crea ula vista Reparaciones_Rápidas para guardar los datros de los coches que han sido reparados en emnbos de 6 horas. Guarda en la vista solo:
-- Marca
-- Modelo
CREATE VIEW Reparaciones_Rapidas
AS
SELECT 
    coches.marca as "Marca",
    coches.modelo as "Modelo"
    FROM coches
    WHERE codCoche IN (SELECT codCoche FROM reparaciones WHERE horasReparacion < 6);

SELECT * FROM reparaciones_rapidas;

-- MariaDB [taller]> SELECT * FROM reparaciones_rapidas;        
-- +-------+---------+      
-- | Marca | Modelo  |      
-- +-------+---------+      
-- | Dacia | Sandero |      
-- | Opel  | Corsa   |      
-- +-------+---------+      
-- 2 rows in set (0.001 sec)