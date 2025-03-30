<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Strings 2
    </title>
    <link rel="stylesheet" href="css/main.css">
    <?php
    include("functions/checkPalindrome.php");
    include("functions/vocalCounter.php");
    include("functions/compareStrings.php");
    ?>
</head>

<body>
    <div class="container">
        <h1>
            Ejercicio 1
        </h1>
        <div class="card">
            <p>Crea un validador de palindromo</p>
            <form action="index.php" method="post" class="form">
                <div class="form_row">
                    <input type="text" name="word" placeholder="Ej.: Yo hago yoga hoy">
                    <input type="submit" value="Verificar" class="btn">
                </div>

            </form>
            <?= checkPalindrome($_POST["word"] ?? "") ?>
        </div>
        <hr>
        <h1>
            Ejercicio 2
        </h1>
        <div class="card">
            <p>Cuenta las vocales de una cadenas</p>
            <form action="index.php" method="post" class="form">
                <div class="form_row">
                    <input type="text" name="sentence" placeholder="Una frase">
                    <input type="submit" value="Contar" class="btn">
                </div>
            </form>
            <?= $countVolwes($_POST["sentence"] ?? "")?>
        </div>
        <hr>
        <h1>
            Ejercicio 3
        </h1>
        <div class="card">
            <p>Usando métodos y funciones de cadenas, <br>compara dos cadenas introducidas por el usuario</p>
            <form action="index.php" method="post" class="form">
                <div class="form_row">
                    <input type="text" name="str1" placeholder="Frase 1">
                    <br>
                    <input type="text" name="str2" placeholder="Frase 2">
                    <br>
                    <input type="submit" value="Comparar" class="btn">
                </div>
            </form>
            <?= compareStrings($_POST["str1"] ?? '', $_POST["str2"] ?? '') ?>
        </div>
    </div>
</body>

</html>