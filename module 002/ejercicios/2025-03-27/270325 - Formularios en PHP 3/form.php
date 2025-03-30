<!DOCTYPE html>
<html>
  <head>
    <title>Formulario 3 Datos | PHP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/estilos.css" />
    <!--Falta CSS.-->
  </head>

  <body>
    <h2>Resultados Ejercicio Formulario 3</h2>
    <div id="contenedor">
      <h1>Sección de Novedades</h1>
      <div class="ejercicios">
        <form
          action="ProcesarFormulario3.php"
          method="post"
          name="form1"
          id="f1"
        >
          <fieldset>
            <legend>Formulario de registro</legend>
            <p>
              <label
                >Nombre: <input type="text" name="nombre" size="50"
              /></label>
            </p>

            <p>
              <label
                >Apellidos: <input type="text" name="apellidos" size="50"
              /></label>
            </p>

            <p>
              Sexo:

              <label><input type="radio" name="sex" value="h" /> Hombre</label>
              <label><input type="radio" name="sex" value="m" /> Mujer</label>
            </p>

            <p>
              <label
                >Correo Electrónico: <input type="email" name="correoe"
              /></label>
            </p>

            <p>
              <label
                >Población:
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
              <label
                ><input type="checkbox" name="info" checked="checked" />Deseo
                recibir información sobre novedades y ofertas.</label
              >
            </p>
            <p>
              <input type="checkbox" name="condiciones" id="casilla" />
              <label for="casilla"
                >Declaro haber leído y aceptar las condiciones generales del
                programa y la normativa sobre protección de datos.</label
              >
            </p>

            <p><input type="submit" value="Enviar" /></p>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
