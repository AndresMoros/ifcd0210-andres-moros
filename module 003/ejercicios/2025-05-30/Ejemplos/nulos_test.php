<?php

    use PHPUnit\Framework\TestCase;
    $dato;
    class nulos_test extends TestCase
    {
        public function testSumaA_noNulo()
        {
            $this->assertNotNull(SumaDosA(2, 2));
        }

        public function testSumaB_noNulo()
        {
            $suma_dos = new suma(); // Objeto creado a partir de la clase a probar.
            $this->assertNotNull($suma_dos->SumaDosB(2, 2));
        }

        public function testVarNulo()
        {
            global $dato;
            //$dato = 7;
            $this->assertNull($dato,"Valor no nulo");
        }

    }

?>