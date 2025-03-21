<?php

# Ejercicio 1
// Crea una función para restar 2 números sin parámetros y sin retorno de datos

$minuendo = 10;
$sustraendo = 3;

function res () {
    global $minuendo;
    global $sustraendo; 
    // Al no tener parámetros es necesario especificar que son variables globales

    echo $minuendo - $sustraendo;
}


# Ejercicio 2
// Crea una función para multiplicar 2 números sin parámetros y con retorno de datos

$mult = fn () => 3 * 3;
// La función flecha tiene un return implícito

# Ejercicio 3
// Crea una función para dividir con parámetros y sin retorno de datos

$divisble = 4;
$divisor = 2;

function div (float $num, float $oper) {
    echo $num / $oper;
} 

# Ejercicio 4
// Crea una función para sumar 2 números con parámetros y con retorno de datos

$sum = fn ($num1, $num2) => $num1 + $num2;
?>