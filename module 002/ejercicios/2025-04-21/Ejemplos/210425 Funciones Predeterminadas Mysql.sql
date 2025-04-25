
 /* Base de datos para el ejemplo. */
     use alumnos;

-- FUNCIONES MYSQL

-- 1. De Control de Flujo:

	-- IF

    select nombre, if(nota = 5 or nota = 3,'hola', nota +3) as Nota from alumnosfisica;
    select if(7<3,'hola', 5 + 3) as Nota;

    insert into alumnosfisica values(856,'Evaristo','López Hito', default, '2012/9/6' ,null);
    select * from alumnosfisica;

	-- COALESCE

    select nombre, coalesce (nota,'No presentado') as Nota from alumnosfisica;
    select nombre, coalesce (nota,0) as Nota from alumnosfisica;
    select coalesce (5,0);

	-- NULLIF

    select nombre,nullif(nota,8) as nota from alumnosfisica;
    select nullif(1,2);

	-- IFNULL

    select nombre, ifnull (nota,'No presentado') as Nota from alumnosfisica;
    select nombre, ifnull (nota,0) as Nota from alumnosfisica;
    select ifnull (5,0);

-- 2. Matemáticas:
	-- ABS

    select abs(-7) as 'Valor Absoluto';
    select nombre, abs(nota) as 'Valor Absoluto' from alumnosfisica;
    select nombre, abs(nota) as 'Valor Absoluto' from alumnosfisica where nombre = 'Lola';

	-- CEIL o CEILING

    select ceiling(45.893) as 'Redondeo al Alza';
    select nombre, ceil(nota*0.78) as 'Redondeo al Alza' from alumnosfisica;
    select nombre, ceil(nota) as 'Valor Absoluto' from alumnosfisica where nombre = 'Lola';

	-- FLOOR

    select floor(45.893) as 'Redondeo al Alza';
    select nombre, floor(nota*0.78) as 'Redondeo al Alza' from alumnosfisica;
    select nombre, floor(nota) as 'Valor Absoluto' from alumnosfisica where nombre = 'Lola';

	-- ROUND

    select round(45.893) as 'Redondeo Exacto';
    select nombre, round(nota) as 'Redondeo Exacto' from alumnosfisica;
    select nombre, round(nota) as 'Valor Absoluto' from alumnosfisica where nombre = 'Lola';

	-- ROUND con Decimales

    select round(45.893,1) as 'Redondeo Exacto';
    select nombre, round(nota,2) as 'Redondeo Exacto' from alumnosfisica;
    select nombre, round(nota,2) as 'Valor Absoluto' from alumnosfisica where nombre = 'Lola';

	-- TRUNCATE

    select truncate(45.893,1) as 'Redondeo Exacto';
    select nombre, truncate(nota,2) as 'Redondeo Exacto' from alumnosfisica;
    select nombre, truncate(nota,2) as 'Valor Absoluto' from alumnosfisica where nombre = 'Lola';

	-- FORMAT

    select format(345645.893,1) as "Dato Formateado";
    select nombre, format(población,2) as "Dato Formateado" from country;
    select nombre, format(población,2) as "Dato Formateado" from country where continent = "Asia";

	-- PI

    select PI() as 'Número PI';
    select nombre, PI() as 'Número PI' from alumnosfisica;
    select nombre, PI() as 'Número PI' from alumnosfisica where nombre = 'Lola';

	-- POW o POWER

    select POW(5,7) as 'Potencia';
    select nombre, POWER(nota,2) as 'Potencia' from alumnosfisica;
    select nombre, POW(nota,6) as 'Potencia' from alumnosfisica where nombre = 'Lola';

	-- SQRT
        
    select sqrt(5) as 'Raiz Cuadrada';
    select nombre, sqrt(nota) as 'Raiz Cuadrada' from alumnosfisica;
    select nombre, sqrt(nota) as 'Raiz Cuadrada' from alumnosfisica where nombre = 'Lola';

	-- RAND

    select rand() as 'Aleatorio';
    select rand() * 20 as 'Aleatorio';
    select round(rand() * 20,0) as 'Aleatorio';
    select nombre, rand() as 'Aleatorio' from alumnosfisica;
    select nombre, rand() as 'Aleatorio' from alumnosfisica where nombre = 'Lola';

-- 3. Funciones de Conversión:

	-- CAST 
    use bd_mundo;
    select CAST("345645.893" AS FLOAT) as "Conversión";
    select nombre, CAST(población AS VARCHAR(30)) as "Conversión" from country;
    select nombre, CAST(población AS DOUBLE) as "Conversión" from country where continent = "Asia";

    -- CONVERT

    select convert("345645.893", FLOAT) as "Conversión";
    select nombre, convert(población, VARCHAR(30)) as "Conversión" from country;
    select nombre, convert(población, DOUBLE) as "Conversión" from country where continent = "Asia";

-- 4. Funciones de Agregado:

	-- Algunos Ejemplos:

    select avg(40) as 'Promedio';
    select sum(5*8) as 'Suma';
    select nota, count(nota) as 'Total Notas Alumnos' from alumnosfisica group by nota;
    select sum(nota) as 'Total Notas' from alumnosfisica;

-- 5. Funciones de Fecha y Hora:

	-- INTERVAL - Operaciones con Intervalos.
    
    select '2012-06-09' + interval 20 year as "Fecha con 20 años más";
	select '2012/06/09' - interval 20 day as "Fecha con 20 días más";
	select curdate() + interval 80 day as "Fecha con 80 días más";
    select fechaexamen + interval 20 day as días from alumnosfisica;
    select now() + interval 20 minute as "Hora con 20 minutos más";
	select now() + interval 50 hour_microsecond as "Hora con 50 minutos más y microsegundos";
    select now() + interval 20 year_month as "Hora y fecha con 20 meses más";
    
    -- CURDATE

    select curdate() as Fecha;
    select nombre, curdate() as Fecha from alumnosfisica;
        
    -- NOW
    
    select now() as Fecha;
    select nombre, now() as Fecha from alumnosfisica;
    
    -- DATE
    
     select date('2014/05/02 22:15:23') as 'Sólo Fecha';
     select date(now()) as 'Solo Fecha';
	 select nombre, date(fechaexamen) as Fecha from alumnosfisica;
    
    -- CURTIME

    select curtime() as Hora;
    select nombre, curtime() as Hora from alumnosfisica;

    -- TIME
    
     select time('2014/05/02 22:15:23') as 'Sólo Fecha';
     select time(now()) as 'Solo Fecha';
	 select nombre, time(fechaexamen) as Fecha from alumnosfisica;
     
     -- YEAR, MONTH, DAY, HOUR, MINUTE Y SECOND (Para fechas/horas, funciones o campos)
     
     select year('2014/05/02 22:15:23') as 'Año';
     select month('2014/05/02 22:15:23') =  as 'Mes';
     select day(curdate()) as 'Día';
     select distinct day(fechaexamen) as "Día Examen" from alumnosfisica;
     select hour('2014/05/02 22:15:23') as 'Hora';
     select hour(now()) as 'Hora';
     select minute('2014/05/02 22:15:23') as 'Minuto';
     select second('2014/05/02 22:15:23') as 'Segundo';

     -- YEAR, MONTH, DAY, HOUR, MINUTE Y SECOND en condiciones.

     select * from alumnosfisica
     where month(fechaexamen) = 7;
     select * from alumnosfisica
     where day(fechaexamen) between 12 and 24;
     select * from alumnosfisica
     where day(fechaexamen) >= 1 and day(fechaexamen) <= 10;

     -- DATEDIFF
     
     select datediff('2014/07/12','2014/05/02') as 'Días Transcurridos';
     select datediff('2014/05/02','2014/07/12') as 'Días Transcurridos';
     select datediff(curdate(),'2014/07/12') as 'Días Transcurridos';
     select (datediff(curdate(),'2014/07/12')/365) as 'Años Transcurridos'; -- Años transcurridos.
     select distinct datediff(fechaexamen,'2014/05/02') as 'Días Transcurridos' from alumnosfisica;
          
	-- DATE_FORMAT    
    
     select date_format(curdate(), '%a') as 'Día con letra abreviado';
     select date_format(curdate(), '%b') as 'Nombre mes abreviado';
	 select date_format(curdate(), '%c') as 'Nº mes 1 dígito';
     select date_format(curdate(), '%d') as 'Nº día 2 dígitos';
     select date_format(curdate(), '%e') as 'Nº día 1 dígito';
     select date_format(now(), '%f') as Microsegundos;
     select date_format(now(), '%H') as 'Hora 2 dígitos de 00 a 23';
     select date_format(now(), '%h') as 'Hora 2 dígitos de 01 a 12';
     select date_format(now(), '%i') as Minutos;
     select date_format(now(), '%k') as 'Hora 1 dígito de 0 a 23';
     select date_format(now(), '%l') as 'Hora 1 dígito de 1 a 12';
     select date_format(curdate(), '%M') as 'Nombre mes completo';
     select date_format(curdate(), '%m') as 'Nº mes 2 dígitos';
     select date_format(curdate(), '%p') as 'AM o PM';
     select date_format(curtime(), '%r') as 'Hora 1 a 12 formato HH:MM:SS y AM o PM';
     select date_format(now(), '%s') as Segundos;
     select date_format(now(), '%T') as 'Hora 0 a 23 formato HH:MM:SS';
     select date_format(curdate(), '%w') as 'Nº día semana (0 es el domingo)';
     select date_format(curdate(), '%W') as 'Nombre día semana completo';
     select date_format(curdate(), '%Y') as 'Año 4 dígitos';
     select date_format(curdate(), '%y') as 'Año 2 dígitos';
     select date_format('2014/05/02 22:15:23', '%a') as 'Día con letra abreviado';
     select date_format('2014/05/02 22:15:23', '%H') as 'Hora de 0 a 24';
     select date_format(fechaexamen, '%a') as 'Dia Examen' from alumnosfisica;
     select date_format('2014/05/02 22:15:23', '%d/%c/%y') as 'Día con letra abreviado';
	 select date_format('2014/05/02 22:15:23', '%W, %d de %m del %Y') as 'Día con letra abreviado';
     
     -- DAYNAME
     
	 select dayname(curdate()) as 'Nombre del día';
      select distinct dayname(fechaexamen) as 'Dia Examen' from alumnosfisica;
      
	 -- TIMEDIFF     
     
     select timediff(now(),'2015/11/18 20:03:23') as 'Tiempo de Diferencia hacia delante';
     select timediff('2015/11/18 20:03:23', now()) as 'Tiempo de Diferencia hacia atrás';
     select timediff(now(), fechaexamen) as 'Horas para el examen' from alumnosfisica;
     
     -- TIMESTAMPADD
     
     select timestampadd(week,7,curdate()) as 'Fecha actual con 7 semanas añadidas';
    select timestampadd(hour,10,now()) as '10 horas añadidas a al hora actual';
     select timestampadd(day,10,fechaexamen) as 'Fecha del examen retrasado 10 días' from alumnosfisica;
     
     -- TIMESTAMPDIFF
     
     select timestampdiff(week,'2014/05/02 22:15:23',curdate()) as 'Semanas de diferencia ente fecha pasada y actual';
     select timestampdiff(week,curdate(),'2014/05/02') as 'Semanas de diferencia ente fecha actual y pasada';
     select timestampdiff(hour,'2014/05/02 22:15:23',now()) as 'Horas de diferencia';
     select distinct timestampdiff(day,fechaexamen,curdate()) as 'Examen realizado hace x días' from alumnosfisica;
     
     -- TIME_FORMAT
     
     select time_format('20:03:29','%H') as 'Hora';
	 select time_format('20:03:29','%i') as 'Minutos';
     select distinct time_format(fechaexamen,'%H') as 'Hora del examen' from alumnosfisica;
     -- Ver ejemplos similares para date_format.
     
     
-- 6. Funciones de Información:

     -- CURRENT_USER
     
     select current_user() as 'Usuario actual';
     
     -- DATABASE
     
	 select database() as 'Base de datos activa';
     
     -- ROW_COUNT
     
      select row_count() as 'Nº de registros';
            
     -- USER, SYSTEM_USER, SESSION_USER
     
     select user() as 'Usuario conectado y equipo cliente';
	 select system_user() as 'Usuario conectado y equipo cliente';
	 select session_user() as 'Usuario conectado y equipo cliente';
     
	 -- VERSION
     
     select version() as 'Versión de MySQL';
     
     
-- 7. Funciones de Texto:

	 -- CHAR_LENGTH

	 select char_length('Hola Adios') as 'Longitud Campo';
     select nombre, char_length(Apellidos) as 'Longitud Campo' from alumnosfisica;
     
     -- CONCAT
     
     select concat('Hola', ' Adios') as 'Concatenar Textos';
     select concat('Te llamas: ', nombre, ' ', Apellidos) as 'Concatenar Textos' from alumnosfisica;
     
     -- CONCAT_WS
     
     select concat_ws('...','Hola', 'Adios') as 'Concatenar Textos con Separador';
     select concat_ws(' ','Te llamas:', nombre, Apellidos) as 'Concatenar Textos con Separador' from alumnosfisica;
     
     -- LENGTH
     
     select length('Hola') as 'Longitud Texto';
     select nombre,length(nombre) as 'Longitud Texto' from alumnosfisica;
     
     -- SUBSTRING (2 Sintaxis)
     
     select substring('Hola', 2) as 'Subcadena';
     select nombre, substring(nombre, 3) as 'Subcadena' from alumnosfisica;
     
     
     select substring('Hola', 2, 2) as 'Subcadena con Longitud';
     select nombre, substring(nombre, 3,2) as 'Subcadena con Longitud' from alumnosfisica;
     
     -- LCASE/UCASE
     
     select lcase('Hola') as 'Minúsculas';
     select nombre, lcase(nombre) as 'Minúsculas' from alumnosfisica;
     select ucase('Hola') as 'Mayúsculas';
     select nombre, ucase(nombre) as 'Mayúsculas' from alumnosfisica;
     
     -- INSTR     
     
	 select instr('Hola','la') as 'Posición subcadena';
     select nombre, instr(nombre, 'sa') as 'Posición subcadena' from alumnosfisica;

    -- LEFT   

    select left('Hola', 2) as 'Posición subcadena';
    select nombre, left(nombre, 2) as 'Primeros caracteres' from alumnosfisica; 

    -- RIGHT 

    select right('Hola', 2) as 'Posición subcadena';
    select nombre, right(nombre, 3) as 'Primeros caracteres' from alumnosfisica; 

     -- INSERT 

    select insert('Hola', 3, 1, 'rr') as 'Nueva cadena';
   	select insert ('An', 2, 0, 'lie') as 'Nueva cadena';
    select nombre, insert(nombre, 1,0, 'Alumno: ') as 'Alumnos del curso' from alumnosfisica; 

     -- REPLACE 

    select replace ('Hola', 'H','M') as 'Nueva cadena';
    select nombre, replace(nombre, 'r','RR') as 'Nuevo nombres' from alumnosfisica; 

    -- REPEAT 

    select repeat ('Hola', 3) as 'Cadena repetida';
    select nombre, repeat (nombre, 2) as 'Nombres repetidos' from alumnosfisica;

    -- REVERSE 

    select reverse ('Hola') as 'Cadena repetida';
    select nombre, reverse (nombre) as 'Nombres repetidos' from alumnosfisica;

    -- TRIM, LTRIM, RTRIM 

    select trim ('       Hola      ') as 'Cadena sin espacios vacíos';
    select ltrim ('       Hola      ') as 'Cadena sin espacios vacíos al principio';
    select rtrim ('       Hola      ') as 'Cadena sin espacios vacíos al final';
    select nombre, trim (nombre) as 'Nombres sin espacios vacíos' from alumnosfisica;



     
     

