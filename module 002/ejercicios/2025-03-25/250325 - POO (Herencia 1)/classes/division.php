<?php
// Ejercicio 5.
// • Crea la clase Division a partir de la clase Aritmetica y guárdala en el archivo
// Division.php
// • Incluye en ella un método público para dividir numero1 y numero2
// • Crea un objeto de la clase Division y a través de él, carga valores en las
// variables, realiza la división y muestra el resultado por pantalla con un mensaje
// relacionado que incluya cuanto valen los números que se dividen.
// • Guarda este objeto en Objetos4.php

include_once("arithmethic.php");

class Divison extends Arithmethic{
    public function split () {
        if ($this->num1 == 0 || $this->num2 == 0) {
            $this->logic = false;
            return;
        }
        $this->result = $this->num1 / $this->num2;
    }
}
?>