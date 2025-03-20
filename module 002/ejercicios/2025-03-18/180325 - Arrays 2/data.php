<?php
# Ejercicio 1 

// • Crear 3 Arrays asociativos con los meses y los días que tiene cada uno, es decir, usar el
// siguiente formato:
// o mes =>días que tiene.
// • Formas de creación:
// o Usando función array().
// o Asigno valores entre corchetes.
// o Asignado valores individuales clave=>valor.
// • Mostrar por pantalla los datos de cada array usando un bucle foreach.

$months_1 = array(
    "Enero" => 31,
    "Febrero" => 28,
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
);

$months_2 = [
    "Enero" => 31,
    "Febrero" => 28,
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
];

$months_3 = [];
$months_3["Enero"] = 31;
$months_3["Febrero"] = 28;
$months_3["Marzo"] = 31;
$months_3["Abril"] = 30;
$months_3["Mayo"] = 31;
$months_3["Junio"] = 30;
$months_3["Julio"] = 31;
$months_3["Agosto"] = 31;
$months_3["Septiembre"] = 30;
$months_3["Octubre"] = 31;
$months_3["Noviembre"] = 30;
$months_3["Diciembre"] = 31;

// --------------

# Ejercicio 2

// • Crea un array asociativo usando la función array() para guardar en él los datos de un cliente.
// • Datos a guardar:
//      o Cod_cliente.
//      o Numero_cuenta.
//      o Nombre.
//      o Apellido1.
//      o Apellido2.
//      o Dirección.
//      o Localidad.
//      o Saldo.
//      o Fecha_apertura_cuenta.
// • Muestra el contenido y los índices de array usando un bucle foreach.

$client = array(
    "cod_cliente" => 1,
    "numero_cuenta" => 1234567890,
    "nombre" => "Juan",
    "apellido1" => "Pérez",
    "apellido2" => "García",
    "dirección" => "Calle Falsa 123",
    "localidad" => "Springfield",
    "saldo" => 1000,
    "fecha_apertura_cuenta" => "2025-03-18"
);

function show_data($arr) {
    foreach($arr as $key => $value) {
        echo "<li>$key: $value</li>";
    }
}

// --------------

# Ejercicio 3

// • Crear un Array asociativo eligiendo la forma que se quiera.
// • Deberá almacenar las claves de acceso de 5 usuarios de un sistema según el siguiente formato:
//      o Nombre usuario =>clave o contraseña.
// • Mostrar por pantalla los datos del primer y del último usuario

// $permited_chars = "0123456789abcdefghijklmnopqrstuvwxyz";

// $users = [
//     "kuker_drew" => substr(str_shuffle($permited_chars), 1, 8),
//     "anais_rojas" => substr(str_shuffle($permited_chars), 1, 8),
//     "chespirito_123" => substr(str_shuffle($permited_chars), 1, 8),
//     "imagenes_piolin" => substr(str_shuffle($permited_chars), 1, 8),
//     "brain_rot" => substr(str_shuffle($permited_chars), 1, 8),
// ]

// CONSULTA USADA PARA ESTA SOLUCIÓN: 
// - https://code.tutsplus.com/es/generate-random-alphanumeric-strings-in-php--cms-32132t
// - https://www.php.net/manual/en/function.str-shuffle.php

$users = [
    "kuker_drew" => "iekhrof7",
    "anais_rojas" => "hwgp5zex",
    "chespirito_123" => "27myz3qj",
    "imagenes_piolin" => "6j1clyf8",
    "brain_rot" => "oygunc0h",
]
?>