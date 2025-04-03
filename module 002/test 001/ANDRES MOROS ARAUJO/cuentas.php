<?php

include_once("clientes.php");

class Cuentas extends Clientes{
    
    public function __construct(
        string | int $cod_cliente,
        string $nombre,
        string $apellido,
        string $email,
        private string $num_cuenta,
        private float $saldo,
        private string $moneda
    )
    {
        parent::__construct($cod_cliente, $nombre, $apellido, $email);
    }

    public function __destruct()
    {
        echo "cliente1 ha sido destruido";
    }

    // Métodos set
    public function set_num_cuenta (string $str) {
        $this->num_cuenta = $str;
    }

    public function set_saldo (float $n) {
        $this->saldo = $n;
    }

    public function set_menoda (string $str) {
        $this->moneda = $str;
    }

    // Métodos get 
    public function get_num_cuenta () {
        return $this->num_cuenta;
    }

    public function get_saldo () {
        return $this->saldo;
    }

    public function get_menoda () {
        return $this->moneda;
    }

    // Métodos

    public function get_data () {
        echo "Datos del cliente y cuenta<br>";

        foreach($this as $key => $value) {
            echo ucfirst($key) . " : " . $value . "<br>";
        }
    }
}



?>