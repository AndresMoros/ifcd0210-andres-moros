
use morosos;

	/* Vistas para la base de datos Morosos.*/
		
		/*Creación.*/	
		
			CREATE VIEW piscina
			as
			SELECT * FROM morosos
			WHERE concepto = "Piscina";
			
		/* Consulta o acceso a la vista. */		
			
			SELECT * FROM piscina;
		
		/* Modificación de la vista.*/
			
			ALTER VIEW piscina
			as
			SELECT * FROM morosos
			WHERE concepto = "Piscina" AND portal = "10" ;
			
		/* Cambio de nombre de la vista. */
		
			DROP VIEW piscina;
			
			CREATE VIEW piscinita
			as
			SELECT * FROM morosos
			WHERE concepto = "Piscina" AND portal = "10" ;
			
		/* Eliminación de una vista. */

			DROP VIEW piscinita;
			
		/* Mostrar las tablas y vistas contenidas en una base concreta. */	
			
			USE MYSQL;
			
			SELECT TABLE_NAME, TABLE_TYPE FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = "morosos";  