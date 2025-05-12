using System;

public class ShowResult
{
    public static void Main()
    {
        Console.WriteLine("Introduce el primer número");
        int num1 = int.Parse(Console.ReadLine());

        Console.WriteLine("Introduce el segundo número");
        int num2 = int.Parse(Console.ReadLine());

        string cadena = num1.ToString() + num2.ToString();
        int suma = num1 + num2;
        
        Console.WriteLine(
            "Los números concatenados son: " + cadena + ". Y la suma de ambos es: " + suma
        );
        Console.ReadKey();
    }
}