<?php

//EXEMPLO COM 8 NÚMEROS
$teste = array(12,-75,-8,2,20,-34,70);

function modo1($numeros){
  $totalNum = sizeof($numeros);
  $temp = 0;  //VARIÁVEL PARA ARMAZENAR UM VALOR POR UM CURTO TEMPO!//

  for($i = 0; $i < $totalNum ;$i++){                   //ESSE LAÇO 'FOR' VAI SE REPETIR PELA MESMA QUANTIDADE DE NÚMEROS DENTRO DE UM ARRAY//
      for($j = $totalNum -1; $j > 0 ; $j--){           //ESSE LAÇO 'FOR' VAI ORGANIZAR O ARRAY DO MENOR PARA O MAIOR//
        if($numeros[$j-1] > $numeros[$j]){
            //INVERTE A ORDEM DOS VALORES//
            $temp          = $numeros[$j];              //GUARDA ESSE VALOR...//
            $numeros[$j]   = $numeros[$j-1];             //AGORA O PENÚLTIMO VALOR VAI CHECADO PARA O LUGAR DO ÚLTIMO VALOR CHECADO//
            $numeros[$j-1] = $temp;                      //E O ÚLTIMO VALOR CHECADO VAI PARA O LUGAR DO PENÚLTIMO VALOR CHECADO//
        }
      } //FINAL DO LAÇO FOR INTERNO//
  }//FINAL DO LAÇO FOR EXTERNO//

  echo "O menor número é {$numeros[0]} <br>";
  echo "O maior número é {$numeros[sizeof($numeros) - 1]}";

}

function modo2($numeros){
  $menor = min($numeros);
  $maior = max($numeros);

  echo "O menor número é {$menor} <br>";
  echo "O maior número é {$maior}";
}


//DESAFIO 1//
echo "<h1>DESAFIO 1</h1>";
modo1($teste);
echo "<br><br>";
modo2($teste);
echo "<br><br>";

?>
