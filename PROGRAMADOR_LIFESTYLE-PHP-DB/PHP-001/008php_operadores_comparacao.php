<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>

    <body>

        <h2>Operadores de comparação</h2>

        <?php

        $x = true;
        $y = "true";

        //var_dump retorna informações sobre as variáveis como fosse o console.log no js
        var_dump($x == $y); //true
        var_dump($x === $y); //false
        var_dump($x != $y); //false
        var_dump($x <> $y); //false
        var_dump($x !== $y); //true

        $x = 10;
        $y = 11;
        echo "<br><br>";
        var_dump($x > $y); //false
        var_dump($x < $y); //true
        var_dump($x >= $y); //false
        var_dump($x <= $y); //true


        
        
        
        




        
        
        ?>

    </body>

</html>