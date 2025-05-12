
	
	<?php
	
		/* Variables para almacenar los datos necesarios para conectarse a una base de datos.*/
		
		$servidor = "localhost:3310";
		//$servidor = "localhost";
		$usuario = "root";
		$contraseña = "";
		$base = "compras";
		
		// $conexion es una variable que sirve para cargar la conexión y mysqli_connect() es el método para establecer ésta.
		
		//$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base); // Usando las variables.
		//$conexion = mysqli_connect("localhost", "root", "", "compras");
		$conexion = mysqli_connect("localhost:3310", "root", "", "compras"); // Usando los datos de conexión con número de puerto.
		
		
	?>	