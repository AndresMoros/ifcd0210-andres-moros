USE Farmacia;

CREATE TABLE if not exists Medicamentos (
    idMedicamento INT UNSIGNED,
    nombre VARCHAR(20) NULL,
    idLaboratorio VARCHAR(5) NOT NULL,
    precio  float NULL,
    cantidad INT UNSIGNED NULL
);

ALTER TABLE Medicamentos
ADD PRIMARY KEY (idMedicamento);

ALTER TABLE Medicamentos
MODIFY idMedicamento INT UNSIGNED AUTO_INCREMENT;

ALTER TABLE Medicamentos
ADD FOREIGN KEY (idLaboratorio) REFERENCES Laboratorios (idLaboratorio) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE Medicamentos
ADD CONSTRAINT CHECK(precio > 0.0);

ALTER TABLE farmacia.Medicamentos
ALTER nombre SET DEFAULT "Sin nombre";

##############################################

CREATE TABLE if not exists Laboratorios (
    idLaboratorio VARCHAR(5) NOT NULL,
    nombreLaboratorio VARCHAR(30) NOT NULL
);

ALTER TABLE Laboratorios
ADD PRIMARY KEY (idLaboratorio); 

