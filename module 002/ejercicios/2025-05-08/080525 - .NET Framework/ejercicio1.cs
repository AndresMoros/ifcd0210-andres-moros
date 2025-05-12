using System;
using System.Collections.Generic;

class Program
{
    static void Main()
    {
        Console.WriteLine("Introduce 10 números diferentes");

        List<string> nums = new List<string>();

        for (int i = 0; i <= 9; i++)
        {
            string num = Console.ReadLine();
            nums.Add(num);
        }

        Console.WriteLine("Los númeross fueron: " + string.Join(", ", nums));
        Console.WriteLine("Y la suma de los 5 últimos es:");
        int result = 0;
        for(int i = 5; i <= 9;i++) {
            result += int.Parse(nums[i]);
        }
        Console.WriteLine(result.ToString());
    }
}
