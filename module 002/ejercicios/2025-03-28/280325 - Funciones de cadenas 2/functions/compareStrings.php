<?php

function compareStrings(string $str1, string $str2, bool $caseSentive = false) {

    if(!$str1 || !$str2) return "Debes llenar las casillas";
    // Por defecto, no toma en cuenta las mayúsculas y minúsculas
    if(!$caseSentive) {
        $str1 = mb_strtolower($str1);
        $str2 = mb_strtolower($str2);
    }

    // Se eliminan los espacios en blanco para tomar en cuenta solo el contenido
    $str1 = trim($str1);
    $str2 = trim($str2);

    // Se cuentan todos los carácteres
    if(!count_chars($str1, 1) == count_chars($str2, 1)) return "Son diferentes";

    // Dependiendo de la operación, se entraga un resultado
    if($str1 == $str2) return "Ambas cadenas son iguales";
    if($str1 > $str2) return "La primera cadena es mayor";
    if($str1 < $str2) return "La segunda cadena es mayor";
}

?>