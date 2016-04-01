import java.util.Scanner;
 
public class Desafio1 {

   public static void maiorOuMenor(int[] lista){
      
      int maior = lista[0];
      int menor = lista[0];
      
      for(int i = 1; i < lista.length; i++){
         if(lista[i] <= menor){
            menor = lista[i];
         }
         else if(lista[i] >= maior){
            maior = lista[i];
         }
      }
      
      System.out.println("Maior número: " +maior+ "\nMenor número: "+menor);
   }
 
   public static void main (String []args){
   	
      boolean flag = true;
      //Digitar um numero <= 0 para sair.
      do{
      
         Scanner entrada = new Scanner(System.in);
         System.out.println("Digite o tamanho da sequência");
         int tamanho = entrada.nextInt();
         
         if(tamanho > 0){
            int[] lista = new int[tamanho];
            
            for(int count = 0; count < tamanho; count++){
               System.out.println("Digite um valor para a posição " + count);
               lista[count] = entrada.nextInt();  
            }
            
            maiorOuMenor(lista);
         }
         else{
            flag = false; 
         }
         
      }while(flag);
            
   }
   
      
}