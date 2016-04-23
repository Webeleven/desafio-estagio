<head>
    <meta charset="utf-8">
</head>
<?php
/**
 * User: roberto
 * Date: 22/04/16
 * Time: 21:41
 */
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$operacoes = $_POST['operacoes'];
switch ($operacoes){
    case ('som'):

        $res = $n1+$n2;
        break;
    case ('sub'):

        $res = $n1-$n2;
        break;
    case ('mul'):

        $res = $n1*$n2;

        break;
    case ('div'):

        $res = $n1/$n2;
        break;
}
echo("O resultado da operação é: ". $res);

?>