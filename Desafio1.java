import java.util.Scanner;

public class Desafio1 {
	public static void main (String []args){
		//Variaveis
		int tam, maior, menor, aux;
		int[] lista;
		String seq="";
		
		//Pega tamnho da sequ�ncia
		Scanner sc = new Scanner(System.in);
		System.out.println("Digite o tamanho da sequ�ncia");
		tam = sc.nextInt();
		lista = new int[tam];
		
		
		//Preenche o array
		for(int i=0;i<lista.length;i++){
			System.out.println("Digite o valor da posi��o "+i);
			lista[i] = sc.nextInt();	
			seq+=" "+lista[i]; 
		}
		maior=lista[0];
		menor=lista[0];
		
		//Percorre o array e verifica qual o maior e o menor valor digitado
		for(int i=0;i<lista.length;i++){
			if(lista[i]>maior){
				maior = lista[i];
			}else{
				if(lista[i]<menor){
					menor = lista[i];
				}
			}
		}
		
		//Imprime os resultados
		System.out.println("A S�quencia digitada foi : "+seq+"\n"+
						   "O Maior numero � : "+maior+"\n"+
						   "O Menor numero � : "+menor);
	}
}
