<?php
// Ejercicio 1 (OPCIONAl)

// • Crear la variable texto e introducir en ella la frase “Volverán las oscuras golondrinas”.
// • Mostrar por pantalla lo siguiente:
//     o La frase introducida.
//     o El número de caracteres que tiene la frase.
//     o ¿Cuántas palabras hay en la frase?
//     o El primer carácter de la cadena.
//     o El último carácter de la cadena.
//     o Los primeros 5 caracteres.
//     o La frase convertida a mayúsculas.
//     o La frase convertida a minúsculas.
//     o Todas las palabras con su primera letra en mayúsculas.
//     o La frase concatenada a un punto(.).
//     o Reemplaza la palabra golondrinas por gaviotas y muestra la nueva frase.
//     o ¿En qué posición comienza la palabra oscuras?

$str = 'Volverán las oscuras golondrinas';

function show_str_info($str) {
    $output = "$str<br>";
    $output .= "Carácteres de la cadena " . mb_strlen($str) . "<br>";


    return $output;
} 

# Ejercicio 2

// • Carga por separado en un array cada palabra de la frase del ejercicio anterior.
// • Muestra en párrafos cada una de ellas usando un bucle.


# Ejercicio 3

// • Crea la variable frase e introduce en ella una frase.
// • Crea la variable palabra e introduce en ella una palabra.
// • Mostrar por pantalla:
//     o La frase
//     o La palabra.
//     o Si la palabra está incluida en la frase, mostrar ésta y su posición inicial en la cadena, sí no, escribir un mensaje que indique que la palabra no está incluida en la frase

?>