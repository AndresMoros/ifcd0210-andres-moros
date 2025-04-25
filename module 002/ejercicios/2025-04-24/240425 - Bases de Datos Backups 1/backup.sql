-- Active: 1744357566681@@127.0.0.1@3306@suministros
-- BUG Ejercicio Copia de Seguridad 2
-- REVIEW Utiliza la base de datos Suministros con sus tablas Proveedores, Componentes,
-- TODO Articulos y Envios. (Ejercicio Suministros).
-- 1. Si no existe ya, crea, en el directorio raíz del disco (C:\), la carpeta BackupsBD.

-- PS E:\> cd C:/
-- PS C:\> mkdir BackupsBD


--     Directorio: C:\


-- Mode                 LastWriteTime         Length Name
-- ----                 -------------         ------ ----
-- d-----        24/04/2025     12:27                BackupsBD


-- PS C:\>

-- -- 2. Dentro de esta carpeta, crea, a su vez, la carpeta CopiasEjercicio2.

-- PS C:\> mkdir .\BackupsBD\CopiasEjercicio


--     Directorio: C:\BackupsBD


-- Mode                 LastWriteTime         Length Name
-- ----                 -------------         ------ ----
-- d-----        24/04/2025     12:28                CopiasEjercicio


-- PS C:\>

-- 3. Pon en uso la base de datos Suministros.

USE Suministros;

-- 4. Dentro de CopiasEjercicio2 crea y guarda, en archivos de texto (txt), las
-- siguientes copias de seguridad:
-- a. Copia textual de la tabla Proveedores en el archivo
-- CopiaProveedores.txt.

SELECT * FROM proveedores 
INTO OUTFILE 'C:/BackupsBD/CopiasEjercicio/CopiaProveedores.txt'
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

-- b. Copia textual de la tabla Componentes en el archivo
-- CopiaComponentes.txt.

SELECT * FROM componentes
INTO OUTFILE 'C:/BackupsBD/CopiasEjercicio/CopiaComponentes.txt'
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

-- c. Copia textual de la tabla Artículos en el archivo CopiaArticulos.txt.

SELECT * FROM articulos
INTO OUTFILE 'C:/BackupsBD/CopiasEjercicio/CopiaArticulos.txt'
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

-- d. Copia textual de la tabla Envíos en el archivo CopiaEnvios.txt.

SELECT * FROM envios
INTO OUTFILE 'C:/BackupsBD/CopiasEjercicio/CopiaEnvios.txt'
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

-- (Incluye los modificadores necesarios para que los datos de los distintos campos aparezcan separados con una coma y las filas con un salto de línea y un retorno de carro). 

-- Nota: Con MySQL y WorkBench, puede ser necesario cambiar el valor de la variable secure-file-priv para permitir rutas de destino de copia diferentes a la ruta por defecto y luego reiniciar el servidor de base de datos).

-- 5. Abre los 4 archivos creados para confirmar que se han creado correctamente

-- PS C:\BackupsBD\CopiasEjercicio> Get-Content .\CopiaArticulos.txt  

-- A2,PERFORADORA,MALAGA,2018-04-05

-- A3,LECTORA,CACERES,2019-12-08

-- A4,CONSOLA,CACERES,2018-07-06

-- A5,MEZCLADORA,SEVILLA,2018-07-09

-- A6,TERMINAL,BARCELONA,2018-07-06

-- A7,CINTA,SEVILLA,2018-04-05
-- PS C:\BackupsBD\CopiasEjercicio> Get-Content .\CopiaComponentes.txt
-- C1,X3A,ROJO,12,SEVILLA,2018-07-09

-- C2,V5D,VERDE,17,MADRID,2019-05-08

-- C3,C4B,AZUL,17,MALAGA,2018-04-05

-- C4,C4B,ROJO,14,SEVILLA,2019-02-06

-- C5,VT8,AZUL,12,MADRID,2019-02-06

-- C6,C30,ROJO,19,SEVILLA,2019-05-08

-- PS C:\BackupsBD\CopiasEjercicio> Get-Content .\CopiaEnvios.txt     
-- P1,C1,A1,200

-- P1,C1,A4,700

-- P2,C3,A1,400

-- P2,C3,A2,200

-- P2,C3,A3,200

-- P2,C3,A4,500

-- P2,C3,A5,600

-- P2,C3,A6,400

-- P2,C3,A7,800

-- P2,C5,A2,100

-- P3,C3,A1,200

-- P3,C4,A2,500

-- P4,C6,A3,300

-- P4,C6,A7,300

-- P5,C2,A1,200

-- P5,C2,A4,100

-- P5,C5,A4,500

-- P5,C5,A7,100

-- P5,C6,A2,200

-- P5,C1,A4,100

-- P5,C3,A4,200

-- P5,C4,A4,800

-- P5,C5,A5,400

-- P5,C6,A4,500

-- 6. Borra la base de datos Suministros del servidor.

DROP DATABASE Suministros;

-- 7. Crea de nuevo la base Suministros y sus tablas, pero sin introducir registros.
USE Suministros;
CREATE DATABASE Suministros;
-- Tabla Proveedores
CREATE TABLE Proveedores (
    CodPro VARCHAR(2) PRIMARY KEY,
    Nombre VARCHAR(10),
    Categoria INT,
    Ciudad VARCHAR(10)
);

-- Tabla Componentes
CREATE TABLE Componentes (
    CodCo VARCHAR(2) PRIMARY KEY,
    Nombre VARCHAR(3),
    Color VARCHAR(10),
    Peso INT,
    Ciudad VARCHAR(10),
    Fecha DATE
);

-- Tabla Artículos
CREATE TABLE Articulos (
    CodAr VARCHAR(2) PRIMARY KEY,
    Nombre VARCHAR(15),
    Ciudad VARCHAR(10),
    Fecha DATE
);

-- Tabla Envíos
CREATE TABLE Envios (
    CodPro VARCHAR(2),
    CodCo VARCHAR(2),
    CodAr VARCHAR(2),
    Cantidad INT,
    FOREIGN KEY (CodPro) REFERENCES Proveedores(CodPro),
    FOREIGN KEY (CodCo) REFERENCES Componentes(CodCo),
    FOREIGN KEY (CodAr) REFERENCES Articulos(CodAr)
);

DROP TABLE proveedores;

-- 8. Restaura los datos de las copias de seguridad a sus respectivas tablas.


LOAD DATA
INFILE 'C:/BackupsBD/CopiasEjercicio/CopiaArticulos.txt'
INTO TABLE Articulos
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

LOAD DATA
INFILE 'C:/BackupsBD/CopiasEjercicio/CopiaComponentes.txt'
INTO TABLE Componentes
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

LOAD DATA
INFILE 'C:/BackupsBD/CopiasEjercicio/CopiaProveedores.txt'
INTO TABLE Proveedores
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

LOAD DATA
INFILE 'C:/BackupsBD/CopiasEjercicio/CopiaEnvios.txt'
INTO TABLE Envios
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n\r';

-- 9. Confirma que las 4 tablas vuelven a tener los datos originales

SELECT * FROM Envios;
SELECT * FROM proveedores;
SELECT * FROM articulos;
SELECT * FROM componentes;