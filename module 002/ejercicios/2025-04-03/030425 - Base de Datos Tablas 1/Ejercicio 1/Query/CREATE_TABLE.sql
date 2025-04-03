CREATE TABLE coche (
    matricula VARCHAR(10) NOT NULL PRIMARY KEY COMMENT "Matricula del coche",
    marca VARCHAR(20) NOT NULL DEFAULT '' COMMENT 'Marca del coche',
    modelo VARCHAR(25) NOT NULL DEFAULT '' COMMENT 'Modelo del coche',
    color VARCHAR(25) NOT NULL DEFAULT '' COMMENT 'Color del coche',
    precio DECIMAL(8,2) NOT NULL COMMENT 'Precio del coche (antes de impuestos)');
