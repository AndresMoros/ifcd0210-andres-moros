using System;

namespace ejercicios
{
    public class Variables
    {
        private static void Main(string[] args)
        {
            // Ejercicio 1.

            string nombre,
                email;
            Console.Write("Cómo te llamas? ");
            nombre = Console.ReadLine();
            Console.Write("Cúal es tu correo electrónico ");
            email = Console.ReadLine();
            Console.WriteLine("Te llamas " + nombre + " y tu correo electrónico es " + email);
            Console.ReadKey();
        }
    }
}
