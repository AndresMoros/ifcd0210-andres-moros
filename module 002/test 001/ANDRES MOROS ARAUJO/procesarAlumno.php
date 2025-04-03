<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas del alumno</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    function evaluateStudent(array $data): array 
    {
        // Obtener media de la nota
        $median = round((floatval($data["mat"]) + floatval($data["cas"]) + floatval($data["bio"])) / 3, 2);

        $name = $data["nom"] . " " . $data["ape"];
        return ["name" => $name, "median" => $median];
    }
    ?>
</head>
<body>
    <div class="confirm-box">
        <table>
            <caption>Resultados de formulario</caption>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nota media</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= evaluateStudent($_REQUEST)["name"] ?></td>
                    <td><?= evaluateStudent($_REQUEST)["median"] ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <button class="btn"><a href="examen310325.php" target="_self">Volver</a></button>
        
    </div>
</body>
</html>