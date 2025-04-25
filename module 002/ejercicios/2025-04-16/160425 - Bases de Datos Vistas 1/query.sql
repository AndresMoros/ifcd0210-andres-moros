-- Ejercicio Deportes Vistas. 
 
-- • Un club realiza cursos de distintos deportes y almacena la información en varias tablas. 
-- • El  director  no  quiere  que  los  empleados  de  administración  conozcan  la  estructura  de  las 
-- tablas  ni  algunos  datos  de  los  profesores  y  socios,  por  ello  se  crean  vistas  a  las  cuales 
-- tendrán acceso. 
-- • Tablas: 

CREATE DATABASE IF NOT EXISTS club_deportivo
CHARACTER SET utf8;
 
-- o Socios (DNI (PK), nombre, domicilio) 
CREATE TABLE IF NOT EXISTS club_deportivo.Socios(
    DNI VARCHAR(9) NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    domicilio VARCHAR(60) NULL
);

-- o Profesores (DNI (PK), nombre, domicilio) 
CREATE TABLE IF NOT EXISTS club_deportivo.Profesores (
    DNI VARCHAR(9) NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    domicilio VARCHAR(60) NULL
);

-- o Cursos (Código (PK e identidad), deporte, día, DNI_Profesor) 
-- ▪ Sólo hay clases los días: lunes, martes, miércoles, jueves y viernes. 
CREATE TABLE IF NOT EXISTS club_deportivo.Cursos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    deporte VARCHAR(20) NOT NULL,
    dia VARCHAR(10) CHECK (dia IN ("Lunes", "Martes", "Miercoles", "Jueves", "Viernes")),
    dni_Profesor VARCHAR(9),
    FOREIGN KEY (dni_Profesor) REFERENCES Profesores (DNI)
);

DROP TABLE club_deportivo.cursos;

-- o Inscripciones (DNI_Socio, Codigo_Curso, Nº_Matrícula (PK)) 

CREATE TABLE IF NOT EXISTS club_deportivo.Inscripciones (
    DNI_Socio VARCHAR(9) NOT NULL,
    Cod_Curso INT NOT NULL,
    Matricula VARCHAR (10) NOT NULL PRIMARY KEY,
    FOREIGN KEY (DNI_Socio) REFERENCES club_deportivo.Socios (DNI),
    FOREIGN KEY (Cod_Curso) REFERENCES club_deportivo.Cursos (Codigo)
);
 
-- • Registros: 
-- o Socios: 
-- ▪ 30000000, Fabián Fuentes, Avilés 987. 
-- ▪ 31111111, Antonio García, Mieres 65. 
-- ▪ 32222222, Héctor Huerta, Oviedo 534. 
-- ▪ 33333333, Inés Irala, Bulnes 345.

INSERT INTO club_deportivo.socios VALUES
("30000000", "Fabián Fuentes", "Avilés 987"),
("31111111", "Antonio García", "Mieres 65"),
("32222222", "Héctor Huerta", "Oviedo 534"),
("33333333", "Inés Irala", "Bulnes 345");

-- o Profesores: 
-- ▪ 22222222, Ana Acosta, Teruel 31. 
-- ▪ 23333333, Carlos Casares, Málaga 45. 
-- ▪ 24444444, Daniel Duarte, Ávila 87. 
-- ▪ 25555555, Esteban López, Sevilla 12.

INSERT INTO club_deportivo.profesores VALUES
("22222222","Ana Acosta", "Teruel 31"),
("23333333", "Carlos Casares", "Málaga 45"),
("24444444", "Daniel Duarte", "Ávila 87"),
("25555555", "Esteban López", "Sevilla 12");

-- o Cursos: 
-- ▪ 1, Tenis, Lunes, 22222222. 
-- ▪ 2, Tenis, Martes, 22222222. 
-- ▪ 3, Natación, Miércoles, 22222222. 
-- ▪ 4, Natación, Jueves, 23333333. 
-- ▪ 5, Natación, Viernes, 23333333. 
-- ▪ 6, Fútbol, Jueves, 24444444. 
-- ▪ 7, Fútbol, Lunes, 24444444. 
-- ▪ 8, Baloncesto, Martes, 24444444. 

INSERT INTO club_deportivo.cursos (deporte, dia, `dni_Profesor`) VALUES 
("Tenis", "Lunes", "22222222"),
("Tenis", "Martes", "22222222"),
("Natación", "Miercoles", "22222222"),
("Natación", "Jueves", "23333333"),
("Fútbol", "Viernes", "24444444"),
("Fútbol", "Lunes", "24444444"),
("Baloncesto", "Martes", "24444444");

INSERT INTO club_deportivo.cursos (deporte, dia, dni_profesor) VALUES
("Natación", "Martes", "23333333");
-- o Inscripciones: 
-- ▪ 30000000, 1, 100 
-- ▪ 30000000, 3, 200 
-- ▪ 30000000, 6, 300 
-- ▪ 31111111, 1, 400 
-- ▪ 31111111, 4, 500 
-- ▪ 32222222, 8, 600

INSERT INTO club_deportivo.inscripciones VALUES ("30000000", 1, "100");

INSERT INTO club_deportivo.inscripciones VALUES("30000000", 3, "200");
INSERT INTO club_deportivo.inscripciones VALUES ("30000000", 6, "300");
INSERT INTO club_deportivo.inscripciones VALUES ("31111111", 1, "400");
INSERT INTO club_deportivo.inscripciones VALUES ("31111111", 4, "500");
INSERT INTO club_deportivo.inscripciones VALUES ("32222222", 8, "600");

