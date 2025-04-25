-- Consultas Base de Datos Mundo 1.
-- 1. Mostrar sólo la región de cada país.

SELECT ALL region, nombre FROM bd_mundo.country;

-- 2. Mostrar el código cada país y su nombre.

SELECT ALL CodPais, nombre FROM bd_mundo.country;

-- 3. Mostrar nombre del país, su continente y su año de independencia.

SELECT ALL nombre, continent, añoIndep FROM bd_mundo.country;

-- 4. Mostrar los datos de todos los países.

SELECT * FROM bd_mundo.country;

-- 5. Mostrar los datos de todos los países del Caribe.

SELECT ALL nombre as Nombre, codpais as "Código País", continent as "Continente", region as "Región" FROM bd_mundo.country
WHERE region = "Caribbean";

-- 6. Mostrar el nombre de los países con esperanza de vida mayor de 50 años.

SELECT nombre, EsperanzaVida FROM bd_mundo.country
WHERE EsperanzaVida >= 50;

-- 7. Mostrar el nombre y superficie de los países cuya población sea mayor de
-- 1.000.000 de personas.

SELECT nombre, superficie FROM bd_mundo.country
WHERE población >= 100000;

-- 8. Mostrar los países que no sean una república.

SELECT ALL nombre, FormaGobierno from bd_mundo.country
where FormaGobierno NOT LIKE "%Republic%";

-- 9. Mostrar nombre y forma de gobierno para todo tipo de repúblicas.

SELECT ALL nombre, FormaGobierno from bd_mundo.country
where FormaGobierno LIKE "%Republic%"

-- 10. Mostrar el código de los países cuya población este entre 3 y 10 millones de
-- personas.

SELECT ALL codpais, nombre, FORMAT(POBLACIÓN, 0, "es_ES") FROM bd_mundo.country
WHERE población BETWEEN 3000000 AND 10000000;

-- 11. Nombre de países que se independizaron en la década de los 60 del siglo pasado.

SELECT nombre, añoindep FROM bd_mundo.country
WHERE añoindep REGEXP "196[0-9]";

-- 12. Países de Asia y África.

SELECT * FROM bd_mundo.country
WHERE continent IN ("Asia", "Africa");

-- 13. Países que no sean de Asia ni África.

SELECT * FROM bd_mundo.country
WHERE continent NOT IN ("Asia", "Africa");

-- 14. Países independizados en 1970, 1975 o 1980.

SELECT ALL nombre, codpais, continent FROM bd_mundo.country
WHERE añoindep IN ("1970", "1975", "1980");

-- 15. Países cuyo nombre empieza con letras que van desde la “A” hasta la “D”.

SELECT ALL nombre, codpais, continent FROM bd_mundo.country
WHERE nombre REGEXP "^[A-D]";

-- 16. Países cuyo nombre empiece por “G” y tengan 6 caracteres.

SELECT * FROM bd_mundo.country
WHERE nombre LIKE "G_____";

-- 17. Países con código de país tenga como 1ª letra, cualquiera. Como 2ª una B, C o D, como 3ª: L, M, N, Ñ u O. Mostrar sólo el nombre y el código del país.

SELECT ALL nombre, codPais from bd_mundo.country
WHERE codPais REGEXP "[A-Z][B-D][LMNÑO]";

 
UPDATE bd_mundo.country 
SET codpais = "LBÑ" 
WHERE nombre = "Lebanon";

-- 18. Países con PNB_ant desconocido.

SELECT * from bd_mundo.country
WHERE PNB_ant IS NULL;

-- 19. Países con PNB_ant conocido.

SELECT * from bd_mundo.country
WHERE PNB_ant IS NOT NULL;

-- 20. Países africanos con esperanza de vida mayor de 50 años.

SELECT ALL nombre, codPais, población, esperanzaVida from bd_mundo.country
WHERE continent = "Africa" AND esperanzaVida >= 50;

-- 21. Países asiáticos con esperanza de vida entre 30 y 50 años.

SELECT ALL nombre, codPais, población, esperanzaVida from bd_mundo.country
WHERE continent = "Asia" AND esperanzaVida >= 30 AND esperanzaVida <= 50;

-- 22. Países que sean de África, Asia o Europa (Realizar la consulta de 2 formas posibles).

SELECT nombre, codPais, continent from bd_mundo.country
WHERE continent IN ("Africa", "Asia", "Europe");

SELECT ALL nombre, codPais, continent as "Continente" from bd_mundo.country
WHERE continent NOT IN ("North America", "South America", "Oceania", "Antarctica");

-- 23. Total de población por continente.

SELECT ALL Continent as "Continente", FORMAT(sum(población), 0, "es_ES" ) as Población FROM bd_mundo.country
GROUP BY Continent;

-- 24. Esperanza de vida media en Asia.

SELECT ALL Continent as "Continent", FORMAT(avg(esperanzavida), 2, "es_ES" ) as "Esperanza de vida Media" FROM bd_mundo.country
WHERE continent = "Asia";

-- 25. ¿Cuántos países hay en Asia?

SELECT count(nombre) as "Numero de paises", continent as "Continente" FROM bd_mundo.country
WHERE CONTINENT = "Asia";

-- 26. Mostrar los datos de los países ordenados ascendentemente por su región.

SELECT nombre, codpais, continent, region FROM bd_mundo.country
ORDER BY region ASC;

-- 27. Mostrar los datos de todos países ordenados desde el que se ha independizado
-- más recientemente hasta el país con la independencia más antigua.

SELECT ALL nombre, continent, añoIndep as "Año de independencia" FROM bd_mundo.country
WHERE añoindep IS NOT NULL
ORDER BY cast(añoindep as int) desc;

-- 28. Mostrar la población real estimada en una nueva columna, suponiendo que todos
-- los países hoy en día han aumentado su población un 20 %.

SELECT nombre as Pais, continent as Continente, FORMAT(población, 0, "es_ES") as "Población Registrada", FORMAT(sum(población + (población * 0.20)), 0, "es_ES") as "Población Estimada" FROM bd_mundo.country
GROUP BY nombre;