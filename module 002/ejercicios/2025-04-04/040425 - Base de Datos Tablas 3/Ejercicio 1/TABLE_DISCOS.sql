CREATE TABLE if not exists Discos (
    IdDisco INT(5) PRIMARY KEY,
    Autor VARCHAR(55) NOT NULL,
    Titulo VARCHAR (40) NULL,
    Estilo VARCHAR(130) NOT NULL,
    NumeroCanciones INT(2) NOT NULL,
    FechaSalida DATETIME
);