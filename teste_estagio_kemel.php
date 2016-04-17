<?php
  // Vai informar qts numeros ele quer e adicinar aleatoriamente
//  valores inteiros, positivos e negativos. Depois percorrer e verificar qual o maior e o menor.
 if(!empty($_POST['campo1']) && (!empty($_POST['campo2']))){
     $campo2 =  $_POST['campo2'];
     $Array = explode(" ", $campo2);
    
     echo("Maior Valor  = ").max($Array);
     echo("<br>");
     echo("Menor Valor  = ").min($Array);
 }
                                                                                                                                                                
?>
 
<form action="teste_estagio.php" method="post"> 
Quantidade de inteiros: <input type='text' name='campo1'><br>
Informar valores : <input type='text' name='campo2'><br>
<input type=submit value="Enviar">
</form>



