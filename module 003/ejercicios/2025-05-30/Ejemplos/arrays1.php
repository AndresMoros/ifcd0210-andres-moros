<?php
    
     class ArrayTest1
     {
          public $n1;
          public $n2;
          public $n3;
          public $array1;
       
          public function __construct($num1, $num2, $num3)
          {
               $this->n1 = $num1;
               $this->n2 = $num2;
               $this->n3 = $num3;
          }
          
          public function crearArray1()
          {
               $this->array1 = array($this->n1,$this->n2,$this->n3);
               return $this->array1;
          }
              
     }

    // Ejecución en una terminal:
            // phpunit --bootstrap arrays1.php arrays1_test.php
  
?>