<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays 3</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include("data.php")
    ?>
</head>

<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>Crear un array multidimensional indexado de dos dimensiones</p>
        <hr>
        <h3>1. Muestra los números 300, 500, 700, 1200 y 1300 de forma individual.</h3>
        <?= $numbers[0][2] . " " ?>
        <?= $numbers[1][1] . " " ?>
        <?= $numbers[2][0] . " " ?>
        <?= $numbers[3][2] . " " ?>
        <?= $numbers[4][0] . " " ?>
        <h3>2. Muestra todos los números usando un bucle for y un foreach</h3>
        <p>
            Bucle for <br>
            <?php
            for ($i = 0; $i < count($numbers); $i++) {
                for ($j = 0; $j < count($numbers[$i]); $j++) {
                    echo "En el índice $i del array \$numbers está el número: " . $numbers[$i][$j] . "<br>";
                };
            };
            
            ?>
        </p>
        <p>
            Bucle foreach <br>
            <?php

            foreach ($numbers as $key => $value) {
                foreach ($value as $key2 => $value2) {
                    echo "En el índice $key del array \$numbers está el número: " . $value2 . "<br>";
                };
            };
            
            ?>
        </p>
    </div>
    <div class="container">
        <h1>
            Ejercicio 2
        </h1>
        <p>
        Crear el array multidimensional asociativo “clientes”
        </p>
        <hr>
        <h3>
            Mostrar saldo del primer cliente
        </h3>
        <p>
            <?= $clients["client1"]["saldo"] ?>$
        </p>
        <h3>
            Apellido del segundo cliente
        </h3>
        <p>
            <?= $clients["client2"]["last_name"] ?>
        </p>
        <h3>
            Mostrar código del tercer cliente
        </h3>
        <p>
            <?= $clients["client3"]["acc_code"] ?>
        </p>
        <h3>Mostrar todos los datos y los tipos de datos inlcuidos</h3>
        <p>
            <?php 
            foreach($clients as $key => $client) {
                foreach($client as $info => $value) {
                    echo "El $info de $key es de tipo:" . gettype($value) ."<br>";
                }
                echo "<br>";
            }
            // echo var_dump($clients);
            ?>
        </p>
        <h3>Mostrar todo el contenido del array con un bucle foreach</h3>
        <?php
        foreach($clients as $key => $client) {
            foreach($client as $info => $value) {
                echo "El $key tiene $info: $value<br>";
            }
            echo "<br>";
        }
        ?>
    </div>
    <div class="container">
        <h1>
            Ejercicio 3
        </h1>
        <p>
            Crea un array multidimensional con 3 dimensiones
        </p>
        <?php
        // foreach($languages as $pos => $type) {
        //     foreach($type as $pos2 => $lang) {
        //         echo "En la posición $pos del array \$languages está en la categoría $type[$pos2] el lenguaje $lang<br>";
        //     }
        //     echo "<br>";
        // }
        foreach($languages as $pos => $type) {
            foreach($type as $key => $lang) {
                echo "<h4>$key</h4>";
                foreach($lang as $l) {
                    echo "<p>$l</p>";
                }
            }
        }
        ?>
    </div>
</body>

</html>