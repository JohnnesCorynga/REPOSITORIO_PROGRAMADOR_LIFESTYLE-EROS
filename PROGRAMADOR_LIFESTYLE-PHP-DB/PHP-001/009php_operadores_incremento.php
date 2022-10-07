<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h2>Operadores de incremento</h2>

    <?php
        $x = 10;
        //$x++; => x = x + 1;
        echo($x++); //escrever o x e incrementá-lo
        echo("<br>" . $x);//11
        echo("<br>" . $x--); //escrever o x e decrementá-lo
        echo("<br>". $x);//10

        echo("<br><br>" . ++$x); //incrementar o x para depois escrevê-lo
        echo("<br>" . --$x); //decrementar e depois escrever
        echo "<br>";

        $nome = "Eros Ravier";
        echo "$nome <br>";
        for($i =0;$i<10;$i++){
            echo"<br> $i - $nome";
        };
    ?>

</body>

</html>