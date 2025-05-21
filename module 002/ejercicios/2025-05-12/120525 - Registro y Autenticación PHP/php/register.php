<?php
require_once("connection.php");

###
# Verificar que el botón de Registrar fue pulsado
##

$output = "";

if(isset($_POST["submit-btn"])){
    $output = register($_POST, $connection) ? "Usuario registrado con éxito" : "Ha ocurrido un error";
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

    return mysqli_query($access, $query) ? true : false;
    // echo "Registrado con éxito";
}

mysqli_close($connection);
?>