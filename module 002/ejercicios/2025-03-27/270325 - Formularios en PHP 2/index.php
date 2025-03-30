<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Formularios 2</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include_once("functions/get_birth_year.php")
    ?>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ejercicio 1</h1>
            <form action="index.php" class="form" method="post">
                <fieldset>
                    <legend>Datos personales</legend>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="name" id="nombre">
                    <br>
                    <label for="apellido">Apellidos</label>
                    <input type="text" name="last_name" id="apellido">
                    <br>
                    <label for="dir">Dirección</label>
                    <input type="text" name="dir" id="dir">
                    <br>
                    <label for="tel">Teléfono</label>
                    <input type="tel" name="tel" id="tel">
                    <br>
                    <label for="edad">Edad</label>
                    <input type="number" name="age" id="edad">
                    <br>
                    <input type="submit" value="Procesar" class="btn">
                </fieldset>
            </form>
            <?php
            if (isset($_POST["name"])):
                include("templates/personal_data.php");
            else:
                include("templates/empty_personal_data.php");
            endif
            ?>
        </div>
        <div class="card">
            <h2>Ejercicio 2</h2>
            <form action="index.php" class="form" method="post">
                <fieldset>
                    <legend>Nivel de estudios</legend>
                    <input type="text" name="student" id="student" placeholder="Tu nombre">
                    <br>
                    <label for="el">Sin estudios</label><input type="radio" name="edu_level" value="sin estudios" id="" class="check_radio">
                    <br>
                    <label for="el">Primaria</label><input type="radio" name="edu_level" value="primaria" id="" class="check_radio">
                    <br>
                    <label for="el">Secundaria</label><input type="radio" name="edu_level" value="secundaria" id="" class="check_radio">
                    <br>
                    <label for="el">Universidad</label><input type="radio" name="edu_level" value="primary" id="" class="check_radio">
                    <br>
                    <input type="submit" value="Enviar" class="btn" class="check_radio">
                </fieldset>
            </form>
            <?php
            if (isset($_POST["student"])):
                if ($_POST["edu_level"] == "sin estudios"):
                    print "<p>" . $_POST["student"] . ", no tienes estudios</p>";
                    return;
                endif;
                print "<p>" . $_POST["student"] . " has cursado hasta " . $_POST["edu_level"] . "</p>";
            else:
                echo "<p></p>";
            endif;
            ?>
        </div>
        <div class="card">
            <h1>
                Ejercicio 3
            </h1>
            <form action="index.php" class="form">
                <fieldset>
                    <legend>Operar numeros</legend>
                    <input type="number" name="num1" id="" placeholder="Numero 1">
                    <input type="number" name="num2" id="" placeholder="Numero 2">
                    <br>
                    <p>¿Qué quieres hacer con los numeros?</p>
                    <div class="center-op">
                        <label for="sum">Sumar <input type="checkbox" name="sum" id="sum"></label>
                        <label for="res">Restar <input type="checkbox" name="res" id="res"></label>
                    </div>
                    <input type="submit" value="Operar" class="btn">
                </fieldset>
            </form>
            <p>
            <?php
            // if(!isset($_POST["num1"]) || !isset($_POST["num2"])) {
            //     print("No has escrito un número" . "<br>");
            // }
            // if(!isset($_POST["sum"]) || !isset($_POST["res"])) {
            //     print("No has elegido nada" . "<br>");
            // }
            if(isset($_POST["sum"])) {
                return
                print("La suma es: " . $_POST["num1"] + $_POST["num2"] . "<br>");
            }
            if(isset($_POST["res"])) {
                return
                print("La resta es: " . $_POST["num1"] - $_POST["num2"] . "<br>");
            }
            ?>
            </p>
        </div>
    </div>
</body>

</html>