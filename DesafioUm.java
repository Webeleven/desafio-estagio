import javax.swing.JOptionPane;
public class DesafioUm{


	
	public static void main(String[]args){
		int num;
		do{
			num=(Integer.parseInt(JOptionPane.showInputDialog(null,"Digite um Numero inteiro positivo")));
			if(num<0){
				JOptionPane.showMessageDialog(null,"Numero invalido");
			}
		}while(num<0);
		
		int n=Integer.parseInt(JOptionPane.showInputDialog(null,"Digite de quantos numeros será sua sequência numérica"));
		int vet[];
		vet=new int [n];
		for(int i=0;i<vet.length;i++){
			int j=Integer.parseInt(JOptionPane.showInputDialog(null,"digite um numero da sequencia"));
			vet[i]=j;
		}
		int maior=Maior(num,vet);
		JOptionPane.showMessageDialog(null,"o maior numero e: "+maior);
		int menor=Menor(num,vet);
		JOptionPane.showMessageDialog(null,"o menor numero e: "+menor);
		
	}
	
	public static int Maior(int n,int seq[]){
		int maior=0;
		for(int i=0;i<seq.length;i++){
			if(seq[i]>maior){
				maior=seq[i];
			}
		}
		return maior;
	}
	public static int Menor(int n,int seq[]){
		int menor=seq[0];
		for(int i=0;i<seq.length;i++){
			if(seq[i]<menor){
				menor=seq[i];
			}
		}
		return menor;
	}
}