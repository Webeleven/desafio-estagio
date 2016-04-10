#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[]) 
{
	int N,count;
	int vet[100],i;
	int maior,menor;
		
		printf("Quantos numeros gostaria de digitar?\n");
		scanf("%d", &N);
		
		while(N < 2 || N > 100){
			printf("O vetor está com tamanho minimo de 2 e o maximo de 100. Tente novamente!\n");
			printf("Quantos numeros gostaria de digitar?\n");
			scanf("%d", &N);
		}
		
		for (count=0; count<N; count++)
		{
			printf("Digite o %d numero:", (count+1));
			scanf("%d", &vet[count]);
		}
		
		maior=vet[0];
		menor=vet[0];
		
		for (count=0; count<N; count++)
		{
			if (vet[count]>maior) maior=vet[count];
			if (vet[count]<menor) menor=vet[count];
		}
		
		printf("\n\n");
		
		printf("O maior valor e: %d \n", maior);
		printf("O menor valor e: %d \n", menor);			
	return 0;
}
