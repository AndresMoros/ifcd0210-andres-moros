<?php

// data.php

// o Dentro de este archivo se incluirán los siguientes arrays:
// ▪ Contactos:
//     • Que contendrá los nombres y teléfonos de 6 amigos/as.
//     • Dicho array será de tipo asociativo con el nombre como clave y el teléfono del contacto como valor.

$contacts = [
    'Andrés' => 640980856,
    'Nicole' => 301098019,
    'Anais' => 671928998,
    'Sergio' => 891823091,
    'Daniel' => 412897192,
    'Adrian' => 607123987,
];

// ▪ Vendedores:
//     • Con los nombres y las cantidades obtenidas por las ventas realizadas por 10 vendedores/as.
//     • Dicho array también será de tipo asociativo con el nombre del vendedor como clave y su importe de ventas como valor.
//     • Los importes de las ventas serán cantidades generadas al azar comprendidas entre 10.000 y 50.000 euros. (función rand())

$sellers = [
    'Steven' => rand(10000, 50000),
    'Paula' => rand(10000, 50000),
    'Carmen' => rand(10000, 50000),
    'Ezechiel' => rand(10000, 50000),
    'Alejandro' => rand(10000, 50000),
    'Jean' => rand(10000, 50000),
    'Estela' => rand(10000, 50000),
    'Maria' => rand(10000, 50000),
    'Verónica' => rand(10000, 50000),
    'George' => rand(10000, 50000),
];

# Ejercicio 1

// ▪ Crea una división para el ejercicio con el nombre 'container'.
// ▪ Dicha división contenedora incluirá 2 tablas cuyo contenido serán los datos almacenados en los arrays contactos y vendedores del archivo data.php.
// ▪ A su vez, incluir cada tabla una división independiente para su posterior formato.
// ▪ Las características de ambas tablas serán las siguientes:
//     • Se generarán con un bucle foreach.
//     • Tendrán 2 columnas y tantas filas como pares clave/valor haya en sus respectivos arrays.

function tbody_gen(array $arr) : string
{
    ksort($arr);
    $output = "";
    foreach ($arr as $key => $value) {
        $output .= 
        "
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>
        ";
    }
    return $output;
}

function tbody_gen_format(array $arr): string
{
    arsort($arr);
    $output = "";
    foreach ($arr as $key => $value) {
        $output .= 
        "<tr><td>" . 
        $key . 
        "</td><td>" .
        to_money($value) . 
        "</td></tr>";
    }
    return $output;
}

// function to_money(float $num) {
//     return number_format($num, 2, ",", ".") . " €";
// }



function to_money(float $num) {
    $formatter = new NumberFormatter('es_ES', NumberFormatter::CURRENCY);
    $formatter->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '€');
    return $formatter->format($num);
}
