/* Base de Datos.*/

		create schema Empresa;
		use Empresa;

	/*Tablas.*/
	
		create table Oficinas		
		(Oficina int primary key,
		Ciudad varchar (50) null,
		Objetivo decimal (12,2));
		
		create table Empleados		
		(Idempleado VARCHAR(7) primary key,
		Nombre varchar (50) null,
		Oficina int not null,
		Ventas decimal (12,2),
		foreign key (Oficina) references Oficinas(Oficina)
		on update cascade on delete cascade);
		
		create table Region		
		(Id int primary key,
		Oficina int not null,
		Zona varchar (10) null,
		foreign key (Oficina) references Oficinas(Oficina)
		on update cascade on delete cascade);
		
	/* Datos. */
	
		insert into Oficinas values
		(1, "Getafe", 20000.00),
		(2, "Parla", 18000.00),
		(3, "Getafe", 21000.00),
		(4, "Madrid", 4580000.00),
		(5, "Alcobendas", 24000.00),
		(6, "Colmenar", 22000.00),
		(7, "Villaviciosa de Odón", 60000.00),
		(8, "Coslada", 35000.00),
		(9, "Vicálvaro", 9000.00),
		(10, "Madrid", 12100000.00);
		
		insert into Region values
		(1, 1, "Sur"),
		(2, 2, "Sur"),
		(3, 3, "Sur"),
		(4, 4, "Centro"),
		(5, 5, "Norte"),
		(6, 6, "Norte"),
		(7, 7, "Oeste"),
		(8, 8, "Este"),
		(9, 9, "Este"),
		(10, 10, "Centro");
		
		insert into Empleados values
		("89765tt","Juan",1, 3000.00),
		("82cdqwt","José",2, 21000.00),
		("gg765tc","Ana",1, 8000.00),
		("8uu65tt","Luis",5, 28000.00),
		("12365t8","Rosa",5, 12000.00),
		("8bg95tw","Lola",6, 22000.00),
		("89456t2","Manolo",8, 40000.00),
		("bgt65t9","Enrique",8, 37000.00),
		("12wcdet","MariMar",2, 14000.00),
		("agt12t9","Juani",2, 9000.00),
		("avb67t9","Ainoa",10, 93000.00);
		
		/* Subconsultas. */
		
		/* TEST DE COMPARACIÓN CON SUBCONSULTA.*/
		
			SELECT * FROM oficinas
			WHERE objetivo > (SELECT AVG(objetivo) FROM oficinas);
		
			select oficina, ciudad from Oficinas
			where objetivo > (select sum(ventas) from Oficinas, Empleados where Empleados.Oficina = Oficinas.oficina);
			
			select oficina, ciudad from Oficinas
			where objetivo > (select sum(ventas) from Oficinas inner join Empleados on Empleados.Oficina = Oficinas.oficina);
			
			select oficina, ciudad from Oficinas
			where objetivo > (select sum(ventas) from Oficinas, Empleados where Empleados.Oficina = Oficinas.oficina)
			group by oficina;
			
			select oficina, ciudad from Oficinas
			where objetivo > (select sum(ventas) from Oficinas inner join Empleados on Empleados.Oficina = Oficinas.oficina)
			group by oficina;
		
			select oficina, ciudad from Oficinas
			where objetivo > 20
			
		/*TEST DE PERTENENCIA A CONJUNTO (IN / NOT IN).*/
		
			select IdEmpleado, Oficina from Empleados
			where Oficina in (select Oficina from Region 
			where Zona = "Norte");
			
			select IdEmpleado, Oficina from Empleados
			where Oficina not in (select Oficina from Region 
			where Zona = "Norte");
			
		/* TEST DE COMPARACIÓN CUANTIFICADA.*/
		
			Select Oficina, Ciudad from Oficinas
			where Objetivo > any (select sum(Ventas) from Empleados group by oficina);

            Select Oficina, Ciudad from Oficinas
			where Objetivo > all (select sum(Ventas) from Empleados group by oficina);
		
		/* TEST DE EXISTENCIA. */
		
			Select IdEmpleado, Nombre, Oficina from Empleados
			where exists (Select * from Region where Zona = 'Sur' AND Empleados.Oficina = Region.Oficina);
	
	
			
