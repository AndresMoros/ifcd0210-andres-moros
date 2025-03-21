<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Functions 1</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include "functions.php"
    ?>
</head>

<body>
    <div class="container">
        <h1>Ejercicio</h1>
        <table>
            <tr>
                <th>Resta</th>
                <th>Multiplicación</th>
            </tr>
            <tr>
                <td><?= res()  ?></td>
                <td><?= $mult() ?></td>
            </tr>
            <tr>
                <th>División</th>
                <th>Suma</th>
            </tr>
            <tr>
                <td><?= div($divisble, $divisor)?></td>
                <td><?= $sum(28, 31) ?></td>
            </tr>
        </table>
    </div>
</body>

</html>