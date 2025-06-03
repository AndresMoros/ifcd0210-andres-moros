<?php

/* Arrays creados a partir de una clase. */

    use PHPUnit\Framework\TestCase;
  
    class arrays1_test extends TestCase
    {
              
        public function testArrays1()
        {

            $numeros = new ArrayTest1(10,20,30,40,50);
            $array_numeros = $numeros->crearArray1();
         
            /* Aserciones. */

            //$this->assertArrayHasKey(1, $array_numeros, "No existe el índice especificado"); // Correcto. Índice 1 existente.
            //$this->assertArrayHasKey(8, $array_numeros, "No existe el índice especificado"); // Error. Índice 8 inexistente.*/
            //$this->assertArrayNotHasKey(8, $array_numeros, "No existe el índice especificado"); // Correcto. Índice 8 inexistente.*/
            //$this->assertContains(30, $array_numeros,"No existe el valor especificado"); // Correcto. Valor 30 existente.
            //$this->assertNotContains(30, $array_numeros,"No existe el valor especificado"); // Error. Valor 30 existente.
            $this->assertNotContains(90, $array_numeros,"No existe el valor especificado"); // Correcto. Valor 90 inexistente.
        }
    }


    
?>