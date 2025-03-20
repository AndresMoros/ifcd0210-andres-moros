<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include "bucles-foreach.php"
    ?>
</head>

<body>
    <div>
        <h1>Ejercicio 1</h1>
        <p>Muestra dos de las bebidas en el array $drinks</p>
        <span>
            <?= $drinks[2] . " y " . $drinks[0] ?>
        </span>
        <hr>
    </div>
    <div>
        <h1>
            Ejercicio 2
        </h1>
        <span>
            <p>Cargar y mostrar 5 numeros en un array</p>
            <?php for ($i=0; $i < sizeof($numbers); $i++) { 
                echo $numbers[$i] . " ";
            } ?>
        </span>
    </div>
    <div>
        <h1>
            Ejercicio 3
        </h1>
        <p>Muestra varios videojuegos</p>
        <span>
            <?= "El primer juego es " . $games[0] . " y el último es " . $games[count($games) - 1] ?>
        </span>
        <p>Todos los juegos:(for)</p>
        <?php
        for ($i=0; $i < count($games); $i++) { 
            echo "En la posición " . $i . " está el juego " . $games[$i] . "<br>";
        }
        ?>
        <p>Todos los juegos:(foreach)</p>
        <?php
        foreach($games as $key => $game) {
            echo "En la posición " . $key . " está el juego " . $game . "<br>";
        }
        ?>
    </div>
    <div>
        <h1>
            Ejercicio 4
        </h1>
        <p>Muestra todo el contenido de un array con elementos aletarios de diferente tipo</p>
        <?php 
        foreach($random as $key => $value) {
            echo "En la posición " . $key . " está el valor " . $value . "<br>";
        }
        ?>
    </div>
</body>

</html>