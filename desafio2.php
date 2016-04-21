<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Entrada de dados</title>
</head>	
<body>
	<h1>Desafio 2</h1>
	<form action="exibe_desafio2.php" method="post">
		<label>Primeiro valor:</label><br>
		<input type="text" name="num1" required="" autofocus=""><br>
		<label>Segundo Valor</label><br>
		<input type="text" name="num2" required=""><br>
		<label>Operação</label><br>
		<label><input type="radio" name="operacao" required value="adicao">Adição</label>
		<label><input type="radio" name="operacao" required value="subtracao">Subtração</label>
		<label><input type="radio" name="operacao" required value="multiplicacao">Multiplicação</label>
		<label><input type="radio" name="operacao" required value="divisao">Divisão</label> <br><br>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>