<?php


if(isset($_POST) && isset($_POST['numeros'])){

  $numeros     = array();
  $qtdNumeros  = sizeof($_POST['numeros']);

  for($i = 0; $i < $qtdNumeros ;$i++){
    array_push($numeros,$_POST['numeros'][$i]);
  }

  $menor = min($numeros);
  $maior = max($numeros);

  echo "O menor número é {$menor} <br>";
  echo "O maior número é {$maior}";

}

  // $temp = 0;  //VARIÁVEL PARA ARMAZENAR UM VALOR POR UM CURTO TEMPO!//
  //
  // for($i = 0; $i < $totalNum ;$i++){                   //ESSE LAÇO 'FOR' VAI SE REPETIR PELA MESMA QUANTIDADE DE NÚMEROS DENTRO DE UM ARRAY//
  //     for($j = $totalNum -1; $j > 0 ; $j--){           //ESSE LAÇO 'FOR' VAI ORGANIZAR O ARRAY DO MENOR PARA O MAIOR//
  //       if($numeros[$j-1] > $numeros[$j]){
  //           //INVERTE A ORDEM DOS VALORES//
  //           $temp          = $numeros[$j];              //GUARDA ESSE VALOR...//
  //           $numeros[$j]   = $numeros[$j-1];             //AGORA O PENÚLTIMO VALOR CHECADO VAI PARA O LUGAR DO ÚLTIMO VALOR CHECADO//
  //           $numeros[$j-1] = $temp;                      //E O ÚLTIMO VALOR CHECADO VAI PARA O LUGAR DO PENÚLTIMO VALOR CHECADO//
  //       }
  //     } //FINAL DO LAÇO FOR INTERNO//
  // }//FINAL DO LAÇO FOR EXTERNO//
  //
  // echo "O menor número é {$numeros[0]} <br>";
  // echo "O maior número é {$numeros[sizeof($numeros) - 1]}";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DESAFIO 1</title>
  </head>
  <body>

  <main>

    <header>
      <h1>DESAFIO 1</h1>
      <label for="qtd_num">Quantos números deseja inserir?</label>
      <input id="qtd_num" type="text" name="qtdNum" value="">
      <input id="qtd_num_btn" type="button" name="qtdNumBtn" value="OK">
    </header>

    <section id="area_de_numeros">

    </section>


  </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="desafio-estagio.js"></script>
  </body>
</html>
