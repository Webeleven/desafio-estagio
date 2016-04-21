<?php 

	header( "Content-type: text/html; charset=utf-8" );
	
	// RECEBENDO VALORES

	$num = $_POST['num'];
	$lista = $_POST['lista'];
	
	// TRANFORMANDO LISTA DE VALORES EM ARRAY DIFERENTE DE ''
	$array_lista = array_diff(explode(' ', $lista), array(''));

	// ADICIONANDO VALOR ESCOLHIDO AO ARRAY'	
	array_push($array_lista, $num);

	//CAPTURANDO O TAMANHO DO ARRAY
	$array_tamanho = count($array_lista);
	
	// ORDENANDO DO MENOR PARA O MAIOR
	sort($array_lista);

	// EXIBINDO VALORES
	echo "Maior número =  " . $array_lista[$array_tamanho - 1] . " <br> ";
	echo "Menor número =  $array_lista[0]";
	echo " <br><br> <a href='desafio2.php'>Voltar</a>";
?>