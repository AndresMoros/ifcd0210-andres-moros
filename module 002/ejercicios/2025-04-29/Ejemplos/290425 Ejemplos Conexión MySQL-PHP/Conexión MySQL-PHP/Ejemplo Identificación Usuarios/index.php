
<!DOCTYPE html>

<html>
  <head>
  
    <title>Formulario. Identificación de Usuarios | PHP y MySQL</title>
    <meta charset="UTF-8" />
	<link rel="stylesheet" href="css/estilos-formulario.css">
	
  </head>
 
  <body>
		
	<h1> Identificación Usuarios - Conexión PHP-MySQL</h1>
		<div id ="contenedor">
			<div class ="ejercicios">
			
		<form name = "form1" action ="identificacion.php" method ="post" id = "f1">
			  <fieldset>
			  <legend>Datos de Identificación</legend>

			<div id = "user">
				<p><label for="us">Nombre de usuario</label></p>
				<p><input type="text" name="usuario" size="30" id ="us"></p>
			</div>
			<div id = "pass">
				<p><label for="con">Contraseña</label></p>
				<p><input type="password" name="contraseña" size="20" id ="con"></p>
			 </div>
			</fieldset>
			<fieldset>
				<div id = "pass">
					<input id ="b1" type = "submit" value = "Identificarse">
					<input id ="b2" type = "reset" value = "Restablecer">
				</div>
			</fieldset> 
			</div>
			</div>
		</form>
		
		
	</div>	

	</body>
 
</html>