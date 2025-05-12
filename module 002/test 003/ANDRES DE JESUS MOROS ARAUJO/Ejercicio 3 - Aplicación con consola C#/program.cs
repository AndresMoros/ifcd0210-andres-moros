using System;
using System.Collections.Generic;
class Program
{
    static void Main()
    {
        Console.WriteLine("Introduce 6 números enteros a continuación");

        List<string> strNums = new List<string>();
        // Se crea una lista para almacenar todos los números introducidos por el usuarios

        for (int i = 0; i <= 5; i++)
        {
            string num = Console.ReadLine();
            strNums.Add(num);
        }

        List<int> nums = new List<int>(); // Se crea una colección de valores enteros para los números que sean mayores de 10

        foreach (var num in strNums) // Se recorre cada valor de la colección de numeros en cadena para cargarlos en la colección de enteros
        {
            if (int.Parse(num) > 10)
            {
                nums.Add(int.Parse(num)); // En caso de ser mayor de 10, el número se guarda en la colección de numeros enteros
            }
        }

        if (nums.Count == 0) // Evalua si la colleción está vacía, de ser cierto, se envia un mensaje
        {
            Console.WriteLine("Sin resultado");
            Environment.Exit(0); // Se detiene el programa 
        }

        int result = 1; // Se inicializa la multiplicación en 1 para evitar que el valor se convierta a 0
        foreach (var n in nums)
        {
            result = result * n; // Se acumula el valor de result con cada iteración por la multiplicación con el íncide actual del bucle
        }

        Console.WriteLine("El resultado de la aritmética es: " + result.ToString()); // Se muestra result convertido a texto
        Console.ReadKey();

        // Nota: Si solo se escribe un (1) numero mayor de 10, entonces el resultado de la airmética será ese mismo número
    }
}