<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Clases 1</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include_once("classes/friends.php");
    include_once("classes/travels.php");
    include_once("classes/cars.php");
    include_once("functions.php")
    ?>
</head>
<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <p>Crear una clase llamada "Amigos" con datos básicos, crear tres instanacias y mostrarlas todas por pantalla usando un bucle <em>foreach</em></p>
        <div class="output">
        <?php
        $andres = new Friends("Andrés", "Moros", "Móstoles, Madrid", 640980765);
        $gabriel = new Friends("Gabriel", "Mejias", "Frankfurt, Alemania", 981290871);
        $anais = new Friends("Anais", "Rojas", "Mérida, Madrid", 19827391);

        // METODO ITERATIVO PARA MOSTRAR LOS DATOS:⤵

        // $friendsArr = ["Andrés" => $andres, "Gabriel" => $gabriel, "Anais" => $anais];

        // foreach($friendsArr as $name => $properties) {
        //     foreach($properties as $properName => $value) {
        //         echo "El $properName de $name es $value <br>";
        //     }
        //     echo "<br>";
        // }
        ?>

        <?= show_obj_data($andres) ?>
        <br>
        <?= show_obj_data($gabriel) ?>
        <br>
        <?= show_obj_data($anais) ?>
        </div>
        <h1>
            Ejercicio 2
        </h1>
        <p>
            Crea una clase llamada <em>Viajes</em> con propiedades básicas relacionadas y un método para mostrar por pantalla los valores. Crea dos instancias de la clase y usando el método <em>datosViajes()</em> muestra las propiedades de los viajes

        </p>
        <div class="output">
        <?php
        $mar_to_mad =  new Travels();
        $mar_to_mad->origen = "Maracaibo, Venezuela";
        $mar_to_mad->destino = "Madrid, España";
        $mar_to_mad->precio = 879.99;
        $mar_to_mad->metodo = "Avión";
        $mar_to_mad->travelData();

        $bar_to_bog = new Travels();
        $bar_to_bog->origen = "Barcelona, España";
        $bar_to_bog->destino = "Bogotá, Colombia";
        $bar_to_bog->precio = 669.79;
        $bar_to_bog->metodo = "Avión";
        $bar_to_bog->travelData();
        ?>
        </div>
        <h1>
            Ejercicio 3
        </h1>
        <p>
            Crea una clase de <em>Coches</em> con propiedades relacionadas, y un puñado de métodos. Usa todo lo que hayas creado para mostrar los datos de las instancias y usar sus métodos

        </p>
        <div class="output">
        <?php
        $coche1 = new Vehicule("Ford", "Silverado", "139 CC", "Black", 21000);
        $coche2 = new Vehicule("Volkswagen", "Crossover", "13 CC", "Red", 8000);
        $coche3 = new Vehicule("Tesla", "S", "300w", "White", 98100);

        $coche1->get_data();
        echo "<br>";
        $coche2->get_data();
        echo "<br>";
        $coche3->get_data();
        echo "<br>";
        ?>
        <br>
        <?= $coche1->start_engine() ?>
        <br>
        <?= $coche2->c_gear(1) ?>
        <br>
        <?= $coche2->c_gear(1) ?>
        <br>
        <?= $coche3->accelerate() ?>
        

        </div>
    </div>
</body>
</html>