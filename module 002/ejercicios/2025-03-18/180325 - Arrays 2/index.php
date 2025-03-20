<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays 2</title>
    <link rel="stylesheet" href="css/main.css">
    <title>PHP - Arrays 1</title>
    <?php
    include("data.php");
    ?>
</head>

<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>
            Crear 3 Arrays asociativos con los meses y los días que tiene cada uno.
        </p>
        <hr>
        <ul class="array_func months">
            <h2>Array con función</h2>
            <?php foreach($months_1 as $month => $days): ?>

            <li>El mes <?=$month?> tiene <?= $days ?> días</li>

            <?php endforeach; ?>
        </ul>
        <ul class="array_simple months">
            <h2>Array "simple"</h2>
            <?php foreach($months_2 as $month => $days): ?>

            <li>El mes <?=$month?> tiene <?= $days ?> días</li>

            <?php endforeach; ?>
        </ul>
        <ul class="array_asig months">
            <h2>Array asignado</h2>
            <?php foreach($months_1 as $month => $days): ?>

            <li>El mes <?=$month?> tiene <?= $days ?> días</li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="container">
        <h1>
            Ejercicio 2
        </h1>
        <p>
           Crear un array con los datos de un cliente y mostrarlos por pantalla
        </p>
        <hr>
        <ul class="client_data">
        <?= show_data($client) ?>
        </ul>
    </div>
    <div class="container">
        <h1>
            Ejercicio 3
        </h1>
        <p>
           Crear un array de usuarios y mostrar los datos del primer y del ultimo usuario
        </p>
        <hr>
        <?php 
        echo "El primer usuario tiene como clave: " . $users["kuker_drew"] . "<br>";
        echo "El último usuario tiene como clave: " . $users["brain_rot"] . "<br>";
        ?>
    </div>
</body>

</html>