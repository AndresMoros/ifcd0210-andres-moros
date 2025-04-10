-- CREATE TABLE if not exists Medicamentos (
--     idMedicamento INT UNSIGNED,
--     nombre VARCHAR(20) NULL,
--     idLaboratorio VARCHAR(5) NOT NULL,
--     precio  float NULL,
--     cantidad INT UNSIGNED NULL
-- );

-- CREATE TABLE if not exists Laboratorios (
--     idLaboratorio VARCHAR(5) NOT NULL,
--     nombreLaboratorio VARCHAR(30) NOT NULL
-- );

INSERT INTO farmacia.laboratorios VALUES (
    "X1234",
    "ALPIDIO's PILLS"
), (
    "01931",
    "LIVE HEALTH"
);

INSERT INTO farmacia.medicamentos (nombre, idLaboratorio, precio, cantidad) VALUES (
    "Amoxixilina",
    "X1234",
    4.99,
    91
);

INSERT INTO farmacia.medicamentos (idLaboratorio, precio, cantidad) VALUES (
    "01931",
    ,
    23
);