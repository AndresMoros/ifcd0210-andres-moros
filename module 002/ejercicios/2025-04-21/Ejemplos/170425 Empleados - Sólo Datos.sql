		
	/* Creación de BD. */
	
		create database Personal;

		use Personal;

	/* Creacion de Tablas. */

		create table Departamentos
		(CodDep int primary key,
		 Nombre varchar(40) null,
		 Localizacion varchar(35) null);

		create table Empleados
		(CodEmp varchar (5) primary key,
		 Nombre varchar(60) null,
		 Edad int null,
		 Oficio varchar(30) null,
		 Direccion varchar(50) null,
		 FechaAlta date null,
		 Sueldo decimal(7,2) null check (Sueldo >= 0),
		 Comision decimal(7,2) null check (Comision >= 0),
		 NoDep int null,
		 foreign key (NoDep) references Departamentos (CodDep)
		 on delete cascade on update cascade);
		 
	/* Datos.*/
	
		insert into Departamentos values
		(10, "Administración", "Getafe"),
		(20, "Dirección", "León"),
		(30, "Informática", "Ávila"),
		(40, "Ventas", "Madrid"),
		(50, "Contabilidad", "Getafe");
		
		insert into Empleados values
		
		("1V100", "Ana Pérez López", 23, "Administrativo", "C/ León, 7","2010-5-12", 1000.00,0.00,10),
		("ZU100", "Luis García Pérez", 29, "Administrativo", "C/Madrid, 3","2012-12-3", 1000.00,0.00,10),
		("B5100", "Cristina Vidal Alba", 36, "RR.HH.", "C/ Madrid, 22, 10","2006-1-25", 1200.00,0.00,10),
		("ZX200", "María del Carmen Fernández Pacheco", 40, "Jefe Marketing", "C/ Teruel, 56","2008-5-18", 2200.00,1200.00,20),
		("1B200", "Eva Sánchez Gómez", 38, "Jefe de Personal", "C/ Toledo, 15","2014-7-16", 2560.00,2500.00,20),
		("3G200", "Juan Ayala Ramírez", 56, "Subdirector General", "C/ Murcia, 6","1999-10-22", 4800.00,5000.00,20),
		("8A300", "Alvaro Sánchez Sevilla", 22, "Programador", "C/ Ciudad Real, 21","2018-8-21", 1500.00,0.00,30),
		("PI300", "Roberto Puertas Campo", 35, "Analista", "C/ Sevilla, 1","2014-2-27", 1950.00,250.00,30),
		("NN300", "María del Mar Ruíz Fonseca", 27, "Programador", "C/Santander, 34","2015-4-2", 1550.00,0.00,30),
		("ZW300", "Raúl Fuentes Díez", 26, "Programador", "C/ Rioja, 7","2020-7-19", 1400.00,0.00,30),
		("BB400", "Julio Pérez Moreno", 23, "Reponedor", "C/ Tarragona, 8","2017-10-3", 1000.00,100.00,40),
		("G5400", "Ana Santiago Díaz", 21, "Vendedor Online", "C/ Lugo, 42","2018-2-7", 1050.00,150.00,40),
		("JU400", "Carmen Martín Morales", 26, "Reponedor", "C/ Badajoz, 14","2016-11-29", 1000.00,80.00,40),
		("CA400", "Alberto Escudero Sanz", 22, "Vendedor", "C/ Álava, 1","2013-1-26", 950.00,100.00,40),
		("PT400", "Juan Fernández Gómez", 21, "Vendedor", "C/ Valencia, 19","2016-9-21", 1000.00,50.00,40),
		("3Ñ400", "Eugenia López Padilla", 24, "Vendedor Online", "C/ Toledo, 40","2019-9-12", 900.00,100.00,40),
		("ZC500", "Cristina García Serra", 24, "Administrativo", "C/ Burgos, 7","2016-3-26", 1000.00,0.00,50),
		("AA500", "Antonio González Ruíz", 50, "Contable", "C/ Asturias, 10","2003-4-15", 1800.00,250.00,50);