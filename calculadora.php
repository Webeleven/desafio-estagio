<?php

  header('Content-Type: text/html; charset=utf-8');

  $primeiroNumero = (float) $_POST["primeiroNumero"];
  $segundoNumero = (float) $_POST["segundoNumero"];
  $operacao = $_POST["operacao"];
  
  $resultado;
  
  if( $operacao == "+"){
    $resultado = $primeiroNumero + $segundoNumero;
  } else if ( $operacao == "-"){
    $resultado = $primeiroNumero - $segundoNumero;
  } else if ( $operacao == "*"){
    $resultado = $primeiroNumero * $segundoNumero;
  } else if ( $operacao == "/"){
    if ( $segundoNumero != 0 ){
      $resultado = $primeiroNumero / $segundoNumero;
    } else {
      $resultado = "Não se pode dividir por zero!";
    }
  }

  session_start();
  $_SESSION['resultado'] = $resultado;
  
  header ("Location: resultado.php");

?>

<!--Autor:
Renan Pallin
renanpallin@gmail.com-->