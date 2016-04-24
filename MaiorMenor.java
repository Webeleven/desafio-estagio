package desafio;
import java.util.Scanner;

public class MaiorMenor {

	public static void main(String[] args) {
		
	
		
		System.out.println("Digite quantos n�meros deseja inserir: ");
		
		int  num = new Scanner(System.in).nextInt();  // Pega o valor inserido 
		int[] numeros = new int [num]; // Determina o tamanho do vetor com base no valor digitado pelo usuario 
		
		int contador = 0;
		
			for( int i=0; i<num; i++) // Percorre o vetor
			{
				contador++;
				System.out.println("Digite o "+contador+"� n�mero: ");
				numeros[i] = new Scanner(System.in).nextInt(); // Armazena a entrada do usu�rio no vetor 
				
			}
			
			int maior = numeros[0]; // Declara��o da vari�vel de compara��o maior 
			
			int menor = numeros[0]; // Declara��o da vari�vel de compara��o menor 
			
			for(int j=0; j<num; j++) // Percorre o vetor 
			{
				if(numeros[j] > maior) //Verifica qual n�mero � maior 
				{
					maior = numeros[j]; // Armazena na vari�vel maior caso o valor na posi��o j seja maior que todos 
				}
				
				if(numeros[j] < menor) //Verifica qual numero � menor
				{
					menor = numeros[j]; // Armazena na vari�vel menor caso o valor na posi��o j seja menor que todos 
				}
			}
			
			System.out.println("Maior n�mero: "+maior); // Apresenta��o do maior valor
			System.out.println("Menor n�mero: "+menor); // Apresenta��o do menor valor

	}

}
