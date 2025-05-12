<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <?php
    // Incluimos el archivo con las credenciales de conexión
    require_once("connection.php");




    if (!$connection) echo "Error de conexión";
    ?>

</head>

<body>
    <div class="content">
        <?php
        // Creamos un array para guardar los datos del formulario


        // Verificar el valor de las campos del formulario
        foreach ($_REQUEST as $key => $value) {
            if ($value == false) {
                echo "Falto un dato";
                break;
            }
        }


        function dataConvert($arr)
        {
            $output = [];
            foreach ($arr as $key => $value) {
                $output[$key] = is_numeric($value) ? floatval($value) : $value;
            }
            return $output;
        }

        
        $data = dataConvert($_REQUEST);
        // array(5) { ["song_name"]=> string(20) "Are we still friends" ["group_artist"]=> string(17) "Tyler the Creator" ["genre"]=> string(3) "Pop" ["purch_date"]=> string(10) "2025-03-12" ["price"]=> float(12) } 

        

        $song_name = mysqli_escape_string($connection, $data["song_name"]);
        $group_artist = mysqli_escape_string($connection, $data["group_artist"]);
        $genre = mysqli_escape_string($connection, $data["genre"]);
        $purch_date = mysqli_escape_string($connection, $data["purch_date"]);
        $price = $data["price"];

        $dataInsert = "INSERT INTO ventas_discos (title, author, genre, purch_date, price) VALUES ('$song_name', '$group_artist', '$genre', '$purch_date', '$price')";

        if(mysqli_query($connection, $dataInsert, 1)) {
            echo "Succesfull";
            exit;
        }
        echo "Error";
        ?>
</body>

</html>