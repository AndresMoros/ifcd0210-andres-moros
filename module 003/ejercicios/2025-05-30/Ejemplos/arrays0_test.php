<?php
    
    /* Arrays creados en el archivo test de prueba. */
    
    use PHPUnit\Framework\TestCase;
   
    class arrays0_test extends TestCase
    {
              
        public function testArrays0()

        {
        
        /*Aserción assertArrayHasKey(). */

        /* Datos del Array en archivo actual. */
            
            $numeros = array(10,20,30,40,50);
            $videojuegos = array("estrategia" => "Dawn of War","accion_RPG"=>"The Elder Scrolls V: Skyrim",
            "accion" => "Call of Duty","plataformas_2D"=>"Super Mario Bros - Wonder");
            
        /* Aserciones. */
            
            //$this->assertArrayHasKey(0, $numeros, "No existe el índice especificado");
           // $this->assertArrayHasKey("estrategia", $videojuegos, "No existe el índice especificado");
            
            /*$this->assertArrayHasKey(20, $numeros, "No existe el índice especificado"); // Error. Índice inexistente.
            $this->assertArrayHasKey("puzzle", $videojuegos, "No existe el índice especificado"); // Error. Clave inexistente.*/
         
           
        
        /* Datos del Array en archivo externo. */

        /* Aserciones. */

            //$this->assertArrayHasKey(2, [2=>6], "No existe el índice especificado"); 
            //$this->assertArrayHasKey(4, [2=>6], "No existe el índice especificado"); // Error. Índice inexistente.
        
        /*Aserción assertArrayNotHasKey(). */

        /* Mismos datos para operar que en los ejemplos anteriores. */

        /* Aserciones. */

            //$this->assertArrayNotHasKey(20, $numeros, "No existe el índice especificado"); // Correcto. Índice inexistente.
            //$this->assertArrayNotHasKey("puzzle", $videojuegos, "No existe el índice especificado"); // Correcto. Clave inexistente.
            //$this->assertArrayNotHasKey(4, [2=>6], "No existe el índice especificado"); // Correcto. Índice inexistente.
        
        /*Aserciones assertContains() / assertNotContains(). */

       /* Aserciones. */

        /* Mismos datos para operar que en los ejemplos anteriores. */

            //$this->assertContains(30, $numeros,"No existe el valor especificado"); // Correcto. Valor 30 existe en $numeros.
            //$this->assertNotContains(30, $numeros, "No existe el valor especificado"); // Error. Valor 30 si existe en $numeros.
            //$this->assertNotContains(80, $numeros, "No existe el valor especificado"); // Correcto. Valor 80 no existe en $numeros.
            
            //$this->assertContains("Dawn of War", $videojuegos,"No existe el valor especificado"); // Correcto. El juego existe en el array $videojuegos.
            //$this->assertNotContains("Fallout 4", $videojuegos, "No existe el valor especificado"); // Error. El juego no existe en el array $videojuegos.
            $this->assertNotContains("Stalker 2", $videojuegos, "No existe el valor especificado"); // Correcto. El juego existe en el array $videojuegos.
        
        /* Datos del array para operar dentro de la aserción. */

            //$this->assertContains(8, [2,5,3,6,7,8], "No existe el valor especificado"); // Correcto. Valor 8 existente.
            //$this->assertNotContains(8, [2,5,3,6,7,8], "No existe el valor especificado"); // Error. Valor 8 existente.
        }

    }



    
?>