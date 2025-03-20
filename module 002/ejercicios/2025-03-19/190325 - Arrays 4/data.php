<?php
# Ejercicio

# Parte 1
// • Crea los siguientes Arrays de distintas formas:
//    o El array asociativo edades y carga en el las edades de 6 personas.
//    o El array indexado temperaturas y carga en él 12 números, que se corresponderán con las temperaturas medias mensuales del año pasado.
//    o El array indexado estaciones para cargar los valores: primavera, verano otoño e invierno

// Array con las edades de 6 personas
$edades = [
    "Jorge" => 52,
    "Andrés" => 21,
    "Daniela" => 30,
    "Adrián" => 12,
    "Anais" => 23,
    "Gabriel" => 20,
];

// Array con las temperaturas del año pasado
$temperaturas = new ArrayObject(
    [
    6.7,  // Enero
    8.1,  // Febrero
    12, // Marzo
    15, // Abril
    20.1, // Mayo
    25.6, // Junio
    30.7, // Julio
    29.7, // Agosto
    24.2, // Septiembre
    18.7, // Octubre
    11.1, // Noviembre
    7.98   // Diciembre
]);

$estaciones = [
    "primavera",
    "verano",
    "otoño",
    "invierno"
];

#Parte 2
# Utilizar las siguientes funciones (Tras usarlas mostrar cómo afectan a los arrays)

// Copia los arrays para operar después con sus copias. Realiza las copias de distintas formas. A partir de aquí usa los arrays copiados y no los originales.

$age_cp = $edades;
$temp_cp = $temperaturas->getArrayCopy();
$season_cp = array_slice($estaciones, 0);


function arr_compare($arr1, $arr2) {
    echo print_r($arr1, true) . "<br>";
    echo print_r($arr2, true) . "<br>";
    echo "<br>";
    print(array_diff($arr1, $arr2) == [] ? "Son iguales" : "Son diferentes");
}

// Cuántos elementos tienen los arrays? Muestra su cantidad por pantalla

$arrs_count = [
    "age_cp" => count($age_cp),
    "temp_cp" => count($temp_cp),
    "season_cp" => count($estaciones)
];

// Muestra las claves del array edades en distintas líneas.

function show_keys($arr) {
    foreach($arr as $key => $value) {
        print($key . "<br>");
    }
    // return print_r(array_keys($arr), true);
}

// Muestra los valores del array estaciones en una misma línea separados de la siguiente forma: espacio barra inclinada espacio.

function implode_arr($arr) {
    return print(join(" / ", $arr));
}

// ¿Quién tiene 30 años?
// ¿Quién tiene más edad?
// ¿Qué posición ocupa la temperatura 29.7?
// ¿Cuál es la temperatura menor?
// ¿Cuál es la temperatura mayor?
function find_key($arr, $val) {
    return array_search($val, $arr);
}

// Carga las estaciones en variables y muéstralas por pantalla.

list($spring, $summer, $autumn, $winter) = $season_cp;

// Carga todas las temperaturas en variables y después calcula la media de temperaturas anual. Muestra dicha media por pantalla redondeada y con 2 decimales.

// $average_temp = round(array_sum($temp_cp) / count($temp_cp), 2);
$average_temp = array_sum($temp_cp) / count($temp_cp);

// Inserta dos nuevos valores al final de los ya existentes en el arrayt $temperaturas

// array_push($temp_cp, 31.1, 5.7);

// array_pop($temp_cp);
// array_pop($temp_cp);

// Inserta en el array estaciones y delante de los valores existentes, las 4 estaciones en inglés

// array_splice($season_cp, 4, 0, ["spring", "summer", "winter", "autumn"]);

// Borra las cuatro estaciones incluidas y muestas el array para confirmarlo

// array_splice($season_cp, 0);

// Invierte el contenido del array temperaturas

// array_reverse($temp_cp);

// Invierte contenido del array estaciones preservando los indices

// array_reverse($season_cp, true);

// Ordena el contenido del array temperaturas de forma numérica descendente

// arsort($temp_cp);

// Ordena el contenido del array edades de forma alfabética ascendente

// ksort($age_cp);

// Ordena el contenido del array estaciones de forma ascendente

// asort($season_cp);