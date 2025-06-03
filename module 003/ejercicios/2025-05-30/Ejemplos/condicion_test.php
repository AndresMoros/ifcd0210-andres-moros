<?php
    use PHPUnit\Framework\TestCase;
        class condicion_test extends TestCase
        {
            
            /* Con datos incluidos en el archivo de prueba. */
            
            public function testVerdadero()
            {
                $a = 20;
                $b = false;
                $c = ($a>5);
          
                // $this->assertTrue($b, "Resultado no verdadero");
                // Error. La variable $b no contiene un valor verdadero.
                $this->assertNotTrue($b, "Resultado no verdadero");
                // Correcto. La variable $b no contiene un valor verdadero.
                 $this->assertTrue($c, "Resultado no verdadero");
                // Correcto. La variable $c contiene un valor verdadero.
                //$this->assertNotTrue($c, "Resultado no verdadero");
                // Error. La variable $c contiene un valor verdadero.
                $this->assertTrue(isset($c), "Variable inexistente");
                // Correcto. La variable $c existe.
                //$this->assertTrue(isset($d), "Variable inexistente");
                // Error. La variable $d no existe.
                
            }

            /* Con un objeto creado a partir de una clase externa. */

            public function testVerdaderoClase()
            {
                    
                $resultado = new suma();
                $valor = $resultado->SumaDosB(5,10);
                $condicion = ($valor==15);

                $this->assertTrue(($condicion) , "Resultado no verdadero");
                // Correcto. La variable $condicion contiene un valor verdadero.
                //$this->assertNotTrue(($condicion) , "Resultado no verdadero");
                // Error. La variable $condicion contiene un valor verdadero.
                
            }

       /* Con datos incluidos en el archivo de prueba. */
       
            /*public function testFalso()
            {
                $a = 20;
                $b = true;
                $e = ($a<5);
               
               // $this->assertFalse($b, "Resultado verdadero");
                // Error. La variable $b no contiene un valor falso.
                $this->assertNotFalse($b, "Resultado verdadero");
                // Correcto. La variable $b contiene un valor falso.
                $this->assertFalse($e, "Resultado verdadero");
                // Correcto. La variable $e contiene un valor falso.
                //$this->assertNotTrue($e, "Resultado verdadero");
                // Error. La variable $e contiene un valor falso.
                $this->assertFalse(isset($z), "Variable existente");
                // Correcto. La variable $z no existe.
                //$this->assertFalse(isset($d), "Variable existente");
                // Error. La variable $d si existe.
            } */    

            /* Con un objeto creado a partir de una clase externa. */

            public function testFalsoClase()
            {
                    
                $resultado = new suma();
                $valor = $resultado->SumaDosB(5,10);
                $condicion = ($valor==15);

                $this->assertFalse(($condicion) , "Resultado verdadero");
                // Error. La variable $condicion no contiene un valor falso.
                //$this->assertNotFalse(($condicion) , "Resultado no verdadero");
                // Correcto. La variable $condicion contiene un valor no falso.
                
            }
        }        

        
?>