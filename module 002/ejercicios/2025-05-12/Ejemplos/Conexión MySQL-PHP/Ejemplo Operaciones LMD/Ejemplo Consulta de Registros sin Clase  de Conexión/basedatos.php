	
	
	

<!DOCTYPE html>
<html>
	<head>
	<?php
		//  Datos de conexión.
			//$conexion = mysqli_connect("localhost", "root", "", "compras");
			include("conexion.php");
		//  Consultas.
			$consulta =	"select * from usuarios";	
			//$consulta =	"select * from usuarios where codigo = '20A'";
			## Ejemplo de consulta con condiciones.
			//$consulta =	"select nombre, cuenta from usuarios; 
			## Ejemplo de consulta con condiciones.
	?>
	
		<title>Resultado de una consulta. Conexión a Base de datos | PHP y MySQL</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/estilos.css">
	
	</head>
	<body>
		
	<h1>Ejemplo Consultas.</h1>
	<div id ="contenedor">
		<div class ="ejercicios">
		
				<?php
					$resultado = mysqli_query($conexion,$consulta);	
					while ($registro = mysqli_fetch_assoc($resultado))
					{ //Empieza código del bucle while.
				?> 
				
					<p><?php echo $registro["codigo"].", " .$registro["nombre"].", ".$registro["apellidos"]. ", ".$registro["cuenta"]; ?></p>
				
				<?php }//Termina código del bucle while.
				
				mysqli_close ($conexion);
				
				?>
				
			 </table>
		</div>
	</div>
	</body>
	
</html>