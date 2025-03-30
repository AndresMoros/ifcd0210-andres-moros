<div id="form" class="default">
        <h2>Suscripción electrónica a nuestro boletín.</h2>

        <form action="confirmForm.php" method="post">
            <fieldset>
                <legend class="bold">Datos Personales.</legend>
                <div class="form-row">
                    <label for="nombre">Nombre:</label><input type="text" name="no" id="nombre">
                </div>
                <div class="form-row">
                    <label for="apellido">Apellidos:</label><input type="text" name="ap" id="apellido">
                </div>
                <div class="form-row">
                    <label for="correo">Correo electrónico:</label><input type="email" name="co" id="correo">
                </div>
            </fieldset>
            <fieldset>
                <legend class="bold">Sexo.</legend>
                <p><input type="radio" name="se" value="Hombre" />Hombre</p>
                <p><input type="radio" name="se" value="Mujer" />Mujer</p>
                <p><input type="radio" name="se" value="Otro" checked />Otro</p>
            </fieldset>
            <fieldset>
                <legend class="bold">Nivel de estudios.</legend>
                <input type="radio" name="estudios" value="Graduado Escolar" checked="checked">Graduado escolar.<br>
                <input type="radio" name="estudios" value="E.S.O." />Graduado en E.S.O.<br>
                <input type="radio" name="estudios" value="Bachillerato" />Bachillerato. <br />
                <input type="radio" name="estudios" value="Diplomado" />Diplomado Universitario.<br>
                <input type="radio" name="estudios" value="Licenciado" />Licenciado o Doctorado.<br>
            </fieldset>
            <fieldset>
                <legend class="bold">Intereses y datos de suscripción.</legend>
                <p class="bold">Temas de interés: </p>
                <input type="checkbox" name="mus" value="Música"> Música<br />
                <input type="checkbox" name="dep" value="Deportes"> Deportes<br />
                <input type="checkbox" name="cin" value="Cine"> Cine<br />
                <input type="checkbox" name="lib" value="Libros"> Libros<br />
                <input type="checkbox" name="cie" value="Ciencia"> Ciencia</p>

                <p class="bold">¿Qué día de la semana le interesa recibir nuestro boletín?</p>
                <select name="dia">
                    <option>Día de la semana:</option>
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miércoles">Miércoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sábado">Sábado</option>
                    <option value="Domingo">Domingo</option>
                </select>
                </p>
                <p class="bold">Comentarios y opiniones. </p>
                <textarea name="comentario" rows="5" cols="50"></textarea>
                <div class="form-bottom">
                    <input class="bold btn submit-btn" type="submit" value="Comprobar formulario">
                    <input class="bold btn clear-btn" type="reset" value="Empezar de nuevo">
                </div>
        </form>
    </div>