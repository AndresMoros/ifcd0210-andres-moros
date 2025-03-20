<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>PHP - Arrays 1</title>
    <?php
    include("data.php");
    ?>
</head>

<body>
    <div class="container">	
        <h1>Ejercicio 1</h1>
        <p>Carga información sobre las imágenes en la carpeta "pla" y muestralas usando un bucle sobre el array</p>
        <hr>
        <?= print_images($planets) ?>
    </div>
    <div class="container">
        <h1>Ejercicio 2</h1>
        <p>Carga información sobre las imágenes en la carpeta "img" y muestralas en una tabla de 2x3</p>
        <hr>
        <table class="table">
            <tr>
                <td><img src="img/<?=$images[0]?>.png" alt=""></td>
                <td><img src="img/<?=$images[1]?>.png" alt=""></td>
                <td><img src="img/<?=$images[2]?>.png" alt=""></td>
            </tr>
            <tr>
                <td><img src="img/<?=$images[3]?>.png" alt=""></td>
                <td><img src="img/<?=$images[4]?>.png" alt=""></td>
                <td><img src="img/<?=$images[5]?>.png" alt=""></td>
            </tr>
        </table>
    </div>
    <div class="container">
        <h1>
            Ejercicio 3
        </h1>
        <p>
            Muestra en una lista no ordenada los iconos de la carpeta "ico"
        </p>
    <ul>
    <?= print_icons($icons); ?>

    </ul>
    </div>
</body>

</html>