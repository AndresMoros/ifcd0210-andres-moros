# Crear la tabla empleados con los datos solicitados

crate table empleados (
    id_empleado varchar(6) PRIMARY KEY,
    DNI varchar(10) NOT NULL UNIQUE,
    fecha_nacimiento date NOT NULL,
    antiguedad tinyint NOT NULL CHECK(antiguedad <= (YEAR(CURDATE()) - 2010)),
    hijos tinyint NOT NULL CHECK(hijos >= 0),
    departamento varchar(20) NOT NULL CHECK(departamento in ("Contabilidad", "Sistemas", "Administración", "Ventas")),
    sueldo decimal (8,2) NOT NULL CHECK(departamento BETWEEN 1000.00 AND 2000.00)
);

CREATE TABLE empleados (
    id_empleado VARCHAR(6) PRIMARY KEY,
    DNI VARCHAR(10) NOT NULL UNIQUE,
    fecha_nacimiento DATE NOT NULL,
    antiguedad TINYINT NOT NULL CHECK (antiguedad <= (2025 - 2010)),
    hijos TINYINT NOT NULL CHECK (hijos >= 0),
    departamento VARCHAR(20) NOT NULL CHECK (departamento IN ('Contabilidad', 'Sistemas', 'Administración', 'Ventas')),
    sueldo DECIMAL(8,2) NOT NULL CHECK (sueldo BETWEEN 1000.00 AND 2000.00)
);

use empleados;