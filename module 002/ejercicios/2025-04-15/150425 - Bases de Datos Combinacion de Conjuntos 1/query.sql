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

-- • Consultas: 
-- 1. Mostrar la nota media del curso de Física. 
CREATE VIEW alumnos.nota_media_fisica
AS
SELECT 
    asignatura as "Asignatura",
    FORMAT(AVG(Nota), 2, "es_ES") as "Promedio"
FROM alumnos.alumnosFisica;

SELECT * FROM alumnos.nota_media_fisica;

-- 2. Todos los alumnos suspensos en Física. 

CREATE VIEW alumnos.suspendidos_fisica
AS
SELECT *
FROM 
    alumnos.alumnosfisica
WHERE nota < 5;

SELECT * FROM alumnos.suspendidos_fisica;

-- 3. Todos los alumnos aprobados en Matemáticas

CREATE VIEW alumnos.aprobados_matematicas
AS
SELECT *
FROM 
    alumnos.alumnosmatematicas
WHERE nota >= 5;

SELECT * FROM alumnos.aprobados_matematicas;

-- 4. Mostrar  el  nombre  y  apellidos  de  todos  los  alumnos  sin  repeticiones  matriculados  en 
-- Física, en Química, o en ambas asignaturas. 

SELECT 
    nombre, 
    apellidos
    FROM alumnos.alumnosfisica
UNION DISTINCT
SELECT
    nombre,
    apellidos
    FROM alumnos.alumnosquimica;

-- 5. Mostrar el nombre y apellidos de los alumnos que estén matriculados en las 3 asignaturas a la vez. 

CREATE VIEW alumnos.alumnos_generales
AS
SELECT 
    nombre, 
    apellidos
    FROM alumnos.alumnosfisica
INTERSECT
SELECT
    nombre,
    apellidos
    FROM alumnos.alumnosquimica
INTERSECT
SELECT
    nombre, 
    apellidos
    FROM alumnos.alumnosmatematicas;

SELECT * FROM alumnos.alumnos_generales;

-- 6. Mostrar los nombres y apellidos de los alumnos matriculados en Física no matriculados 
-- en Química. 

SELECT 
    nombre, 
    apellidos
    FROM alumnos.alumnosfisica
EXCEPT
SELECT
    nombre,
    apellidos
    FROM alumnos.alumnosquimica;

-- 7. Mostrar los nombres y apellidos de los alumnos que han aprobado Química y 
-- Matemáticas. 

SELECT 
    nombre,
    apellidos
    FROM alumnos.alumnosmatematicas
    WHERE nota >= 5
INTERSECT
-- UNION SOVIETICA
SELECT
    nombre,
    apellidos
    FROM alumnos.alumnosquimica
    WHERE nota >= 5;

-- 8. Mostrar los alumnos que han aprobado Física pero no Química. 

SELECT 
    CONCAT(nombre, " ", apellidos) as "Alumno maluco"
    FROM alumnos.alumnosquimica
    WHERE NOTA < 5
INTERSECT
SELECT
    CONCAT(nombre, " ", apellidos) 
    FROM alumnos.alumnosfisica
    WHERE NOTA >= 5;


