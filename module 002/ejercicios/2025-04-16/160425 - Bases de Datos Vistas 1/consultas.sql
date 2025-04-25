-- Active: 1744357566681@@127.0.0.1@3306@club_deportivo
-- • Vistas y consultas:

-- 1. Crea una vista para cada tabla.

CREATE VIEW socios_club AS SELECT * FROM club_deportivo.socios;

CREATE VIEW cursos_club AS SELECT * FROM club_deportivo.cursos;

CREATE VIEW profesores_club AS
SELECT *
FROM club_deportivo.profesores;

CREATE VIEW inscripciones_club AS
SELECT *
FROM club_deportivo.inscripciones;

-- 2. Crea una vista que incluya todas las tablas.
-- 3. Crea una vista que muestre el nombre del profesor y el del curso que imparte.

SELECT * FROM

-- 4. Crear  una  vista  en  la  que  aparezca  el  nombre  y  DNI  del  socio,  el  deporte,  el  día  y  el
-- nombre del profesor. (Realizar 2 versiones: con reunión natural y con reunión externa).
CREATE VIEW Datos_socios
AS
SELECT socios.nombre as "Socio", socios.DNI "Socio DNI", cursos.deporte as "Deporte", profesores.nombre as "Profesor"
FROM socios
    INNER JOIN inscripciones 
    ON socios.DNI = inscripciones.DNI_Socio
    INNER JOIN cursos
    ON cursos.codigo = inscripciones.Cod_Curso
    INNER JOIN profesores
    ON cursos.dni_Profesor = profesores.DNI;

-- 5. Mostrar la información contenida en las vistas.
SELECT * FROM Datos_socios

-- (Realizar los siguientes ejercicios con la vista del punto 4).

-- 6. Realiza una consulta a la vista donde muestre la cantidad de socios inscritos en cada
-- deporte ordenados por cantidad.



-- 7. Muestra  (consultando  la  vista)  los  cursos  (deporte  y  día)  para  los  cuales  no  hay
-- inscritos.
-- 8. Muestra  los  nombres  de  los  socios  que  no  se  han  matriculado  en  ningún  curso
-- (consultando la vista)
-- 9. Muestra (consultando la vista) los profesores que no tienen asignado ningún
-- deporte aún.
-- 10. Muestra  (consultando  la  vista)  el  nombre  y  documento  de  los  socios  que  deben
-- matrículas. (Mostrar aquellos socios inscritos o matriculados en algún curso).
-- 11. Consulta la vista y muestra los nombres de los profesores y los días en que asisten
-- al club para impartir sus clases.
-- 12. Muestra la misma información anterior pero ordenada por día.
-- 13. Muestra todos los socios que son compañeros en tenis los lunes.
-- 14. Crea  una  vista  que  muestre  la  cantidad  de  inscritos  por  curso  (si  no  hay,  que
-- aparezca que hay 0 inscritos), incluyendo el código del curso, el nombre del deporte
-- y el día.
-- 15. Consulta la vista anterior.
-- 16. Inserta  un  nuevo  socio  con  sus  datos  completos  en  la  vista  creada  para  la  tabla
-- socio en el punto 1.
-- 17. Inserta  un  nuevo  socio  con  sus  datos  completos  en  la  vista  creada  para  la  tabla
-- socio en el punto 2.
-- 18. Borra el nuevo socio insertado en el punto 16.