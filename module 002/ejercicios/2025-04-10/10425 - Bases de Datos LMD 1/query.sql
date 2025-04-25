create database socios;

create table socios (
    No_Orden INT AUTO_INCREMENT PRIMARY KEY,
    DNI VARCHAR(10) NULL,
    Nombre VARCHAR(40) NULL,
    Domicilio VARCHAR(50) NULL,
    Cuota DECIMAL(8,2) NULL
);

INSERT INTO socios.socios (DNI, Nombre, Domicilio, Cuota) VALUES 
("30000000T", "Fabián Fuentes", "C/ Avilés 7", 30.0),
("31111111A", "Antonio García", "C/ Mieres 5", 50.0),
("32222222B", "Héctor Huerta", "C/Oviedo 4", 30.0),
("33333333N", "Inés Irala", "C/ Bulnes 3", 45.0);

-- El socio Antonio García ha cambiado de domicilio. Ahora vive en la calle Gijón 5
UPDATE socios.socios
SET Domicilio = "C/ Gijón 5"
WHERE Nombre = "Antonio García" AND DNI = "31111111A";

-- Actualizar los registros cuya cuota sea de 30.0 euros y pasarla a 35,0 euros
UPDATE socios.socios
SET Cuota = 35.0
WHERE Cuota = 30.0;

-- Borrar al socio cuyo DNI es el 33333333N.
DELETE FROM socios.socios WHERE DNI = "33333333N";

-- Borrar todos los registros.
TRUNCATE socios.socios;

-- Pasa todas las cuotas a 0
UPDATE socios.socios
SET Cuota = 0.0
WHERE Cuota > 0.0;

select * from socios.socios;
use socios;

show variables like "sql_mode";