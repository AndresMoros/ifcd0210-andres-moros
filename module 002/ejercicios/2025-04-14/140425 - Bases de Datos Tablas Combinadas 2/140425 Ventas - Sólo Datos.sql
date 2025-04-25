		
	/* Creación de BD. */
		create database Ventas;

		use Ventas;

	/* Creacion de Tablas. */

		create table Vendedores
		(Codven int primary key,
		 Nombre varchar(40) null,
		 Departamento varchar(25) null);

		create table Pedidos
		(IdVenta varchar (5) not null,
		 Codven int not null,
		 Codpro int not null,
		 Nombre varchar(30) null,
		 Cantidad int null check (Cantidad > 0),
		 FechaVenta date not null,
		 PrecioUnitario decimal(12,2) null check (PrecioUnitario > 0),
		 primary key (IdVenta),
		 foreign key (Codven) 
		 references Vendedores (Codven) on delete cascade on update cascade);

	 /* Ejercicio 1.*/

		-- Tabla Vendedores.
		 
		 insert into Vendedores values (1, 'Luis', 'Moda');
		 insert into Vendedores values (2, 'Ana', 'Electrodomésticos');
		 insert into Vendedores values (3, 'José', 'Informática');
		 insert into Vendedores values (4, 'Juan', 'Informática');
		 insert into Vendedores values (5, 'Eva', 'Moda');
		 
		-- Tabla Pedidos.
		 insert into Pedidos values ("agh54",1, 200, 'Camiseta', 20, "2019-1-10",12.0);
		 insert into Pedidos values ("fghv3",1, 200, 'Camiseta', 5,"2019-5-15",12.0);
		 insert into Pedidos values ("cs123",1, 250, 'Pantalón', 6,"2019-5-15",20.0);
		 insert into Pedidos values ("5fg4b",2, 740, 'Lavadora', 2,"2019-3-21",300.0);
		 insert into Pedidos values ("67h54",2, 710, 'Horno Microondas', 6,"2019-1-25",52.0);
		 insert into Pedidos values ("ng893",3, 550, 'Monitor', 3,"2019-1-9",112.0);
		 insert into Pedidos values ("aasd3",3, 580, 'Disco Duro Externo', 12,"2019-5-12",99.0);
		 insert into Pedidos values ("m7864",3, 510, 'Pendrive', 20,"2019-8-6",15.0);
		 insert into Pedidos values ("35gt",3, 522, 'Tablet', 12,"2019-7-29",240.0);
		 insert into Pedidos values ("ki90l",3, 522, 'Tablet', 20,"2019-8-2",240.0);
		 insert into Pedidos values ("mtr56",4, 522, 'Tablet', 9,"2019-1-24",240.0);
		 insert into Pedidos values ("bfgt2",4, 550, 'Monitor', 4,"2019-4-21",112.0);
		 insert into Pedidos values ("nh345",4, 510, 'Pendrive', 56,"2019-3-15",15.0);
		 insert into Pedidos values ("564jj",5, 250, 'Pantalón', 15,"2019-1-30",20.0);
		 insert into Pedidos values ("9874f",5, 270, 'Bufanda', 3,"2019-2-2",10.0);
		 insert into Pedidos values ("1245b",5, 240, 'Vestido', 17,"2019-8-7",30.0);
		 insert into Pedidos values ("agmm7",5, 200, 'Camiseta', 11,"2019-2-19",12.0);
		 insert into Pedidos values ("atr56",5, 200, 'Camiseta', 8,"2019-4-23",12.0);
		 
