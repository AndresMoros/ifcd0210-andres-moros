<?php
// Ejercicio 2.
// • Crear la clase Círculos y guárdala en el archivo Circulos.php.
// • Dicha clase contendrá las variables privadas que se necesiten.
// • También tendrá los siguientes 3 métodos para:
//     o calcular el diámetro, sabiendo que éste es dos veces el radio.
//     o calcular la circunferencia mediante la fórmula: 2 * PI * radio.
//     o calcular el área del círculo, mediante la multiplicación de PI por el radio al cuadrado.
// • Crear un método constructor.
// • Crear un método destructor.
// • Crear los métodos get y set que se necesiten.
// • El valor de PI cargarlo en una constante.
// • Los métodos, además de las operaciones, mostraran un mensaje por pantalla con el cálculo realizado similar a El diámetro/área/circunferencia de un círculo de radio … es …. .
// • En el archivo Objetos3.php, crear 3 círculos de 5, 10 y 15 unidades de radio.
// • Operaciones con los círculos:
//     o Consultar el valor del radio para un círculo cualquiera.
//     o Cambiar el valor del radio de un círculo por otro.
//     o Calcular los valores del diámetro, circunferencia y área para los 3 círculos.

class Cirles {
    private const PI = 3.14;
    private float $diameter = 0;
    private float $circunference = 0;
    private float $area = 0;

    public function __construct(
        private float $radio,
        )
    {}

    public function get_diameter () {
        $this->diameter = $this->radio * 2;
        return nl2br("Radio: $this->radio
        Diameter: $this->diameter");
    }

    public function get_circunference () {
        $this->circunference = 2 * $this::PI * $this->radio;
        return nl2br("Radio: $this->radio
        Circunference: $this->circunference");
    }

    public function get_area () {
        $this->area = $this::PI * pow($this->radio, 2);
        return nl2br("Radio: $this->radio
        Circunference: $this->area");
    }
}
?>