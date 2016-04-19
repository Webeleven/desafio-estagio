package teste;

import java.util.Scanner;

public class MaiorMenorNumero {
	
	private static int numeros[];
	private static int qntdNumero;
	
    public static void main(String[] args) {  
        
    	populaArray();
    	
    	//Exibe o maior e o menor numero respectivamente
        System.out.println("Maior número = "+ procuraMaiorNumero(numeros));  
        System.out.println("Menor número = "+ procuraMenorNumero(numeros));  
        System.exit(0);
    }  
    
    /**
     * metodo responsavel por perguntar ao usuario a quantidade 
     * e quais numeros que avaliar o maior e o menor valor
     * */
    private static void populaArray(){
    	
    	Scanner sc = new Scanner (System.in); 
        System.out.print("Digite a quantidade de números que deseja: ");  
        qntdNumero = sc.nextInt();
        
        numeros = new int[qntdNumero];  
       
        for(int i = 0; i < numeros.length; i++){  
            System.out.print("Digite o " +(i+1)+"º número: ");  
            numeros[i] = sc.nextInt();  
        } 
        sc.close();
   }
    
    
    /**
     * metodo que procura dentro de um vetor o maior numero dele
	 * @param numeros[] o vetor a ser varrido atras do maior numero
	 * @return maior, o maior numero encontrado no vetor
	 */
    private static int procuraMaiorNumero(int numeros[]){
    	 int maior = numeros[0];
         for (int i = 1 ; i < numeros.length; i++){
                 if ( numeros[i] > maior) {
                       maior = numeros[i];
                }
         }
         return maior;
    }
    
    /**
     * metodo que procura dentro de um vetor o menor numero dele
	 * @param numeros[] o vetor a ser varrido atras do menor numero
	 * @return maior, o menor numero encontrado no vetor
	 */
    private static int procuraMenorNumero(int numeros[]){
    	int menor = numeros[0];
        for (int i = 1; i < numeros.length; i++) {  
            if(numeros[i] < menor){  
                menor = numeros[i];  
            } 
        }
        return menor;
    }
}
