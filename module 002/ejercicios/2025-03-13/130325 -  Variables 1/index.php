<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de variables</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <?php include("data/libros.php") ?>
</head>

<body>
    <div class="container">
        <div class="datos">
            <h1>
                Papelería Papelitos
            </h1>
            <ul>
                <li class="bold-text">Material de escritura
                    <ul>
                        <li><?php print("$pencil->name - $pencil->price euros") ?></li>
                        <li><?php print("$pen->name - $pen->price euros") ?></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="datos">
            <h1>
                Papelería Papelitos - Libros
            </h1>
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Genero Literario</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php print("$donQuijote->name") ?></td>
                        <td><?php print("$donQuijote->author") ?></td>
                        <td><?php print("$donQuijote->topic") ?></td>
                        <td><?php print("$donQuijote->price") ?> euros</td>
                    </tr>
                    <tr>
                        <td><?php print("$lifeIsADream->name") ?></td>
                        <td><?php print("$lifeIsADream->author") ?></td>
                        <td><?php print("$lifeIsADream->topic") ?></td>
                        <td><?php print("$lifeIsADream->price") ?> euros</td>
                    </tr>
                    <tr>
                        <td><?php print("$rhymesAndLegends->name") ?></td>
                        <td><?php print("$rhymesAndLegends->author") ?></td>
                        <td><?php print("$rhymesAndLegends->topic") ?></td>
                        <td><?php print("$rhymesAndLegends->price") ?> euros</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>