-- 5. Consultas: 
-- 1. Consultar los datos personales de los clientes que vivan en una avenida. 

SELECT *
    FROM operacionesbancarias.clientes
    WHERE Dirección LIKE "%Avda.%";

-- 2. Mostrar los clientes de Coslada. 
SELECT *
    FROM operacionesbancarias.clientes
    WHERE Localidad = "Coslada";

-- 3. Consultar las cuentas de los clientes cuyo segundo apellido empiece por "G".  
SELECT *
    FROM operacionesbancarias.clientes
    WHERE Apellido2 REGEXP "^G";

-- 4. Mostrar el código de las cuentas abiertas en dólares. 
SELECT 
    IdCuenta,
    Divisa
    FROM operacionesbancarias.cuentas
    WHERE Divisa = "Dólares";

-- 5. Mostrar los datos de las cuentas que acumulen más de 2.000 euros. 

SELECT
    IdCliente,
    IdCuenta, 
    Divisa,
    Saldo
    FROM operacionesbancarias.cuentas
    WHERE divisa = "Euros"
    AND Saldo > 2000;

-- 6. Mostrar los detalles de todos los ingresos realizados. 
SELECT *
    FROM operacionesbancarias.movimientos
    WHERE Tipo = "Ingreso";

-- 7. Mostrar  el  identificador  de  movimiento  de  todos  los  ingresos  realizados  en  el  mes  de mayo.
SELECT 
    IDMovimiento,
    Tipo,
    FechaOperacion
    FROM operacionesbancarias.movimientos
    WHERE FechaOperacion LIKE "____-05-__";

-- 8. Mostrar los datos de todas las operaciones realizadas en marzo 
SELECT *
    FROM operacionesbancarias.movimientos
    WHERE FechaOperacion BETWEEN "2022-05-01" AND "2022-05-31";

-- 9. Mostrar  los  datos  de  los  3  movimientos  realizados  hasta  el  momento  cuyas  operaciones incluyen las mayores cantidades. 

-- 10. Consultar las cuentas de Fernando Vidal González. 
SELECT DISTINCT
    IdCuenta,
    IDCliente
    FROM operacionesbancarias.cuentas
    WHERE IDCliente = (
        SELECT IdCliente From operacionesbancarias.clientes
        WHERE
        Nombre = "Fernando"
        AND Apellido1 = "Vidal"
        AND Apellido2 = "González"
    );

-- 11. Consultar los Movimientos de Ingreso o Transferencia realizados en el primer trimestre del año.



-- 12. Consultar todos los movimientos de las cuentas en divisa euros de los clientes cuyo primer 
-- apellido es “Pérez”. 
-- 13. Consultar  todos  los  movimientos  de  las  Cuentas del  Cliente  “Eva Álvarez García” en euros 
-- (aunque tenga cuentas en otras divisas), ordenados por el número de Cuenta. 
-- 14. Mostrar  el  nombre,  saldo  y  fecha  de  los  movimientos  realizados  por  todos  los  clientes 
-- hasta la fecha. 
-- 15. Obtener  el  nombre  de  clientes  y  ciudades  donde  viven,  que  cumplan  con  la  condición  de 
-- tener una cuenta 
-- 16. Mostrar los detalles de aquellos clientes que no tienen cuenta. 
-- 17. Mostrar la cantidad media agrupada por tipo de operación. 
-- 18. Saldo total por cada divisa. 
-- 19. Todas las operaciones tienen una comisión de un 1%. Mostrar ésta en una nueva columna 
-- llamada comisión, así como el tipo de operación, la cantidad real y la cuenta afectada. 
-- 20. ¿Cuántas cuentas hay abiertas cuya divisa es el dólar? 
-- 21. ¿Cuántas  cuentas  tiene cada  cliente?  Mostrar  nombre  y apellidos,  así  como  el número de 
-- cuentas que posee. 


-- 22. (Subconsulta).  Seleccionar  aquellos  movimientos  cuyas  cantidades  sean  mayores  que  la 
-- cantidad media de todas las operaciones. 

SELECT 
    *
    FROM operacionesbancarias.movimientos
    WHERE cantidad > (SELECT AVG(cantidad) FROM operacionesbancarias.movimientos);

-- 23. (Subconsulta). Mostrar la localidad sin repeticiones de aquellos clientes que tienen cuenta 
-- en dólares. 

SELECT DISTINCT
    Localidad as "Clientes con dólares"
    FROM operacionesbancarias.clientes
    WHERE 
    IDCliente IN (SELECT DISTINCT 
                        idCliente 
                        FROM operacionesbancarias.cuentas 
                        WHERE divisa = "Dólares"
                    );

-- 24. (Subconsulta). Mostrar nombre, apellidos y teléfono de los clientes que no tengan cuentas  abiertas en divisa dólar. 

SELECT DISTINCT
    Nombre,
    CONCAT(Apellido1, " ", Apellido2) as "Apellidos",
    Teléfono
    FROM operacionesbancarias.clientes
    WHERE IDCliente NOT IN (SELECT DISTINCT idCliente FROM operacionesbancarias.cuentas WHERE divisa = "Dólares");

SELECT DISTINCT
    Nombre,
    CONCAT(Apellido1, " ", Apellido2) as "Apellidos",
    Teléfono
    FROM operacionesbancarias.clientes
    WHERE IDCliente = ANY (SELECT DISTINCT idCliente FROM operacionesbancarias.cuentas WHERE divisa <> "Dólares");

-- 25. (Subconsulta). Mostrar saldos menores que alguna de las cantidades sacadas en operaciones de retirada de efectivo. 

SELECT
    Saldo
    FROM operacionesbancarias.cuentas
    WHERE Saldo < ANY (SELECT DISTINCT
    Cantidad
    FROM operacionesbancarias.movimientos
    WHERE Tipo = "Retirada Efectivo");
 
-- 06. Otras (Actualización, Eliminación, Tabla Nueva...). 
 
-- 1. Crear la tabla Clientes2 a partir de Clientes. 

CREATE TABLE operacionesbancarias.Clientes2
LIKE operacionesbancarias.clientes;


-- 2. Introducir un nuevo cliente en Clientes2 
INSERT INTO operacionesbancarias.clientes2 VALUES (
    "KU213",
    "Andrés",
    "Moros",
    "Araujo",
    "C. Londres",
    "Móstoles",*
    "534987612"
);
-- 3. Transferir el registro nuevo de Clientes2 a Clientes. 
insert into operacionesbancarias.clientes
SELECT * FROM operacionesbancarias.clientes2;

-- 4. Cambiar, en la tabla Clientes, el código de cliente a  Luis Pérez Sánchez, que pasa de ser el 45A67 al nuevo de 45M22. Confirmar actualización en cascada. 

UPDATE operacionesbancarias.clientes
SET IdCliente = "45M22"
WHERE CONCAT(Nombre, " ", Apellido1, " ", Apellido2) = "Luis Perez Sanchéz";

SELECT * FROM operacionesbancarias.cuentas
WHERE idCliente = "45M22";

-- 5. Eliminar la cuenta 754456 de Eva Álvarez García. Confirmar eliminación en cascada. 
 
DELETE FROM operacionesbancarias.cuentas
WHERE idCuenta = "754456";

Select * from operacionesbancarias.cuentas
WHERE idCuenta = "754456"

-- 07. Vistas. 
-- 1. Crear una vista para cada tabla. 

CREATE VIEW operacionesbancarias.operaciones
AS
SELECT * FROM operacionesbancarias.movimientos;

CREATE VIEW operacionesbancarias.clientes_view
AS
SELECT * FROM operacionesbancarias.clientes;

CREATE VIEW operacionesbancarias.clientes_view_copia
AS
SELECT * FROM operacionesbancarias.clientes2;

CREATE VIEW operacionesbancarias.cuentas_view
AS 
SELECT * FROM operacionesbancarias.cuentas;

-- 2. Crear una vista que muestre el nombre del cliente, el número de su cuenta, su localidad y su saldo. 

-- CREATE VIEW operacionesbancarias.datos_cliente
-- AS
-- SELECT DISTINCT
--     CONCAT(Nombre, " ", Apellido1, " ", Apellido2) as "Nombre completo",
--     Localidad as "Localidad",
--     idCuenta,
--     Saldo
--     FROM operacionesbancarias.clientes, operacionesbancarias.cuentas
--     WHERE operacionesbancarias.clientes.idCliente = operacionesbancarias.cuentas.idCliente;

CREATE VIEW datos_clientes
AS
SELECT 
    CONCAT(Nombre, " ", Apellido1, " ", Apellido2) as "Nombre completo",
    Localidad as "Localidad",
    idCuenta,
    Saldo
    FROM operacionesbancarias.clientes INNER JOIN operacionesbancarias.cuentas
    ON operacionesbancarias.clientes.idCliente = operacionesbancarias.cuentas.idCliente;

SELECT * FROM datos_clientes

-- 3. Crear una vista que muestre el código del cliente, su nombre, su número de cuenta, el tipo de operación, cantidad y las fechas de todos sus movimientos 

SELECT 
    operacionesbancarias.clientes.idCliente as "Cod. Cliente",
    CONCAT(Nombre, " ", Apellido1, " ", Apellido2) as "Nombre completo",
    operacionesbancarias.cuentas.idCuenta,
    Tipo as "Movimiento",
    IDMovimiento,
    Cantidad as "Monto",
    FechaOperacion as "Fecha de operación"
    FROM operacionesbancarias.clientes 
    INNER JOIN operacionesbancarias.cuentas
    ON operacionesbancarias.clientes.idCliente = operacionesbancarias.cuentas.idCliente
    INNER JOIN operacionesbancarias.movimientos
    ON operacionesbancarias.cuentas.idCuenta = operacionesbancarias.movimientos.IDCuenta;



-- 4. (Subconsulta).  Si  existen  transferencias,  crear  una  vista  con  los  detalles  de  las  cuentas donde se han realizado éstas. 

CREATE VIEW transferencias_bancarias
AS
SELECT * 
    FROM operacionesbancarias.movimientos
    WHERE IDMovimiento IN (SELECT IDMovimiento 
                    FROM operacionesbancarias.movimientos
                    WHERE Tipo = "Transferencia");

-- 5. Consulta  la  vista  del  punto  2  y  muestra  sólo  el  nombre  del  cliente  y  el  número  de  su  cuenta, de aquellos clientes que sean de Madrid. 
SELECT 
    `Nombre completo`,
    idCuenta as "Número de Cuenta",
    `Localidad`
FROM operacionesbancarias.datos_clientes
    WHERE `Localidad` = "Madrid";

-- 6. Consulta la vista del punto 3 y muestra las cuentas en las que se han hecho operaciones en febrero del 2022. 
SELECT 
    idCuenta as "N. de cuenta",
    fechaOperacion as "Fecha de Operación"
FROM operacionesbancarias.operaciones
    WHERE FechaOperacion REGEXP "^2022-02-"; 


-- 7. Modifica  la  vista  creada  en  el  punto  1  para  la  tabla  movimientos,  de  modo  que  sólo muestre operaciones de retirada de efectivo

ALTER VIEW operacionesbancarias.operaciones
AS
SELECT * FROM operacionesbancarias.movimientos
WHERE Tipo = "Retirada Efectivo";

-- 8. Elimina la vista creada en el punto 1 para la tabla clientes. 
 
DROP VIEW clientes_view;