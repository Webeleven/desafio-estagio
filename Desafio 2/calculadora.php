<html>
<head>
<title>Resultado</title>
</head>
<body>

<?php

$n1=$_POST["n1"];
$n2=$_POST["n2"];
$operacao=$_POST["operacao"];

  if(!empty($operacao))
  {
    if($operacao=="soma")
    {
    $resultado=$n1+$n2;
    }
    else if($operacao=="subtracao")
    {
    $resultado=$n1-$n2;
    }
    else if($operacao=="multiplicacao")
    {
    $resultado=$n1*$n2;
    }
    else if($operacao=="divisao")
    {
    $resultado=$n1/$n2;
    }
  echo "O resultado eh ".$resultado; 
  }

?>

<br/>

<a href="index.html">Voltar</a>

</body>
</html>
