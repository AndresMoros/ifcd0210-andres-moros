<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores 1</title>
    <?php include("datos.php") ?>
</head>

<body>
    <h1>
        Ejercicio 0
    </h1>
    <?php
    print("Los números son:<br>
    $num1<br>
    $num2<br>
    $num3<br>
    $num4<br>
    ");
    print("<br>
    Sin tener en cuenta la precedencia de los datos la media es: $arith0 
    <br> 
    Teniendo en cuenta la precendencia de los datos la media es: $arith1");
    print("<br>
    La multiplicación de los valores en num4 y num1, sumandose con num2 es:
    <br>
    Sin tener en cuenta la precedencia: $mult1
    <br>
    Teniendo en cuenta la precedencia: $mult2
    ")
    ?>
    <hr>
    <h1>
        Ejercicio 1
    </h1>
    <?php
    print("
    El módulo de 30 es: $modulo_1
    <br>
    El módulo de 55 es: $modulo_2
    ")
    ?>
    <hr>
    <h1>
        Ejercicio 2
    </h1>
    <?php
    // Definimos las variables
    $A = 5;
    $B = 3;
    $C = -12;

    // Evaluamos cada expresión e imprimimos el resultado
    print(
        nl2br("A > 3: " . ($A > 3 ? "true" : "false") . "\n") .
        nl2br("A > C: " . ($A > $C ? "true" : "false") . "\n") .
        nl2br("A < C: " . ($A < $C ? "true" : "false") . "\n") .
        nl2br("B < C: " . ($B < $C ? "true" : "false") . "\n") .
        nl2br("B != C: " . ($B != $C ? "true" : "false") . "\n") .
        nl2br("A == 3: " . ($A == 3 ? "true" : "false") . "\n") .
        nl2br("A * B == 15: " . ($A * $B == 15 ? "true" : "false") . "\n") .
        nl2br("A * B == -30: " . ($A * $B == -30 ? "true" : "false") . "\n") .
        nl2br("C / B < A: " . ($C / $B < $A ? "true" : "false") . "\n") .
        nl2br("C / B == -10: " . ($C / $B == -10 ? "true" : "false") . "\n") .
        nl2br("C / B == -4: " . ($C / $B == -4 ? "true" : "false") . "\n") .
        nl2br("A + B + C == 5: " . ($A + $B + $C == 5 ? "true" : "false") . "\n") .
        nl2br("(A + B == 8) && (A - B == 2): " . (($A + $B == 8) && ($A - $B == 2) ? "true" : "false") . "\n") .
        nl2br("(A + B == 8) || (A - B == 6): " . (($A + $B == 8) || ($A - $B == 6) ? "true" : "false" . "\n")) .
        nl2br("A > 3 && B > 3 && C < 3: " . ($A > 3 && $B > 3 && $C < 3 ? "true" : "false") . "\n") .
        nl2br("A > 3 && B >= 3 && C < -3: " . ($A > 3 && $B >= 3 && $C < -3 ? "true" : "false") . "\n") .
        nl2br("B <=> C: " . ($B <=> $C) . "\n")
    );
    ?>
    <hr>
    <h1>
        Ejercicio 3
    </h1>
    <?php
    print("La variable 'value' es:" . $value . "<br>");
    print("Preincremento: " . ++$value . "<br>");
    print("Postincremento: " . $value++ . "<br>");
    print("Valor de 'value': " . $value)
    ?>
    <hr>
    <h1>
        Ejercicio 4
    </h1>
    <?= $res4 ?>
    <hr>
    <h1>Ejercicio 5</h1>
    <?= findWord($phrases, $words) ?>
    <hr>
</body>

</html>