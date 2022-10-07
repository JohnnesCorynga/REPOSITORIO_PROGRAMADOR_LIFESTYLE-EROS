<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>

    <body>

    <h2>Operadores de atribuição</h2>

    <?php
        $x = 10; // = é o operador de atribuição
        echo("<br> $x");
        $resp = 20;
        $resp += $x; // soma = soma + x
        echo("<br> $resp");

        $resp -= $x; // soma = soma - x
        echo("<br> $resp");

        $resp *= $x; // soma = soma - x
        echo("<br> $resp");

        $resp /= $x; // soma = soma / x
        echo("<br> $resp");

        $resp %= 3; // soma = soma % 3
        echo("<br> $resp");

        //operadores de incremento 
        $x++; // x = x + 1
        echo("<br>" . $x);
        $x++; // x = x + 1
        echo("<br>" . $x);

        //operadores de decremento
        $x--; //x = x - 1
        echo("<br>" . $x);
        $x--; //x = x - 1
        echo("<br>" . $x);
    ?>

    </body>
</html>