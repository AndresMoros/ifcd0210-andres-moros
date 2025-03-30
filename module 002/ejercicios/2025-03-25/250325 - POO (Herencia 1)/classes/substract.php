<?php
// Ejercicio 3.
// • Crea la clase Resta a partir de la clase Aritmetica y guárdala en el archivo
// Resta.php.
// • Incluye en ella un método público para restar numero1 y numero2.
// • Crea un objeto de la clase Resta y a través de él, carga valores en las variables,
// realiza la resta y muestra el resultado por pantalla con un mensaje relacionado
// que incluya cuanto valen los números que se restan.
// • Guarda este objeto en Objetos4.php.
include_once "arithmethic.php";

class Substract extends Arithmethic {
    public function substract () {
        $this->result = $this->num1 - $this->num2;
    }
}
?>