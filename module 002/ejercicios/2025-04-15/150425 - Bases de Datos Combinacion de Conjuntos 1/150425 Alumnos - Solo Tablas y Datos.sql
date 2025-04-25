/*Base de Datos*/
	
	Create database alumnos;

	use alumnos;

/*Tablas*/

	create table AlumnosFisica
	(CodAlumno int not null primary key,
	Nombre varchar(20) null,
	Apellidos varchar(50) null,
	Asignatura varchar(30) default 'Física',
	FechaExamen date null,
	Nota int check (nota > 0));

	create table AlumnosQuimica
	(CodAlumno int not null primary key,
	Nombre varchar(20) null,
	Apellidos varchar(50) null,
	Asignatura varchar(30) default 'Química',
	FechaExamen date null,
	Nota int check (nota > 0));

	create table AlumnosMatematicas
	(CodAlumno int not null primary key,
	Nombre varchar(20) null,
	Apellidos varchar(50) null,
	Asignatura varchar(30) default 'Matemáticas',
	FechaExamen date null,
	Nota int check (nota > 0));

/*Registros*/

	insert into AlumnosFisica
	values 
	(234, 'Luis','Gómez Sánchez',default,'2014/7/6', 9),
	(238, 'Ramón','García López',default,'2014/7/6', 6),
	(123, 'Juan','Ávila Padilla',default,'2014/7/6', 3),
	(456, 'Eva','Martín Sánchez',default,'2014/7/6', 8),
	(134, 'Jaime','Sanz Martín',default,'2014/7/6', 7),
	(284, 'Verónica','Alba López',default,'2014/7/6', 9),
	(110, 'Rosa','Fernández Dávila',default,'2014/7/6', 8),
	(235, 'Sara','López Sanz',default,'2014/7/6', 6),
	(178, 'Alberto','Martínez Salas',default,'2014/7/6', 7),
	(450, 'Cristina','Ruiz Sánchez',default,'2014/7/6', 5);



	insert into AlumnosQuimica
	values 
	(234, 'Luis','Gómez Sánchez',default,'2014/9/6', 8),
	(233, 'Ana','Sánchez Hernández',default,'2014/9/6', 6),
	(123, 'Juan','Ávila Padilla',default,'2014/9/6', 3),
	(456, 'Eva','Martín Sánchez',default,'2014/9/6', 9),
	(634, 'Pepe','Pérez Rus',default,'2014/9/6', 4),
	(334, 'Antonio','Martínez López',default,'2014/9/6', 7),
	(110, 'Rosa','Fernández Dávila',default,'2014/9/6', 8),
	(238, 'Sara','López Sanz',default,'2014/9/6', 5),
	(678, 'Javier','Gómez Fernández',default,'2014/9/6', 6),
	(450, 'Cristina','Ruiz Sánchez',default,'2014/9/6', 3);



	insert into AlumnosMatematicas
	values 
	(234, 'Luis','Gómez Sánchez',default,'2014/11/6', 5),
	(233, 'Ana','Sánchez Hernández',default,'2014/11/6', 4),
	(123, 'Juan','Ávila Padilla',default,'2014/11/6', 4),
	(456, 'Eva','Martín Sánchez',default,'2014/11/6', 8),
	(634, 'Pepe','Pérez Rus',default,'2014/11/6', 6),
	(334, 'Antonio','Martínez López',default,'2014/11/6', 8),
	(110, 'Rosa','Fernández Dávila',default,'2014/11/6', 8),
	(238, 'Sara','López Sanz',default,'2014/11/6', 6),
	(678, 'Javier','Gómez Fernández',default,'2014/11/6', 9),
	(450, 'Cristina','Ruiz Sánchez',default,'2014/11/6', 4);