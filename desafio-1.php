<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">				
		<title>Desafio - 1</title>
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
	</head>
	<body>
		<div class="jumbotron">		
			<div class="page-header">
	  			<h1>Teste Webeleven</h1>
			</div>
			<h3> <span class="label label-default">Desafio 1</span></h3>
			<p>Determine o maior e o menor número de um conjunto:</p>
			<form name="calculator" action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST">
			<div class="form-group col-md-12 row">
				<label for="total" style="display: ">Insira o tamanho do vetor:</label>			
			    <input type="text" id="inputs" style="width: 40px">
			    <a href="#" id="add"><span class="btn btn-success" aria-hidden="true" style="line-height: 0.9">OK</span></a>
			</div>
			<div class="form-group">
			    <div id="add_numbers"></div>
			</div>
			    <button class="btn btn-primary">Enviar</button>
			</form>
			<?php

			    if ($_POST) {
			        $numbers = $_POST['vetor'];
			        $min = min($numbers);
			        $max = max($numbers);

			        $arr = implode(",",$numbers);
			        echo "Números = {";
			        echo $arr;
			        echo "}";
			        echo "<var>";
			        echo "<br />";
			        echo "O menor valor é: " . $min;
			        echo "<br />";
			        echo "O maior valor é: " . $max;
			        echo "</var>";        
			    }		
			?>

		</div>    

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function() {
				var scntDiv = $('#add_numbers');
				var i = $('.line').size() + 1;

				$('#add').click(function() {
				    var inputFields = parseInt($('#inputs').val());
				      scntDiv.empty()
				      for (var i = 0; i < inputFields; i++){
				        var count = i + 1;
				        scntDiv.append($('<div class="line">Insira o ' + count + 'º elemento do vetor:' + '<input type="text" style="width: 40px" name="vetor[]" />'));
				      }
				});
			});
		</script>   	
	</body>
</html>
