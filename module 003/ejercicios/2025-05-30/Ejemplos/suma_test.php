
<?php

    use PHPUnit\Framework\TestCase;
    class suma_test extends TestCase
    {
        public function testSumaA()
        {
            $this->assertEquals(4, SumaDosA(2, 2), "Sin coincidencia");
        }

        public function testSumaB()
        {
            $suma_dos = new suma(); // Objeto creado a partir de la clase a probar.
            $this->assertEquals(4, $suma_dos->SumaDosB(2, 2),"Sin coincidencia");
        }
    }

?>