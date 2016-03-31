import java.util.Scanner;

public class Desafio1 {
	public static void main (String []args){
		//Variaveis
		int tam, maior, menor, aux;
		int[] lista;
		String seq="";
		
		//Pega tamnho da sequência
		Scanner sc = new Scanner(System.in);
		System.out.println("Digite o tamanho da sequência");
		tam = sc.nextInt();
		lista = new int[tam];
		
		
		//Preenche o array
		for(int i=0;i<lista.length;i++){
			System.out.println("Digite o valor da posição "+i);
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
		System.out.println("A Sêquencia digitada foi : "+seq+"\n"+
						   "O Maior numero é : "+maior+"\n"+
						   "O Menor numero é : "+menor);
	}
}
