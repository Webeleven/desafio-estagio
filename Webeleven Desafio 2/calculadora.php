<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $oper = $_POST["oper"];
    $resultado;
    if (is_numeric($n1) and is_numeric($n2)) {
        switch ($oper) {
            case "+":
                $resultado = $n1 + $n2;
                break;
            case "-":
                $resultado = $n1 - $n2;
                break;
            case "/":
                if ($n2 == 0) {
                    $resultado = "ERRO! Número não pode ser dividido por zero.";
                    echo $resultado;
                    exit;
                } else {
                    $resultado = $n1 / $n2;
                    break;
                }
            case "*":
                $resultado = $n1 * $n2;
                break;
        }
        echo "Resultado: $resultado ";
    }
    else{
        echo "ERRO! Valor digitado não é um número.";
    }

?>
</br>
<a href="Calculadora.html">Voltar</a>
</body>
</html>
