<?php
# Ejercicio 1

// • Crea un Array de la forma que quieras e incluye en él como elementos, las imágenes incluidas en la carpeta pla de archivo Arrays 8.zip.
// • Guarda las imágenes en una carpeta con el nombre de planetas dentro de la carpeta donde guardes el archivo PHP.
// • Insértalas al final de la página web usando un bucle for
// • Aplica a cada imagen un tamaño de 200 x 125 píxeles de tamaño con CSS, no es necesario texto alternativo.
// • Separa las imágenes entre sí con un margen externo de 10 píxeles.

$planets = [
    "jupiter",
    "marte",
    "saturno",
    "venus",
    "urano" 
];

function print_images($arr) {
    for($i = 0; $i < sizeof($arr); $i++) {
        print('<img src="pla/' . $arr[$i]. '.jpg" class="planet">');
    };
}

// --------------

# Ejercicio 2

// • Crea un Array de la forma que quieres e incluye en él como elementos las imágenes incluidas en la carpeta img de archivo Arrays 8.zip.
// • Guarda las imágenes en una carpeta con el nombre de imagenes dentro de la carpeta donde guardes el archivo PHP.
// • Las imágenes no necesitan cambiar su tamaño, ni texto alternativo.
// • Crea una división cuyo contenido será una tabla de 2 filas x 3 columnas que, a su vez, incluirá en cada celda una de las imágenes de la carpeta mencionada.
// • Inserta las imágenes a través de PHP

$images = [
    "bebida",
    "dvd",
    "guitarra",
    "mariposa",
    "prismaticos",
    "sol",
];

// --------------

# Ejercicio 3

// • Con los iconos que hay también en el archivo Arrays 8.zip., dentro de la carpeta "ico", crea otro Array.
// • Guarda los iconos en una carpeta con el nombre de iconos dentro de la carpeta donde guardes el archivo PHP.
// • Mantener el tamaño original de los iconos y no incluir en ellos textos alternativos.
// • Crea una lista no ordenada e incluye, como contenido de ésta, los distintos iconos desde el array de iconos.
// • Con CSS, elimina las viñetas de la lista y coloca sus elementos en línea

$icons = [
    "actualizar",
    "cancelar",
    "check",
    "deshacer",
    "favicon",
    "flecha",
    "mas"
];

function print_icons($arr) {
    foreach($arr as $el) {
        print("<li><img src='ico/$el.ico' class=\"icon\"></li>");
    }
}
?>