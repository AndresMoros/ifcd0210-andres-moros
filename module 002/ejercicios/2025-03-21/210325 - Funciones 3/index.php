<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funciones 3</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include 'functions.php'
    ?>
</head>

<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>
            Crea una función flecha que incremente en una unidad el número que se le
            introduzca como parámetro.
        </p>
        <div class="output">
            Número: <?= $rn ?>
            <p><?= $plus_one($rn) ?></p>
        </div>
        <h1>
            Ejercicio 2
        </h1>
        <p>
            Crea una función anónima que inserte en un párrafo el texto “Hola -tu nombre-
            , ¿cómo estás?”
        </p>
        <div class="output">
            Nombre: Andrés
            <p><?= $say_hi('Andrés') ?></p>
        </div>
        <h1>
            Ejercicio 3
        </h1>
        <p>
            Crea una función que muestre cualquier texto, no recibe parámetros ni retorna valores
        </p>
        <div class="output">
            Generador de chistes
            <p><?= $rand_jokes() ?></p>
        </div>
    </div>
</body>

</html>