

<html>
	<head>
	
	</head>
		
		<body>
				<form action="CalculadoraPHP.php" method="POST">
				
				Numero 1: <input type="number" name="num1"> <br><br>
				Numero 2: <input type="number" name="num2">   <br><br>
				
				<input type="radio" name="operacao" value="soma">Soma
				<input type="radio" name="operacao" value="sub">Subtração
				<input type="radio" name="operacao" value="mult">Multiplicação
				<input type="radio" name="operacao" value="div">Divisão <br><br>
				
				<button type="submit" name="calcular"> Calcular</button>
		</body>

</html>


<?php


if(isset($_POST['calcular']))
{
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacao = $_POST['operacao'];
	
	$resultado = 0;
	
	if($operacao=="soma")
	{
		$resultado = $num1 + $num2;
	}
	
	if($operacao=="sub")
	{
		$resultado = $num1 - $num2;
	}
	
	if($operacao=="mult")
	{
		$resultado = $num1 * $num2;
	}
	
	if($operacao=="div")
	{
		$resultado = $num1 / $num2;
	}
	
	
echo "Resultado da operação: $resultado";
}







?>