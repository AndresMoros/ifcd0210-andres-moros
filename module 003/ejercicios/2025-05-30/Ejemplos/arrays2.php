<?php
    
     class ArrayTest2
     {
          public $j1;
          public $j2;
          public $j3;
          public $j4;
          public $array2;
     
          public function __construct($juego1, $juego2, $juego3, $juego4)
          {
               $this->j1 = $juego1;
               $this->j2 = $juego2;
               $this->j3 = $juego3;
               $this->j4 = $juego4;
          }
         
          public function crearArray2()
          {
               $this->array2 = array("estrategia"=>$this->j1,"accion_RPG"=>$this->j2, 
               "Call of Duty"=>$this->j3, "plataformas_2D"=>$this->j4);
               return $this->array2;
          }
     
     }

     // Ejecución en una terminal:
            // phpunit --bootstrap arrays2.php arrays2_test.php


?>