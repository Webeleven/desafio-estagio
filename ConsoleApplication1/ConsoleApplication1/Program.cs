using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
                Declaração da lista de quantidade Sequencia
                qntSeq == Quantidade de iterações da sequencia iniciada em 0
                qntUser == Numero de sequencias que usuario pretende escrever
                seq == sequencia de numeros do usuario
            */
            List<int> listaSequencia = new List<int>();

            int qntSeq = 0;
            Console.WriteLine("Digite quantos numeros terá a sequencia:");
            int qntUser = Convert.ToInt32(Console.ReadLine());

            while (qntSeq < qntUser)
            {
                Console.WriteLine("Digite um numero para a sequencia:");
                int seq = Convert.ToInt32(Console.ReadLine());
                //Adiciona o item à lista
                listaSequencia.Add(seq);
                qntSeq++;
            }
            //Ordena a lista
            listaSequencia.Sort();
            Console.WriteLine("O maior numero é " + listaSequencia[listaSequencia.Count -1].ToString());
            Console.WriteLine("O menor numero é " + listaSequencia[0].ToString());
            //Imprime cada item da lista
            listaSequencia.ForEach(i => Console.WriteLine(i));
        }
    }
}
