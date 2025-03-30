<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO (Herencia 1)</title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include_once("classes/arithmethic.php");
    include_once("classes/addition.php");
    include_once("classes/substract.php");
    include_once("classes/multiply.php");
    include_once("classes/division.php");
    ?>
</head>
<body>
    <div class="container">
        <h1>
        Usando el objeto Suma
        </h1>
        <div class="output">
        <?php
        $op_1 = new Addition();
        $op_1->set_num1(98);
        $op_1->set_num2(56);
        $op_1->calculate()
        ?>
            <pre>
$op_1 = new Addition();
$op_1->set_num1(98);
$op_1->set_num2(56);
$op_1->calculate();
$op_1->get_result();
Resultado: <?= $op_1->get_result() ?>
            </pre>
        </div>
        <h1>
        Usando el objeto Resta
        </h1>
        <div class="output">
        <?php
        $op_2 = new Substract();
        $op_2->set_num1(32);
        $op_2->set_num2(21);
        $op_2->substract();
        ?>
        <pre>
$op_2 = new Substract();
$op_2->set_num1(32);
$op_2->set_num2(21);
$op_2->substract();
$op_2->get_result();
Resultado: <?= $op_2->get_result(); ?>
        </pre>
        </div>
        <h1>
        Usando el objeto Multitplicacion
        </h1>
        <div class="output">
            <?php
            $op_3 = new Multiply();
            $op_3->set_num1(3);
            $op_3->set_num2(3);
            $op_3->multiply();
            ?>
            <pre>
$op_3 = new Multiply();
$op_3->set_num1(3);
$op_3->set_num2(3);
$op_3->multiply();
$op_3->get_result();
Resultado: <?= $op_3->get_result(); ?>
            </pre>
        </div>
        <h1>
        Usando el objeto Multitplicacion
        </h1>
        <div class="output">
            <?php
            $op_4 = new Divison();
            $op_4->set_num1(89);
            $op_4->set_num2(0);
            $op_4->split();
            ?>
            <pre>
$op_4 = new Divison();
$op_4->set_num1(89);
$op_4->set_num2(0);
$op_4->split();
$op_4->get_result();
Resultado: <?= $op_4->get_result(); ?>
            </pre>
        </div>
    </div>
</body>
</html>