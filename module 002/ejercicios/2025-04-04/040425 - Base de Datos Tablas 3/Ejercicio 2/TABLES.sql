CREATE TABLE alumnos(
    id_alumno VARCHAR(5),
    nombre VARCHAR (50) NOT NULL
);

ALTER TABLE COLEGIO.alumnos
DROP PRIMARY KEY (id_alumno);

ALTER TABLE COLEGIO.alumnos
ADD CONSTRAINT idAlumno PRIMARY KEY (id_alumno);

ALTER TABLE COLEGIO.alumnos
ADD COLUMN Curso VARCHAR(10) NOT NULL;


CREATE TABLE asignatura (
    id_asignatura VARCHAR(5),
    id_alumno VARCHAR(5),
    nombre_asignatura VARCHAR(25) NOT NULL,
    nota INT(2) CHECK(nota > 0 AND nota < 11),
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno)
);