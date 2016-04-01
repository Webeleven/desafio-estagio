# Desafio de estágio - Webeleven
Para concorrer a nossa vaga de estágio em Desenvolvimento Web você deve:

1. Criar um fork deste projeto
2. Resolver os dois desafios descritos abaixo
3. Depois de concluir, fazer um Pull Request contendo os dois programas e informando seu e-mail
4. Nós entraremos em contato para informar o seu desempenho e resultado

Em caso de dúvidas entre em contato com teves@webeleven.com.br

## Desafio 1
Você pode resolver esse problema com a sua **linguagem de programação favorita**.

#### Problema: 
Dado um numero inteiro N positivo e uma sequencia com N numeros inteiros, determinar o maior e o menor número da sequencia.

Por exemplo, se o usuário escolher N = 6 e depois informar a sequencia abaixo:

>   -2  7  0  -5  8  4

o seu programa deve retornar:

> Maior número = 8
> Menor número = -5


#include <stdio.h>

int Maior(int n[], int tam);
int Menor(int n[], int tam);

int main(void)
{
	int tam, i;

	printf("Entre com a quantidade de elementos: ");
	scanf("%d", &tam);
	int n[tam];
	printf("Digite os elementos: "); 
	for (i=0;i<tam;i++) //Recebe os dados do vetor
		scanf("%d", &n[i]);
	n[i]= '\0';

	printf("Maior elemento: %d\n", Maior(n,tam));
	printf("Menor elemento: %d\n", Menor(n,tam));
	return 0;

}

int Maior(int n[], int tam)
{
	int i, maior;

	for (i=0, maior = n[i];i<tam;i++){
			if(maior < n[i])
				maior = n[i];
	}
	return (maior); 
}

int Menor(int n[], int tam)
{
	int i, menor;

	for (i=0, menor = n[i];i<tam;i++){
			if(menor > n[i])
				menor = n[i];
	}
	return (menor); 
}

## Desafio 2
Você deve resolver esse problema com **PHP**.

#### Problema: Calculadora simples PHP

- A interface deve permitir ao usuário informar 2 números e selecionar o tipo de operação matemática desejada
- Após clicar no botão "Calcular" o seu programa deve retornar o resultado da operação
- Não é necessário se preocupar com a camada de apresentação e formatação (CSS)

As seguintes estruturas devem ser utilizadas:

- Formulários
- Inputs to tipo text para os números
- Inputs do tipo radio ou select para as operações matemáticas de soma, subtração, multiplicação e divisão
- Requisição POST


<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset><h2>Desafio 2</h2>
Primeira Vari&aacutevel<br>
<input type="text" name="variavel1"><br>
Segunda Vari&aacutevel<br>
<input type="text" name="variavel2"><br>
<input type="radio" name="calc" value="mais" checked>Soma<br>
<input type="radio" name="calc" value="menos">Subtra&ccedil&atildeo<br>
<input type="radio" name="calc" value="vezes">Multiplica&ccedil&atildeo<br>
<input type="radio" name="calc" value="divide">Divis&atildeo<br>
<input type="submit" name="Calcular" value"Calcular"><br>
Resultado: <?php

if (isset($_POST['Calcular'])) {
    $selecionado = $_POST['calc'];
    $n1 = $_POST['variavel1'];
    $n2 = $_POST['variavel2'];
   if($selecionado == 'mais'){
      echo $n1 + $n2;
   }
      elseif($selecionado == 'menos'){
         echo $n1 - $n2;
      }
         elseif($selecionado == 'vezes'){
            echo $n1 * $n2;
            }
            else
            echo $n1 / $n2; 
}
?>
</fieldset>
</form>
</body>
</html>
