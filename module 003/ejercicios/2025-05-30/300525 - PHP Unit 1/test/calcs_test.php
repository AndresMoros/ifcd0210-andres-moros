<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class calcs_test extends TestCase {
    public function testSum() {
        $this->assertEquals(3, sum(1, 2));
    }

    public function testSubstrac() {
        $this->assertEquals(0, substrac(1, 1));
    }

    public function testMult() {
        $this->assertEquals(9, mult(3, 3));
    }

    public function testDiv() {
        $this->assertEquals(2.5, div(5, 2));
    }
}

?>