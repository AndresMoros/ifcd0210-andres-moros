	
	
	<?php
		// Eliminación de registros usando una clase para conectarse a una base de datos.
		
		// Carga del archivo con la clase de conexión a base de datos a utilizar.
				
			include("conexion.php");
		
		// Carga en variables de los valores necesarios para la conexión a utilizar para inicializar el objeto a crear.
		
			$a = "localhost";
			$b = "root";
			$c = "";
			$d = "compras";
		
		// Creación de objetos de conexion a base de datos.
		
			$clientes = new ConexionBD($a,$b,$c,$d);
			//$clientes = new ConexionBD("localhost","root","","compras"); // También pueden incluirse directamente los valores para inicializar el objeto sin necesidad de cargarlos en variables.
			
		// Borrado de registros buscando previamente con una condición el que se va a borrar.
		
		//Opción 1. No se conoce el dato criterio para la condición de borrado.
		
			// Variante 1. Usando variables como argumentos de la función de consulta (consultarBD()), para las operaciones de manipulación de datos (consulta y borrado).
			
			/*	
				$aBorrar = "select * from usuarios where nombre = 'Rosa'";
				$clientes->consultarBD($aBorrar); // Consulta ejecutando el método consultarBD(),a través del objeto $clientes.
				$fila = $clientes->registrosEncontrados(); // Cargado de los registros encontrados en el array $fila.
				$codigo = $fila["codigo"]; // Carga, desde el array asociativo $fila, del valor en en campo código.
				$borrado = "delete from usuarios where codigo = '$codigo' ";
				$clientes->consultarBD($borrado); // Borrado ejecutando el método consultarBD(),a través del objeto $clientes.
				$nueva_consulta = "select * from usuarios";
				$clientes->consultarBD($nueva_consulta);// Nueva consulta para ver los registros no borrados, ejecutando el método consultarBD(),a través del objeto $clientes.
			*/	
			
			// Variante 2. Usando directamente las operaciones de manipulación de datos (consulta y borrado), como argumentos de la función de consulta (consultarBD()).
			
			/*
				$clientes->consultarBD("select * from usuarios where nombre = 'Rosa'");// Consulta ejecutando el método consultarBD(), a través del objeto $clientes.
				$fila = $clientes->registrosEncontrados(); // Cargado de los registros encontrados en el array $fila.
				$codigo = $fila["codigo"]; // Carga, desde el array asociativo $fila, del valor en en campo código.
				$clientes->consultarBD("delete from usuarios where codigo = '$codigo'"); // Borrado ejecutando el método consultarBD(),a través del objeto $clientes.
				$clientes->consultarBD("select * from usuarios"); // Nueva consulta para ver los registros no borrados, ejecutando el método consultarBD(),a través del objeto $clientes.
			*/				
		
		//Opción 2. Se conoce el dato criterio para la condición de borrado.
	
				
			// Variante 1. Usando variables como argumentos de la función de consulta (consultarBD()), para las operaciones de manipulación de datos (consulta y borrado).
			/*	
				$borrado = "delete from usuarios where codigo = '$codigo' ";
				$clientes->consultarBD($borrado); // Borrado ejecutando el método consultarBD(), a través del objeto $clientes con dato criterio conocido para la condición.
				$nueva_consulta = "select * from usuarios";
				$clientes->consultarBD($nueva_consulta);// Nueva consulta para ver los registros no borrados, ejecutando el método consultarBD(),a través del objeto $clientes.
			*/	
			// Variante 2. Usando directamente las operaciones de manipulación de datos (consulta y borrado), como argumentos de la función de consulta (consultarBD()).	
			
				$clientes->consultarBD("delete from usuarios where codigo = '20A'"); // Borrado ejecutando el método consultarBD(), a través del objeto $clientes con dato criterio conocido para la condición.
				$clientes->consultarBD("select * from usuarios"); // Nueva consulta para ver los registros no borrados, ejecutando el método consultarBD(),a través del objeto $clientes.
	
	?>


<!DOCTYPE html>
<html>
	<head>
		<title>Clase Conexion PHP - Base de Datos</title>
		<meta charset="UTF-8"/>
	
	</head>
	<body>
		
		<h1 style="text-align:center;">Listado de Usuarios tras Eliminación</h1>
		<table style="text-align:center; font-size:18px; margin:auto; width:50%" border="1">
		    <tr>
			  <td style="text-align:center; ">Código de Usuario</td>
			  <td style="text-align:center; ">Nombre</td>
			  <td style="text-align:center; ">Apellidos</td>
			  <td style="text-align:center; ">Cuenta</td>
		    </tr>
			<?php
				while ($registro = $clientes->registrosEncontrados())
				{ //Empieza código del bucle while.
			?> 
			
		    <tr>
			  <td style="text-align:center; "><?php echo $registro["codigo"]; ?></td>
			  <td style="text-align:center; "><?php echo $registro["nombre"]; ?></td>
			  <td style="text-align:center; "><?php echo $registro["apellidos"]; ?></td>
			  <td style="text-align:center; "><?php echo $registro["cuenta"]; ?></td>
		    </tr>
			<?php }//Termina código del bucle while.
			
						
			?>
			
		
	</body>
	
</html>