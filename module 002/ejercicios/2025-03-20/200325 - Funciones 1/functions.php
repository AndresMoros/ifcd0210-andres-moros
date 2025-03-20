<?php

# Ejercicio 1
// Crea una función para restar 2 números sin parámetros y sin retorno de datos

$minuendo = 10;
$sustraendo = 3;
$resta = null;

function res () {
    global $minuendo;
    global $sustraendo; 
    global $resta;
    // Al no tener parámetros es necesario especificar que son variables globales

    $resta = $minuendo - $sustraendo;
}


# Ejercicio 2
// Crea una función para multiplicar 2 números sin parámetros y con retorno de datos

$mult = fn () => 3 * 3;
// La función flecha tiene un return implícito

# Ejercicio 3
// Crea una función para dividir con parámetros y sin retorno de datos

$divisble = 4;
$divisor = 2;
$div_res = null;

function div (float $num, float $oper, &$res) {
    $res = $num / $oper;
    // Usando el ampersand en el parámetro junto al nombre del parámetro, se modificará el valor de la variable fuera de la función
} 

# Ejercicio 4
// Crea una función para sumar 2 números con parámetros y con retorno de datos

$sum = fn ($num1, $num2) => $num1 + $num2;


?>