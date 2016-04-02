<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
  h1{
    text-align: center;
    margin: 20% auto;
    font-size: 50px;
  }  
</style>
</head>
<body>
    <?php
	session_start();
	$resultado = $_SESSION['resultado'];
    ?>
   <h1><?=$resultado?></h1>
</body>

<!--Autor:
Renan Pallin
renanpallin@gmail.com-->