import java.util.Random;

public class Sequencia {
    public static void main(String[] args) {
    Random gerador = new Random();
		int numero = gerador.nextInt(10);
		int sequencia[] = new int[numero];
    
		// preenche a sequencia com números aleatórios
		for (int i = 0; i < sequencia.length; i++) {
			sequencia[i] = gerador.nextInt(100);
		}

		int maior = sequencia[0];
		int menor = sequencia[0];

		// Encontra o maior e o menor elemento
		for (int i = 1; i < sequencia.length; i++) {
			if(maior < sequencia[i]) {
				maior = sequencia[i];
			}
			if(menor > sequencia[i]) {
				menor = sequencia[i];
			}
		}
		System.out.printf("Maior número = " + maior + "\nMenor número = " + menor + "\n");
	}
}
