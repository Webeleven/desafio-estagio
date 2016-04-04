<!DOCTYPE html> 
<?php 
	$calcular = filter_input(INPUT_POST,'calcular');
	$display = 'none';
	$resultado = 0;
	if($calcular){
		$display = '';
		$valores = $_POST['numeros'];
		$mat = filter_input(INPUT_POST,'mat');
		
		switch ($mat) {
			case 'soma':
				$resultado = $valores[0] + $valores[1]; 
				break;
			case 'subtracao':
				$resultado = $valores[0] - $valores[1];
				break;
			case 'multiplicacao':
				$resultado = $valores[0] * $valores[1];
				break;
			case 'divisao':
				$resultado = $valores[0] / $valores[1];
				break;
			default:
				$resultado = "Selecione uma das opções acima";
				break;
		}
		
	}

?>
<html> 
	<head>  
		<meta name="keywords" content="">
		<meta name="language" content="portuguese">  
		<meta charset=utf-8>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		

	</head>
	<body class='container'>
	<header>
		<h1>Calculadora Simples PHP</h1>
	</header>
		<form action="" method="POST">
			<div class='col-md-6'>
				<div class='form-group'>
					<input type='text' name='numeros[]' class='form-control' placeholder='Digite um numero' required>
				</div>
				<div class='form-group'>
					<input type='text' name='numeros[]' class='form-control' placeholder='Digite um numero' required>
				</div>
				<div class="radio col-md-4">
  					<label>
    					<input type="radio" name='mat' value="soma">
    					Somar
  					</label>
				</div>
				<div class="radio col-md-4">
  					<label>
    					<input type="radio" name='mat' value="subtracao">
    					Subtração
  					</label>
				</div>
				<div class="radio col-md-4">
  					<label>
    					<input type="radio" name='mat' value="divisao">
    					Divisão
  					</label>
				</div>
				<div class="radio col-md-4">
  					<label>
    					<input type="radio" name='mat' value="multiplicacao">
    					Multiplicação
  					</label>
				</div>
				<div class='col-md-12'>
					<input type='text' style='display:<?=$display?>' value='<?=$resultado?>'>
				</div>
				<div class='col-md-12'>
					<input class='btn btn-default' type='submit' name='calcular' value='Calcular'>			
				</div>
				 

			</div>
		</form>
	<script   src="https://code.jquery.com/jquery-1.12.2.js"   integrity="sha256-VUCyr0ZXB5VhBibo2DkTVhdspjmxUgxDGaLQx7qb7xY="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>

</html>