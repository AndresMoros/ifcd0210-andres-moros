using System;

    public class Variables
    {
        private static void Main(string[] args)
        {

            Console.WriteLine("Ejercicio 1");

            string nombre,
                email;

            Console.Write("Cómo te llamas? ");
            nombre = Console.ReadLine();
            Console.Write("Cúal es tu correo electrónico ");
            email = Console.ReadLine();
            Console.WriteLine("Te llamas " + nombre + " y tu correo electrónico es " + email);

            // --------------------------------

            Console.WriteLine("Ejercicio 2");

            Console.WriteLine("Introduce el primer número");
            int num1 = int.Parse(Console.ReadLine());

            Console.WriteLine("Introduce el segundo número");
            int num2 = int.Parse(Console.ReadLine());

            string cadena = num1.ToString() + num2.ToString();
            int suma = num1 + num2;

            Console.WriteLine(
                "Los números concatenados son: " + cadena + ". Y la suma de ambos es: " + suma
            );

            // --------------------------------

            Console.WriteLine("Ejercicio 3");

            Console.WriteLine("Escribe a continuación 3 números, por separado");

            int numero1 = int.Parse(Console.ReadLine());
            int numero2 = int.Parse(Console.ReadLine());
            int numero3 = int.Parse(Console.ReadLine());

            float result = (float)((numero1 + numero2 + numero3) / 3f);

            Console.WriteLine("La media de los tres números es: " + result.ToString());
            Console.ReadKey();
        }
    }