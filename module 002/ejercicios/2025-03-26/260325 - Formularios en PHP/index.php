<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Formularios</title>
    <?php
    // Desactivar la visualización de errores en producción
    // ini_set('display_errors', 'Off');
    // error_reporting(0);  // Desactivar todos los reportes de errores
    ?>
</head>

<body>
    <h1>
        Ejercicio
    </h1>
    <form action="results.php" class="form" method="post">
        <input type="text" name="name" id="" placeholder="Nombre">
        <br>
        <input type="number" name="age" id="" placeholder="Edad">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>