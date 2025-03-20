<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Bucles 2 (while)</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include("bucles-while.php")
    ?>
</head>
<body>
    <div>
        <h1>
            Ejercicio 1
        </h1>
        <?= "Los primeros diez (10) números<br>" . $output_1?>
    </div>
    <div>
        <h1>Ejercicio 2</h1>
        <?= $output_2 ?>
    </div>
    <div>
        <h1>Ejercicio 3</h1>
        <?= $output_3 ?>
    </div>
    <div>
        <h1>Ejercicio 4</h1>
        <?= $output_4 ?>
    </div>
</body>
</html>