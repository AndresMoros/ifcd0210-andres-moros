using System;


    class Program
    {
        static void Main(string[] args)
        {
            double num1, num2, suma, producto;
			string teclado;
            Console.Write("Introduzca un número: ");
            teclado = Console.ReadLine();
            num1 = double.Parse(teclado);
			Console.Write("Introduzca otro número: ");
            teclado = Console.ReadLine();
            num2 = double.Parse(teclado);
			suma = num1 + num2;
			producto = num1 * num2;
            Console.WriteLine("La suma de los dos valores es: " + suma);
            Console.WriteLine("El producto de los dos números es :" + producto);
            Console.ReadKey();
			Console.Clear();
        }
    }
