<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Bucles 1 (while)</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include ("bucle-while.php");
    ?>
</head>

<body>
    <div>
        <h1>
            Ejercicio 1
        </h1>
        <p>Contar de 12 en 12 hasta llegar al 500</p>
        <?= $output_1 ?>
        <hr>
    </div>
    <div>
        <h1>
            Ejercicio 2
        </h1>
        <p>
            Cuenta hacia atrás desde el 10 hasta el 0
        </p>
        <?= $output_2 ?>
        <hr>
    </div>
    <div>
        <h1>
            Ejercicio 3
        </h1>
        <p>
            Escribe los números pares del 0 a 20 en líneas diferentes.
        </p>
        <?= $output_3 ?>
        <hr>
    </div>
        <div>
        <h1>
            Ejercicio 4
        </h1>
        <p>
            Muestra 30 números, suma sus cifras y muestra el resultado final
        </p>
        <?= $text . "<br>La suma de todos es $acc" ?>
        <hr>
    </div>
</body>

</html>