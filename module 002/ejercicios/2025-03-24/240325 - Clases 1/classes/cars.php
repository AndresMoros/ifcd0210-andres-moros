<?php
// Ejercicio 3

// • Clase:
//      o Crea la clase Coches y guárdala en Coches.php.
//      o Sus propiedades públicas serán:
//          ▪ marca, modelo, cilindrada, color y precio.
//      o Incluye un método constructor con los parámetros necesarios para inicializar dichas propiedades al crear un objeto.
//      o Incluye, además, los siguientes métodos:
//          ▪ El método datosCoche() sin parámetros que mostrará por pantalla todos los datos de cada coche.
//          ▪ El método arrancar(), que sólo mostrará el mensaje: Contacto y arranque.
//          ▪ El método acelerar(), que incluirá un parámetro para la velocidad y mostrará el mensaje: Aumentando velocidad hasta + velocidad.
//          ▪ El método cambiaMarcha(), que incluirá un parámetro para la marcha y mostrará el mensaje: Se ha introducido la + marcha + marcha.
// • Objetos:
//      o Crea 3 coches de la clase Coche y guárdalo en objetos2.php.
//      o Mostrar por pantalla los datos de cada coche.
//      o Llamar a los otros 3 métodos, utilizando uno distinto para cada coche.

class Vehicule {
// CREACION DE LA CLASE USANDO EL MÉTODO CONSTUCTOR PROPERTY PROMOTION (PHP +8.0.0)
    public function __construct(
        public string $brand,
        public string $model,
        public string $engine_capacity,
        public string $color,
        public string $price,
        readonly int $gear = 0,
    ){}

    public function get_data() {
        print(nl2br("
        Brand: $this->brand
        Model: $this->model
        Engine Capacity: $this->engine_capacity
        Color: $this->color
        Price: " . number_format($this->price, 2, ",", ".") . " €"));
    }

    public function start_engine () {
        return "The $this->brand - $this->model car just turn on 💥";
    }

    public function c_gear (int $val) {
        // the $val indicate if you wanna reduce or increase the current gear of the vehicule
        global $gear;
        if ($gear < 5 && $val == 1) {
            $gear++; 
            return "Now the $this->brand - $this->model are in the gear $gear";
        } else if ($gear == 5) {
            return "The $this->brand - $this->model are in the max gear: $gear";
        } else if ($gear == true && $val == -1) {
            $gear--;
            return "Now the $this->brand - $this->model are in the gear $gear";
        }
    }

    public function accelerate () {
        return "The $this->brand - $this->model has accelerate";
    }
}

?>