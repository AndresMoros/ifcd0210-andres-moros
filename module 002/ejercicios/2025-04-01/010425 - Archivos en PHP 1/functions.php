<?php

// Función para mover archivos
function move_file (string $file_temp, string $file_name) {

    $directory = "files/"; // Ruta a la que se guardarán los archivos
    $from_file = $file_temp; // Archivo que se copiará en la carpeta tmp de PHP
    $to_file = $directory . $file_name; // Cómo se guardará el archivo

    if(!move_uploaded_file($from_file, $to_file)) return "No se pudo copiar el archivo"; // Si el archivo no se puede mover, arroja un error y termina la ejecución de la función

    move_uploaded_file($from_file, $to_file); // Mover un archivo 
    return "Archivo copiado"; // Este mensaje solo sale si el archivo pudo copiarse correctamente
}



function print_photos (array $img_names, array $img_src) {
    echo "<table>";
    echo "<tr>";
    for($i = 0; $i < count($img_names); $i++) {
        echo "<th>$img_names[$i]</th>";
    }

    echo "</tr>";
    echo "<tr>";

    for($i = 0; $i < count($img_src); $i++) {
        echo "<td><img src='files/$img_src[$i]' width='200px'></td>";
    }

    echo "</tr>";
    echo "</table>";

}
?>