<form action="desafio2.php" method="POST">
  <label>Número 1</label>
  <input type="text" name="valor1" placeholder="Digite seu primeiro número">

  <label>Número 2</label>
  <input type="text" name="valor2" placeholder="Digite seu segundo número">
  </br>
  </br>
  <input type="radio" name="operacao" value="adicao">+
  <input type="radio" name="operacao" value="subtracao">-
  <input type="radio" name="operacao" value="multiplicacao">*
  <input type="radio" name="operacao" value="divisao">/
  </br>
  <!-- <select name="operacao">
    <option value="adicao">+</option>
    <option value="subtracao">-</option>
    <option value="multiplicacao" selected>*</option>
    <option value="divisao">/</option>
  </select> -->

  <input type="submit" name="submit_btn" value="Calcular">
</form>


<?php

//SE O MÉTODO DE ENVIO FOR POST E A SUPERVARIÁVEL POST NÃO ESTIVER VAZIA...//
if(isset($_POST) && !empty($_POST)){
  $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : "operacao não definida";;                                //ARMAZENA O TIPO DE OPERAÇÃO SELECIONADA PELO USUÁRIO//
  $num1 = isset($_POST['valor1']) ? $_POST['valor1'] : "valor1 não definido";
  $num2 = isset($_POST['valor2']) ? $_POST['valor2'] : "valor2 não definido";
  $resultado = null;
  //
  // //COM LAÇOS IF/ELSE//
  // if($operacao == "adicao"){
  //     $resultado = $num1 + $num2;
  // }else if($operacao == "subtracao"){
  //     $resultado = $num1 - $num2;
  // }else if($operacao == "multiplicacao"){
  //     $resultado = $num1 * $num2;
  // }else{
  //     $resultado = $num1 / $num2;
  // }

  //COM 'SWITCH'//
  switch($operacao){
    case "adicao":
      $resultado = $num1 + $num2;
      break;

    case "subtracao":
      $resultado = $num1 - $num2;
      break;

    case "multiplicacao":
      $resultado = $num1 * $num2;
      break;

    case "divisao":
      $resultado = $num1 / $num2;
      break;
  }

  echo "<div>
          <h1>Resultado</h1>
          <h2>{$resultado}</h2>
        </div>";

}
?>
