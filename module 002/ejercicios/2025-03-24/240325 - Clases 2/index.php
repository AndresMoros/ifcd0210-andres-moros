<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Clases 2</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include("classes/accounts.php");
    include("classes/circles.php");
    include("classes/workers.php");
    ?>
</head>
<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>
            Crea una clase llamada Cuentas <em>(accounts)</em>, que tenga propiedades relacionadas <b>privadas</b>. Debes incluir un método constructor y otro destructor, y demás relacionados con el manejo de una cuenta.
        </p>
        <div class="output">
            <?php
            $client = new Accounts("0012123", "0110991921", "John", "Doe", 1458.76);
            ?>
            <?= $client->withdraw(1000,00) ?>
            <br>
            <?= $client->get_balance() ?>
            <br>
            <?= $client->deposit(500,00) ?>
            <br>
            <?= $client->get_balance() ?>
            <br><br>
            Datos del cliente:
            <br>
            <?= $client->get_data() ?>
        </div>
        <h1>
            Ejercicio 2
        </h1>
        <p>
            Crea una clase Circulos, y crea varios métodos para realizar operaciones con ellos
        </p>
        <div class="output">
            <p>Circulo 1</p>
            <?php
            $circle1 = new Cirles(5);
            ?>
            <?= $circle1->get_diameter() ?>
            <br>
            <?= $circle1->get_circunference() ?>
            <br>
            <?= $circle1->get_area() ?>
            <p>Circulo 2</p>
            <?php
            $circle2 = new Cirles(10);
            ?>
            <?= $circle2->get_diameter() ?>
            <br>
            <?= $circle2->get_circunference() ?>
            <br>
            <?= $circle2->get_area() ?>
            <p>Circulo 3</p>
            <?php
            $circle3 = new Cirles(15);
            ?>
            <?= $circle3->get_diameter() ?>
            <br>
            <?= $circle3->get_circunference() ?>
            <br>
            <?= $circle3->get_area() ?>
        </div>
    </div>
</body>
</html>