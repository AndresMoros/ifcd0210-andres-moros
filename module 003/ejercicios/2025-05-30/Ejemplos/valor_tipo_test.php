<?php
    use PHPUnit\Framework\TestCase;
        class valor_tipo_test extends TestCase
        {
            
            public function testValores0()
            {
                $num1 = 4;
                $num2 = "4";
                $this->assertSame($num1, SumaDosA(2, 2), "Sin coincidencia");
                // Son iguales, tipo y valor coinciden. Comparación entre variable y resultado de función.
                //$this->assertNotSame($num2, SumaDosA(2, 2), "Sin coincidencia");
                // Correcto, tipo y valor no coinciden. Comparación entre variable y resultado de función.
            }
            public function testValores1()
            {
                $suma_dos1 = new suma(); // Objeto creado a partir de la clase a probar.
                $this->assertSame($suma_dos1->SumaDosB(2, 2), SumaDosA(2, 2), "Sin coincidencia");
                // Son iguales, tipo y valor coinciden. Comparación entre resultados de funciones.
                //$this->assertNotSame($suma_dos1->SumaDosB(2, 2), SumaDosA(2, 2), "Sin coincidencia");
                // Error por coincidir en tipo y valor, cuando se pregunta por lo contrario. Comparación entre resultados de funciones.
            }
            
           /* public function testValores2()
            {
                $suma_dos2 = new suma(); // Objeto creado a partir de la clase a probar.
                $this->assertSame($suma_dos2->SumaDosB(2, 5), SumaDosA(2, 2), "Sin coincidencia");
                // Error, no son iguales, no coinciden en valor. Comparación entre resultados de funciones.
            }
            */
            public function testValores3()
            {
                $suma_dos3 = new suma(); // Objeto creado a partir de la clase a probar.
                $this->assertSame(4, $suma_dos3->SumaDosB(2, 2),"Sin coincidencia");
                // Son iguales, tipo y valor coinciden. Comparación entre literal y resultado de función.
            }
/*
            public function testValores4()
            {
                $suma_dos4 = new suma(); // Objeto creado a partir de la clase a probar.
                $this->assertSame("4", $suma_dos4->SumaDosB(2, 2),"Sin coincidencia");
                // Error, no son iguales, no coinciden en tipo. Comparación entre literal y resultado de función.
                //$this->assertNotSame("4", $suma_dos4->SumaDosB(2, 2),"Sin coincidencia");
                // Correcto, no son iguales, no coinciden en tipo. Comparación entre literal y resultado de función.
            }*/

        }
?>