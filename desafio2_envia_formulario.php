<html>
	<head></head>
	<title>Resultado da Operação</title>
	<body>
		<meta charset = "UTF-8">
		<?php
			
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$calculo = $_POST["calculo"];

			switch ($calculo) {
				case 'soma':
					$resultado = $num1+$num2;
					echo "A soma de ".$num1." + ".$num2." = ".$resultado;
					break;
				
				case 'sub':
					$resultado = $num1-$num2;
					echo "A subtração de ".$num1." + ".$num2." = ".$resultado;
					break;

				case 'mult':
					$resultado = $num1*$num2;
					echo "A multiplicação de ".$num1." + ".$num2." = ".$resultado;
					break;

				case 'div':
					$resultado = $num1/$num2;
					echo "A divisão de ".$num1." + ".$num2." = ".$resultado;
					break;

				default:
					echo "Operação Invalida!";
					break;
			}
		?>
	</body>

</html>