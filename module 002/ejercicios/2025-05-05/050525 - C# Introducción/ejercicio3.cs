using System;

public class Median
{
    public static void Main()
    {
        Console.WriteLine("Escribe a continuación 3 números, por separado");

        int num1 = int.Parse(Console.ReadLine());
        int num2 = int.Parse(Console.ReadLine());
        int num3 = int.Parse(Console.ReadLine());

        float result = (float)((num1 + num2 + num3) / 3f);

        Console.WriteLine("La media de los tres números es: " + result.ToString());
        Console.ReadKey();
    }
}