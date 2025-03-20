<?php
# Ejercicio 1

// • Crea un array multidimensional indexado de 2 dimensiones.
// • En cada array interior introduce los siguientes números:
//      o 100, 200, 300.
//      o 400, 500, 600.
//      o 700, 800, 900.
//      o 1000, 1100, 1200.
//      o 1000, 1100, 1200.
// • Muestra los números 300, 500, 700, 1200 y 1300 de forma individual.
// • Muestra todos los números incluidos en el array usando bucles for y foreach.

$numbers = [
    [100, 200, 300],
    [400, 500, 600],
    [700, 800, 900],
    [1000, 1100, 1200],
    [1000, 1100, 1200]
];

// -----------------

# Ejercicio 2

// • Crear el array multidimensional asociativo “clientes” con los siguientes datos:
//      o Claves: Codcuenta, Nombre, Apellidos y Saldo.
//      o 3 clientes con sus respectivas claves.
// • Muestra el saldo del primer cliente.
// • Muestra los apellidos del segundo cliente
// • Muestra el código de cuenta del tercer cliente.
// • Muestra todos los datos y sus tipos de datos incluidos.
// • Muestra todo el contenido del array usando un bucle foreach

$clients = array(
    "client1" => array(
        "acc_code" => 901,
        "name" => "Andrés",
        "last_name" => "Moros",
        "saldo" => 48
    ),
    "client2" => array(
        "acc_code" => 123,
        "name" => "Jorge",
        "last_name" => "Rodriguez",
        "saldo" => 4211
    ),
    "client3" => array(
        "acc_code" => 453,
        "name" => "Jesus",
        "last_name" => "Araujo",
        "saldo" => 812
    ),
);

// -----------------

# Ejercicio 3

// Crea un array multidimensional indexado de 3 dimensiones y guarda, en los
// Arrays más internos, los siguientes datos:
//      o PHP, Python, Perl.
//      o HTML, CSS, JavaScript.
//      o Java, C++, Visual Basic.
// • Muestra todos los programas incluidos en el array usando bucles for y foreach

// $languages = [
//     "Backend" => ['PHP', 'Python', 'Perl'],
//     "Frontend" => ['HTML', 'CSS', 'JavaScript'],
//     "Desktop Apps" => ['Java', 'C++', 'Visual Basic'],
// ];

$languages = [
    array(
        "Backend" => ['PHP', 'Python', 'Perl']
    ),
    array(
        "Frontend" => ['HTML', 'CSS', 'JavaScript']
    ),
    array(
        "Desktop Apps" => ['Java', 'C++', 'Visual Basic']
    ),
];