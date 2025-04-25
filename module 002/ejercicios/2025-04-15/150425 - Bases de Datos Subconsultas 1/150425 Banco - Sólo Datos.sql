	
	/* 01. Creación de la Base de Datos.*/
	
		create database OperacionesBancarias;
		
		use OperacionesBancarias;
		
	/* 02. Creación de las Tablas.*/
	
		create table Clientes
		(IDCliente varchar (5) primary key,
		Nombre varchar (30) null,
		Apellido1 varchar (30) null,
		Apellido2 varchar (30) null,
		Dirección varchar (50) null,
		Localidad varchar (20) null,
		Teléfono varchar(9) null);
		
		create table Cuentas
		(IDCliente varchar (5) null,
		IDCuenta int primary key,
		Saldo decimal(12,2) null,
		Divisa varchar (20) null default 'Euros');
		
		create table Movimientos
		(IDCuenta int null,
		IDMovimiento varchar(5) primary key,
		Tipo varchar(30) null,
		Cantidad decimal(12,2) null,
		FechaOperacion date null);
		
	/* 03. Modificaciones.*/
	
		alter table Cuentas
		add foreign key (IDCliente) references Clientes (IDCliente)
		on delete cascade on update cascade;
		alter table Movimientos
		add foreign key (IDCuenta) references Cuentas (IDCuenta)
		on delete cascade on update cascade;
		
	/* 04. Inserción de registros.*/
	
		/* Clientes.*/
		
		insert into clientes values ('45A67','Luis' ,'Pérez','Sánchez','C\ Sirio 3','Madrid','894567387');
		insert into clientes values ('45B34','Ana' ,'Ruiz','Gómez','C\ Bellatrix 5','Coslada','293567389');
		insert into clientes values ('45A12','Eva' ,'Álvarez','García','Avda. Deneb 32','Madrid','196367983');
		insert into clientes values ('45C15','Antonio','Pérez','Ruiz','C\ Vega 17','Leganés','796557989');
		insert into clientes values ('45A84','Fernando','Vidal','González','C\ Antares 65','Coslada','376557660');
		insert into clientes values ('45C34','Sara','Montalvo','Rodríguez','Avda. Rigel 22','Madrid','476569334');
		
	/* Cuentas.*/
	
		insert into cuentas values ('45A67',234444,1200.45,Default);
		insert into cuentas values ('45A67',543333,3492.00,'Dólares');
		insert into cuentas values ('45B34',923832,234.90,Default);
		insert into cuentas values ('45A12',234555,345.67,Default);
		insert into cuentas values ('45A12',436444,5600.22,'Dólares');
		insert into cuentas values ('45A12',754456,1901.47,Default);
		insert into cuentas values ('45A84',454574,1505.87,Default);
		insert into cuentas values ('45A84',474722,2612.40,'Dólares');
		insert into cuentas values ('45C34',275888,3856.53,Default);
		
 	/* Movimientos.*/
	
		insert into movimientos values (234555,'12/1','Retirada Efectivo',50.00,'2022-1-8');
		insert into movimientos values (923832,'23/2','Transferencia',235.00,'2022-2-6');
		insert into movimientos values (234444,'78/2','Ingreso',450.00,'2022-2-22');
		insert into movimientos values (275888,'28/2','Transferencia',700.00,'2022-2-22');
		insert into movimientos values (436444,'44/3','Transferencia',5035.00,'2022-3-25');
		insert into movimientos values (543333,'36/3','Ingreso',750.00,'2022-3-30');
		insert into movimientos values (923832,'46/3','Ingreso',200.00,'2022-3-30');
		insert into movimientos values (234444,'53/4','Transferencia',300.00,'2022-4-3');
		insert into movimientos values (234444,'56/4','Retirada Efectivo',50.00,'2022-4-17');
		insert into movimientos values (234555,'51/4','Ingreso',842.00,'2022-4-17');
		insert into movimientos values (275888,'52/4','Ingreso',50.00,'2022-4-17');
		insert into movimientos values (543333,'76/5','Retirada Efectivo',750.00,'2022-5-14');
		insert into movimientos values (754456,'68/5','Retirada Efectivo',350.00,'2022-5-14');
		insert into movimientos values (234444,'96/5','Ingreso',250.00,'2022-5-15');
		insert into movimientos values (923832,'60/5','Ingreso',940.00,'2022-5-15');
		insert into movimientos values (754456,'62/5','Ingreso',150.00,'2022-5-15');
		insert into movimientos values (454574,'59/5','Ingreso',500.00,'2022-5-20');
		insert into movimientos values (275888,'69/5','Retirada Efectivo',1100.00,'2022-5-20');
		insert into movimientos values (454574,'78/5','Ingreso',50.00,'2022-5-20');
		insert into movimientos values (234555,'100/6','Ingreso',630.00,'2022-6-19');
		insert into movimientos values (275888,'85/6','Ingreso',100.00,'2022-6-19');
