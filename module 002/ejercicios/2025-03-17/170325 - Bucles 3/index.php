<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Bucles 3</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include("bucle-for.php");
    ?>
</head>
<body>
    <div>
        <h1>
            Ejercicio 1
        </h1>
        <?= $output_1 ?>
        <hr>
    </div>
    <div>
        <h1>
            Ejercicio 2
        </h1>
        <?= $output_2 ?>
    </div>
    <div>
        <h1>
            Ejercicio 3
        </h1>
        <p>La tabla de multiplicar del 6</p>
        <div class="multi-table">
        <?= $output_3 ?>
        </div>
    </div>
    <div>
        <h1>
            Ejercicio 4
        </h1>
        <p>Mostrar números pares del 0 al 50</p>
        <?= $output_4 ?>
    </div>
    <div>
        <h1>
            Ejercicio 5
        </h1>
        <p>Mostrar números pares del 0 al 60 e indicar multiplos de 3 y 8</p>
        <?= $output_5 ?>
    </div>
</body>
</html>