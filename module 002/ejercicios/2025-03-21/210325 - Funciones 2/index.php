<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funciones 2
    </title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include 'functions.php'
    ?>
</head>
<body>
    <div class="container">
        <h1>Ejercicio 1</h1>
        <p>
            Crea una función que muestre la medalla ganada por un competidor: Oro, Plata o Bronce, si no queda dentro de las primeras tres posiciones, entonces muestra que no ha calificado
        </p>
        <div class="output">
            <?php
            print("Tu posición en la carrear fue: $position <br>" . get_medal($position))
            ?>
        </div>
        <h1>Ejercicio 2</h1>
        <p>
            Crea una función que escriba 10 veces en la página web un título de nivel 3 con
            el texto “PHP me gusta mucho 😊😊”. La función no recibe ni devuelve valores
        </p>
        <div class="output">
            <?php
            print_yap();
            ?>
        </div>
        <h1>Ejercicio 2</h1>
        <p>
            Crea una calculadora de PVP, mostrando el precio, el IVA de ese precio y el total
        </p>
        <table>
            <tr>
                <th>Precio</th>
                <th>IVA</th>
                <th>PVP</th>
            </tr>
            <tr>
                <td>
                    <?= "$price €"?>
                </td>
                <td>
                    <?= calc_total($price)[0] ?>
                </td>
                <td>
                    <?= calc_total($price)[1] ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>