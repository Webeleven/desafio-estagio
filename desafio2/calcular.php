<?php

	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$tipo = $_POST['tipo'];

	switch ($tipo) {
		case 'Somar': 
			$resultado = $valor1 + $valor2;
			break;
		
		case 'Subtrair': 
			$resultado = $valor1 - $valor2;
			break;
		
		case 'Multiplicar': 
			$resultado = $valor1 * $valor2;
			break;
		
		case 'Dividir':
			if($valor2 != 0){
				$resultado = $valor1 / $valor2;
			}else{
				echo "Erro! Não é possivel dividir por zero. <br><br>";
			}
	}

	echo $resultado;

	#daniellopesdarocha1@gmail.com
?>