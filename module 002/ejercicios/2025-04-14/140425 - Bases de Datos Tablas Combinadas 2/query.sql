-- Ejercicio SQL Ventas. 
-- Crear las tablas Vendedores y Productos. 
 
-- • Vendedores (Codven, Nombre, Departamento). 
-- • Pedidos (IdVenta, Codven, CodPro, Nombre, Cantidad, FechaVenta, PrecioUnitario). 
 
-- Restricciones: 
 
-- • Establecer una clave principal en cada tabla. 
-- • Relacionar ambas a través del campo Codven. (Actualizar y Eliminar en Cascada). 
-- • Los campos Cantidad y PrecioUnitario sólo deben admitir valores positivos. 
 
-- Consultas: 
 
-- 1. Introducir  varios  vendedores  en  la  tabla  Vendedores  y  varios  productos  vendidos  por  ellos  en  la 
-- tabla "Pedidos". 
-- 2. Mostrar todos los registros de ambas tablas por separado calificando campos cuando sea 
-- necesario. 

SELECT * FROM ventas.pedidos;

SELECT * FROM ventas.vendedores;

-- 3. Mostrar aquellos vendedores que trabajan en el departamento de "Informática". 

SELECT * FROM ventas.vendedores
WHERE Departamento = "Informática";

-- 4. Mostrar sólo los campos "Nombre" y "Cantidad" de la tabla "Pedidos". 

SELECT
    Nombre as "Producto", cantidad as "Cantidad"
FROM
    ventas.pedidos;

-- 5. Seleccionar los registros de la tabla "Pedidos" en los que aparezcan más de 5 unidades vendidas de 
-- "Tablet". 

SELECT *
    FROM ventas.pedidos
WHERE 
    nombre = "Tablet"
AND 
    cantidad > 5;

-- 6. Mostrar  los  3  primeros  registros  de  los  productos  más  vendidos  y  también,  los  3  productos  más 
-- vendidos. 

SELECT *
    FROM ventas.pedidos
ORDER BY
    cantidad DESC
LIMIT 5;

SELECT
    ventas.pedidos.nombre as "Producto",
    SUM(ventas.pedidos.cantidad) as "Cantidad"
FROM
    ventas.pedidos
GROUP BY
    ventas.pedidos.nombre
ORDER BY SUM(ventas.pedidos.cantidad) DESC
LIMIT 3;


-- 7. Mostrar los 3 primeros registros de los productos más baratos. 

SELECT DISTINCT Nombre, PrecioUnitario 
    FROM ventas.pedidos
ORDER BY PrecioUnitario
LIMIT 3;

-- 8. Mostrar el producto cartesiano de ambas tablas. 

SELECT *
FROM 
    ventas.vendedores, 
    ventas.pedidos
WHERE 
    ventas.vendedores.CodVen = ventas.pedidos.Codven
ORDER BY
    ventas.vendedores.nombre;

-- 9. Mostrar todos los datos de las ventas de cada vendedor. 

SELECT 
    ventas.vendedores.codVen as "Cod. Vendedor",
    ventas.vendedores.nombre as "Vendedor",
    ventas.pedidos.idVenta as "Id Venta",
    ventas.pedidos.codPro as "Cod. Producto",
    ventas.pedidos.nombre as "Producto",
    ventas.pedidos.cantidad as "Cantidad",
    ventas.pedidos.FechaVenta as "Fecha"
FROM 
    ventas.vendedores, 
    ventas.pedidos
WHERE 
    ventas.vendedores.CodVen = ventas.pedidos.Codven
ORDER BY
    ventas.vendedores.nombre;

-- 10.  Mostrar los registros relacionados en las 2 tablas en los que aparezca una venta en "Enero". 

SELECT *
FROM
    ventas.vendedores INNER JOIN ventas.pedidos
ON
    ventas.vendedores.codVen = ventas.pedidos.codVen
WHERE 
    FechaVenta LIKE "2019-01-__"
LIMIT 1;

-- 11.  mostrar los registros relacionados en ambas en los que aparezcan ventas de más de 10 productos 

SELECT *
FROM
    ventas.vendedores INNER JOIN ventas.pedidos
ON
    ventas.vendedores.codVen = ventas.pedidos.codVen
WHERE 
    `Cantidad` > 10;

-- 12.  Mostrar los atributos "Nombre " y "Departamento", de aquellos vendedores que trabajen en el de 
-- Informática y hayan realizado una venta en enero. 

SELECT 
    ventas.vendedores.nombre as "Vendedor",
    ventas.vendedores.departamento as "Departamento",
    ventas.pedidos.fechaVenta as "Fecha Venta",
    ventas.pedidos.idVenta as "Id Venta"
FROM
    ventas.vendedores INNER JOIN ventas.pedidos
ON
    ventas.vendedores.codVen = ventas.pedidos.codVen
WHERE 
    FechaVenta LIKE "2019-01-__";

-- 13.  Muestra  en  una  consulta  el  código  de  venta,  el  código  del  vendedor,  el  código  del  producto,  la 
-- cantidad vendida, el precio del producto y una columna nueva con el subtotal calculado. 

SELECT 
    ventas.pedidos .idVenta as "Id Venta",
    ventas.vendedores.codVen as "Cod. Vendedor",
    ventas.pedidos.codPro as "Cod. Producto",
    ventas.pedidos.cantidad as "Cantidad",
    ventas.pedidos.precioUnitario as "Precio Unit.",
    (ventas.pedidos.cantidad * ventas.pedidos.precioUnitario) as "Subtotal"
FROM 
    ventas.vendedores, ventas.pedidos
WHERE 
    ventas.vendedores.codVen = ventas.pedidos.codVen
ORDER BY 
    ventas.pedidos.idVenta;

-- 14.  Mostrar beneficio total obtenido con 2 decimales (suma del subtotal anterior).

SELECT 
    SUM(ventas.pedidos.cantidad * ventas.pedidos.precioUnitario) as "Beneficio Total"
FROM    
    ventas.vendedores, ventas.pedidos
WHERE 
    ventas.vendedores.codVen = ventas.pedidos.codVen;

-- 15.  Mostrar el total de productos vendidos por "Departamento"

SELECT (ventas.pedidos.cantidad) as "Cantidad",
    ventas.vendedores.departamento as "Departamento",
    SUM(ventas.pedidos.cantidad) as "Total"
FROM 
    ventas.vendedores, ventas.pedidos
WHERE 
    ventas.vendedores.codVen = ventas.pedidos.codVen
GROUP BY 
    ventas.vendedores.departamento
ORDER BY 
    ventas.vendedores.departamento;

-- 16.  Eliminar un registro en la tabla Pedidos. 

DELETE FROM ventas.pedidos
WHERE idVenta = "1245b";

-- 17.  Eliminar los productos cuya cantidad vendida sea menor de 10 unidades. 

DELETE FROM ventas.pedidos
WHERE cantidad < 10;

-- 18.  Borrar los registros vendidos por el vendedor cuyo código es el 2. 

DELETE FROM ventas.pedidos
WHERE codven = 2;

-- 19.  Introducir un nuevo vendedor y 2 productos vendidos por él. 

INSERT INTO ventas.vendedores(nombre, departamento) VALUES (
    "Jesus",
    "Informática"
);

SELECT * from ventas.pedidos;

SELECT * FROM ventas.vendedores;

INSERT INTO ventas.pedidos(idVenta, codVen, codPro, nombre, cantidad, fechaVenta, precioUnitario) VALUES (
    "3120L",
    0,
    522,
    "Tablet",
    2,
    "2023-04-14",
    240.00
),
(
    "3120M",
    0,
    523,
    "Portátil",
    1,
    "2023-04-14",
    1200.00
);

-- 20.  Aumentar todos los precios de la tabla "Pedidos" un 5 %. 

UPDATE ventas.pedidos
SET
    precioUnitario = precioUnitario * 1.05;

-- 21.  Realizar dos variantes: 
-- Descontar un 2% a los precios de los productos vendidos en mayo de un año cualquiera y descontar 
-- un 2% a los precios de los productos vendidos en un año determinado. 

UPDATE ventas.pedidos
SET
    precioUnitario = precioUnitario * .98
WHERE
    fechaVenta LIKE "____-05-__";

UPDATE ventas.pedidos
SET
    precioUnitario = precioUnitario * .98
WHERE
    fechaVenta LIKE "2025-__-__";

-- 22.  Cambiar el nombre del campo "Departamento" de  la tabla "Vendedores"  por el nuevo nombre  de 
-- "Sección". 

ALTER TABLE ventas.vendedores
CHANGE 
    departamento Seccion VARCHAR(50) NOT NULL;


-- 23.  Mostrar los vendedores que no hayan vendido nada. 

SELECT codven, nombre, seccion
FROM ventas.vendedores
WHERE codven NOT IN (SELECT codven FROM ventas.pedidos);

-- 24.  Muestra los productos vendidos en enero de cualquier año.

SELECT * 
FROM ventas.pedidos
WHERE fechaVenta LIKE "____-01-__";


show columns from ventas.pedidos;
describe ventas.pedidos66