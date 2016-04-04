// autor: Bruno Souza
// Mogi das Cruzes - SP
// data: 30/03/2016
// programa que recebe n valores do usuário e verifica qual valor é maior e qual é menor

#include <Windows.h>
#include <iostream>

using namespace std;


#define PAUSA			system("pause")
#define LIMPAR_TELA		system("cls")


int main()
{

		int n           = 0,
            valorMaior  = 0,
            valorMenor  = 0,
            aux         = 0;


		setlocale(LC_ALL, "portueguese_brazillian"); // para acentuação

		// laço para consistir o valor de n
		do{
			LIMPAR_TELA;
			cout << "Digite um valor inteiro positivo: ";
            cin >> n;

			if(n < 1){
				cout << "Valor Inválido!!!" << endl << "Digite Novamente!";
				PAUSA;
			}else
				break; // sai do laço
		}while(true);

        LIMPAR_TELA;

        for(int i = 0; i < n; i++) // for para receber os valores do usuário e verificar o maior e o menor valor digitado
        {
            cout << "Digite o " << i+1 << "° valor:";
			cin >> aux;

            if(i == 0){
                valorMaior = valorMenor = aux;
            }else{
                if(aux > valorMaior) 
                       valorMaior = aux; 
                else if(aux<valorMenor)
                       valorMenor = aux;
                
            }// final da estrutura de decisão que verifica maior e menor

        }// for

		LIMPAR_TELA;

		cout << "Maior valor: " << valorMaior << endl;
		cout << "Menor valor: " << valorMenor << endl;

		PAUSA;

	return 0;
}// main