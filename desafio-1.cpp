/**
 * Desafio de estágio - Webeleven
 * Desafio 1
 *
 * Dado um numero inteiro N positivo e uma sequencia com N numeros inteiros, determinar o maior e o menor número da sequencia.
 *
 * Por exemplo, se o usuário escolher N = 6 e depois informar a sequencia abaixo:
 * -2 7 0 -5 8 4
 *
 * o seu programa deve retornar:
 * Maior número = 8 Menor número = -5
 *
 * Wellington Barreto
 * zeindelf@hotmail.com
 */

#include <stdlib.h>
#include <stdio.h>
#include <conio.h>

int main() {
	
	int QtdNum;
	int MenorNum;
	int MaiorNum;
	int Num;
	
	printf("Informe a quantidade de numeros: ");
	scanf("%d", &QtdNum);
	
	for ( int i = 1; i <= QtdNum; i++ ) {
		
		system("cls");
		printf("Informe o %d numero: ", i);
		scanf("%d", &Num);
		
		// Inicia as variáveis MaiorNum e MenorNum
		if ( i == 1 ) {
		   MenorNum = Num;
		   MaiorNum = Num;
 		}
		
		// Menor numero
		MenorNum = ( MenorNum < Num ? MenorNum : Num );
	
		// Maior numero
		MaiorNum = ( MaiorNum > Num ? MaiorNum : Num );
	}
	
	system("cls");
	printf("Menor numero: %d", MenorNum);
	printf("\n");
	printf("Maior numero: %d", MaiorNum);
	
	getch();
}
