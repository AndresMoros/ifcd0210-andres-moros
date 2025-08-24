

	<!-- Archivo PHP con clase genérica para conectarse a una base de datos-->

	<?php
	
	class ConexionBD{
		private $servidor;
		private $usuario;
		private $password;
		private $base;
		private $conexion;
		private $resultado;
		
		function __construct($a,$b,$c,$d){
			$this->servidor=$a;
			$this->usuario=$b;
			$this->password=$c;
			$this->base=$d;
			$this->conectarBD(); // LLamada al método conectarBD() que incluye la propiedad $conexion que carga el método de conexión mysqli_connect().
		}
		private function conectarBD(){ // Método privado para evitar acceso a datos sensibles. Se ejecuta desde el constructor.
			$this->conexion = mysqli_connect($this->servidor,$this->usuario,$this->password,$this->base);
		}
		
		// Funciones adicionales para consultas.
		
				
		public function consultarBD($consulta){
			$this->resultado = mysqli_query($this->conexion,$consulta); // Realizar consultas. La variable $consulta cargará posteriormente el Select que quiera se ejecutar.
		}
		
		public function registrosEncontrados(){ //Confirmar si se han encontrado registros en la consulta y, si es asi, se van cargado en un array asociativo.
			if($fila = mysqli_fetch_array($this->resultado,MYSQLI_ASSOC)){
				return $fila;
			}
			else
			{
				return false;
			}	
		}
		public function cerrarBD(){
			mysqli_close($this->conexion);
		}
	}
	
	
	?>

	
	