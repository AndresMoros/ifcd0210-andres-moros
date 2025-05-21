<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="/css/styles.css">
    <?php
    require_once("../php/login_user.php")
    ?>
</head>
<body>
    <!-- header -->
    <?php
    require_once("../components/header.php")
    ?>
    <!-- header -->
    <form action="" method="post">
        <input type="text" name="user" placeholder="Usuario">
        <br>
        <input type="password" name="pass" placeholder="Contraseña">
        <br>
        <button type="submit" name="submit-btn">Iniciar sesión</button>
    </form>
    <a href="../index.php">Atras</a>
    <p><?= $output ?></p>
</body>
</html>