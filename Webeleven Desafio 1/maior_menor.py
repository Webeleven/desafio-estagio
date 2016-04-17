print(25*"_", "Desafio 1 Webeleven", 25*"_")
print("Nome do candidato: Aram Sperduti Menocci\nE-mail: aramsm3@gmail.com\nLinguagem: Python 3\n")
n = 0
array = []

while True:
    try:
        n = int(input("Digite um numero inteiro maior que zero: "))
        if n > 0:
            break
        else:
            print("Valor invalido! ")
    except ValueError:
        print("Valor invalido! ")


for i in range(n):
    while True:
        try:
            array.append(int(input("Digite um numero inteiro ")))
            break
        except ValueError:
            print("Valor invalido! ")

print("O maior valor é %i e o menor valor é %i" %(max(array), min(array)))


