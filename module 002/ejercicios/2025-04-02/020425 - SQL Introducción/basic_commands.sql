create DATABASE bd_mundo;
-- Crea una base de datos con el nombre específicado

use bd_mundo;
-- 'use' se usa para seleccionar la base de datos con la cual se desea trabajar

show tables;
-- Muestra las tablas de la base de datos seleccionada

select * from country where Nombre = "Colombia";
-- Seleccionar (select) todos (*) los campos de la tabla 'country', que cuenten con el valor 'Colombia' en la clave 'Nombre'

select * from city where CodPais = "VEN";

show DATABASES;
-- Muestra las base de datos activas en el servidor

drop DATABASE --DATABASE_NAME
-- Borra la base de datos que le sea indicada

