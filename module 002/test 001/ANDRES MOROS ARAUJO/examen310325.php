<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen MF0492_3 - Andrés Moros</title>
    <?php
    include("cuentas.php")
    ?>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>
            Crea un array asociativo llamado <em>arcoiris</em>, carga los colores del arcoíris muestra con u bucle los
            colores junto a su clave
        </p>
        <div class="output">
            <?php
            $arcoiris = [
                "Capa" => "Rojo",
                "Cono" => "Naranja",
                "Saitama" => "Amarillo",
                "Pera" => "Verde", 
                "Tinta" => "Añil",
                "Mar" => "Azul",
                "Berenjena" => "Violeta"
            ];

            foreach ($arcoiris as $key => $value) {
                echo "$key: $value" . "<br>";
            }
            ?>
        </div>
        <hr>
        <h1>
            Ejercicio 2
        </h1>
        <p>
            Crea las variables <em>equipo_local</em> y <em>equipo_visitante</em> en introduce en elas el número de goles
            que han metido 2 equipos de futbol. Muestra un resultado dependiendo del resultado del partido
        </p>
        <div class="output">
            <?php
            $equipo_local = [
                "Jugadores" => 11,
                "Banca" => 8,
                "Faltas" => 2,
                "Goles" => random_int(1, 5),
                "Puntos" => 23,
            ];

            $equipo_visitante = [
                "Jugadores" => 10,
                "Banca" => 9,
                "Faltas" => 4,
                "Goles" => random_int(1, 5),
                "Puntos" => 20,
            ];


            ?>
            <p>Quiniela:
                <?= 
                match($equipo_local["Goles"] <=> $equipo_visitante["Goles"]) {
                    1 => "1",
                    -1 => "2",
                    0 => "X",
                    default => "Error"
                }
                ?>
            </p>
            <?= "Equipo local: " . $equipo_local["Goles"] ?>
            <br>
            <?= "Equipo visitante: " .  $equipo_visitante["Goles"]?>
        </div>
        <hr>
        <h1>
            Ejercicio 3
        </h1>
        <p>
            Crear función <em>ladrar()</em> que reciba un parámetro (nombre del perro), sin retornar valor. Si el perro se llama "Chispa", ladrará, sin es otro el nombre, no hará nada.
        </p>
        <div class="output">
            <?php
            $perros = [
                "Cerbero",
                "Rover",
                "Chispa",
                "Dakota"
            ];

            $randomDog = random_int(0, 3);

            $ladrar = fn (string $name) => $name == "Chispa" ? "Guau! Guau!" : "...";

            for($i = 0; $i < count($perros); $i++) {
                echo "Lamando a $perros[$i] <br>";
                echo "Perro: " . $ladrar($perros[$i])  . "<br><br>";
            }
            ?>
            <br>
            <?= "Llamando a cualquier perro. $perros[$randomDog]: " . $ladrar($perros[$randomDog]) ?>
        </div>
        <hr>
        <h1>
            Ejercicio 4
        </h1>
        <p>Crear una instancia de la clase <em>Cuentas</em> y mostrar todos los datos del cliente usando diferentes métodos</p>
        <div class="output">
            <?php
            $cliente1 = new Cuentas(9123, "Andrés", "Moros", "email@gmail.com", "E0123 9123 1231 12", 812.98, "Euro / ES"); 
            ?>
            <h3>
                Usando métodos <em>Object:get_property</em>
            </h3>
            <p>Código de cliente: <?= $cliente1->get_cod() ?></p>
            <p>Nombre de cliente: <?= $cliente1->get_nombre() ?></p>
            <p>Apellido de cliente: <?= $cliente1->get_apellido() ?></p>
            <p>Email de cliente: <?= $cliente1->get_email() ?></p>
            <p>Numero de cuenta: <?= $cliente1->get_num_cuenta() ?></p>
            <p>Saldo: <?= $cliente1->get_saldo() ?></p>
            <p>Moneda: <?= $cliente1->get_menoda() ?></p>
            <h3>
                Ahora con el método <em>Object:get_data</em>
            </h3>
            <?= $cliente1->get_data() ?>
        </div>
        <hr>
        <h1>
            Ejercicio 5
        </h1>
        <p>
            Crear un formulario para evaluar las notas de un alumno
        </p>
        <form action="procesarAlumno.php" class="form" method="post">
            <fieldset>
                <legend>Datos de alumno</legend>
                <div class="form-row">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nom" id="nombre" required>
                </div>
                <div class="form-row">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="ape" id="apelido" required>
                </div>
                
            </fieldset>
            <fieldset>
                <legend>Notas</legend>
                <div class="form-row">
                    <label for="mat">Matemáticas</label>
                    <input type="number" name="mat" id="mat" required>
                </div>
                <div class="form-row">
                    <label for="cas">Castellano</label>
                    <input type="number" name="cas" id="cas" required>
                </div>
                <div class="form-row">
                    <label for="bio">Biología</label>
                    <input type="number" name="bio" id="bio" required>
                </div>
            </fieldset>
            <div class="form-row">
                <input type="submit" class="btn submit-btn" value="Evaluar">
                <input type="reset" class="btn reset-btn" value="Borra datos">
            </div>
        </form>
    </div>
</body>

</html>