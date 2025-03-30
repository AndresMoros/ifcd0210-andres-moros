<?php
// Ejercicio 1
// • Crear la clase Cuentas y guardarla en el archivo Cuentas.php.
// • Esta clase contendrá las siguientes propiedades privadas:
//     o codcliente.
//     o numeroCuenta.
//     o nombre.
//     o apellidos.
//     o saldo.
// • Incluir un método constructor con parámetros y otro destructor.
// • Añadir también los métodos ingresarDinero(), sacarDinero() y consultarSaldo().
// • Crear un cliente (objeto) y aguardarlo en el archivo Objetos3.php.
// • Mostrar los datos actuales del cliente con un bucle foreach.
// • Operaciones con el cliente:
//     o Sacar 1.000,00 euros de su cuenta.
//     o Confirmar que el saldo ha cambiado.
//     o Ingresar 500,00 euros en la cuenta.
//     o Mostrar el nuevo saldo
// 

class Accounts {
    public function __construct(
        private string $cli_code,
        private string $acc_num,
        private string $name,
        private string $last_name,
        private float $balance,
        // private string $password
    )
    {}

    public function __destruct()
    {
        return "Account deleted";
    }

    public function deposit(float $n) {
        $this->balance += $n;
        return number_format($n, 2, ",", ".") . " has been deposited";
    }

    public function withdraw(float $n) {
        $this->balance -= $n;
        return number_format($n, 2, ",", ".") . " has been draw";
    }

    public function get_balance() {
        return "Your balance is " . number_format($this->balance, 2, ",", ".") . " €";
    }

    public function get_data() {
        foreach($this as $key => $value) {
            print(nl2br("$key: $value\n"));
        }
    }
}

?>