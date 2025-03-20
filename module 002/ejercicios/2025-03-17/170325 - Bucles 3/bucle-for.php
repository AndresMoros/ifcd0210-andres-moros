<?php
 # Ejercicio 1
// • Mostrar por pantalla los números del 1 al 10.
// • Modificar el ejercicio para que en la vuelta número 4 se salga automáticamente
// del bucle sin continuar las instrucciones hasta la vuelta 10.
// • Modificar el ejercicio para que no se ejecute la vuelta número 4, pero si las
// siguientes hasta la 10.

 $output_1 = "";
//  for ($i = 1; $i <= 10; $i++) {
//     $output_1 .= $i . "<br>";
//  }
// Este bucle imprime todos los números del 1 al 10

//  for ($i = 1; $i <= 10; $i++) {
//     if ($i > 4) {
//         break;
//     }
//     $output_1 .= $i . "<br>";
//  }
// Este bucle imprime los números del 1 al 4

 for ($i = 1; $i <= 10; $i++) {
    if ($i == 4) {
        continue;
    }
    $output_1 .= $i . " ";
 }
// Este bucle se salta el número 4 y sigue imprimiendo los números del 5 al 10

# Ejercicio 2
// Mostrar por pantalla los 200 primero números de 10 en 10.

$output_2 = "";

for($i = 0; $i <= 200; $i+=10) {
    $output_2 .= $i . " ";
}

# Ejercicio 3

// • Mostrar la tabla de multiplicar del 6 (del 6 al 60).
// • En la salida que aparezca en primer lugar la frase Tabla de multiplicar del 6, y a continuación y en líneas distintas, los valores del 6 al 60 en una frase como ésta: 6 por 1 es 6, usando los valores que se vayan generando en el bucle.
// • Realizar el ejercicio de al menos, 2 formas distintas.

$output_3 = "";

for ($i = 1; $i <= 10; $i++) {
    $output_3 .= "6 por $i es " . 6 * $i . "<br>";
}

# Ejercicio 3 - Forma 2
// $acc = 0;
// for ($i = 6; $i <= 60; $i+=6) {
//     $acc++;
//     $output_3 .= "6 x $acc es " . $i . "<br>";
// }

# Ejercicio 4

// Muestra por pantalla lo números pares comprendidos entre 0 y 50 usando la instrucción continue.

$output_4 = "";

for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    $output_4 .= $i . " ";
}

# Ejercicio 5

// • Crea un script con PHP que muestre en pantalla los números del 1 al 60.
// • Además, al lado de los números que sean múltiplos de 3 y de 8 debe parecer un
// mensaje alusivo.
// • También, cada 5 números debe aparecer una línea horizontal.
// • Ejemplo:

$output_5 = "";
for($i = 0; $i < 60; $i++) {
    $output_5 .= $i;
    if($i % 3 == 0) {
        $output_5 .= " $i es múltiplo de 3";
    }
    if($i % 8 == 0) {
        $output_5 .= " $i es múltiplo de 8";
    }
    if($i % 5 == 0) {
        $output_5 .= "<hr>";
    }
    $output_5 .= "<br>";
}