-- Active: 1745308049661@@127.0.0.1@3306@alumnos

-- 1. Usando el usuario root, crea el usuario jefazo y asígnale la contraseña 26gt7x. 
CREATE USER 'jefazo'@'localhost' IDENTIFIED BY "26gt7x";

-- 2. Asigna  al  usuario  jefazo  permisos  globales  sobre  todas  las  bases  del  servidor 
-- incluyendo la opción de poder establecer permisos para otros usuarios. 
GRANT ALL ON *.* TO 'jefazo'@'localhost' WITH GRANT OPTION;

-- 3. Elimina el permiso super al usuario jefazo. 
REVOKE SUPER ON *.* FROM 'jefazo'@'localhost';

FLUSH PRIVILEGES;

DROP USER 'jefazo'@'localhost';

-- 4. Conéctate con este usuario al servidor local (para ello crea una conexión con él 
-- en phpmyAdmin, Workbench o HeidiSQL, etc., o accede mediante consola). 

-- PS D:\ifcd2010-andres-moros> mysql -h localhost -u jefazo -p
-- Enter password: ******

-- 5. Una vez conectado, consulta qué permisos tiene el usuario jefazo. 

SELECT * FROM mysql.user
WHERE User = 'jefazo';

-- 6. Pon en uso una base de datos cualquiera que haya en el servidor, por ejemplo, 
-- bd_mundo. 



-- 7. Realiza  una  consulta  sobre  una  de  sus  tablas,  por  ejemplo,  muestra  el  código 
-- del país, el nombre de éste y su continente usando la tabla country. 

SELECT 
    articulos.nombre as Producto,
    envios.CODAR as "Cod. Art.",
    componentes.nombre as Componente,
    envios.CODCO as "Cod. Comp.",
    sum(envios.cantidad) as "Cantidad"
    FROM articulos INNER JOIN envios
    ON articulos.CODAR = envios.CODAR
    INNER JOIN componentes
    ON componentes.CODCO = envios.CODCO
    GROUP BY envios.CODAR
    ORDER BY cantidad DESC;


-- 8. Muestra ahora la estructura de esta misma tabla. 

DESCRIBE articulos;

-- 9. Crea,  con  el  usuario  jefazo,  un  nuevo  usuario  con  el  nombre  de  operador  y 
-- contraseña 34ffa4. (Para este usuario utiliza la base de datos OperacionesBancarias, creada con el ejercicio Banco el 15-04-2025). 

CREATE USER 'operador'@'localhost' IDENTIFIED BY '34ffa4';

-- 10. Otorga  al  usuario  operador  la  posibilidad  de  manipular  los  datos  de  las  tablas 
-- de la base de datos OperacionesBancarias, según las siguientes condiciones: 
-- • Insertar, modificar, eliminar y visualizar Proveedores. 
-- • Consultar, insertar y modificar Componentes. 
-- • Consultar, insertar y modificar Artículos. 
-- • Consultar Envíos. 
-- • Ejecutar procedimientos almacenados en todas las tablas. 

GRANT INSERT, ALTER, SELECT, UPDATE, EXECUTE ON suministros.* TO 'operador'@'localhost';

-- 11. Tras  asignar  los  permisos,  conéctate  con  el  usuario  operador  al  servidor  local pero antes, crea para él una conexión igual a como se hizo en el punto 4 para el   usuario jefazo. (No cerrar las conexiones a root y jefazo). 

-- PS E:\ifcd2010-andres-moros> mysql -u operador -p
-- Enter password: ****** 

-- 12. Una vez conectado, consulta qué permisos tiene el usuario operador. 

-- MariaDB [(none)]> use suministros
-- Database changed
-- MariaDB [suministros]> show grants;
-- +-----------------------------------------------------------------------------------------------------------------+
-- | Grants for operador@localhost                                                                                   |
-- +-----------------------------------------------------------------------------------------------------------------+
-- | GRANT USAGE ON *.* TO `operador`@`localhost` IDENTIFIED BY PASSWORD '*B5449763DA3C4013CC22221F8BDD0E0F2B3706F1' |
-- | GRANT SELECT, INSERT, UPDATE, ALTER, EXECUTE ON `suministros`.* TO `operador`@`localhost`                       |
-- +-----------------------------------------------------------------------------------------------------------------+

-- 13. Pon en uso la base suministros para el usuario operador. 

-- MariaDB [(none)]> use suministros
-- Database changed
-- MariaDB [suministros]>

-- 14. Realiza  las  siguientes  operaciones  LMD  sobre  las  tablas  de  la  base  suministros 
-- usando el usuario operador: 

-- a. Inserta  un  nuevo  proveedor  con  los  siguientes  datos:  P6,  Eugenia,  20 
-- Madrid.  Confirma  después  con  una  consulta  que  se  ha  introducido  un 
-- nuevo registro. 

INSERT INTO proveedores VALUES (
    "P6",
    "Eugenia",
    20,
    "Madrid"
);

SELECT * FROM proveedores
WHERE proveedores.CODPRO = "P6";

-- b. Actualiza  el  nombre del componente  C2,  ahora  se  llama  V5D.  Confirma 
-- después que se ha producido el cambio. 

UPDATE componentes
SET nombre = "V5D"
WHERE componentes.CODCO = "C2";

SELECT * FROM componentes;

-- c. ¿Cuántos artículos se han fabricado en Cáceres? 

SELECT
    articulos.CIUDAD as "Ciudad",
    COUNT(articulos.CODAR) as "Cant. Art."
    FROM articulos
    WHERE CIUDAD LIKE "Cáceres";

-- d. Consulta los envíos realizados por el proveedor P3. 

SELECT 
    proveedores.codPro as "Cod. Proveedor",
    proveedores.nombre as "Proveedor",
    envios.codAr as "Cod. Art.",
    envios.codCo as "Cod. Comp.",
    envios.cantidad as "Cantidad"
    FROM proveedores INNER JOIN envios
    ON proveedores.codPro = envios.codPro
    WHERE envios.CodPro = "P3";

START TRANSACTION;

SAVEPOINT sp1;
-- e. Elimina todos los envíos el realizados por el proveedor P5. (esta 
-- consulta producirá un error. ¿Porqué? 

DELETE FROM envios
WHERE `CODPRO` = "P5";

-- El error se debe a los permisos


-- 15. Visualiza toda información sobre los distintos usuarios creados. 

SELECT user, host, command FROM information_schema.processlist

-- 16. Revoca el permiso de ejecución al usuario operador. (Usando el usuario jefazo). 

REVOKE EXECUTE ON suministros.* FROM operador@localhost;

-- 17. Confirma  la  retirada  del  permiso  consultando  cuáles  tiene  ahora  el  usuario 
-- operador. 

SHOW GRANTS FOR operador@localhost;

-- MariaDB [suministros]> show grants;
-- +-----------------------------------------------------------------------------------------------------------------+
-- | Grants for operador@localhost                                                                                   |
-- +-----------------------------------------------------------------------------------------------------------------+
-- | GRANT USAGE ON *.* TO `operador`@`localhost` IDENTIFIED BY PASSWORD '*B5449763DA3C4013CC22221F8BDD0E0F2B3706F1' |
-- | GRANT SELECT, INSERT, UPDATE, ALTER ON `suministros`.* TO `operador`@`localhost`                                |
-- +-----------------------------------------------------------------------------------------------------------------+
SAVEPOINT sp2;

-- 18. Elimina al usuario operador. 

DROP USER operador@localhost;

-- 19. Elimina al usuario jefazo. 

DROP USER jefazo@localhost;

-- 20. Confirma que ya no existen ambos usuarios.

SELECT user from mysql.user;

MariaDB [(none)]> SELECT user from mysql.user;
-- +------+
-- | User |
-- +------+
-- | root |
-- | root |
-- | pepe |
-- | pma  |
-- | root |
-- +------+