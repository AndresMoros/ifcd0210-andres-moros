using System;

namespace ejercicios
{

    public class Variables
    {
		private static void Main(string[] args)
        {
		  int a;
		  a=8;
		  double b = 56.980;
		  double suma = a + b;
		  string letra ="W";
		  char c;
		  c='W';
          Console.WriteLine("El valor de la variable a es: " + a + " euros y el de b es: " + b);
		  Console.WriteLine("La suma de a y b es: " + suma +" "+ letra);
		  // Método que permite escribir en la salida.
          Console.ReadKey ();
		  

        }
    }
}