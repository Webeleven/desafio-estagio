<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">		
		<style>
			.jumbotron {
				width: 700px;
				text-align: center;
				margin-top: 20px;
				margin-left: auto;
				margin-right: auto;
			}
			input {
				margin-top: 20px;
			}
			button {
				margin-top: 20px;
			}			
			select {
				margin-top: 20px;
				width: 2px;
			}
		</style>				
		<title>Desafio 2</title>
	</head>
	<body>
		<?php 
			$errors = array();
			$errors['denominator'] = null;
			$errors['alpha'] = null;
			$result = null;

			$first = null;
			$second = null;
			$result = null;
			$method = null;


	    	if ($_POST) {
	    		extract($_POST);
		        if (isset($first,$second,$method)) {
		        	if ($method == '/' && $second == 0) {
		        		$errors['denominator'] = true;
		        	} else if(!is_numeric($first) || !is_numeric($second)) {
		        		$errors['alpha'] = true;
		        	} else {
			            switch($method)
			            {
			                case '+':
			                    $result = $first + $second;
			                    break;
			                case '-':
			                    $result = $first - $second;
			                    break;
			                case '*':
			                    $result = $first * $second;
			                    break;
			                case '/':
			                    $result = $first / $second;
			                    break;
			                default:
			                    $result = 'operação indefinida';
			                    break;
			            }
			        }
		        }
	    	}
		?>
		<div class="jumbotron">
		
		<div class="page-header">
	  		<h1>Teste Webeleven</h1>
			</div>
			
			<h3> <span class="label label-default">Desafio 2</span></h3>
			<p>Calculadora simples PHP</p>

			<form name="calculator" action="<?= $_SERVER["REQUEST_URI"] ?>" method="POST" onsubmit="return validateForm()">
				<input class="form-control" type="text" name="first" required placeholder="Entre com o primeiro número" />
				<select name="method" class="form-control">
				    <option>+</option>
				    <option>-</option>
				    <option>*</option>
				    <option>/</option>
				</select>
				<input class="form-control" type="text" name="second" required placeholder="Entre com o segundo número" />
				<?php if (isset($errors['denominator'])): ?>
					<?php echo "<div class='alert alert-danger'> O denominador deve ser diferente de ZERO"; ?>
					<?php echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"; ?>
					<?php echo "</div>"; ?>
				<?php endif ?>
				<?php if (isset($errors['alpha'])): ?>
					<?php echo "<div class='alert alert-danger'>Por favor, preencha os campos com números"; ?>
					<?php echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"; ?>
					<?php echo "</div>"; ?>
				<?php endif ?>	

				<button class="btn btn-primary btn-block" type="submit">Calcular</button>
			</form> 
	        <?php

				if (is_numeric($result) || $result === 0) {

		   			printf("<h3>Resultado:</h3><var>%.2f %s %.2f = %s</var>", $first, $method, $second, $result); 
		 		} 
	       	
	        ?> 
	  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>	       	        		
		</div>		
	</body>
</html>

