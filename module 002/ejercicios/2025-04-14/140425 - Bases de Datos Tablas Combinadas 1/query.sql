-- Consultas Base de Datos Mundo 2.
-- 1. Muestra el idioma que se habla en cada país (indica nombre de este, lengua y si ésta es o
-- no oficial).

SELECT nombre as "Pais", lengua as "Lenguaje", esOficial as "Oficial"
from bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais;

-- 2. Muestra  el  idioma  que  se  habla  en  cada  país  (indica  nombre  de  éste,  lengua  con  el  alias
-- Idioma Hablado y si ésta, es o no oficial).

SELECT nombre as "Pais", lengua as "Idioma hablado", esOficial as "Es oficial?"
from bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais;

-- 3. Señala los países en los que se habla español (indica nombre de éste, lengua y si ésta es o
-- no oficial).

SELECT nombre as "Pais", lengua as "Lenguaje", esOficial as "Oficial"
from bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
WHERE
    lengua = "Spanish";

-- 4. Muestra  los  países  en  los  que  se  habla  español  como  idioma  oficial  (indica  nombre  de
-- éste, lengua y campo esoficial).

SELECT nombre as "Pais", lengua as "Lenguaje", IF(
        esOficial = "T", "Oficial", "No oficial"
    ) as "¿Idioma oficial?"
from bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
WHERE
    lengua = "Spanish"
    AND esOficial = "T";

-- 5. Muestra  el  nombre  del  país  realizando  el  producto  cartesiano  de  las  tablas  Country  e
-- Idiomas, y que en el resultado no aparezcan repeticiones.

SELECT DISTINCT
    nombre as "Pais"
from bd_mundo.country, bd_mundo.idiomas
WHERE
    bd_mundo.country.codPais = bd_mundo.idiomas.codPais;

-- 6. Muestra sólo 20 países.

SELECT nombre as "Pais", lengua as "Lenguaje", IF(
        esOficial = "T", "Oficial", "No oficial"
    ) as "¿Idioma oficial?"
from bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
GROUP BY
    nombre
LIMIT 30
OFFSET
    13;

-- 7. Muestra los 5 países con mayor población.

SELECT nombre as "Pais", FORMAT(población, 2, "es_ES") as "Población"
from bd_mundo.country
ORDER BY cast(población as INT) DESC
LIMIT 5;

-- 8. Muestra 10 países en los que se hable español como idioma oficial.

SELECT nombre as "Pais", lengua as "Lenguaje", IF(
        esOficial = "T", "Oficial", "No oficial"
    ) as "¿Idioma oficial?"
from bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
WHERE
    lengua = "Spanish"
    AND esOficial = "T"
LIMIT 10;

-- 9. Mostrar todos los idiomas ordenados de forma ascendente.

SELECT DISTINCT
    lengua as "Idioma"
from bd_mundo.idiomas
ORDER BY lengua ASC;

-- 10.  Mostrar los 20 países que primero se independizaron.

SELECT ALL
    nombre as "Pais",
    añoIndep as "Año de Independencia"
from bd_mundo.country
WHERE
    añoIndep IS NOT NULL
ORDER BY cast(añoIndep as INT) ASC
LIMIT 20;

-- 11.  Mostrar los 20 países que más tarde se independizaron.

SELECT ALL
    nombre as "Pais",
    añoIndep as "Año de Independencia"
from bd_mundo.country
WHERE
    añoIndep IS NOT NULL
ORDER BY cast(añoIndep as INT) DESC
LIMIT 20;

-- 12.  Muestra el  nombre  de  país,  año  de  independencia  y  el  idioma  que  se  habla  en  él  primer
-- país que se independizó.

SELECT nombre as "Pais", añoIndep as "Año de Independencia", lengua as "Idioma"
FROM bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
WHERE
    esOficial = "T"
    AND añoIndep IS NOT NULL
ORDER BY CAST(añoIndep as INT) ASC
LIMIT 1;

-- 13.  Muestra el país, región e idioma con más población.

SELECT nombre as "Pais", FORMAT(población, 0, "es_ES") as "Población", lengua as "Idioma"
FROM bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
WHERE
    esOficial = "T"
ORDER BY CAST(POBLACIÓN as INT) DESC
LIMIT 1;

-- 14.  Mostrar los 7 primeros países en los que la esperanza de vida sea mayor.

SELECT nombre as "Pais", esperanzaVida as "Esperanza de Vida"
FROM bd_mundo.country
ORDER BY esperanzaVida DESC
LIMIT 7;

-- 15.  Mostrar los países con las 7 mayores esperanza de vida.

# DEJAR PARA DESPUES

-- 16.  Listar los PNB, los PNB multiplicados por 2 y también divididos por 3

SELECT nombre as "Pais", CONCAT(FORMAT(PNB, 2, "es_ES"), " $") as "Producto Interno Bruto", CONCAT(
        FORMAT(PNB * 2, 2, "es_ES"), " $"
    ) as "Producto Interno Bruto x2", CONCAT(
        FORMAT(PNB / 3, 2, "es_ES"), " $"
    ) as "Producto Interno Bruto / 3"
FROM bd_mundo.country;

-- 17.  Mostrar las ciudades de cada país.

SELECT bd_mundo.city.Nombre as Ciudad, bd_mundo.country.Nombre as Pais
FROM bd_mundo.country
    INNER JOIN bd_mundo.city ON bd_mundo.country.CodPais = bd_mundo.city.CodPais
ORDER BY Pais ASC;

-- 18.  Mostrar código de país de aquellos en los que se hable una lengua no oficial.

SELECT DISTINCT
    cod2 as "Código",
    Nombre as "País"
FROM bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
WHERE
    esOficial = "F";

-- 19.  Mostrar nombre, continente, región y la lengua oficial de cada país.

SELECT Nombre as "País", Continent as "Continente", Lengua as "Idioma oficial"
FROM bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.country.codPais = bd_mundo.idiomas.codPais
WHERE
    esOficial = "T";

-- 20.  Mostrar los distintos distritos de las ciudades de Francia.

SELECT ALL
    Distrito as "Distrito",
    bd_mundo.city.nombre as "Ciudad"
FROM bd_mundo.city
    INNER JOIN bd_mundo.country ON bd_mundo.city.codPais = bd_mundo.country.codPais
WHERE
    bd_mundo.country.nombre = "France";

-- 21.  Cuál es el país asiático con superficie > 50.000 km2 y su esperanza de vida menor.

SELECT
    Nombre as "Pais",
    Superficie as "Superficie Km2",
    EsperanzaVida as "Esperanza de Vida"
FROM bd_mundo.country
WHERE
    superficie > 50000.00
    AND Continent = "Asia"
    AND EsperanzaVida is NOT NULL
ORDER BY EsperanzaVida ASC
LIMIT 1;

-- 22.  Lista de todos los datos de países de Centro América. (Usar un patrón).

SELECT * FROM bd_mundo.country
WHERE 
    Region REGEXP "^Central America";

-- 23.  Ciudades holandesas cuya población es > 150.000 personas.

SELECT ALL
    bd_mundo.city.nombre as "Ciudad",
    bd_mundo.city.Población as "Población Local"
FROM bd_mundo.city
    INNER JOIN bd_mundo.country ON bd_mundo.city.codPais = bd_mundo.country.codPais
WHERE
    bd_mundo.city.población > 150000
    AND bd_mundo.country.nombre = "Netherlands";

-- 24.  Muestra todos los países en los que se hable inglés.

SELECT ALL
    bd_mundo.country.nombre as "Pais",
    bd_mundo.idiomas.lengua as "Idioma"
FROM bd_mundo.country
    INNER JOIN bd_mundo.idiomas ON bd_mundo.idiomas.codPais = bd_mundo.country.codPais
WHERE
    bd_mundo.idiomas.Lengua = "English";

-- 25.  Mostrar las ciudades en las que se hable italiano, en orden alfabético ascendente.

SELECT DISTINCT
    bd_mundo.city.nombre as "Ciudad",
    bd_mundo.idiomas.lengua as "Idioma"
FROM bd_mundo.city
    INNER JOIN bd_mundo.idiomas ON bd_mundo.city.codPais = bd_mundo.idiomas.codPais
WHERE
    bd_mundo.idiomas.Lengua = "Italian"
    -- AND bd_mundo.idiomas.EsOficial = "T"
ORDER BY bd_mundo.city.nombre ASC;