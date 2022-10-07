<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h2>Do While</h2>

    <?php
      //Comando de repetição FOR
        $num = 8;
        $soma = 0;
        for($i = 0;$i<=10;$i++){
            $soma = $num+$i;
            echo "<br>$num + $i = $soma";
        }
        echo "<br>";
        $nome = "Eros Ravier";
        echo $nome;        echo "<br>";

        echo "Tamanho da String: " .mb_strlen($nome);# o mb_strlen mostra o tamanho da string.
        echo "<br>";

        for($i=0;$i<mb_strlen($nome);$i++){
            echo $nome[$i];
            echo "<br>";
        };
        for($i=mb_strlen($nome);$i>=0;$i--){
            echo $nome[$i];
            echo "<br>";
        };

    
    ?>

</body>

</html>