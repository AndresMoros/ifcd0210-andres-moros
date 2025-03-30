<?php
// Ejercicio 4.
// • Crea la clase Multiplicacion a partir de la clase Aritmetica y guárdala en el
// archivo Multiplicacion.php.
// • Incluye en ella un método público para multiplicar numero1 y numero2.
// • Crea un objeto de la clase Multiplicacion y a través de él, carga valores en las
// variables, realiza la multiplicación y muestra el resultado por pantalla con un
// mensaje relacionado que incluya cuanto valen los números que se multiplican.
// • Guarda este objeto en el archivo Objetos4.php
include_once "arithmethic.php";

class Multiply extends Arithmethic {
    public function multiply () {
        $this->result = $this->num1 * $this->num2;
    }
}
?>