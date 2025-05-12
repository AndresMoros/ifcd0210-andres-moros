<?php
require_once("connection.php");

###
# Verificar que el botón de Registrar fue pulsado
##

if(isset($_POST["submit-btn"])){
    register($_POST, $connection);
} else {
    echo "No se ejecutó la función";
}

function register(array $arr, $access) {
    unset($arr["submit-btn"]);
    
    $escaped =  array_map(function($value) {
        return "'" . $value . "'";
    }, $arr);

    $args = implode(", ", $escaped);

    $query = "INSERT INTO usuarios (
    usuario, 
    nombre, 
    apellidos, 
    correoElectronico,
    contraseña)
    VALUES 
    ($args)";

    mysqli_query($access, $query);
    echo "Registrado con éxito";
}

mysqli_close($connection);
?>