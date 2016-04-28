#include <iostream>
#include <cstdlib>

using namespace std;

int n = 6;

int main(){

	int i = 0;
	int lista[n];
	int maior = lista[0];
	int menor = lista[0];

	for (int i = 0; i < n; i++){
		cout << i+1 << "o valor: \n";
		cin >> lista[i];
	}

	for (int i = 0; i < n; i++){

		if (maior < lista[i]){
			maior = lista[i];
		}

		if (menor > lista[i]){
			menor = lista[i];
		}
	}

	cout << "Maior numero: " << maior << "\n";
	cout << "Menor numero: " << menor;
	

	//system("pause");
	return 0;

	//#daniellopesdarocha1@gmail.com
}