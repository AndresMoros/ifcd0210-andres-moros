<?php
# Ejercicio 1

// • Muestra por pantalla los números del 1 al 10 en líneas diferentes.
// • En la primera línea que aparezca la frase: “Los 10 primeros números”

$output_1 = "";
$acc = 1;
while ($acc <= 10) {
    $output_1 .= $acc . "<br>";
    $acc++;
}

# Ejercicio 2

// • Muestra por pantalla los números del 1 al 20 junto con el número de iteración o vuelta en la que aparece cada uno de ellos.
// • Muestra ambos números incluidos en un mensaje similar a este: En la iteración nº, el valor de la variable n es nº 

$output_2 = "";

for ($i = 0; $i <= 20; $i++) {
    $output_2 .= "En la iteración nº $i, el valor de la variable n es " . $i + 1 . "<br>";
}

# Ejercicio 3

$output_3 = "";

// Modifica el ejercicio 2 para que las iteraciones se produzcan de 5 en 5, empezando por el valor 0

for($i = 0; $i <= 20; $i += 5) {
    $output_3 .= "En la iteración nº $i, el valor de la variable n es " . $i + 1 . "<br>";
}

# Ejercicio 4

// Muestra por pantalla lo números impares comprendidos entre 0 y 50

$output_4 = "";

for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 !== 0) {
        $output_4 .= $i . " ";
    }
}
