<?php
// Personas.php.
// o Crea la clase Personas con las siguientes propiedades protegidas:
//     o dni, nombre, apellidos y edad.
// o Para inicializar los objetos al crearse, incluye un método constructor.
// o Crea los métodos get necesarios para obtener los datos de cada
// propiedad: (getDNI(), getNombre(), getApellidos() y getEdad()).
// o Crea distintos métodos set para, en caso de ser necesario, modificar los datos de las propiedades: (setDNI(), setNombre(), setApellidos() y
// setEdad()).
// o Guarda la clase en el archivo Personas.php dentro de la carpeta clases.

class People {
    public function __construct(
        protected string $dni,
        protected string $name,
        protected string $last_name,
        protected int $age,
    ){}

    // GET METHODS ⤵
    public function get_dni() {
        return $this->dni;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_last_name() {
        return $this->last_name;
    }

    public function get_age() {
        return $this->age;
    }

    // SET METHODS ⤵
    public function set_dni(string $str) {
        $this->dni = $str;
        return;
    }

    public function set_name(string $str) {
        $this->name = $str;
        return;
    }

    public function set_last_name(string $str) {
        $this->last_name = $str;
        return;
    }

    public function set_age(int $num) {
        $this->age = $num;
        return; 
    }
}
?>