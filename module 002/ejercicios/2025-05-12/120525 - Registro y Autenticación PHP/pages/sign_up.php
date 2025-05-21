<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="/css/styles.css">
    <?php
    require_once("../php/register.php");
    ?>
</head>
<body>
    <!-- header -->
    <?php
    require_once("../components/header.php")
    ?>
    <!-- header -->
    <!-- <form action="../php/register.php" method="post"> -->
    <form action="" method="post">
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user" required>
        <br>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="last-name">Apellido:</label>
        <input type="text" name="last_name" id="last-name" required>
        <br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" required>
        <br>
        <input type="submit" name="submit-btn" value="Registrarse">
        <input type="reset" value="Limpiar">
    </form>
    <a href="../index.php">Atras</a>
    <p><?= $output ?></p>
</body>
</html>