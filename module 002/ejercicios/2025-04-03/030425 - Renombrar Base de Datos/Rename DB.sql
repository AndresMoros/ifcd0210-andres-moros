create database antigua;
use antigua;

create table tabla1(
    uno varchar(10),
    dos varchar(10),
    tres varchar(10)
)
create table tabla2(
    cuatro varchar(10),
    cinco varchar(10),
    seis varchar(10)
)

create database nueva;

use nueva;
rename table antigua.tabla1 to nueva.tabla1; /* Si está en uso una base de datos determinada, no es necesario calificar el nombre de las tablas.*/
rename table antigua.tabla2 to nueva.tabla2;
drop database antigua;