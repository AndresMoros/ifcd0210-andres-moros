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
    $output .= "Palabras de la cadena: " . str_word_count($str) . "<br>";
    $output .= "El primer carácter de la cadena: " . $str[0] . "<br>";
    $output .= "El último carácter de la cadena: " . $str[mb_strlen($str)] . "<br>";
    $output .= "Las primeras 5 letras de la cadena: " . substr($str, 0, 5) . "<br>";
    $output .= "La frase convertida en minúsculas: " . mb_strtolower($str) . "<br>";
    $output .= "La frase convertida en mayúsculas: " . mb_strtoupper($str) . "<br>";
    $output .= "La frase con las palabras empezando por mayúsculas: " . ucwords($str) . "<br>";
    $output .= "La frase concatenada con puntos: " . $str . "<br>";
    $output .= "Reemplaza golondrinas por gaviotas: " . str_replace("golondrinas", "gaviotas", $str) . "<br>";
    $output .= "Posición de la palabra oscuras: " . mb_strpos($str, "oscuras") . "<br>";

    return $output;
} 


# Ejercicio 2

// • Carga por separado en un array cada palabra de la frase del ejercicio anterior.
// • Muestra en párrafos cada una de ellas usando un bucle.

$strToArray = explode(" ", $str);

$showEveryPos = function ($arr) {
    foreach ($arr as $key => $pos) {
        echo "La posición $key es: " . $pos . "<br>";
    }
};

# Ejercicio 3

// • Crea la variable frase e introduce en ella una frase.
// • Crea la variable palabra e introduce en ella una palabra.
// • Mostrar por pantalla:
//     o La frase
//     o La palabra.
//     o Si la palabra está incluida en la frase, mostrar ésta y su posición inicial en la cadena, sí no, escribir un mensaje que indique que la palabra no está incluida en la frase

$phrases = [
    "It was so cold that no one wanted to go outside.",
    "You can't skip laundry, but you can now skip adding detergent.",
    "What a big eater he is!",
    "She found the necklace in a safe at the bottom of her parents' closet.",
    "He is in his normal clothes.",
    "My shoes are blue with yellow stripes and green stars on the front.",
    "He is whistling at the car.",
    "That movie franchise is amazing.",
    "Pluto may not be a planet anymore, but it's a planet in my heart.",
    "She wanted to be a professor when she was in high school, but then she realized how few academic jobs there are on the market.",
    "To give you an example of another American voice, here is a young lady from Iowa who will teach you.",
    "How big you are!",
    "Here he comes to save the day!"
];

$words = [
    "so",
    "was",
    "skibidi",
    "toilet",
    "that",
    "yes",
    "no",
    "but",
    "she",
    "he",
    "you",
    "can",
    "skip",
    "it",
    "to",
    "can't",
    "from",
    "the",
    "me",
    "in",
    "america",
    "who",
    "will",
    "when",
    "here",
    "professor",
];

$phrase = $phrases[rand(0, count($phrases) - 1)];
$word = $words[rand(0, count($words) - 1)];

function findWord($str, string $word) {
    $output = <<<OUTPUT
    La frase es: <em>$str</em><br>
    La palabra es: <em>$word</em><br>
    OUTPUT;
    if(str_contains(mb_strtolower($str), $word)) {
        return $output .= "La palabra está en la posición: " . strpos(mb_strtolower($str), $word);
    } else {
    return $output .= "No está la palabra \"$word\" en la frase";
    }
}
?>