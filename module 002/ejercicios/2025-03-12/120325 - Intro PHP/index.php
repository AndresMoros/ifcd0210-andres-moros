<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>

<body>
    <?php
    echo "Hola mundo<br>";
    include('data.php');
    # Esta instrucción puede importar valores desde otro archivo PHP . Entre los paréntesis se incluye la ruta al archivo del que quieren extraerse los datos
    echo 'Hola $nombre $apellido';
    echo "Hola $nombre $apellido";
    ?>
</body>

</html>