<!DOCTYPE html>
<html>

<head>
    <title>Formulario 3 Datos | PHP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/main.css" />
    <!--Falta CSS.-->
</head>

<body>
    <div class="container">
        <h1>Sección de Novedades</h1>
        <div class="card">
            <form action="index.php" method="post" name="form1" id="f1" class="form">
                <fieldset>
                    <legend>Formulario de registro</legend>
                    <p>
                        <label>Nombre: <input type="text" name="nombre" size="50" /></label>
                    </p>
                    
                    <p>
                        <label>Apellidos: <input type="text" name="apellidos" size="50" /></label>
                    </p>

                    <p>
                        Sexo:

                        <label><input type="radio" name="sex" value="h" /> Hombre</label>
                        <label><input type="radio" name="sex" value="m" /> Mujer</label>
                    </p>

                    <p>
                        <label>Correo Electrónico: <input type="email" name="correoe" /></label>
                    </p>

                    <p>
                        <label>Población:
                            <select name="menu">
                                <option>Alicante</option>
                                <option>Madrid</option>
                                <option>Sevilla</option>
                                <option>Valencia</option>
                                <option>Toledo</option>
                                <option>Santander</option>
                            </select>
                        </label>
                    </p>
                    
                    <p><label for="des">Comentarios:</label></p>
                    <p>
                        <textarea name="texto" rows="4" cols="20" id="des"></textarea>
                    </p>

                    <!-- Dos formas de uso de label -->
                    
                    <p>
                        <label><input type="checkbox" name="info" checked="checked" />Deseo
                            recibir información sobre novedades y ofertas.</label>
                    </p>
                    <p>
                        <input type="checkbox" name="condiciones" id="casilla" required />
                        <label for="casilla">Declaro haber leído y aceptar las condiciones generales del
                            programa y la normativa sobre protección de datos.</label>
                    </p>

                    <p><input type="submit" value="Enviar" /></p>
                </fieldset>
            </form>
        </div>
        <?php
        if(isset($_POST["nombre"])):
            ?>
                <h2>Resultados Ejercicio Formulario 3</h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Sexo</th>
                    <th>Correo electrónico</th>
                    <th>Población</th>
                </tr>
                <tr>
                    <td><?= $_POST["nombre"] ?></td>
                    <td><?= $_POST["apellidos"] ?></td>
                    <td><?= $_POST["sex"] == "h" ? "Hombre" : "Mujer" ?></td>
                    <td><?= $_POST["correoe"] ?></td>
                    <td><?= $_POST["menu"] ?></td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                <th>Comentario</th>
                <th>Suscripción</th>
                </tr>
                <tr>
                    <td>
                        <?= $_POST["texto"] ?>
                    </td>
                    <td>
                        <?= $_POST["info"] ? "Sí" : "No" ?>
                    </td>
                </tr>
            </table>
            <?php
        endif
        ?>
</div>
</body>

</html>