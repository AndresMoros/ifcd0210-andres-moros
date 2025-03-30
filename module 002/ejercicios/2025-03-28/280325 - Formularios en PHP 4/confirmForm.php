<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comproción de Formulario</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="confirm-box">
        <h2>Por favor, confirma tus datos para enviar el formulario</h2>
        <p>Nombre: <?= $_REQUEST["no"] ?></p>
        <p>Apellidos: <?= $_REQUEST["ap"] ?></p>
        <p>Correo electrónico: <?= $_REQUEST["co"] ?></p>
        <p>Sexo: <?= $_REQUEST["se"] ?></p>
        <p>Estudios: <?= $_REQUEST["estudios"] ?></p>
        <p>Tus intereses son: </p>
        <ul>
        <?php
        if(isset($_REQUEST["mus"])) echo "<li>Música</li>";
        if(isset($_REQUEST["dep"])) echo "<li>Deportes</li>";
        if(isset($_REQUEST["cin"])) echo "<li>Cine</li>";
        if(isset($_REQUEST["lib"])) echo "<li>Libros</li>";
        if(isset($_REQUEST["cie"])) echo "<li>Ciencia</li>";
        ?>
        </ul>
        <p>Preferencia de newsletter: <?= $_REQUEST["dia"] ?></p>
        <p>Has comentado que:</p>
        <textarea name="" readonly rows="5" cols="50"><?= $_REQUEST["comentario"] ?></textarea>
        <br>
        <div class="form-bottom">
        <button class="btn submit-btn"><a href="successfully.php">Confirmar</a></button>
        <button class="btn clear-btn"><a href="index.php">Cancelar envío</a></button>
        </div>
    </div>
</body>
</html>