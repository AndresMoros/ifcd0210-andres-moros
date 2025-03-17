<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionales 2</title>
    
</head>
<body>
    <h1>Ejercicio de condicionales switch...case</h1>
    <?php
    $math = 2.5;
    $lang = 1.3;
    $sport = 1.9;
    
    $note = round(($math + $lang + $sport) / 3, 0);
    
    print("<h3>Variante con switch...case</h3>");
    switch($note) {
        case $note == 10 || $note == 9:
            print("Sobresaliente");
            break;
        case $note == 8 || $note == 7:
            print("Notable");
            break;
        case $note == 6:
            print("Bien");
            break;
        case $note == 5:
            print("Suficiente");
            break;
        case $note < 5:
            print("Suspenso");
            break;
        case $note > 10:
            print("Las notas están mal");
            break;
        default:
            print("El alumno no realizó el examen");
            break;
    }
    print("<br>");
    print("La nota final es $note <hr>");

    ?>
</body>
</html>