<!DOCTYPE html>
<html>
	<head>
		<title>Función header()</title>
		<meta charset="UTF-8">
	</head>
		
	<body>
	
		<form id="f1" method="post" action="" name ="for1">
			
			<p><label>Dato:<input type="text" id ="dat"name="dato"></p>
			<p><input type="submit" id ="boton"></p>
			
		</form>
		
		<?php
		$dato=isset($_POST["dato"]) && !empty($_POST["dato"]);
		if($dato)
		{
			//header("Refresh:2; URL=http://www.example.com");
			//echo "Redireccionando, espere un momento.";
			header("Location: http://www.example.com");
		}
		else
		{
			echo "No has escrito nada";
		}
		?>

	</body>
</html>