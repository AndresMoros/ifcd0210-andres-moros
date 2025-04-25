-- Active: 1744357566681@@127.0.0.1@3306@bd_mundo

/* Ejemplo de transacción para la base de datos bd_mundo con varias acciones y puntos de parada. */

		use bd_mundo;

	/*Inicio de transacción.*/
	
		start transaction;

	/* (Opcional) Desactivacion de autocommit.*/
	
		set autocommit = 0;
	
	/* Acción : Copia de tabla y selección de registros. */
	
		create table city2
		select * from city;
		
		select * from city2
		where codpais = 'jpn';

	/* Creacion del punto de parada p1. */
	
		savepoint p1;

	/* (Opcional) Desactivación / activación del modo seguro (safe update), si se quiere.
		Por defecto está desactivado.*/
	
		/* set sql_safe_updates = 0;*/ /* Desactivación.*/
		/* set sql_safe_updates = 1;*/ /* Activación.*/
	
	/* (Opcional) Confirmación o consulta del estado del modo seguro. */
	
		show variables like "sql_safe_updates";
		select @@sql_safe_updates;
	
	/* Acción : Actualización de registros. */
	
		update city2
		set codpais = 'jp2'
		where codpais = 'jpn';

	/* Creacion del punto de parada p2. */
		
		savepoint p2;

	/* Acciones : Eliminación y selección de registros. */
	
		delete from city2
		where codpais = 'jp2';

		select * from city2
		where codpais = 'jp2';

	/* Anular hasta el punto de parada p2. */
	
		rollback to p2;

	/* Acción : Selección de registros. */
	
		select * from city2
		where codpais = 'jp2';
		
	/* Anular hasta el punto de parada p1. */

		rollback to p1;
		
	/* Acción : Selección de registros. */
	
		select * from city2
		where codpais = 'jpn';

	/* Anulación definitiva de todas las acciones.*/
	
		rollback;
		
	/* Si no se quieren anular la acciones, si no confirmarlas. */
	
		/*commit;*/ /* En este caso, sólo se confirmarían las acciones anteriores a los puntos de parada p1 y p2. */