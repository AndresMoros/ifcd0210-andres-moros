<?php
// Ejercicio 1.
// • Crea la clase Empleados1 con las siguientes propiedades privadas:
// Id, Nombre, Apellidos, Puesto, Sueldo y Antigüedad.
// • Para inicializar los objetos al crearse, incluye un método constructor.
// • El constructor debe permitir que, si no se incluye el identificador del empleado
// al crear un objeto, se le asigne uno aleatoriamente.
// • El identificador del empleado (Id) será numérico y estará comprendido entre
// los valores 1 y 1000.
// • Si son necesarios, usa métodos get y set.
// • Incluye el método Datos() para visualizar todas las características de un
// empleado por pantalla usando un bucle.
// • Crea 2 empleados concretos (objetos o instancias) de la siguiente manera:
// • Uno de ellos, con todos los datos necesarios en su constructor.
// • El otro, con todos los datos menos su código identificador (Id).
// • Muestra los datos de cada empleado

class Workers {
    public function __construct(
        protected string $name,
        protected string $last_name,
        protected string $position,
        protected string $salary,
        protected $id = null,
    )
    {
        $this->id = $id ?? rand(1000,9999);
    }
    public function get_data() {
        $output = "";
        foreach($this as $key => $value) {
            $output .= "$key: $value<br>";
        }
        return $output;
    }
    public function __destruct()
    {
        
    }
}
$andres = new Workers("Andrés", "Moros", "Frontend Developer", 1800);

$anais = new Workers("Anais", "Rojas", "Backend Software Engennier", 2200, 313);

class Trabajadores {
    public function __construct(
        protected string $name,
        protected string $last_name,
        protected string $position,
        protected string $salary,
        protected $id = null,
    )
    {
        if(func_get_args() != 5) {
            $this->id = rand(1000,9999);
        }
    }
    public function Datos() {
        $output = "";
        foreach($this as $key => $value) {
            $output .= "$key: $value<br>";
        }
        return $output;
    }

}

$sergio = new Trabajadores("Sergio", "José", "Data Engineer", 2400);
$francisco = new Trabajadores("Francisco", "Mogger", "Diseñador Gráfico", 1700, 120);


?>