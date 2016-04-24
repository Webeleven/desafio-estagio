package desafio;
import java.util.Scanner;

public class MaiorMenor {

	public static void main(String[] args) {
		
	
		
		System.out.println("Digite quantos números deseja inserir: ");
		
		int  num = new Scanner(System.in).nextInt();  // Pega o valor inserido 
		int[] numeros = new int [num]; // Determina o tamanho do vetor com base no valor digitado pelo usuario 
		
		int contador = 0;
		
			for( int i=0; i<num; i++) // Percorre o vetor
			{
				contador++;
				System.out.println("Digite o "+contador+"° número: ");
				numeros[i] = new Scanner(System.in).nextInt(); // Armazena a entrada do usuário no vetor 
				
			}
			
			int maior = numeros[0]; // Declaração da variável de comparação maior 
			
			int menor = numeros[0]; // Declaração da variável de comparação menor 
			
			for(int j=0; j<num; j++) // Percorre o vetor 
			{
				if(numeros[j] > maior) //Verifica qual número é maior 
				{
					maior = numeros[j]; // Armazena na variável maior caso o valor na posição j seja maior que todos 
				}
				
				if(numeros[j] < menor) //Verifica qual numero é menor
				{
					menor = numeros[j]; // Armazena na variável menor caso o valor na posição j seja menor que todos 
				}
			}
			
			System.out.println("Maior número: "+maior); // Apresentação do maior valor
			System.out.println("Menor número: "+menor); // Apresentação do menor valor

	}

}
