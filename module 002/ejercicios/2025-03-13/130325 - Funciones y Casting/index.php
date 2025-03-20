<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Funciones y casting</title>
</head>

<body>
    <?php
    # ------------------- Ejercicio 1
    print("<h2>Ejercicio 1</h2>");
    $num1 = "4.9";
    $num2 = "2.5";
    $num3 = (float)$num2 * (float)$num1;
    print($num3);
    print("<hr>");

    # ------------------- Ejercicio 2
    print("<h2>Ejercicio 2</h2>");
    include("datos_cliente.php");

    print(nl2br("
        El nombre del cliente es: $client_name\n
        El código del cliente es:  $client_code\n
        La dirección del cliente es: $client_address\n
        El teléfono del cliente es: $client_phone\n
        El correo electrónico del cliente es: $client_email
        "));
    print("<hr>");

    # ------------------- Ejercico 3
    print("<h2>Ejercicio 3</h2>");

    $a = 3.987;

    function suma(&$num)
    {
        $b = 3;
        $c = intval($num) + $b;
        print(nl2br("El valor de la variable 'a' es $num\n
        El valor de la variable 'b' es $b\n\n"));
        return $c;
    };

    print(suma($a));
    print("<hr>");

    # ------------------- Ejercicio 4
    print("<h2>Ejercicio 4</h2>");

    $string = "Sorochoneria";
    $integer = 9;
    $real = 3.54;
    $boolean = true;
    $nothing = null;
    define("FIJO", "PHP");
    # Creación de las variables de varios tipos

    $arr = array($string, $integer, $real, $boolean, $nothing, FIJO);
    for ($i = 0; $i < count($arr); $i++) {
        print(gettype($arr[$i]) . "<br>");
    }
    # Mostrar en pantalla el valor y tipo de todas las variables creadas

    unset($boolean);
    print("<br><br>");
    print(isset($boolean) ? "Sí, existe a variable 'boolean'" : "No, no existe la variable 'boolean'");
    print("<br><br>");
    # Verificar la existencia de la variable $boolean después de eliminarla

    settype($integer, "string");

    print(var_dump($integer) . "<br>");
    print("Versión de PHP:" . PHP_VERSION . "<br>");
    print("Sistema operativo del servidor:" . PHP_OS . "<br>");
    print("Servidor:" . PHP_SAPI . "<br>");
    print("Ruta de ejecución actual:" . __DIR__ . "<br>");
    # Uso de constantes predefinidas
    ?>
</body>

</html>