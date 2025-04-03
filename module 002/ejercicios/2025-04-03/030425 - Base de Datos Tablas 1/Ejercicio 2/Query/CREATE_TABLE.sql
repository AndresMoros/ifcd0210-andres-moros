USE socios;
CREATE TABLE socios(
    cod_socio int(5) UNSIGNED zerofill primary key,
    DNI varchar(10) not null unique,
    nombre varchar(50) not null,
    email varchar(30) not null default 'Sin correo electrónico',
    fecha_alta DATE not null
);