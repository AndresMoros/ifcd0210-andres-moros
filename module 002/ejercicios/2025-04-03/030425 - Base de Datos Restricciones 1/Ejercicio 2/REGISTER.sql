# Registrar y usar los valores por defecto, mostrar la tabla luego de las operaciones

--     dni VARCHAR(10) PRIMARY KEY,
--     nombre VARCHAR(30),
--     edad TINYINT UNSIGNED,
--     sexo CHAR(1) DEFAULT "F",
--     domicilio VARCHAR(30),
--     ciudad VARCHAR(20) DEFAULT "Córdoba",
--     telefono VARCHAR(9) NOT NULL,
--     email VARCHAR(30) NOT NULL DEFAULT "No tiene",
--     montoCompra DECIMAL(6,2) COMMENT "Monto total de la compra (sin IVA)"

INSERT INTO visitantes VALUES(
    "Z32840761Y",
    "Andrés Moros",
    21,
    "M",
    "C. Londres 4, 123456",
    DEFAULT,
    "412781231",
    DEFAULT,
    981.23
);

INSERT INTO visitantes VALUES(
    "Z86141261Y",
    "Anais Rojas",
    23,
    DEFAULT,
    "C. Manaos, 9712",
    "Madrid",
    "903182021",
    "mariana@email.com",
    451.12
);

INSERT INTO visitantes VALUES(
    "Z70173261Y",
    "Sergio Jose",
    29,
    "Gay",
    "C. Fuenlabrada, 9712",
    "Madrid",
    "903182021",
    "mariana@email.com",
    91231.12
);

select * from visitantes;