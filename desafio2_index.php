<!doctype html>
<html>
	<head></head>
	<title>Desafio 2</title>
	<body>
		<meta charset = "UTF-8">
		<h1>Calculadora</h1>

		<form action="envia_formulario_d.php" method="POST"
			enctype="multipart/form-data">
		
		Digite o primeiro numero da operação:
		<input type="text"
				name="num1"></br>

		Digite o segundo numero da operação:
		<input type="text"
				name="num2"></br>

		Escolha qual a operação desejada</br>
		<input type="radio"
		name="calculo"
		value="soma"
		/> Adição</br>


		<input type="radio"
		name="calculo"
		value="sub"
		/> Subtração</br>

		<input type="radio"
		name="calculo"
		value="mult"
		/> Multiplicação</br>

		<input type="radio"
		name="calculo"
		value="div"
		/> Divisão</br>

		<input type="submit"
		value="Realizar Operação">
		</form>
	</body>
</html>