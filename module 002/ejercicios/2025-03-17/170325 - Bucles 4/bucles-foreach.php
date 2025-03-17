<?php
# Ejercicio 1
// - Crea un Array para 4 elementos asignando los valores de cada indice
// - Carga 4 bebidas en el Array.
// - Muestra por pantalla dos posiciones cualesquiera del array.

$drinks = array();

$drinks[] = "Coca Cola";
$drinks[] = "Fanta";
$drinks[] = "Sprite";
$drinks[] = "Pepsi";

# Ejercicio 2
// • Crea un Array vacío con 5 posiciones de longitud asignando sus valores sin usar índices.
// • Carga en él 5 números.
// • Muestra por pantalla los datos del Array usando un bucle for

$numbers = array();

for($i = 0; $i < 5; $i++) {
    $numbers[$i] = random_int(1, 100);
}

# Ejercicio 3
// • Crea un Array usando la función array() y carga en él 6 videojuegos.
// • Muestra los elementos primero y último almacenados en el Array.
// • Sustituye el videojuego de la posición 3 por otro diferente.
// • Elimina el videojuego de la posición 4.
// • Muestra todo el contenido del array usando un bucle for, indicando en qué  posición está cada videojuego almacenado.
// • Muestra todo el contenido del array usando un bucle foreach, indicando en qué
// posición está cada videojuego almacenado.
// 

$games = array("GTA V", "Dark Souls", "Call of Duty", "Fortnite", "Minecraft", "Fallout 3");

array_splice($games, 3, 1, "The Witcher 3");

# Ejercicio 4

// • Crea un Array asignando valores usando los corchetes [] y a la vez, almacena en el 5 valores distintos, tanto textos, como números.
// • Muestra el contenido completo del Array usando un bucle foreach

$random = ["Hola", 1.123, "Paralelepipedo", random_int(1, 1000), random_bytes(10)];

?>