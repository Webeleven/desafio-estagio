
<?php

	function somar($val1, $val2) {		
		return ($val1 + $val2);
	}
		
	function subtrair($val1, $val2) {		
		return ($val1 - $val2);
	}

	function multiplicar($val1, $val2){		
		return ($val1 * $val2);
	}

	function dividir($val1, $val2){		
		return ($val1 / $val2);
	}

	$valor1 = $_POST['valor1']; 
	$valor2 = $_POST['valor2']; 	
	$operacao = $_POST['operacao'];

	switch ($operacao) {
		case "somar" :
			echo somar($valor1,$valor2);
			break;
		case "subtrair" :
			echo subtrair($valor1,$valor2);
			break;
		case "multiplicar" :
			echo multiplicar($valor1,$valor2);
			break;
		case "dividir" :
			echo dividir($valor1,$valor2);
			break;
	}
?>