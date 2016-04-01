<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Desafio 2</title>
	</head>
	<body>
		<h4>Resultado :</h4>
		<?php
			$valor1  = $_POST["numero1"];
			$valor2  = $_POST["numero2"];
			$calculo = $_POST["calculo"];
			//verifica se os valores são numéricos
			if(is_numeric($valor1) && is_numeric($valor2)):
				switch($calculo):
					case 'adicao': 
						$result = $valor1+$valor2;
						echo "".$valor1." + ".$valor2." = ".$result;
						break;
					case 'subtracao': 
						$result = $valor1-$valor2;
						echo "".$valor1." - ".$valor2." = ".$result;
						break;
					case 'multiplicacao': 
						$result = $valor1*$valor2;
						echo "".$valor1." * ".$valor2." = ".$result;
						break;
					case 'divisao':
						//verificar se é uma divisão por zero
						if($valor2 != 0):
							$result = $valor1/$valor2;
							echo "".$valor1." / ".$valor2." = ".$result;
						else:
							echo "Operação inválida, divisão por zero, por favor tente novamente.";
						endif;
						break;
					default:
						echo "Operação inválida, por favor tente novamente.";
						break;
				endswitch;
			else:
				echo "Operação inválida, por favor digite números para efetuar a operação";
			endif;
		?>
	</body>
</html>