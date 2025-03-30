<?php

function checkPalindrome(string $string, bool $caseSensitive = false): string
{
    //Quitar los espacios
    $string = trim($string);

    if (empty($string)) {
        return 'Introduce una frase o palabra';
    }

    // Por defecto, no es sensible a mayúsculas y minúsculas
    if (!$caseSensitive) {
        $string = mb_strtolower($string);
    }

    $vocals = [
        ["á", "é", "í", "ó", "ú", "ü"], // Caracteres con tilde o diéresis
        ["a", "e", "i", "o", "u", "u"]  // Caracteres sin tilde
    ];

    // Remplaza los carácteres con tilde por carácteres sin tilde
    $string = str_replace($vocals[0], $vocals[1], $string);

    // Verifica si e; texto dado la vuelta es igual a sí mismo y arroja un resultado
    return $string !== strrev($string) ? "$string - no es palíndromo" : "$string - es un palindromo.";
}
?>