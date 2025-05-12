
<!DOCTYPE html>
<html>
  <head>
  
     <title>Resultado de Inserción. Conexión a Base de datos | PHP y MySQL</title>
     <meta charset="UTF-8">
	 <link rel="stylesheet" href="css/estilos-insercion.css">
	 
  </head>
	</head>
 
	<body>
		<h2>Mensaje de Confirmación o Error</h2>	
				
		<?php
		
		include("conexion.php");
		
		if (isset($_POST["enviar"]))
		{	
		
		
			if (strlen($_POST["email"]) <> 0 && strlen($_POST["nombre"]) <> 0 && strlen($_POST["tel"]) <> 0 && strlen($_POST["dir"]) >=1)
			{
			
				$correo = $_POST["email"] ;
				$nombre = $_POST["nombre"] ;
				$telefono = $_POST["tel"];
				$direccion = $_POST["dir"];
			
				$insertar = "INSERT INTO datos (nombre, direccion, telefono, email) VALUES ('$nombre','$direccion','$telefono', '$correo')"; /*Campo codigo no aparece al ser autoincremetnal.*/
				
				$resultado = mysqli_query($conexion,$insertar);
			
				if($resultado)
					{
						
						echo "<h2 class = 'mensaje'> Registro insertado correctamente.</h2>";
						
					}
					
					else
					{
						
						echo "<h2 class = 'mensaje'> Error. No se ha realizado la inserción del registro.</h2>";
						
					}
			}
	
		
			else
				
			{
		
				echo "<h2 class = 'mensaje'> Faltan datos en alguno o en todos los campos. </h2>";
		
			}
		}
	
	/* Cerrar la conexión. */
	
		mysqli_close($conexion);
		
		?>
		
	</body>

</html>	