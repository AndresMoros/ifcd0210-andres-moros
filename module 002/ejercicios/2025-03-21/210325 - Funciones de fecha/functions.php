<?php
# Ejercicio 1

// • Muestra en varios párrafos del documento web los siguientes contenidos:
// o El texto Fecha y hora del sistema
// o La fecha actual con el año con 4 dígitos.
// o La hora actual incluyendo los segundos.

function get_time (){
    $now_date = date("d-m-Y");
    // El formato es:
        // d: día
        // m: mes
        // Y: año con 4 dígitos
    $now_hour = date("H:i:s");
    // El formato es:
        // H: 24 hroas
        // i: minutos
        // s: segundos
    return "Fecha y hora del sistema: <br>
            Fecha: <span class=\"time\">$now_date</span><br>
            Hora: <span class=\"time\">$now_hour</span>";
}

# Ejercicio 2

// • Muestra en un párrafo el texto Saludo.
// • Muestra en otro párrafo una de estas 3 frases:
// o Buenos días.
// o Buenas tardes.
// o Buenas noches.
// • El saludo que aparezca debe coincidir con la hora del día actual, es decir, si son
// las 22:00 horas, debe aparecer Buenas noches.
// • Incluye el código necesario dentro de una función con el nombre Saludo().

function saludo() {
    return match(true) {
        date("H") < 12 => "Buenos días",
        date("H") < 18 => "Buenas tardes",
        date("H") <= 24 => "Buenas noches",
    };
}

# Ejercicio 3.
// • Crea un objeto de la clase DateTime() con la fecha y hora actual y, a partir de él,
// muestra en varios párrafos del documento web los siguientes contenidos:
// o El texto Objeto Fecha y Hora.
// o La fecha actual con el año con 2 dígitos.
// o El día de la semana actual en número.
// o El día de la semana actual como texto.
// o El mes actual en número.
// o El mes actual como texto.
// o El año actual
// o Sólo la hora actual.
// o Fecha y hora actual, con el año de 4 dígitos y la hora con segundos.

$date_obj = new DateTime();
?>