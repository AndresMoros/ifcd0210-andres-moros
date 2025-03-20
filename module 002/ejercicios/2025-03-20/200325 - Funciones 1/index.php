<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Functions 1</title>
    <?php
    include "functions.php"
    ?>
</head>

<body>
    <div class="container">
        <table>
            <tr>
                <th>Resta</th>
                <th>Multiplicación</th>
            </tr>
            <tr>
                <td><?= res() . $resta ?></td>
                <td><?= $mult() ?></td>
            </tr>
            <tr>
                <th>División</th>
                <th>Suma</th>
            </tr>
            <tr>
                <td><?= div($divisble, $divisor, $div_res) . $div_res?></td>
                <td><?= $sum(28, 31) ?></td>
            </tr>
        </table>
    </div>
</body>

</html>