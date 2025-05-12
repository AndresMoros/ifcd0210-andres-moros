<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("sql/conexion.php")
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta a Base de Datos</title>
</head>

<body>
    <div class="container">
        <h1>Ejercicio 1</h1>
        <p>Mostrar todos los datos de los registros en la tabla agenda</p>
        <hr>
        <table>
            <tr>
                <th>Cod.</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>
            <?php
            $sql_query = "SELECT * FROM Agenda;";

            $query_result = mysqli_query($connect, $sql_query);
            while($result = mysqli_fetch_assoc($query_result))
            {
            ?>
            <tr>
                <td><?= $result["codigo"] ?></td>
                <td><?= $result["nombre"] ?></td>
                <td><?= $result["apellidos"] ?></td>
                <td><?= $result["email"] ?></td>
                <td><?= $result["telefono"] ?></td>
            </tr>
            <?php
            }
            while ($result = mysqli_fetch_assoc($query_result)) {
                foreach ($result as $key => $value) {
                    echo "<p>" . ucfirst($key) . ": " . "$value" . "</p>";
                }
                echo "<hr>"; // separador entre registros
            }
            mysqli_close($connect);
            ?>
        </table>
    </div>
</body>

</html>