<?php
// Crea la clase clientes con sus respectivas carácterísticas, incluye un método constructor para la inicialización las propiedades al crear las instancias, y crea métodos get y set para acceder y modificar sus propiedades protegidas

class Clientes {

    public function __construct(
        protected string | int $cod_cliente,
        protected string $nombre,
        protected string $apellido,
        protected string $email
    )
    {}
    
    // Métodos set
    public function set_cod (string | int $code) {
        $this->cod_cliente = $code;
    }

    public function set_nombre (string $str) {
        $this->nombre = $str;
    }

    public function set_apellido (string $str) {
        $this->apellido =  $str;
    }

    public function set_email (string $str) {
        $this->email = $str;
    }

    // Métodos get

    public function get_cod () {
        return $this->cod_cliente;
    }

    public function get_nombre () {
        return $this->nombre;
    }

    public function get_apellido () {
        return $this->apellido;
    }

    public function get_email () {
        return $this->email;
    }
}
?>