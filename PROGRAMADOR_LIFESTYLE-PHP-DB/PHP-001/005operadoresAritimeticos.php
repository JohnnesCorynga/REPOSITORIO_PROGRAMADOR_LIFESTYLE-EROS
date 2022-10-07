<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <h2>Operadores Aritméticos</h2>



    <?php
        $x = 10;
        $y = 5;
        $soma = $x+$y;
        $subtrair = $x-$y;
        $multiplicar = $x*$y;
        $dividir = $x/$y;
        $resto = $x%$y;
        $potencia = $x**$y;
        echo "X = $x </br>";
        echo "Y = $y </br>";
        echo "A soma de $x + $y é $soma </br>";
        echo "A subtração de $x - $y é $subtrair </br>";
        echo "A multiplicação de $x x $y é $multiplicar </br>";
        echo "A divisão de $x / $y é $dividir </br>";
        echo "O resto (modulo) de $x e $y é $resto </br>";
        echo "Potência: $x elevado a $y é $potencia</br>";


    if($soma==15){
        echo "Deu certo o resultado foi $soma";
    }else{
        echo "Deu ERROR, o resultado não foi o esperado";
    }
    
    
    ?>
</body>
</html>