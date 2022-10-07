<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Começando</title>
</head>
<body>
    
    <input type="number">
    <input type="button" value="Calcular" onclick="calcular()">
    <h2>Calculadora</h2>
    <?php
       $numero = 8;
       $nome = "Eros Ravier";
       $sobrenome = "Silva Aragão";
       $nomeSobre = "$nome $sobrenome";
       for($i=1;$i<=10;$i++){
        $soma = $numero*$i;
        echo "</br>$numero x $i = $soma";
       };
       
      
    ?>
</body>
</html>