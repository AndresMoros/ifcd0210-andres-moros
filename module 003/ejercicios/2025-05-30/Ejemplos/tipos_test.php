<?php

    use PHPUnit\Framework\TestCase;

    $texto;
    $valor;
   
    class tipos_test extends TestCase
    {
        public function testSumaA_Entero()
        {
            $this->assertIsInt(SumaDosA(2, 2));
        }

        public function testSumaB_Entero()
        {
            $suma_dos = new suma(); // Objeto creado a partir de la clase a probar.
            $this->assertIsInt($suma_dos->SumaDosB(2, 2));
        }

        public function testTipos()
        {
            // Variables locales.
            $numero1=20;
            $numero2 = 20.80;
 
            // Variables globales.

            global $texto, $valor, $datos;
            $texto = "phpunit";
            $valor = false;
          
            // Objeto.

            $resultado = new suma();

            // Array.
            
            $datos = array(3,8,9.2,false, null,"pruebas");

            // Aserciones.

            $this->assertIsInt($numero1, "No es un número entero");
            $this->assertIsFloat($numero2);
            $this->assertIsString($texto);
            $this->assertIsBool($valor);
            $this->assertIsArray($datos,"No es un array");
            $this->assertIsObject($resultado);
        
        }

    }

?>