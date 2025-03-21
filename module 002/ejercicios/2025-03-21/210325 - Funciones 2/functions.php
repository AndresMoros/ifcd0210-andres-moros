<?php
# Ejercicio 1.

// • Crea una función que devuelva el tipo de medalla ganada en una competición (Oro, Plata, Bronce).
// • La función recibirá como parámetro un número que indica la posición en la que se ha quedado en la competición y devolverá el premio obtenido que se mostrará por pantalla.
// • Si no se está entre los 3 primeros puestos debe aparecer un mensaje diciendo que no hay medalla para el que ha quedado en la posición que se introduzca

function get_medal(int $position): string 
{
    return match(true) {
        $position == 1 => "¡Has ganado una medalla de Oro! 👏",
        $position == 2 => "¡Has ganado una medalla de Plata! 👏",
        $position == 3 => "¡Has ganado una medalla de Bronce! 👏",
        default => "Lo sentimos, no haz calificado 😢"
    };
}

$position = rand(1, 5);

# Ejercicio 2

// Crea una función que escriba 10 veces en la página web un título de nivel 3 con el texto “PHP me gusta mucho 😊😊”. La función no recibe ni devuelve valores

function print_yap () {
    for ($i=0; $i < 10; $i++) { 
        echo "<h3>PHP me gusta mucho 😊😊</h3>";
    }
}

# Ejercicio 3

// Carga en una variable el precio de un producto.
// • Crear una función que reciba como parámetro el precio y, calcule y devuelva realizados, los siguientes cálculos:
//     o Cantidad correspondiente al IVA (éste será del 15%).
//     o PVP (Precio final, es decir, el precio neto con el IVA incluido).
// • Mostrar por pantalla el precio del producto y los 2 cálculos dentro de una tabla, cuya primera fila tendrá los textos Precio, 15% IVA y PVP, y la segunda, el precio y los resultados calculados.
// • La tabla puede tener cualquier formato.
// • Poner un título a la tabla con <caption>.

$price = random_int(1, 100);

function calc_total (float $price): array 
{
    $price_iva = $price * .15;
    $pvp = $price + $price_iva;
    return ["$price_iva €", "$pvp €"];
}

?>