	
	
	<?php
		// Inserción de registros usando una clase para conectarse a una base de datos.
		
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
			
		// Inserción de 1 registro.
					
			// Variante 1. Usando variables como argumentos de la función de consulta (consultarBD()), para las operaciones de manipulación de datos (consulta e inserción).
			
			/*
				$insertar = "insert into usuarios values('A03','Aurora','Ruiz','1234 5678 90 123456789')"; // Registro a insertar.
				$clientes->consultarBD($insertar); // Inserción ejecutando el método consultarBD(),a través del objeto $clientes.
				$nueva_consulta = "select * from usuarios";
				$clientes->consultarBD($nueva_consulta);// Nueva consulta para ver los nuevos registros insertados, ejecutando el método consultarBD(),a través del objeto $clientes.
			*/
			
			// Variante 2. Usando directamente las operaciones de manipulación de datos (consulta e inserción), como argumentos de la función de consulta (consultarBD()).
			
			
				$clientes->consultarBD("insert into usuarios values('ZX2','Cristina','Cos','2323 6743 45 904652559')"); // Inserción ejecutando el método consultarBD(),a través del objeto $clientes.
				$clientes->consultarBD("select * from usuarios"); // Nueva consulta para ver los los nuevos registros insertados, ejecutando el método consultarBD(),a través del objeto $clientes.
					
			
				
		// Inserción de varios registros.	
			
			// Variante 1. Usando variables como argumentos de la función de consulta (consultarBD()), para las operaciones de manipulación de datos (consulta e inserción).
			/*	
				$insertar = "insert into usuarios values('3BB','Cristina','Ruiz','3404 4567 20 178256889'),
														('Z32','Carmen','Pérez','1274 5238 90 547457788'),
														('H23','Juan','Arias','5467 5234 12 122278780')"; // 3 registros a insertar.
				$clientes->consultarBD($insertar); // Inserción ejecutando el método consultarBD(),a través del objeto $clientes.
				$nueva_consulta = "select * from usuarios";
				$clientes->consultarBD($nueva_consulta);// Nueva consulta para ver los nuevos registros insertados, ejecutando el método consultarBD(),a través del objeto $clientes.
			*/
			// Variante 2. Usando directamente las operaciones de manipulación de datos (consulta e inserción), como argumentos de la función de consulta (consultarBD()).
			
			/*
				$clientes->consultarBD("insert into usuarios values('3BB','Cristina','Ruiz','5534 7632 67 345346399'),
																('H23','Juan','Arias','9044 1474 41 128308440')"); // Inserción ejecutando el método consultarBD(),a través del objeto $clientes.
				$clientes->consultarBD("select * from usuarios"); // Nueva consulta para ver los los nuevos registros insertados, ejecutando el método consultarBD(),a través del objeto $clientes.
			*/			
			
			
			
	?>


<!DOCTYPE html>
<html>
	<head>
		<title>Clase Conexion PHP - Base de Datos</title>
		<meta charset="UTF-8"/>
	
	</head>
	<body>
		
		<h1 style="text-align:center;">Listado de Usuarios tras Inserción de Registros Nuevos</h1>
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