using System;


    class Bucles
    {
        static void Main(string[] args)
        {
		// While con contador.

		  /*int x = 0;
		  while (x<=50)
		  {
			  Console.WriteLine (x);
			  x++; //x=x+1; x+=1;//x=x+10;
			  
			  
		  }
		  Console.WriteLine ("Se acabó");
		  Console.ReadKey();*/	
		  
		  // While y valor en variable.
		  
		  /*int x;
		  Console.Write("Intro un número: ");
		  x = int.Parse(Console.ReadLine());
		  while (x!=0)
		  {
			  Console.WriteLine (x);
			  Console.Write("Intro otro número: ");
			  x = int.Parse(Console.ReadLine());
				  
		  }
		  Console.WriteLine ("Se acabó");
		  Console.ReadKey();*/
		  
		  // Do...While con contador.

		  /*int x = 51;
		  do
		  {
			  Console.WriteLine (x);
			  x++; //x=x+1; x+=1;//x=x+10;
			  
			  
		  }while (x<=50);
		  Console.WriteLine ("Se acabó");
		  Console.ReadKey();*/	
		  
		  // Do..While y valor en variable.
	/*	  
		  int x;
		  do
		  {
			 
			  Console.Write("Intro otro número: ");
			  x = int.Parse(Console.ReadLine());
			  Console.WriteLine (x);
				  
		  }while (x!=0);
		  Console.WriteLine ("Se acabó");
		  Console.ReadKey();
		
	*/	  
		  // Bucle for.
   
            int f;
            for(f=1;f<=100;f++)
            {
                Console.Write(f);
                Console.Write("-");
            }
            Console.WriteLine("");
			Console.ReadKey();
			
			// Bucle for con break.
   
            int m;
            for(m=1;m<=100;m++)
            {
                if (m==54)
				{
					break;
				}
				else
				{
					Console.Write(m);
					Console.Write("-");
				}
            }
            Console.WriteLine("");
			Console.ReadKey();
			
			// Bucle for con continue.
   
            int n;
            for(n=1;n<=100;n++)
            {
                if (n==54)
				{
					continue;
				}
				else
				{
					Console.Write(n);
					Console.Write("-");
				}
            }
            Console.WriteLine("");
			Console.ReadKey();
			
    		Console.Clear();
		}
    }

 