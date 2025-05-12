using System;

class Program
{
    static void Main(string[] args)
    {
        //Condicional simple con condición simple.

        /*int x = 5;
        int y = 5;
        if (x==y)
        {
            Console.WriteLine("Ambos números son iguales" );
            Console.ReadKey();
        }*/

        //Condicional simple con condición compuesta.

        /*int x = 5;
        int y = 3;
        int z = 4;
        if ((x>y)&&(y<z))
        {
            Console.WriteLine("Condición compuesta cumplida" );
            Console.ReadKey();
        }*/

        //Condicional completa con condición simple.

        /*int x = 5;
        int y = 45;
        if ((x>y))
        {
            Console.WriteLine("La variable x es mayor que la variable y" );
            Console.ReadKey();
        }
        else
        {
            Console.WriteLine("La variable x no es mayor que la variable y" );
            Console.ReadKey();
        }*/

        //Condicional anidada.

        int x = 55;
        int y = 45;
        if ((x > y))
        {
            Console.WriteLine("La variable x es mayor que la variable y");
            Console.ReadKey();
        }
        else if (x == y)
        {
            Console.WriteLine("La variable x es igual que la variable y");
            Console.ReadKey();
        }
        else if (x < y)
        {
            Console.WriteLine("La variable x es menor que la variable y");
            Console.ReadKey();
        }
    }
}
