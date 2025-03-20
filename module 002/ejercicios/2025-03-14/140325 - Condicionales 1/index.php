<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("data/data.php")
    ?>
    <title>PHP - Condicionales 1</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php
    print(nl2br("El primer número es $num1 y el segundo número es $num2\n"));
    print("$res1")

    ?>
    <hr>
    <h2>Ejercicio 2</h2>
    <?php
    print(nl2br("El número es $num3\n
    $res2"))
    ?></php>
    <hr>
    <h2>Ejercicio 3</h2>
    <?php
    print($res3);
    ?>
    <hr>
    <h2>Ejercicio 4</h2>
    <?php
    print(nl2br("
    La nota de Mateméticas es: $math\n
    La nota de Castellano es: $lang\n
    La nota de Deporte es: $sport;\n
    La nota final es: $note\n
    Resultado: $res4;
    "));
    ?>
    <hr>
    <h2>Ejercicio 5</h2>
    <?php
    print($res5);
    ?>
    <hr>
</body>
</html>