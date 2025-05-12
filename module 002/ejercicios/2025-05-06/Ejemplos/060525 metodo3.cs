using System;


    public class Metodo3 // Método con  retorno de datos y con parámetros.
	
    { 
	//Clase con un método y 2 variables. Nombre parámetros y variable iguales. 
	
		private int a,b;
		
		public int Sumar(int a, int b)
		{
			this.a=a;
			this.b=b;
			return a+b;
			
		}
	
	
        static void Main(string[] args)
		
        {
			Metodo3 suma = new Metodo3();
			int resultado;
			resultado = suma.Sumar(8,9);
			Console.WriteLine("Resultado de la suma: " + resultado);
				
	    }
		
		
		//Clase con un método y 2 variables. Nombre parámetros y variable iguales. Datos por teclado.
	
		/*private int a,b;
		
		public int Sumar(int a, int b)
		{
			this.a=a;
			this.b=b;
			return a+b;
			
		}
	
	
        static void Main(string[] args)
		
        {
			Metodo3 suma = new Metodo3();
			int n1,n2,resultado;
			Console.WriteLine("Escribe un número");
			n1 = int.Parse(Console.ReadLine());
			Console.WriteLine("Escribe otro número");
			n2 = int.Parse(Console.ReadLine());
			resultado = suma.Sumar(n1,n2);
			Console.WriteLine("Resultado de la suma: " + resultado);
		
		}*/
				
	}

