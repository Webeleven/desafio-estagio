<?php
   /*
    * A interface deve permitir ao usuário informar 2 números e selecionar o tipo de operação matemática desejada
        Após clicar no botão "Calcular" o seu programa deve retornar o resultado da operação
        Não é necessário se preocupar com a camada de apresentação e formatação (CSS)
        As seguintes estruturas devem ser utilizadas:
        
        Formulários
        Inputs to tipo text para os números
        Inputs do tipo radio ou select para as operações matemáticas de soma, subtração, multiplicação e divisão
        Requisição POST
    */
    
  
?>
<form action="teste_estagio2.php" method="post"> 
Primeiro Valor : <input type='text' name='campo1' size="3"><br>
Segundo  Valor : <input type='text' name='campo2' size='3'><br>

Soma                        <input type="radio" name="op" value="soma">  <br>
Subtra&ccedil;&atilde;o     <input type="radio" name="op" value="sub">   <br>
Multiplica&ccedil;&atilde;o <input type="radio" name="op" value="multi"> <br>
Divis&atilde;o              <input type="radio" name="op" value="div">   <br>
<br>
  <input type="submit" value="Calcular">
</form>

<?php

    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];
    
if(!empty($_POST['campo1']) && (!empty($_POST['campo2'])) ){     
     
switch ( $_POST['op']) {
    case "soma":
          $Resp = $campo1 + $campo2;
           echo("<b> Resultado ").$campo1." + ".$campo2." = ".$Resp .("</b>");
        break;
    case "sub":
          $Resp = $campo1 - $campo2;
             echo("<b>Resultado   ").$campo1." - ".$campo2." = ".$Resp .("</b>");
        break;
    case "multi":
        $Resp = $campo1 * $campo2;
           echo("<b>Resultado   ").$campo1." * ".$campo2." = ".$Resp .("</b>");
        break;
     case "div":
        $Resp = $campo1 / $campo2;
           echo("<b>Resultado   ").$campo1." / ".$campo2." = ".$Resp .("</b>");
        break;
    default:
        
}

}
  

?>