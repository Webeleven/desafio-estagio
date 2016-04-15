<!doctype html>
<html lang="pt-br">
<head>
    <title>Calculadora - PHP</title>
    <meta charset="utf-8" />
</head>
<body>
<form method="post" action="calcular.php">
    Numero 1:<br>
    <input type="text" name="num1"><br>
    Numero 2:<br>
    <input type="text" name="num2"><br>
    <select name="tipo">
        <option selected="selected">Soma</option>
        <option>Subtrair</option>
        <option>Multiplicar</option>
        <option>Dividir</option>
    </select>
    <input type="submit" value="Calcular"><br>

</form>
</body>
</html>