<form method="post" action="calculadora.php">
<input type="text" name="campo1">
<select name="operacao">
<option>Somar</option>
<option>Subtrair</option>
<option>Multiplicar</option>
<option>Dividir</option>
</select>
<input type="text" name="campo2">
<input type="submit" value="Calcular">
</form>

<?php
$a = $_POST["campo1"];
$b = $_POST["campo2"];

$operacao = $_POST["operacao"];

if($operacao == "Somar"){
	$c = $a + $b;
	echo "$c";
};

if($operacao == "Subtrair"){
	$c = $a - $b;
	echo "$c";
};

if($operacao == "Multiplicar"){
	$c = $a * $b;
	echo "$c";
};

if($operacao == "Dividir"){
	if (campo1 and campo2 == 0){
		echo "nao e possivel relizar a divisao"
		break;
	}
	else{
	$c = $a / $b;
	echo "$c";
	}
};

?>

