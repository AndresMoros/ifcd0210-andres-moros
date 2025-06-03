<?php

class Usuario {

    public function __construct(
        private $nombre, 
        private $clave) 
    { }

    public function getDatos() {
        return "Nombre: " . $this->nombre . ", clave: " . $this->clave;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getClave() {
        return $this->clave;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }
}
?>