<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Archivos 1</title>
</head>

<body>
    <div class="container">
        <article>
            <h1>
                Ejercicio 1
            </h1>
            <p>
                Subir un archivo cualquiera que no sea una imagen al servidor. Si no ha ocurrido ningún problema,
                indicarlo, caso contrario indicarlo también. Mostrar los datos del archivo subido exitosamente, y
                moverlo a la carpeta <em>files</em> y borrarlo de la ubicación original
            </p>
            <form action="files_1.php" class="form" method="post" enctype="multipart/form-data">
                <label for="file1">Cualquier archivo, menos imágenes</label>
                <br>
                <input type="file" name="file1" id="file1" accept=".pdf, application, .mp4, .docx, .doc">
                <br>
                <input type="submit" value="Enviar" class="submit-btn">
            </form>
        </article>
        <hr>
        <article>
            <h1>
                Ejercicio 2
            </h1>
            <p>
                Subir una imagen las servidor mediante un formulario, moverla a la carpeta <em>files</em> y borrarla de la ubicación original. Posteriormente, mostrarla en otro archivo.
            </p>
            <form action="files_2.php" class="form" method="post" enctype="multipart/form-data">
                <label for="file2">Una imagen</label>
                <br>
                <input type="file" name="file2" id="file2" accept="image/*">
                <br>
                <input type="submit" value="Enviar" class="submit-btn">
            </form>
        </article>
        <hr>
        <article>
            <h1>
                Ejercicio 3
            </h1>
            <p>
                Subir tres imágenes al servidor, preguntar si existen los archivos, mostrarlas en un tabla e incluir un titulo a la tabla. La anchura  debe ser de 300px.
            </p>
            <form action="files_3.php" class="form" method="post" enctype="multipart/form-data">
                <label for="file3">Sube 3 imágenes</label>
                <br>
                <input type="file" name="file3[]" id="file3" accept="image/*" multiple>
                <br>
                <input type="submit" value="Enviar" class="submit-btn">
            </form>
        </article>
    </div>
</body>

</html>