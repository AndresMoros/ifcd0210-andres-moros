<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO (Sobrecarga de métodos 1)</title>
    <?php
    include "classes.php"
    ?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>
            Crea dos instancias de la clase <em>Empleados</em> y mustra todos sus datos por pantalla
        </p>
        <div class="output">
            <?= $andres->get_data() ?>
            <br>
            <?= $anais->get_data() ?>
        </div>
        <h1>
            Ejercicio 2
        </h1>
        <p>
            Usando herencia crea una nueva clase 
        </p>
        <div class="output">
            <?= $sergio->Datos() ?>
            <br>
            <?= $francisco->Datos() ?>
        </div>
    </div>
</body>
</html>