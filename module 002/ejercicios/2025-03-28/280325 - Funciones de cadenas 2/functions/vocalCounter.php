<?php

// function countVolwes(string $str) {

//     // Verfica si la cadena entraga está vacía
//     if(empty($str)):
//         return "Por favor, escribe algo";
//     endif;

//     // Devuelve el número de coincidencias en la cadena entregada
//     preg_match_all('/[a,e,i,o,u,á,é,í,ó,ú]/', mb_strtolower($str));
// }


// función de arriba simplificada
$countVolwes = fn ($str) => empty($str) || $str == null ? "Por favor, escribe algo" : preg_match_all('/[a,e,i,o,u,á,é,í,ó,ú]/', mb_strtolower($str));
?>