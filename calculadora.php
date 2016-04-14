<?php

class Calculadora {
	
	public static function somar($num1, $num2){
		return $num1 + $num2;
	}
	
	public static function subtrair($num1, $num2){
		return $num1 - $num2;
	}
	
	public static function multiplicar($num1, $num2){
		return $num1 * $num2;
	}
	
	public static function dividir($num1, $num2){
		if($num2 == 0){
			return "Não é possível dividir por zero.";
		}
		return $num1 / $num2;
	}
}
	
?>