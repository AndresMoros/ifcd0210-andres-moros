<?php
# Ejercicio 1
$counter = 0;
const LIMIT = 500;
$output_1 = "";

while ($counter <= LIMIT) {
    $output_1 .= $counter + 12 . " ";
    $counter += 12;
}

# Ejercicio 2
$reverse_counter = 10;
const ZERO = 0;
$output_2 = "";

while ($reverse_counter >= ZERO) {
    $output_2 .= "Contando... $reverse_counter<br>";
    $reverse_counter--;
}

# Ejercicio 3
$pairNum = 0;
const TWENTY = 20;
$output_3 = "";

while ($pairNum < TWENTY) {
    $output_3 .= $pairNum + 2 . "<br>";
    $pairNum += 2;
}

#Ejercicio 4

$cicle = 1;
const N30 = 30;
$acc = 0;
$text = "";
while ($cicle <= N30) {
    $acc += $cicle;
    $text .= "El número $cicle es $acc" . "<br>";
    $cicle++;
}
?>