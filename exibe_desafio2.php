<?php 
	
	header( "Content-type: text/html; charset=utf-8" );
	
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacao = $_POST['operacao'];
	$resultado = 0;

	switch ($operacao) {
		case 'adicao':
			$resultado = $num1  +  $num2;
			break;
		case 'subtracao':
			$resultado = $num1  -  $num2;
			break;
		case 'multiplicacao':
			$resultado = $num1  *  $num2;
			break;
		case 'divisao':
			$resultado = $num1  /  $num2;
			break;
		default:
			$resultado = 0;
			break;
	}
	echo "O resultado da $operacao é: ";
	echo "<strong>$resultado</strong> ";
	echo " <br><br> <a href='desafio2.php'>Voltar</a>";
?>