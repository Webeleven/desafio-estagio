<?php
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$tipo = $_POST['tipo'];

	switch($tipo)
	{
		case 'dividir': 
			$resultado = "Nao e possivel dividir por 0.";
			
			if ($valor2 != 0) {
				$resultado= $valor1 / $valor2; 	
			}

			break;
		case 'multiplicar':
			$resultado= $valor1 * $valor2; 
			break;
		case 'somar': 
			$resultado= $valor1 + $valor2; 
			break;
		case 'subtrair': 
			$resultado= $valor1 - $valor2; 
			break;
	}

	echo $resultado;

?>