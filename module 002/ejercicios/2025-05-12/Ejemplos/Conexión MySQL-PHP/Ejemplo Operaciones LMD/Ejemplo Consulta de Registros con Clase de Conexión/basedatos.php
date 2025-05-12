	
	
	<?php
		
		// Uso de clases y consulta de registros.
		
		// Carga del archivo con la clase de conexión a base de datos a utilizar.
				
			include("conexion.php");
		
		// Carga en variables de los valores necesarios para la conexión a utilizar para inicializar el objeto a crear.
		
			//$a = "localhost";
			$a = "localhost:3310"; // Servidor con número de puerto.
			$b = "root";
			$c = "";
			$d = "compras";
		
		// Creación de objetos de conexion a base de datos.
		
			$clientes = new ConexionBD($a,$b,$c,$d);
			//$clientes = new ConexionBD("localhost","root","","compras"); // También pueden incluirse directamente los valores para inicializar el objeto sin necesidad de cargarlos en variables.
		
		//Consultas ejecutando el método consultarBD a través del objeto $clientes. (U otras operaciones de manipulación de datos que se requieran).
		// Estas consultas se pueden también incluir más adelante en el código cuando se ejecute el script php para cargar los datos en la tabla.
			
			$clientes->consultarBD("select * from usuarios");
			//$clientes->consultarBD("select * from usuarios where nombre = 'Rosa'");// Ejemplo de consulta con condiciones.
					
	?>


<!DOCTYPE html>
<html>
	<head>
	
		<title>Clase Conexión PHP - Base de Datos</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilos.css">
	
	</head>
	<body>
		
	<h1>Listado de Clientes</h1>
	<div id ="contenedor">
		<div class ="ejercicios">
			<table border="1">
			<tr>
			  <th>Código de Usuario</th>
			  <th>Nombre</th>
			  <th>Apellidos</th>
			  <th>Cuenta</th>
			</tr>
			<?php
				//Estas consultas se pueden incluir en el momento de crear el objeto $clientes.
				
				//$clientes->consultarBD("select * from usuarios");	
				//$clientes->consultarBD("select * from usuarios where nombre = 'Rosa'");// Ejemplo de consulta con condiciones.
				while ($registro = $clientes->registrosEncontrados())
				{ //Empieza código del bucle while.
			?> 
			
			<tr>
			  <td><?php echo $registro["codigo"]; ?></td>
			  <td><?php echo $registro["nombre"]; ?></td>
			  <td><?php echo $registro["apellidos"]; ?></td>
			  <td><?php echo $registro["cuenta"]; ?></td>
			</tr>
			<?php }//Termina código del bucle while.
			
			$clientes->cerrarBD();
			
			?>
			
		  </table>
		</div>
	</div>	
	</body>
	
</html>