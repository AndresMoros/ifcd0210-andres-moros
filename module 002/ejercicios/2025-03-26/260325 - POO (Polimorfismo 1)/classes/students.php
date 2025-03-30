<?php

// • Alumnos.php.
// o Crea la clase Alumnos extendida a partir de la clase Personas con las
// siguientes propiedades protegidas:
// o cod_alumno, teléfono y email.
// o Para inicializar los objetos al crearse, incluye un método constructor.
// o Crea los métodos get necesarios para obtener los datos de cada
// propiedad: (getCodigoAlumno(), getTelefono() y getCorreo()).
// o Crea distintos métodos set para, en caso de ser necesario, modificar los
// datos de las propiedades: (setCodigoAlumno(), setTelefono() y
// setCorreo()).
// o Guarda la clase en el archivo Alumnos.php dentro de la carpeta clases.

include_once("people.php");

class Students extends People{
    public function __construct(
        protected string | int $stud_code,
        protected string | int $phone,
        protected string $email,
        protected string $dni, 
        protected string $name, 
        protected string $last_name, 
        protected int $age
        )
    {
        parent::__construct($dni, $name, $last_name, $age);
    }

        // GET METHODS ⤵
        public function get_stud_code() {
            return $this->stud_code;
        }
    
        public function get_phone() {
            return $this->phone;
        }
    
        public function get_email() {
            return $this->email;
        }
    
        // SET METHODS ⤵
        public function set_stud_code(string | int $input) {
            $this->stud_code = $input;
            return;
        }
        
        public function set_phone(string | int $input) {
            $this->phone = $input;
            return;
        }
    
        public function set_email(string $email) {
            $this->email = $email;
            return; 
        }
}

?>