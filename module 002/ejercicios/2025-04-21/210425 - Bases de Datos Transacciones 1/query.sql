-- Active: 1744357566681@@127.0.0.1@3306@residencia


-- Ejercicio Transacciones 1.
-- • Para este ejercicio usar la base de datos Residencia, creada con el ejercicio
-- Residencia Subconsultas.


	/* Base de Datos.*/

		Create database Residencia;
		use Residencia;

	/*Tablas.*/


		create table ciudades
		(Codigo int primary key,
		Nombre varchar(30) null);

		create table Personas 
		(DNI varchar (10) primary key,
         Nombre varchar (30) null,
		Ciudad int null,
		Edad int check(edad > 0),
		foreign key (Ciudad) references ciudades(Codigo)
        on update cascade on delete cascade);

	/*Datos.*/

		insert into ciudades values
		(1, "Cuenca"), (2, "Toledo"), (3, "Madrid");

		insert into Personas values
		("12345678P","Pepe", 3, 31),
		("16744278Z","Paco", 3, 19),
		("45634398Q","Lola", 1, 34),
		("76845678R","Maria", 2, 17),
		("17892678T","Eva", 1, 24),
		("16745378Y","Juan", 1, 28),
		("25623678G","Ana", 2, 45);


-- • Respetar el siguiente orden y ejecutar una tras otra todas las acciones de forma
-- independiente hasta su final anulación o confirmación.

-- • Realizar las siguientes operaciones en la tabla Ciudades en el contexto de una
-- transacción:

-- 1. Inicia una transacción nueva.

START TRANSACTION;

-- 2. Pon en uso la base de datos Residencia.

USE Residencia;

-- 3. Visualiza el contenido de la tabla ciudades.

SELECT *
    FROM Residencia.ciudades;

-- 4. Introduce un punto de parada.

SAVEPOINT point_1;

-- 5. Inserta tres ciudades nuevas (Alicante, Zamora y Guadalajara), en la
-- tabla Ciudades.

INSERT INTO Residencia.ciudades VALUES 
(
    4, 
    "Alicante"
),
(
    5, 
    "Zamora"
),
(
    6, 
    "Guadalajara"
);

-- 6. Visualiza que están correctamente introducidas.
SELECT *
    FROM ciudades;

-- 7. Introduce un punto de parada.

SAVEPOINT point_2;

-- 8. Cambia el nombre de la ciudad de Guadalajara por el de Valencia.

UPDATE Ciudades
SET nombre = "Valencia"
WHERE nombre = "Guadalajara";

-- 9. Confirma que el cambio es correcto.

SELECT *
    FROM ciudades
    WHERE nombre = "Valencia";

-- 10. Introduce un punto de parada.

SAVEPOINT point_3;

-- 11. Elimina Valencia.

DELETE FROM ciudades
WHERE nombre = "Valencia";

-- 12. Visualiza la correcta eliminación.

SELECT *
    FROM ciudades;

-- 13. Anula la operación de eliminación.

ROLLBACK to point_3;

-- 14. Valida las operaciones de inserción y modificación.

SELECT *
    FROM ciudades WHERE nombre = 'Valencia';

-- 15. Visualiza el contenido final de la tabla tras terminar la transacción


SELECT * FROM CIUDADES;