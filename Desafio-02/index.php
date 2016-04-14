<?php include('calculadora.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Calculadora</title>
</head>

<body>
  <form name="calculadora" method="POST">
    	Número 1: <input type="text" name="num1" /> <br/>
	Número 2: <input type="text" name="num2" /> <br/>
	
	<input type="radio" name="operacao" value="soma" /> Soma <br/>
	<input type="radio" name="operacao" value="subtracao" /> Subtração <br/>
	<input type="radio" name="operacao" value="mult" /> Multiplicação <br/>
	<input type="radio" name="operacao" value="divisao" /> Divisão <br/>
	
	<input type="submit" name="calcular" value="Calcular" />
  </form>
  
  <?php 
	 $num1 = $_POST['num1'];
	 $num2 = $_POST['num2'];
	 
	 if(isset($_POST['calcular'])){
	  
	  if(!isset($_POST['operacao'])){
		echo "Selecione uma operação!";
		return;
	  }
	  
	  switch($_POST['operacao']){
		  case "soma":
			$resultado = Calculadora::somar($num1, $num2);
			break;
		  case "subtracao":
		    	$resultado = Calculadora::subtrair($num1, $num2);
			break;
		  case "mult":
		    	$resultado = Calculadora::multiplicar($num1, $num2);
			break;
		  case "divisao":
		    	$resultado = Calculadora::dividir($num1, $num2);
			break;
	  }
	  
	  echo "Resultado: $resultado";
  }
  ?>
</body>

</html>
