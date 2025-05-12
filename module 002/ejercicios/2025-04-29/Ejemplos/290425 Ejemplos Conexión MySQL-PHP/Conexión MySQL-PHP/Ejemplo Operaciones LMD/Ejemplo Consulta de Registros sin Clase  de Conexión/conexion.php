

<!-- Archivo PHP con datos de conexión a la base de datos compras-->

	<?php
	
		$conexion = mysqli_connect("localhost","root","","compras");
		//$conexion = mysqli_connect("localhost:3310","root","","compras"); // Conexión con número de puerto.
		mysqli_set_charset($conexion,"utf8");
	
	?>