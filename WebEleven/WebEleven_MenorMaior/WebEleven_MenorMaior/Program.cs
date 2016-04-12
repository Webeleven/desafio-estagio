using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WebEleven_MenorMaior
{
    class Program
    {
        public void CompararValores(ref int maior, ref int menor)
        {

        }

        public static void ObterValores(Int32[] Valores)
        {
            for (int i = 0; i < Valores.Length; i++)
            {
                Console.WriteLine("Digite o valor {0}", i + 1);
                try
                {
                    Valores[i] = Int32.Parse(Console.ReadLine());
                }
                catch
                {
                    Console.WriteLine("Valor informado não é numérico");
                    Console.ReadKey();
                    Environment.Exit(0);
                }
            }
        }

        public static void CompararValores(Int32[] Valores)
        {
            int menor = Valores[0];
            int maior = Valores[0];

            foreach (var numero in Valores)
            {
                if (menor > numero)
                {
                    menor = numero;
                }
                if (maior < numero)
                {
                    maior = numero;
                }
            }

            Console.WriteLine("Maior número = {0}", maior);
            Console.WriteLine("Menor número = {0}", menor);
        }

        static void Main(string[] args)
        {
            int qtd = 0;
            Console.WriteLine("Defina a quantidade de valores a ser comparados");
            try
            {
                qtd = Int32.Parse(Console.ReadLine());
                if (qtd <= 0)
                {
                    Console.WriteLine("Valor informado deve ser maior que zero");
                    Console.ReadKey();
                    Environment.Exit(0);
                }
            }
            catch
            {
                Console.WriteLine("Valor informado não é numérico");
                Console.ReadKey();
                Environment.Exit(0);
            }

            Int32[] Valores = new Int32[qtd];
            ObterValores(Valores);
            CompararValores(Valores);

            //-- Ou poderia simplesmente ordernar com :
            //Array.Sort(Valores); e exibir o Valores[0] e Valores[qtd-1]

            Console.ReadKey();

        }


    }
}