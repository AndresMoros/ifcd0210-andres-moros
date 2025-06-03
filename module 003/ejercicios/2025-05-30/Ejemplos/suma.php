

<?php

    // Función a probar.

    function SumaDosA($numero1, $numero2)
    {
        $sumaA = $numero1 + $numero2;
        return $sumaA;
    }

    // Función a probar dentro de una clase.
    class suma{
        public function SumaDosB($numero3, $numero4)
        {
            $sumaB = $numero3 + $numero4;
            return $sumaB;
        }
    }
    // Suma usando la función directamente.

        $numero5 = SumaDosA(10,20);
        echo "<p> El resultado de la suma es ". $numero5 . "</p>";

    // Suma usando la función de la clase a través de un objeto.

        $objeto_suma = new suma();
        $numero6 = $objeto_suma->SumaDosB(10,20);
        echo "<p> El resultado de la suma es ". $numero6 . "</p>";


        // Ejecución en una terminal:
            // phpunit --bootstrap suma.php suma_test.php
            // phpunit --bootstrap suma.php tipos_test.php
            // phpunit --bootstrap suma.php nulos_test.php
            // phpunit --bootstrap suma.php valor_tipo_test.php
            // phpunit --bootstrap suma.php condicion_test.php

?>

