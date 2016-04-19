<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora</title>
   <meta charset = "UTF-8">
   <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="form">
		<h2>CALCULADORA</h2>
		<form method="post" action="">
			<input type="text" name="valor01" id="valor01" placeholder="entre com um número  "/><br/>
			<input type="text" name="valor02" id="valor02" placeholder="entre com um número  "/><br/>
			<select name="operacao" autofocus>
				<option value="soma">Somar</option>
				<option value="subtracao">Subtrair</option>
				<option value="multiplicacao">Multiplicar</option>
				<option value="divisao">Dividir</option>
			</select><br/>
			<input class='camp' type="submit" name="calc" value="Calcular"/><br/><br/>
		</form>
	<?php
	class Calculadora {

		public function Calcular() {
		
			if (isset($_POST['calc']) && !empty($_POST['operacao'])) {
				
				$op = $_POST['operacao'];
				$v01 = $_POST['valor01'];
				$v02 = $_POST['valor02'];

				switch ($op) {
					case "soma":
						$resultado = $v01 + $v02;
						return $resultado;
					case "subtracao":
						$resultado = $v01 - $v02;
						return $resultado;
					case "multiplicacao":
						$resultado = $v01 * $v02;
						return $resultado;
					case "divisao":
						$resultado = $v01 / $v02;
						return $resultado;
					default:
						$resultado = "Não foi possível calcular";
						return $resultado;
				}
			}
		}
	}
		$calcular = new Calculadora();
		$total = $calcular->Calcular();
		echo "<span>".$total."</span>";
	?>
	</div>
	<p>Contato - alexpiece91@gmail.com</p>
</body>
</html>
