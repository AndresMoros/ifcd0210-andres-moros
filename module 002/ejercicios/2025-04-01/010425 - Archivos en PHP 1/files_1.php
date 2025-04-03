<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php
    include_once("functions.php");
    ?>
</head>

<body>
    <h2>Propiedades del archivo</h2>
    <p>
        <?php
    foreach($_FILES["file1"] as $key => $value) {
        echo "<b>$key</b>: $value<br>";
    }
    ?>
    </p>
    <h3><?= $_FILES["file1"]["error"] == 0 ? "No ha ocurrido ningún error" : "Ha ocurrido un error, intenta otra vez"?></h3>

    <button>
        <a href="index.php" target="self">Volver</a>
    </button>

    <h2>Mover archivo a otro directorio</h2>
    <?php
    
    ?>
    <?= move_file($_FILES["file1"]["tmp_name"], $_FILES["file1"]["name"]) ?>
</body>

</html>