<?php
// Ejercicio 2.
// • Clase:
//      o Crea una clase llamada Viajes y guárdala en el archivo Viajes.php.
//      o Sus propiedades públicas serán:
//       ▪ origen, destino, precio y transporte y el método datosViaje().
//      o El método mostrará por pantalla en 3 líneas distintas:
//          ▪ Los datos del origen y del destino.
//          ▪ El precio del viaje.
//          ▪ El modo de transporte para realizar el viaje.
//      o No tendrá método constructor.
// • Objetos:
//      o Crea 2 instancias u objetos de la clase Viajes y guardarlas en objetos2.php.
//      o A través de ambos objetos llamar al método datosViaje(), para consultar sus datos.

class Travels {
    public string $origen;
    public string $destino;
    public float $precio;
    public string $metodo;
    
    public function travelData() {
        print(nl2br("
        Origen: $this->origen
        Destino: $this->destino
        Precio: $this->precio €
        Método de viaje: $this->metodo
        "));
    }
}

?>