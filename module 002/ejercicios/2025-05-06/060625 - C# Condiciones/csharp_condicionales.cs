using System;

public class Program
{
    static void Main()
    {
        Console.WriteLine("Ejercicio 1");
        Console.WriteLine("Introduce las notas de la caprichosa");
        Console.WriteLine("JavaScript:");
        double nota1 = double.Parse(Console.ReadLine().Replace(".", ","));
        Console.WriteLine("CSS:");
        double nota2 = double.Parse(Console.ReadLine().Replace(".", ","));
        Console.WriteLine("C#:");
        double nota3 = double.Parse(Console.ReadLine().Replace(".", ","));

        double median = Math.Round((nota1 + nota2 + nota3) / 3, 2);

        if (median <= 4 && median >= 1)
        {
            Console.WriteLine("Suspendido, nota media de: " + median.ToString());
        }
        else if (median >= 5 && median < 6)
        {
            Console.WriteLine("Suficiente, nota media de: " + median.ToString());
        }
        else if (median >= 6 && median < 7)
        {
            Console.WriteLine("Bien, nota media de: " + median.ToString());
        }
        else if (median >= 7 && median <= 8.99)
        {
            Console.WriteLine("Notable, nota media de: " + median.ToString());
        }
        else if (median >= 9 && median <= 10)
        {
            Console.WriteLine("Sobresaliente, nota media de: " + median.ToString());
        }
        else
        {
            Console.WriteLine("La caprichosa no ha hecho los examenes");
        }
    }
}

// C# (y el .NET framework en general) interpreta los números, especialmente los decimales, basándose en la configuración regional (o "cultura") del sistema operativo donde se ejecuta el código, a menos que le especifiques lo contrario.
// using System.Globalization; // Necesitas añadir esta línea // ... en tu código ... Console.Write("Introduce un numero usando PUNTO como decimal (ej: 5.2): "); string input = Console.ReadLine(); // Usar InvariantCulture para parsear siempre con punto decimal if (double.TryParse(input, NumberStyles.Any, CultureInfo.InvariantCulture, out double numeroParseado)) { Console.WriteLine("Número parseado correctamente: " + numeroParseado); } else { Console.WriteLine("Entrada inválida. Asegúrate de usar el punto como decimal."); } // Si quisieras parsear específicamente usando la coma (cultura española, por ejemplo): // if (double.TryParse(input, NumberStyles.Any, new CultureInfo("es-ES"), out double numeroParseadoEs)) // { // Console.WriteLine("Número parseado (cultura ES) correctamente: " + numeroParseadoEs); // } // else // { // Console.WriteLine("Entrada inválida para cultura ES."); // }
