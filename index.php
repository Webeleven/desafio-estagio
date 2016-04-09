<?php
	/**
	 * @author Wellington Barreto <zeindelf@hotmail.com>
	 * @copyright 2016
	 */
	require('_app/Config.inc.php');
?>
<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio - Estágio</title>
	
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container">
			<div class="form-container">
				<?php
					$Resultado = filter_input_array(INPUT_POST, FILTER_DEFAULT);

					if ( !empty($Resultado['formCalcular']) ):
						$Calculadora = new Calculadora;
						$Calculadora->ExecuteCalc($Resultado);
					endif;
				?>
				
				<form action="" method="post" name="formCalculadora">
					<label>
						<input type="text" name="numUm" placeholder="Informe um número" value="<?php if ( isset($Resultado) ) echo $Resultado['numUm']; ?>">
					</label>

					<label>
						<input type="text" name="numDois" placeholder="Informe um número" value="<?php if ( isset($Resultado) ) echo $Resultado['numDois']; ?>">
					</label>

					<label>
						<select name="calcOperacao">
							<option value="1">Soma</option>
							<option value="2">Subtração</option>
							<option value="3">Multiplicação</option>
							<option value="4">Divisão</option>
						</select>
					</label>

					<input class="button default" type="submit" name="formCalcular" value="Calcular">
				</form>
			</div><!-- /.form-container -->

			<div class="result-container">
				<?php
					if ( isset($Resultado) ):
						if ( !$Calculadora->getResultado() ):
							echo '<div class="message">';
							echo $Calculadora->getErro();
							echo '</div>';
						else:
							echo '<div class="result">';
							echo '<p>Resultado:</p>';
							echo '<b>' . $Calculadora->getResultado() . '</b>';
							echo '</div>';
						endif;
					endif;
				?>
			</div><!-- ./result-container -->
		</div><!-- /,container -->
		
	</body>
</html>