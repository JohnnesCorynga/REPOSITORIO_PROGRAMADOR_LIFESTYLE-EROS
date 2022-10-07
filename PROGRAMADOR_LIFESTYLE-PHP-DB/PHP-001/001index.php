<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Começando</title>
</head>
<body>
    


    <?php
        echo"Olá, Mundo";
        $nome = "Eros";
        $eros = true;
        echo $eros;
        echo "</br>Meu nome é $nome"; // Se usa aspas duplas ele já sabe que é uma variável
        echo '</br>Meu nome é $nome';//Não dar ceerto com aspas simples
        echo '</br>Meu nome é ' .$nome; # quando se usa aspa si,ples tem que concatenar com o PONTO "."
        $res = $eros==true?"Verdadeiro":"Falso";
        echo "<br> O nome foi digitado como: $res";
    ?>
</body>
</html>