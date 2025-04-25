
	/* Combinación de conjuntos. */
	
	/* Base de Datos Conjuntos_Coches.*/

		Create database Conjuntos_Coches;
		
		use Conjuntos_Coches;
		
	/* Tablas.*/	
	
		create table Coches1
		(Codigo int primary key,
		Marca varchar(25) null,
		Modelo varchar(25) null,
		Precio decimal(12,2) null);
		

		create table Coches2
		(Codigo int primary key,
		Marca varchar(25) null,
		Modelo varchar(25) null,
		Color varchar(20) null);
		
		/*Datos.*/
		
		
		insert into Coches1 values
		(001, "Seat", "Córdoba GTI",24000.00),
		(002, "Seat", "Ibiza GTI", 20000.00),
		(003, "Opel", "CORSA GTI", 26000.00),
		(004, "Renault", "Clio GTI", 17000.00);
		
		insert into Coches2 values
		(010, "Seat", "Alhambra GTD","Blanco"),
		(011, "Seat", "Ibiza GTI", "Rojo"),
		(012, "Seat", "LEÓN GTD", "Azul"),
		(013, "Renault", "Clio GTI", "Verde");
		
	/* Combinaciones: */
	
	/* UNIÓN.*/
	
		SELECT Codigo, Marca, Modelo FROM Coches1
		UNION
		SELECT Codigo, Marca, Modelo FROM Coches2;
		
		SELECT Marca, Modelo FROM Coches1
		UNION
		SELECT Marca, Modelo FROM Coches2;
		
		SELECT Marca, Modelo FROM Coches1
		UNION ALL
		SELECT Marca, Modelo FROM Coches2;
		
		SELECT Marca, Modelo FROM Coches1
		UNION DISTINCT
		SELECT Marca, Modelo FROM Coches2;
		
		SELECT Marca, Modelo FROM Coches1
		WHERE marca = "Seat"
		UNION DISTINCT
		SELECT Marca, Modelo FROM Coches2
        WHERE marca = "Seat";
		
	/* INTERSECT.*/	
	
		SELECT Marca, Modelo FROM Coches1
		INTERSECT
		SELECT Marca, Modelo FROM Coches2;
		
	/* EXCEPT / MINUS.*/		
	
	
		SELECT Marca, Modelo FROM Coches1
		EXCEPT
		SELECT Marca, Modelo FROM Coches2;
		
		SELECT Marca, Modelo FROM Coches2
		EXCEPT
		SELECT Marca, Modelo FROM Coches1;


	/* Combinaciones Externas OUTER JOIN. */
	
	/* LEFT JOIN. */
	
		SELECT * FROM coches1 LEFT JOIN coches2
		ON coches1.codigo  = coches2.codigo;

	/* RIGTH JOIN. */
	
		SELECT * FROM coches1 RIGHT JOIN coches2
		ON coches1.codigo  = coches2.codigo;

	/* FULL JOIN. */

		SELECT * FROM coches1 LEFT JOIN coches2
		ON coches1.codigo  = coches2.codigo
		UNION
		SELECT * FROM coches1 RIGHT JOIN coches2
		ON coches1.codigo  = coches2.codigo;
