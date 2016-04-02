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
			//verifica se os valores s�o num�ricos
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
						//verificar se � uma divis�o por zero
						if($valor2 != 0):
							$result = $valor1/$valor2;
							echo "".$valor1." / ".$valor2." = ".$result;
						else:
							echo "Opera��o inv�lida, divis�o por zero, por favor tente novamente.";
						endif;
						break;
					default:
						echo "Opera��o inv�lida, por favor tente novamente.";
						break;
				endswitch;
			else:
				echo "Opera��o inv�lida, por favor digite n�meros para efetuar a opera��o";
			endif;
		?>
	</body>
</html>