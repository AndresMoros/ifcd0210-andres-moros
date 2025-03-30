<?php

// Ejercicio 2.
// • Crea la clase Suma a partir de la clase Aritmetica y guárdala en el archivo
// Suma.php
// • Incluye en ella un método público para sumar numero1 y numero2.
// • Crea un objeto de la clase Suma y a través de él, carga valores en las variables,
// realiza la suma y muestra el resultado por pantalla con un mensaje relacionado
// que incluya cuanto valen los números que se suman.
// • Este objeto se guardará en el archivo Objetos4.php
include_once "arithmethic.php";

class Addition extends Arithmethic {
    public function calculate () {
        $this->result = $this->num1 + $this->num2;
    }
}
?>