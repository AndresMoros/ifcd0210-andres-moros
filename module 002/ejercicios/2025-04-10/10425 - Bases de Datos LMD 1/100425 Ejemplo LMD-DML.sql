
	/* Lenguaje LMD. Manipulación de datos.*/

	create database if not exists datos;
	
	use datos;
	
	create table tipos(
	codigo int primary key,
	nombre varchar(40) not null,
	tipo varchar(50) default "Desconocido",
	fecha date,
	precio decimal(8,2) check (precio >0.0),
	numero int auto_increment unique);
		
	
	/* Inserción. */
	
	
		insert into tipos values(12345,"Pendrive","Almacenamiento","2024-04-29",23.45,null);
		insert into tipos values(15345,"SSD",default,null,223.00,null);
		
		insert into tipos values
		(12145,"Impresora","Salida datos","2024-04-28",null,null),
		(89445,"Monitor","LCD","2024-04-28",180.50,null);
		
		insert into tipos (codigo,nombre, precio) values(45045,"Ratón",12.00);
		insert into tipos (precio,nombre, codigo) values(50.23,"Ratón",98765);
		
		insert into tipos (precio,nombre) values(60.10,"Webcam");
		insert into tipos (precio,codigo) values(24.10,16745);
	
	/* Actualización.*/
	
		update tipos
		set tipo = "Producto Informático";
		
		
		update tipos
		set tipo = "Almacenamiento"
		where codigo = 12345;
		
		update tipos
		set nombre = "Pantallas"
		where fecha = "2024-04-28";
		
		update tipos
		set nombre = "Impresora",
		precio = 80.00,
		codigo = 77777
		where codigo = "12145";
		
		update tipos
		set fecha = "2024-04-29",
		tipo = "Cacharritos tecnológicos"
		where tipo = "Producto Informático";
	
	/* Eliminación. */
	
		delete from tipos;
		
		truncate table tipos;
		
		delete from tipos
		where nombre = "Ratón";
		
		delete from tipos
		where nombre like "P%";
		
		delete from tipos
		where precio >= 80.00;
		
		
	
	