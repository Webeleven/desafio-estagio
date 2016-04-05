<html>
<head>
<title>Calculadora</title>
</head>
<body>
	<form method="post" action="calculo.php">
	Valor 1
	<input type="text" name="valor1" size="6" />
	<select name="tipo">
	<option selected="selected">Somar</option>
	<option>Subtrair</option>
	<option>Multiplicar</option>
	<option>Dividir</option>
	</select>
	Valor 2
	<input type="text" name="valor2" size="6" />
	<input type="submit" name="calcular" value="Calcular" />
	</form>
</body>