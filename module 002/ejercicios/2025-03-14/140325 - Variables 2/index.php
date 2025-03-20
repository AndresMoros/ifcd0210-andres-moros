<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variables 2</title>
</head>

<body>
    <h2>
        Ejercicio 1
    </h2>
    <?php
    $name = "Andrés";
    $age = 21;
    print("¡$name, has vivido" . $age * 365 . " días! ")
    ?>
    <hr>
    <h2>
        Ejercicio 2
    </h2>
    <?php
    $name = "Maria";
    $lastName = "Saavedra";
    $completeName = "$name $lastName";
    $age = 30;
    $year = 2025 -  $age;
    print(nl2br("Nombre completo: $completeName\n
    El año de nacimiento es: $year
    " ));
    ?>
    <hr>
    <h2>
        Ejercicio 3
    </h2>
    <?php
    $num = 3;
    print("El numero original es: $num <br>");
    print(nl2br($num * 2 . "\n" . 
                $num * 3 . "\n" .
                $num * 4 . "\n"))
    ?>
    <hr>
    <h2>
        Ejercicio 4
    </h2>
    <?php
    $price = 5;
    define("IVA", 1.15);
    print(nl2br("El precio de la Harina P.A.N. es " . $price * IVA . "\n"));

    ?>
</body>

</html>


<!-- 
$Netflix = 17000;
$plataforma = "Netflix";
$numeroDePeliculas = $$plataforma;
                        

-->