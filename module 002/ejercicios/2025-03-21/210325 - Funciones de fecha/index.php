<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funciones para fechas</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include "functions.php";
    ?>
</head>

<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>Muestra la fechan y hora actual del sistema</p>
        <div class="output">
            <?= get_time() ?>
        </div>
    </div>
    <div class="container">
        <h1>
            Ejercicio 2
        </h1>
        <p>En base a la hora actual, debes mostrar "Buenos días", "Buenas tardes" o "Buenas noches"</p>
        <div class="output">
            <p>Saludo a las <span class="time"><?= date("H:i:s") ?></span></p>
            <?= saludo() ?>
        </div>
    </div>
    <div class="container">
        <h1>
            Ejercicio 3
        </h1>
        <p></p>
        <p>Mostrar varias propiedades de una instancia del objeto <em>DataTime()</em></p>
        <div class="output">
            <p>Fecha y hora: <span class="time"><?= $date_obj->format("d-M-Y H:i:s") ?></span></p>
            <p>Fecha (año dos digitos): <span class="time"><?= $date_obj->format("d-m-y") ?></span></p>
            <p>Día de la semana: <span class="time"><?= getdate()["weekday"]  ?></span></p>
            <p>Mes actual en número: <span class="time">
                <?= $date_obj->format("m") ?>
                </span></p>
            <p>
                Mes actual como texto: <span class="time">
                    <?= $date_obj->format("M") ?>
                </span>
            </p>
            <p>
                El año actual: <span class="time">
                    <?= $date_obj->format("Y") ?>
                </span>
            </p>
            <p>
                Sólo la hora actua: <span class="time">
                    <?= $date_obj->format("H:i:s") ?>
                </span>
            </p>
        </div>
    </div>
</body>

</html>