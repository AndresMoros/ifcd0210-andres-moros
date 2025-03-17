<?php
// EJERCICIO 1
$num1 = 12;
$num2 = 31;

$res1;

if($num1 > $num2) {
    $res1 = "El $num1 es mayor que $num2";
} else if ($num1 == $num2) {
    $res1 = "$num1 y $num2 son iguales";
} else {
    $res1 = "El $num2 es mayor que $num1";
}

// EJERCICIO 2

$num3 = 0;
$res2;
if(gettype($num3) == "integer") {
    if($num3 > 0) {
        $res2 = "El número es positivo";
    } else if ($num3 < 0) {
        $res2 = "El número es negativo";
    } else {
        $res2 = "El número es igual a 0";
    }
};

// EJERCICIO 3

$pill = "roja";
$res3 = "";

if($pill == "azul") {
   $res3 = file_get_contents("data/azul.txt");
} else if($pill == "roja"){
    $res3 = file_get_contents("data/roja.txt");
} else {
    $res3 = "Ni roja ni azul";
}

// if($pill == "azul") {
//     $res3 = include("azul.txt");
//  } else if($pill == "roja"){
//      $res3 = include("roja.txt");
//  } else {
//      $res3 = "Ni roja ni azul";
//  }

// EJERCICIO 4

$math = 8.5;
$lang = 4.3;
$sport = 6.9;

$note = round(($math + $lang + $sport) / 3, 2);

$res4;

if($note >= 5) {
    $res4 = "Aprobado";
} else {
    $res4 = "Suspenso";
}

// EJERCICIO 5

$var1 = 33;
$var2 = 33;
$var3 = 33;

$res5;

if($var1 == $var2 && $var2 == $var3) {
    $res5 = "Todos los números son iguales<br>"
    . "La operación da: " . ($var1 + $var2) * $var3;
} else {
    $res5 = "Los números no son iguales";
}
?>