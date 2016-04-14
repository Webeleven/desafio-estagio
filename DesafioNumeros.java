import java.util.Scanner;

public class DesafioNumeros {

	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		
		System.out.print("Digite a quantidade de números: ");
		int n = scanner.nextInt();
		
		System.out.print("Digite os números: ");
		
		int maiorNumero = Integer.MIN_VALUE;
		int menorNumero = Integer.MAX_VALUE;
		
		for (int i = 0; i < n; i++) {
			int numero = scanner.nextInt();
			maiorNumero = numero > maiorNumero ? numero : maiorNumero;
			menorNumero = numero < menorNumero ? numero : menorNumero;
		}
		
		System.out.println("Maior número = " + maiorNumero + " Menor número = " + menorNumero);
		
	}

}
