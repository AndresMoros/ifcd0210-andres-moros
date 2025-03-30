<?php
// Ejercicio 1
// • Crea la clase Aritmetica las siguientes propiedades protegidas:
//     o numero1, numero2 y resultado.
// • Crea un método público para cargar un número en la propiedad numero1.
// • Crea un método público para cargar un número en la propiedad numero2.
// • Crea un método público para obtener el contenido de la variable resultado.
// • Guarda esta clase en el archivo Aritmetica.php

class Arithmethic {

    protected float $num1;
    protected float $num2;
    protected float $result;
    protected bool $logic = true;

    // Method to set a number in "num2"
    public function set_num1 (float $num) {
        $this->num1 = $num;
    }

    // Method to set a number in "num2"
    public function set_num2 (float $num) {
        $this->num2 = $num;
    }

    // Method to get the value of "result"
    public function get_result () {
        if($this->logic == false) {
            return "ERROR";
        }
        return $this->result;
    }
}

?>