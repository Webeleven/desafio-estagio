<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	

</head>
<body>
	<form method="post">
        Digite Primeiro Valor: <input type="text" pattern="*[0-9]+$" name="valor1"/><br/>
        Digite Segundo Valor:  <input type="text" pattern="*[0-9]+$" name="valor2"/><br/>
        <select name="operacao" multiple>
        	<option value="1" checked>Soma</option>
        	<option value="2">Subtração</option>
        	<option value="3">Multiplicacao</option>
        	<option value="4">Divisao</option>
        </select><br/>
        <input type="submit" value="Calcular"/>
   </form>
   <?php
      if(isset($_POST["valor1"]) and isset($_POST["valor1"]) and isset($_POST["operacao"])){  
        		$opcao = $_POST["operacao"];
        		$v1 = $_POST["valor1"];
    			$v2 = $_POST["valor2"];
            	if($opcao == 1){
            	   $soma = $v1 + $v2;
            	   echo "O resultado da soma entre $v1 + $v2 = $soma";	
            	}elseif($opcao == 2){
            	   $subtracao = $v1 - $v2;
            	   echo "O resultado da subtração entre $v1 - $v2 = $subtracao";
            	}elseif($opcao == 3){
            	   $multiplicacao = $v1 * $v2;
            	   echo "O resultado da multiplicação entre $v1 + $v2 = $multiplicacao";
            	}elseif($opcao == 4){
            	   $divisao = $v1 / $v2;
            	   echo "O resultado da divisão entre $v1 / $v2 = $divisao";
        		}  
       	}       
    ?> 
</body>
</html>