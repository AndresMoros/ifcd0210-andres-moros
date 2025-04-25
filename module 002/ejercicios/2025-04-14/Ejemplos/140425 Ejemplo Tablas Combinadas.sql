		
	/* Base de Datos. */
		
		Create DATABASE Combinar;
		
		USE Combinar;
		
	/* Tabla 1. */
		
		CREATE TABLE IF NOT EXISTS Tabla1 
		(
		  CodT1 int(11) Primary Key ,
		  Datos1 varchar(40) NOT NULL
		);
	
	/* Tabla 2. */
		
		CREATE TABLE IF NOT EXISTS Tabla2
		(
		  CodT2 int(11) Primary Key,
		  CodT1 int(11) NOT NULL,
		  Datos2 varchar(50) NOT NULL
		  
		);
		
	/* Tabla 3. */
		
		CREATE TABLE IF NOT EXISTS Tabla3
		(
		  CodT3 int(11) Primary Key,
		  CodT2 int(11) NOT NULL,
		  Datos3 varchar(50) NOT NULL
		  
		);
		
	/* Modificaciones.*/
		
		ALTER TABLE Tabla2
		ADD FOREIGN KEY(CodT1) REFERENCES Tabla1(CodT1);
		
		ALTER TABLE Tabla3
		ADD FOREIGN KEY(CodT2) REFERENCES Tabla2(CodT2);
		
	/* Datos. */
		
		INSERT INTO Tabla1 VALUES
		
		(1, "Uno"),
		(2, "Dos"),
		(3, "Tres"),
		(4, "Cuatro");
				
		INSERT INTO Tabla2 VALUES
		(1, 1, "Dato 1"),
		(2, 1, "Dato 2"),
		(3, 2, "Dato 3"),
		(4, 3, "Dato 4"),
		(5, 3, "Dato 5"),
		(6, 3, "Dato 6"),
		(7, 1, "Dato 7"),
		(8, 4, "Dato 8");
				
		INSERT INTO Tabla3 VALUES
		(1, 1, "Texto 1"),
		(2, 1, "Texto 2"),
		(3, 5, "Texto 3"),
		(4, 8, "Texto 4"),
		(5, 8, "Texto 5");
		
	/* Datos Nuevos. */
		
		INSERT INTO Tabla1 VALUES
		
		(5, "Cinco"),
		(6, "Seis");
						
	/* Consultas.*/
		
	/*Con INNER JOIN.*/
		
		SELECT * FROM Tabla1 INNER JOIN Tabla2
		ON Tabla1.CodT1 = Tabla2.CodT1;
		
	/*Con Producto cartesiano y condición de enlace entre campos.*/
		
		SELECT * FROM Tabla1, Tabla2
		Where Tabla1.CodT1 = Tabla2.CodT1;
		
	/*Con INNER JOIN y condicion adicional.*/

		SELECT * FROM Tabla1 INNER JOIN Tabla2
		ON Tabla1.CodT1 = Tabla2.CodT1
        where Tabla1.CodT1 = 1;
		
	/*Con Producto cartesiano, condición de enlace entre campos y condición adicional.*/
		
		SELECT * FROM Tabla1, Tabla2
		Where Tabla1.CodT1 = Tabla2.CodT1 AND Tabla1.CodT1 = 1;

	/*Con INNER JOIN y Ordenar.*/

		SELECT * FROM Tabla1 INNER JOIN Tabla2
		ON Tabla1.CodT1 = Tabla2.CodT1
        order by Tabla1.CodT1;
				
	/*Con INNER JOIN, Ordenar y Alias de tabla.*/
		
		SELECT * FROM Tabla1 t1 INNER JOIN Tabla2 t2
		ON t1.CodT1 = t2.CodT1
        order by t1.CodT1;
		
	/*Con INNER JOIN con 3 tablas anidadas y varias opciones.*/
		
		SELECT * FROM Tabla1 INNER JOIN Tabla2 INNER JOIN Tabla3
		ON Tabla2.CodT2 = Tabla3.CodT2
		ON Tabla1.CodT1 = Tabla2.CodT1;
		
		SELECT * FROM Tabla1 INNER JOIN Tabla2 INNER JOIN Tabla3
		ON Tabla1.CodT1 = Tabla2.CodT1;
		AND Tabla2.CodT2 = Tabla3.CodT2
				
		SELECT * FROM Tabla2 INNER JOIN Tabla3 
		ON Tabla2.CodT2 = Tabla3.CodT2
		INNER JOIN Tabla1
		ON Tabla1.CodT1 = Tabla2.CodT1;
				
		SELECT * FROM Tabla1 INNER JOIN (Tabla2,Tabla3)
        ON (Tabla2.CodT1 = Tabla1.CodT1 AND Tabla3.CodT2 = Tabla2.CodT2);
				
		SELECT * FROM Tabla1 LEFT JOIN Tabla2
		ON Tabla1.CodT1 = Tabla2.CodT1;
		
	/*Con OUTER JOIN.*/
		
	/* RIGTH JOIN. */
		
		SELECT * FROM Tabla1 LEFT JOIN Tabla2
		ON Tabla1.CodT1 = Tabla2.CodT1;
        
		SELECT * FROM Tabla1 LEFT JOIN Tabla2
		ON Tabla1.CodT1 = Tabla2.CodT1
        WHERE codT2 IS NULL;
		
		SELECT Tabla1.CodT1,Tabla1.datos1 FROM Tabla1 LEFT JOIN Tabla2
		ON Tabla1.CodT1 = Tabla2.CodT1
        where Tabla2.CodT1 is null;
		
		SELECT * FROM Tabla1 LEFT JOIN (Tabla2,Tabla3)
		ON (Tabla1.CodT1 = Tabla2.CodT1 AND Tabla2.CodT2 = Tabla3.CodT2);
		
		SELECT * FROM Tabla2 LEFT JOIN (Tabla3,Tabla1)
        ON (Tabla2.CodT2 = Tabla3.CodT2 AND Tabla1.CodT1 = Tabla2.CodT1);
		
	/* LEFT JOIN. */
		
		SELECT * FROM Tabla2 RIGHT JOIN Tabla1
        ON Tabla1.CodT1 = Tabla2.CodT1;
		
	/* FULL JOIN. */
		
       SELECT * FROM Tabla1 LEFT JOIN Tabla2
	   ON Tabla1.CodT1 = Tabla2.CodT1
	   where Tabla2.CodT1 is null
	   UNION
	   SELECT * FROM Tabla2 RIGHT JOIN Tabla1
       ON Tabla1.CodT1 = Tabla2.CodT1
	   where Tabla2.CodT1 is null;
		
	/* Combinación de tabla consigo misma. SELF JOIN.	*/
	
		SELECT * FROM Tabla2 as A INNER JOIN Tabla as B
        ON A.CodT1 > B.CodT2;
		
		
		
		
		
		
		
		
		
		
		
		
		