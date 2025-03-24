<?php
// Función para mostrar los datos de una isntancia 


function show_obj_data (object $obj) {
    $output = '';
    foreach($obj as $key => $value) {
        $output .= "$key: $value <br>";
    }
    return $output;
}

?>