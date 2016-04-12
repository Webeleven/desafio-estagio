<?php
	$Ans 	   = (float) $_POST["Ans"];
	$Operation = $_POST["Operation"];
	$Number    = (float) $_POST["number"];

	if($Operation == "/")
		$Ans = $Ans / $Number;
	elseif($Operation == "*")
		$Ans = $Ans * $Number;
	elseif($Operation == "-")
		$Ans = $Ans - $Number;
	elseif($Operation == "+")
		$Ans = $Ans + $Number;
	
	echo $Ans;
?>