USE visitantes;
CREATE TABLE if not exists Visitantes(
    dni VARCHAR(10) PRIMARY KEY,
    nombre VARCHAR(30),
    edad TINYINT UNSIGNED,
    sexo CHAR(1) DEFAULT "F",
    domicilio VARCHAR(30),
    ciudad VARCHAR(20) DEFAULT "Córdoba",
    telefono VARCHAR(9) NOT NULL,
    email VARCHAR(30) NOT NULL DEFAULT "No tiene",
    montoCompra DECIMAL(6,2) COMMENT "Monto total de la compra (sin IVA)"
);
