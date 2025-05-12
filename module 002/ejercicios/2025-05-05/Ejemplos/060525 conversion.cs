using System;


class Varios
{
	static void Main(string[] args)
	{
		int uno, suma1;
		float dos, suma2;
		double tres, suma3;
		string texto, palabra;
		uno = 5;
		dos = 4.5f;
		tres = 3.7;
		texto = "45,90";
		//suma1 = uno + tres; //Error de conversión.
		//Console.WriteLine("La suma de los dos valores es: " + suma1);
		suma1 = uno + (int)tres; //conversión de un tipo doble en entero.
		Console.WriteLine("La suma de los dos valores es: " + suma1);
		suma2 = uno + dos; //conversión implícita al tipo de mayor precisión.
		Console.WriteLine("La suma de los dos valores es: " + suma2);
		suma3 = uno + tres; //conversión implícita al tipo de mayor precisión.
		Console.WriteLine("La suma de los dos valores es: " + suma3);
		//suma2 = dos+tres;//Error de conversión.
		//Console.WriteLine("La suma de los dos valores es: " + suma3);
		suma2 = dos + (float)tres;//conversión de un tipo doble en float.
		Console.WriteLine("La suma de los dos valores es: " + suma3);
		suma3 = dos + tres;//conversión implícita al tipo de mayor precisión.	
		Console.WriteLine("La suma de los dos valores es: " + suma3);
		//suma3 = texto+tres;//Error de conversión.
		//Console.WriteLine("La suma de los dos valores es: " + suma3);
		suma3 = double.Parse(texto) + tres;//conversión de un tipo string en double.
		Console.WriteLine("La suma de los dos valores es: " + suma3);
		suma3 = double.Parse("80,45") + tres;//conversión de un tipo string en double.
		Console.WriteLine("La suma de los dos valores es: " + suma3);
		palabra = texto + tres;//Concatenación de caracteres.
		Console.WriteLine("La suma de los dos valores es: " + palabra);
		palabra = texto + Convert.ToString(tres);//Concatenación de caracteres.
		Console.WriteLine("La suma de los dos valores es: " + palabra);
		palabra = (double.Parse(texto) + tres).ToString();//Conversión de texto en double y el resultado en string.
		Console.WriteLine("La suma de los dos valores es: " + palabra);

		Console.ReadKey();
	}
}