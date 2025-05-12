

		<?php
	
			/* Variables para almacenar los datos necesarios para conectarse a una base de datos.*/
			
			$servidor = "localhost";
			$usuario = "root";
			$contraseña = "";
			$base = "datos";
			
			// $conexion es una variable que sirve para cargar la conexión y mysqli_connect() es el método para establecer ésta.
			
			$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base); // Usando las variables.
			// $conexion = mysqli_connect("localhost", "root", "", "datos"); // Usando los datos de conexión.
		
		?>	
	