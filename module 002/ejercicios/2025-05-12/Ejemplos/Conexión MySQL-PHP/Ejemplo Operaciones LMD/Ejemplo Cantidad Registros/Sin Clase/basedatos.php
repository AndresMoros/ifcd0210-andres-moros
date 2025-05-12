	
	
	<?php
	
	// Cantidad de filas-registros afectados por una operación LMD.
		
		// Carga del archivo con los parámetros de conexión.
				
			include("conexion.php");
					
		// Inserción.	
					
			$insertar = 'INSERT INTO usuarios VALUES
							("30O","Aurora","Calasanz Sánchez","1872 04 2522 123467424"),
							("24Z","Cristina","Eugenia Martínez","4856 54 5633 837627017"),
							("LOA","Luis Miguel","Vargas Sánchez","5823 91 8912 874463341")';
				
			mysqli_query($conexion, $insertar); 
			
			$num_insertadas = mysqli_affected_rows($conexion);
				
		// Actualización.	
			
			$cambios = 'UPDATE usuarios
						set cuenta = "3452 22 1982 098626824"
						where codigo = "LOA" ';
			mysqli_query($conexion, $cambios); 
			
			$num_cambiadas = mysqli_affected_rows($conexion);
		
		// Eliminación.	
			
			$borrados = 'DELETE FROM usuarios
						where codigo = "24Z" ';
			mysqli_query($conexion, $borrados); 
			
			$num_eliminadas = mysqli_affected_rows($conexion);
		
		// Consulta.
					
			$consulta = "select * from usuarios";
			//$consulta = "select * from usuarios where nombre = 'Rosa'"; // Ejemplo de consulta con condiciones.
		
			$resultado_consulta = mysqli_query($conexion, $consulta); 
		
			$num_consultas = mysqli_num_rows($resultado_consulta);
			
	?>


<!DOCTYPE html>
<html>
	<head>
	
		<title>Clase Conexion PHP - Base de Datos</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/estilos.css">
	
	</head>
	<body>
		
		<h1>Registros Afectados por Operaciones LMD</h1>
		<div id ="contenedor">
			<div class ="ejercicios">
				<table border="1">
					<tr>
					  <th>Número de filas insertadas</th>
					  <th>Número de filas modificadas</th>
					  <th>Número de filas eliminadas</th>
					  <th>Número de filas en la consulta</th>
					</tr>
							
					<tr>
					  <td><?php echo $num_insertadas; ?></td>
					  <td><?php echo $num_cambiadas; ?></td>
					  <td><?php echo $num_eliminadas; ?></td>
					  <td><?php echo $num_consultas; ?></td>
					</tr>
				</table>
			</div>
		</div>				
	</body>
	
</html>