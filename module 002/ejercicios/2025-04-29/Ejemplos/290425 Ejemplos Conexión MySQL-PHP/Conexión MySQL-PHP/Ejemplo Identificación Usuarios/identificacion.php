


	<?php
	
		/* Incluir archivo con conexion a base de datos.*/
		
			include("conexion.php");
		
		/* Variables que cargan lo introducido en el formulario a través de variables superglobales.*/	
		
			$usuario = $_POST["usuario"] ;
			$contraseña = $_POST["contraseña"];
	
		/* Inicio de sesión.*/	
		/*
			session_start();
			$_SESSION["usuario"] = $usuario;
		*/	
		/* Consulta de los datos introducidos para ver si coinciden con los guardados en la base de datos. */
	
			$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$contraseña'";
		
		/* Ejecución de la consulta. */
		
			$resultado = mysqli_query($conexion,$consulta);
	
		/* Obtener el número de filas que coinciden con la consulta especificada.*/
		
			$fila = mysqli_num_rows($resultado);
		
		/* Acciones si se produce o no la identificacion correcta. */
		
			if($fila)
			{
				/* Redirigir a una página php o html. */
				
				header("location:inicio.html");
				
								
			}
			
			else
			{
				
				
				include("index.php");
								
				$mensaje = "<h1 id='mensaje' class = 'error'>Error de Identificación</h1>";
				echo $mensaje;
				
				echo '
				<script>
					function fin(){
						document.getElementById("mensaje").innerHTML="";
					}
					setTimeout(fin,3000);
					document.form1.usuario.reset();
					document.form1.contraseña.reset();
				</script>';
				
				
				/*
				//strip_tags($mensaje);
				
				//sleep(2);
				$mensaje="";
				//strip_tags($mensaje);
				echo $mensaje;*/
				
			}
		
	/* Cerrar la conexión. */
	
			mysqli_close($conexion);
	
	?>
	
