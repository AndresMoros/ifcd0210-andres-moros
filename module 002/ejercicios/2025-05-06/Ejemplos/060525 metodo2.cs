using System;


    public class Metodo2 // Método sin  retorno de datos y con parámetros.
	
    { 
	//Clase con un método y una variable. Nombre parámetros y variable distintos.
	
		/*private string texto;
		
		public void Imprimir(string texto1)
		{
			texto=texto1;
			Console.WriteLine(texto);
		}
	
	
        static void Main(string[] args)
		
        {
			Metodo2 palabras = new Metodo2();
			
			palabras.Imprimir("¡Hola Mundo!");
		
		
	    }*/
		
		
	//Clase con un método y una variable.Nombre parámetros y variable iguales.
	
		/*private string texto;
		
		public void Imprimir(string texto)
		{
			this.texto = texto;
			Console.WriteLine(texto);
		}
	
	
        static void Main(string[] args)
		
        {
			Metodo2 palabras = new Metodo2();
			
			palabras.Imprimir("¡Hola Mundo!");
		
		
	    }*/
	//Clase con un método y una variable.Nombre parámetros y variable iguales. Párametro por teclado con texto literal.
	
		/*private string texto;
		
		public void Imprimir(string texto)
		{
			this.texto = texto;
			Console.WriteLine("has escrito la palabra " +texto);
		}
	
	
        static void Main(string[] args)
		
        {
			Metodo2 palabras = new Metodo2();
			Console.WriteLine("Escribe un texo");
			palabras.Imprimir(Console.ReadLine());
		
		
	    }*/
		
		//Clase con un método y una variable.Nombre parámetros y variable iguales. Párametro por teclado con variable.
		
		private string texto;
		
		public void Imprimir(string texto)
		{
			this.texto = texto;
			Console.WriteLine("has escrito la palabra " +texto);
		}
	
	
        static void Main(string[] args)
		
        {
			Metodo2 palabras = new Metodo2();
			string frase;
			Console.WriteLine("Escribe un texo");
			frase= Console.ReadLine();
			palabras.Imprimir(frase);
				
	    }
		
	}

