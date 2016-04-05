<?php
	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacao = $_POST['operacao'];

	if($_POST['operacao'] == "adicao")
	{
		$resultado = $numero1 + $numero2;
		echo $resultado;
	}
	elseif ($_POST['operacao'] == "subtracao")
	{
		$resultado = $numero1 - $numero2;
		echo $resultado; 
	}
	elseif ($_POST['operacao'] == "multiplicacao")
	{
		$resultado = $numero1 * $numero2;
		echo $resultado; 
	}
	elseif ($_POST['operacao'] == "divisao")
	{
		$resultado = $numero1 / $numero2;
		echo $resultado; 
	}
?>
