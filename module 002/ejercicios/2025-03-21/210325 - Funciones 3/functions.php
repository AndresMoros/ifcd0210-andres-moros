<?php

# Ejercicio 1

// - Crea una función flecha que incremente en una unidad el número que se le introduzca como parámetro.
// - Mostrar el número incrementado por pantalla.


$rn = rand(1,50);

$plus_one = fn (int $n) => ++$n;

# Ejercicio 2

// • Crea una función anónima que inserte en un párrafo el texto “Hola -tu nombre-, ¿cómo estás?”.
// • El nombre se introducirá en la función como parámetro.
// • La función no retorna ningún valor.

$say_hi = function (string $name) {
    echo "Hola $name, ¿cómo estás?";
};

# Ejercicio 3

$rand_jokes = function () {
    $jokes = [
        "¿Por qué el programador prefería el modo oscuro? Porque la luz atraía bugs.",
        "¿Qué hace un perro con un taladro? ¡Taladrando!",
        "¿Por qué el programador no tiene novia? Porque pasa todo el día debuggeando su vida.",
        "¿Qué le dice una iguana a su hermana gemela? ¡Iguanita tú!",
        "¿Por qué los pájaros no usan WhatsApp? Porque ya tienen Twitter.",
        "¿Qué hace un matemático en una fiesta? Busca el ángulo perfecto para socializar.",
        "¿Por qué el tomate se puso rojo? ¡Porque vio a la salsa!",
        "¿Qué le dice una impresora a otra? ¿Esa hoja es tuya o es una copia?",
        "¿Por qué el astronauta terminó con su novia? Porque necesitaba espacio.",
        "¿Qué dijo el cero al ocho? ¡Qué cinturón tan bonito tienes!",
        "¿Por qué el libro de matemáticas estaba triste? Porque tenía demasiados problemas.",
        "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!",
        "¿Por qué el esqueleto no pelea? Porque no tiene agallas.",
        "¿Qué le dice un semáforo a otro? ¡No me mires, me estoy cambiando!",
        "¿Por qué el gato se sentó en el ordenador? Porque quería vigilar el ratón."
    ];
    echo $jokes[array_rand($jokes)];
};

?>