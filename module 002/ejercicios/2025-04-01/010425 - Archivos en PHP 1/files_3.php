<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 3</title>
    <?php
    include_once 'functions.php'
    ?>
</head>
<body>

        <button>
            <a href="index.php" target="_self">Volver</a>
        </button>
        <h2>Mover archivo a otro directorio</h2>

        <?= move_file($_FILES["file3"]["tmp_name"][0], $_FILES["file3"]["name"][0]) ?>
        <br>
        <?= move_file($_FILES["file3"]["tmp_name"][1], $_FILES["file3"]["name"][1]) ?>
        <br>
        <?= move_file($_FILES["file3"]["tmp_name"][2], $_FILES["file3"]["name"][2]) ?>

        <?php
        print_photos($_FILES["file3"]["name"], $_FILES["file3"]["name"]);
        ?>
</body>
</html>