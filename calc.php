<!DOCTYPE html>

<html lang = "pt-br">
	<!--
		Autor: Bruno Souza Cruz
		02/04/2016 - Mogi das Cruzes - SP
		Calculadora simples que faz o cálculo de 2 valores podendo ser: soma, subtração, divisão ou multiplicação
	-->
	<head>
		<charset ="UTF-8"/>
		<title>
			Calculadora
		</title>
		
			<link rel="stylesheet" type="text/css" href="estilo.css"/>
		
	</head>
	
	<body>
		<h1>Calculadora</h1>
		<br/><br/><br/>
		<div>
		<form name="calculadora id="calc" action="<?php echo $_SERVER['PHP_SELF']; ?> "method="post">
			<div>
				<fieldset id="valores"> <legend> <h2>Valores</h2> </legend>
					<p> <label for ="v1"> Valor 1: </label> 
						<input type="text" name="txtValor1" id="v1" size="10" maxlength="9"/>  
					</p>
					
					<p> <label for ="v2"> Valor 2: </label> 
						<input type="text" name="txtValor2" id="v2" size="10" maxlength="9"/>  
					</p>
				
				</fieldset>
			</div>
			
			
			<div>
				<fieldset id="operacoes"> <legend> <h2>Operações</h2> </legend>
						<ul>
							<li> <label for ="rS1"> 	+ 	</label> 
								 <input type="radio" name="rOper" 	id="rS1" value="+" checked /> 
							</li>
							
							<li> <label for ="rSub2">	- 	</label> 
								 <input type="radio" name="rOper" 	id="rSub2" value="-"	/> 
							</li>
							
							<li> <label for ="rM3"> 	X 	</label> 
								 <input type="radio" name="rOper" 	id="rM3" value="X" 	/> 
							</li>
							
							<li> <label for ="rD4"> 	/ 	</label> 
								 <input type="radio" name="rOper" 	id="rD4" value="/"	/> 
							</li>
						</ul>
				</fieldset>
			</div>
			<div id="resultado"></div>
			
			
			<br/>
			<div>
				<input type="submit" value="Calcular" name="botao" onclick="calcular();"/>
			</div>
			<br/>
			<br/>
			<br/>
		</form>
		</div>
		<?php
				function calcular()
				{
					
				
				
						$valor1 = $_POST["txtValor1"];
						$valor2 = $_POST["txtValor2"];
						$operacao = $_POST["rOper"];
						$resultado = 0;
							
						if($operacao == "+")
						{
							$resultado = $valor1 + $valor2;
						}else if($operacao == "-")
						{
							$resultado = $valor1 - $valor2;
						}else if($operacao == "X")
						{
							$resultado = $valor1*$valor2;
						}else if ($operacao == "/")
						{	
							$resultado = $valor1/$valor2;
						}

						echo "<h2>O resultado é: $resultado </h2>";
				}

				if (empty($_POST["txtValor1"])) {
						echo "Por favor,digite o valor 1!";
				}else if (empty($_POST["txtValor2"])){
						echo "Por favor,digite o valor 2!";
				
				}else{
					calcular();
					
					
				}
		
		?>
	</body>
</html>