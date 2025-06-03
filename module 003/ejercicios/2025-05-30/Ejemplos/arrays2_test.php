<?php

/* Arrays creados en el archivo test incluidos dentro de una clase. */

    use PHPUnit\Framework\TestCase;
  
    class arrays2_test extends TestCase
    {
              
        public function testArrays2()
        {

            $videojuegos = new ArrayTest2("Dawn of War","The Elder Scrolls V: Skyrim","Call of Duty","Super Mario Bros - Wonder");
            $array_videojuegos = $videojuegos->crearArray2();
         
            /* Aserciones. */

            //$this->assertArrayHasKey("estrategia", $array_videojuegos, "No existe la clave especificada"); //Correcto. Existe la clave estrategia.
            //$this->assertArrayHasKey("puzzle", $array_videojuegos, "No existe la clave especificada"); // Error. Clave inexistente.*/
            $this->assertArrayNotHasKey("arcade", $array_videojuegos, "No existe el índice especificado"); // Correcto. Clave inexistente.*/
            //$this->assertContains("Dawn of War", $array_videojuegos,"No existe el valor especificado"); // Correcto. Videojuego existente.
            //$this->assertNotContains("Dawn of War", $array_videojuegos,"No existe el valor especificado"); // Error. Videojuego existente.
            //$this->assertNotContains("Borderlands 2", $array_videojuegos,"No existe el valor especificado"); // Correcto. Videojuego inexistente.
        }
    }


    
?>