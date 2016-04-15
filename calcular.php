
<!doctype html>
<html lang="pt-br">
<head>
    <title>Calculadora - PHP</title>
    <meta charset="utf-8" />
</head>
<body>
<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$tipo = $_POST['tipo'];

    switch ($tipo)
    {
        case 'Soma': $r = $num1 + $num2; break;
        case 'Subtrair': $r = $num1 - $num2; break;
        case 'Multiplicar': $r = $num1 * $num2; break;
        case 'Dividir': $r = $num1 / $num2;break;
    }
    echo 'O resultado da operação matemática é : ', $r;
?>
</body>
</html>
