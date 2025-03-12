<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintáxis y Variables I</title>
</head>

<body>
    <?php
    include("variables.php");
    print("El valor de la variable y es $y" . 
    "<br><br>" . 
    "El valor de la variable x es $x" . 
    "<br><br>");
    print(nl2br(
    "La suma entre la variable 'x' y la variables 'y' es igual a $suma\n
    La resta entre la variable 'x' y la variables 'y' es igual a $resta\n
    Una multiplicación entre ambas variables es igual a $mult\n
    La división entre 'y' y 'x' es igual a $div\n
     "));
     print("$DNI");
    ?>
</body>

</html>