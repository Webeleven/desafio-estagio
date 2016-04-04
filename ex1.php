
<!DOCTYPE html> 
<?php 
	$enviar = filter_input(INPUT_POST, 'enviar');
	$valores = $_POST['valores'];
	//var_dump($valores);
	if( $enviar ){
		$valor_min = $valores[0];
		$valor_max = 0;
		foreach( $valores as $valor){

			if($valor < $valor_min){

				$valor_min = $valor;
			}

			if($valor > $valor_max){
				
				$valor_max = $valor;
			}
		}
		
		echo "O maior valor é: ".$valor_max;
		echo "<br> O menor valor é: ".$valor_min;
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

	<body>
		<header>
			<h1>Digite a quantidade de numeros a ser inseridos</h1>
		</header>

		<form action='' method="post">
			<input type="number" class='form-control' id='quantidade_input' min="1" placeholder="insira um numero">
			<div class='form-group' id='valores_div'>

				
			</div>
			<input type="submit" class='btn btn-default' name='enviar' > 
		</form>

		<script   src="https://code.jquery.com/jquery-1.12.2.js"   integrity="sha256-VUCyr0ZXB5VhBibo2DkTVhdspjmxUgxDGaLQx7qb7xY="   crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(function(){
				$('#quantidade_input').blur(function(){
					var $this = $(this);
					var quantidade = $this.val() ;
					$('#valores_div').find('input').remove().end();
					for( var i = 0; i < quantidade ; i++){
						$('#valores_div').append("<input type='number' class='form-control' name='valores[]' id='' placeholder='Digite um numero'>");
					}

				});
			
			});
		</script>
	</body>
</html>