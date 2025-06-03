<?php

use PHPUnit\Framework\TestCase;

include(__DIR__ . "../scripts/accounts.php");


class accounts_test extends TestCase
{
    public function test_types()
    {
        $account1 = new accounts(312, "E80S-0000-0000-0000", "Andrés", "Moros Araujo", 81.21);
        $this->assertIsInt($account1->get_client_code());
        $this->assertIsString($account1->get_acc_num());
        $this->assertIsString($account1->get_name());
        $this->assertIsString($account1->get_last_name());
        $this->assertIsFloat($account1->get_balance());
    }
    public function test_null()  {
        $account1 = new accounts(312, "E80S-0000-0000-0000", "Andrés", "Moros Araujo", 81.21);
    }
}
