<?php

require_once("connection.php");

###
# Mientras no se presione el botón de submit, la función login() no se ejecturá
# De lo contrario, se sigue con el programa para verificar la contreseña
##
$output = "";

if (isset($_POST["submit-btn"])) {
    $output = login($_POST, $connection);
}


function login(array $arr, $access): string
{

    ###
    # Se guardan las entradas del usario en variables
    ##
    $usuario = $arr["user"];
    $clave = $arr["pass"];

    ###
    # Se obtienen el numero de resultados al guardar el usuario
    # Si hay al menos un resultado, mysqli_num_rows() retornará 1, si no 0
    ##

    $user_result = mysqli_num_rows(mysqli_query($access, "SELECT * FROM usuarios WHERE usuario = '$usuario'"));

    ###
    # Si no se encuetran ningún registro con ese valor en Usuario, entonces se indica que el usuario no se encontró.
    # De lo contrario, se sigue con el programa para verificar la contreseña
    ##

    if ($user_result == 0) {
        return "Usuario no encontrado";
    }

    ###
    # Se verifica que el usuario y la contraseña coincidan usando de nuevo mysqli_num_rows()
    # Si el resultado da 0, entonces se indica que la contraseña es inválida, caso contrario se da acceso al usuario
    ##

    $is_pass_correct = mysqli_num_rows(mysqli_query($access, "SELECT * 
FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$clave'"));

    if ($is_pass_correct == 0) {
        return "Contraseña inválida";
    }

    return "Bienvenido";
    mysqli_close($access);
}
