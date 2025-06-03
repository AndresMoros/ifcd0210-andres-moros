<?php

class accounts {
    public function __construct(
        private int     $client_code,
        private string  $acc_num,
        private string  $name,
        private string  $last_name,
        private float   $balance,
    )
    {
        // Optional function
    }

    // Object GET methods
    public function get_client_code() {
        return $this->client_code;
    }

    public function get_acc_num() {
        return $this->acc_num;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_last_name() {
        return $this->last_name;
    }

    public function get_balance() {
        return $this->balance;
    }

    // Object SET methods
    public function withdraw(float $amount) {
        $this->balance -= $amount;
        return "$amount has been withdrawn";
    }

    public function recharge(float $amount) {
        $this->balance += $amount;
        return "$amount has been recharged";
    }
}


