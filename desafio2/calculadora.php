<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora em PHP - Daniel Lopes da Rocha</title>
</head>
<body>
	<div>
		<form method="post" action="calcular.php">
			Valor 1:
			<input type="text" name="valor1" size="5"/>

			<select name="tipo">
				<option selected="select">Somar</option>
				<option>Subtrair</option>
				<option>Multiplicar</option>
				<option>Dividir</option>
			</select>

			Valor 2:
			<input type="text" name="valor2" size="5"/>

			<input type="submit" name="btnCalcular" value="Calcular"/>		
		</form>
	</div>
	<div>
		<p>daniellopesdarocha1@gmail.com</p>
	</div>
</body>
</html>