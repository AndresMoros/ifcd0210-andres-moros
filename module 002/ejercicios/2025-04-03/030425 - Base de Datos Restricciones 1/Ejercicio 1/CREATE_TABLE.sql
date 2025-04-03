# Crear una tabla llamada piezas con datos para le registro
use ferreteria;

CREATE TABLE if not exists Piezas(
    codigo int not null primary key,
    NombrePieza VARCHAR(40) not null,
    ParaComponente varchar(40) not null,
    CantidadStock int not null check(CantidadStock <= 200)
);