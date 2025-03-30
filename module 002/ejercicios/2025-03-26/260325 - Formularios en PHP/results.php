<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del formulario</title>
    <?php
    include("functions.php")
    ?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>
        Resultados en texto
    </h1>
    <div class="card">
    <h2>
        Tu nombre es: <?= $_REQUEST["name"] ?>
    </h2>
    <h3>
        Tienes: <?= $_REQUEST["age"] ?> años
    </h3>
    <h4>
        <?= $isAdult($_REQUEST["age"]) ? "Eres un adulto" : "No eres un adulto" ?>
    </h4>
    </div>
    <h1>Datos en campos de texto</h1>
    <div class="card">
    <?php
    print("<label for='nombre'>Nombre: </label><input type='text' name='nombre' id='nombre' value='" . $_REQUEST["name"] . "'>");
    echo "<br>";
    print("<label for='edad'>Edad: </label><input type='number' name='edad' id='edad' value='" . $_REQUEST["age"] . "'>");
    ?>
    </div>
    <h1>Tabla de resultados</h1>
    <div class="card">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>¿Es un adulto?</th>
        </tr>
        <tr>
            <td>
                <?= $_REQUEST["name"] ?>
            </td>
            <td>
                <?= $_REQUEST["age"] ?>
            </td>
            <td>
                <?= $isAdult($_REQUEST["age"]) ? "Sí" : "No" ?>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>
