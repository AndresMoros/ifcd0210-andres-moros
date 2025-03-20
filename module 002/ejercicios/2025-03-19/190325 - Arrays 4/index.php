<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>PHP - Arrays 4</title>
    <?php
    include("data.php")
    ?>
</head>

<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>
            Utiliza varias funciones para el array asociativo con edades
        </p>
        <hr>
        <h3>
            Compara a los arrays originales y a los copiados a ver si tienen los mismos elementos usando
            <em>var_dump()</em> y <em>print_r()</em>
        </h3>
        <p>Estaciones: </p>
        <div class="output">
            <?= arr_compare($estaciones, $season_cp) ?>
        </div>
        <hr>
        <p>Edades: </p>
        <div class="output">
            <?= arr_compare($edades, $age_cp) ?>
        </div>
        <p>Temperaturas: </p>
        <div class="output">
            <?= print_r($temperaturas, true) . "<br>" . "<br>" . print_r($temp_cp, true) ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Cuántos elementos tienen los arrays? Muestra su cantidad por pantalla
        </h3>
        <div class="output">
            <p> $season_cp: <?= $arrs_count["season_cp"] ?> </p>
            <p> $temp_cp: <?= $arrs_count["temp_cp"] ?> </p>
            <p> $age_cp: <?= $arrs_count["age_cp"] ?> </p>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Muestra las claves del array edades en distintas líneas.
        </h3>
        <div class="output">
            <?= show_keys($edades) ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Muestra los valores del array estaciones en una misma línea separados de la siguiente forma: espacio barra
            inclinada espacio.
        </h3>
        <div class="output">
            <?= implode_arr($edades) ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            ¿Quién tiene 30 años?
        </h3>
        <div class="output">
            <?= find_key($edades, 30) ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            ¿Qué posisición ocupa la temperatura 29.7?
        </h3>
        <div class="output">
            <?= find_key($temp_cp, 29.7) ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            ¿Cuál es la temperatura mayor?
        </h3>
        <div class="output">
            <?= $temp_cp[find_key($temp_cp, max($temp_cp))] ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            ¿Cuál es la temperatura mínima?
        </h3>
        <div class="output">
            <?= $temp_cp[find_key($temp_cp, min($temp_cp))] ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            ¿Quién tiene más edad?
        </h3>
        <div class="output">
            <?= find_key($edades, max($edades)) ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Carga todas las estaciones y muestralas por pantalla
        </h3>
        <div class="output">
            <?= $spring ?><br>
            <?= $summer ?><br>
            <?= $autumn ?><br>
            <?= $winter ?><br>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Carga todas las temperaturas en variables y después calcula la media de temperaturas anual. Muestra dicha media por pantalla redondeada y con 2 decimales.
        </h3>
        <div class="output">
            <p>La temperatura media del año pasado fue: <?= $average_temp ?>°C</p>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Inserta dos nuevos valores en el array <em>$temperaturas</em> y muestra su contenido
        </h3>
        <div class="output">
            <?php
            array_push($temp_cp, 31.1, 5.7);
            echo join(", ", $temp_cp)
            ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Borra las 2 temperaturas nuevas anteriores, y muestra el resultado para confirmarlo
        </h3>
        <div class="output">

            <?php
            array_pop($temp_cp);
            array_pop($temp_cp);
            echo join(", ", $temp_cp) ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Inserta en el array estaciones y delante de los valores existentes, las 4 estaciones en inglés
        </h3>
        <div class="output">
            <pre>
array_splice($season_cp, 4, 0, ["spring", "summer", "winter", "autumn"]);
            </pre>
            <?php
            array_splice($season_cp, 4, 0, ["spring", "summer", "winter", "autumn"]);
            print_r($season_cp)
            ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Borra las cuatro estaciones incluidas y muestas el array para confirmarlo
        </h3>
        <div class="output">
            <pre>
array_splice($season_cp, 4);
            </pre>
            <?php
            array_splice($season_cp, 4);
            print_r($season_cp)

            ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Invierte el contenido del array temperaturas
        </h3>
        <div class="output">
            <pre>
array_reverse($temp_cp);
            </pre>
            <?php
            print_r(array_reverse($temp_cp))
            ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
            Invierte el contenido del array estaciones preservando los indices
        </h3>
        <div class="output">
            <pre>
array_reverse($season_cp, true);
            </pre>
            <?php
            print_r(array_reverse($season_cp, true))
            ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
        Ordena el contenido del array temperaturas de forma numérica descendente
        </h3>
        <div class="output">
            <pre>
arsort($temp_cp);
            </pre>
            <?php
            arsort($temp_cp);
            print_r($temp_cp);
            ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
        Ordena el contenido del array edades de forma alfabética ascendente
        </h3>
        <div class="output">
            <pre>
asort($age_cp, SORT_STRING);
            </pre>
            <?php
            asort($age_cp, SORT_STRING);
            print_r($age_cp);
            ?>
        </div>
        <br>
        <hr>
        <br>
        <h3>
        Ordena el contenido del array estaciones de forma ascendente
        </h3>
        <div class="output">
            <pre>
asort($season_cp);
            </pre>
            <?php
            asort($season_cp);
            print_r($season_cp);
            ?>
        </div>
    </div>
</body>

</html>