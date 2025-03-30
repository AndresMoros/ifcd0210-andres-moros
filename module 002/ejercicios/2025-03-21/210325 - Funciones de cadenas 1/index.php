<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funciones para cadenas</title>
    <?php
    include 'functions.php'
    ?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <h1>
            Ejercicio 1 
        </h1>
        <p>Muestra varias de las propiedades de la cadena "Volverán las oscuras golondrinas" usando las distintas funciones para <em>string</em> aprendidas
        </p>
        <div class="output">
            Cadena original: <?= $str ?>
            <p>
                <?= show_str_info($str) ?>
            </p>
        </div>
        <h1>
            Ejercicio 2 
        </h1>
        <p>Carga por separado en un array cada palabra de la frase del ejercicio anterior y muestra el array completo;
        </p>
        <div class="output">
            Cadena original: <?= $str ?>
            <p>
                <?= $showEveryPos($strToArray) ?>
            </p>
        </div>
        <h1>
            Ejercicio 3
        </h1>
        <p>
            Encuentra una palabra en una frase y muestra su posición
        </p>
        <div class="output">
            <p>
                <?= findWord($phrase, $word) ?>
            </p>
        </div>
    </div>
</body>
</html>