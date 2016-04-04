<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora Simples</title>
        
        <script language='JavaScript'>
        function SomenteNumero(e){
            var tecla=(window.event)?event.keyCode:e.which;   
            if((tecla>47 && tecla<58))
                return true;
            else{
            if (tecla==8 || tecla==0)
                return true;
                else
                    return false;
    }
}
</script>
        
    </head>
    <body>
        <form name="calc" method="POST" action="index.php">
	Valor 1<br>
        <input type="text" name="valor" onkeypress="return SomenteNumero(event)"><br>
	
	<input type="radio" name="op" value="+"/>+<br>
	<input type="radio" name="op" value="-"/>-<br>
	<input type="radio" name="op" value="x"/>x<br>
	<input type="radio" name="op" value="/"/>/<br>
	Valor 2<br>
        <input type="text"  name="valor2" onkeypress="return SomenteNumero(event)"/><br>
	
	<input type="submit" name="calcular" value="calcular" />
	</form>
        <?php
            include_once 'classes\Calc.php';
            $calc=new Calc();
            $calc->Calcular();
            
            echo "<Label>".$calc->Calcular()."</Label>";
        // put your code here
        ?>
    </body>
</html>
