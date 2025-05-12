	
	
	<?php
	
	// Cantidad de filas-registros afectados por una operación LMD.
		
		// Carga del archivo con los parámetros de conexión.
					
			include("conexion.php");
		
		// Carga en variables de los valores necesarios para la conexión a utilizar para inicializar el objeto a crear.
		
			$a = "localhost";
			//$a = "localhost:3310"; // Servidor con número de puerto.
			$b = "root";
			//$c = "1234"; // Con contraseña.
			$c = ""; // Sin contraseña.
			$d = "compras";
		
		// Creación de objetos de conexion a base de datos.
		
			$clientes = new ConexionBD($a,$b,$c,$d);
			//$clientes = new ConexionBD("localhost","root","","compras"); // También pueden incluirse directamente los valores para inicializar el objeto sin necesidad de cargarlos en variables.
				
	// Inserción.	
					
		/* Llamada al método que ejecuta la operación LMD
		   a través del objeto $clientes.*/
		   
			$clientes->consultarBD('INSERT INTO usuarios VALUES
							("12J","Vicente","Vidal Gómez","2317 64 1002 527290456"),
							("RR5","Carmen","Arias Martín","4523 23 4528 836717009"),
							("89A","Ana","Esteban Sanz","3863 12 8552 234466741")');
				
		/* Llamada al método que muestra el número de registros insertados
		   usando la función miembro de la clase que 
		   ejecuta el método mysqli_affected_rows().*/	
		   
			$num_insertadas = $clientes->cantidadOperaciones();
				
	// Actualización.	
			
		/* Llamada al método que ejecuta la operación LMD
		   a través del objeto $clientes.*/
		   
			$clientes->consultarBD('UPDATE usuarios
						set cuenta = "1112 00 1999 874522195"
						where codigo = "5CC" ');
		 
		/* Llamada al método que muestra el número de registros actualizados
		   usando la función miembro de la clase que 
		   ejecuta el método mysqli_affected_rows().*/
			
			$num_cambiadas = $clientes->cantidadOperaciones();
		
	// Eliminación.	
			
		/* Llamada al método que ejecuta la operación LMD
		   a través del objeto $clientes.*/
			
			$clientes->consultarBD('DELETE FROM usuarios
						where codigo = "67B" ');
			 
		/* Llamada al método que muestra el número de registros eliminados
		   usando la función miembro de la clase que 
		   ejecuta el método mysqli_affected_rows().*/
		   
			$num_eliminadas = $clientes->cantidadOperaciones();
		
	// Consulta.
				
		/* Llamada al método que ejecuta la operación LMD
		   a través del objeto $clientes.*/
		
			$clientes->consultarBD("select * from usuarios");
			//$clientes->consultarBD("select * from usuarios where nombre = 'Rosa'");// Ejemplo de consulta con condiciones.	
			
		/* Mostrar número de registros en la consulta
		   usando directamente la función mysqli_num_rows().*/
			
			//$num_consultas = mysqli_num_rows($clientes->resultado);
			
		/* Llamada al método que muestra el número de registros en la consulta
		   usando la función miembro de la clase que 
		   ejecuta el método mysqli_num_rows().*/
			
			$num_consultas = $clientes->cantidadRegistros(); 
			
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