<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>Classificação de Arrays PhP</h2>
    <?php
        $frutas = ["Pêra","Maçã", "Banana","Uva"];
        //sort($frutas);//Ordem crescente
        rsort($frutas);//Ordem decrescente
        echo "<br>Array Ordenada: ";
        foreach ($frutas as $value) {
            echo "<br>".$value ;
        };
        echo "<br>";
        echo "<br>";
        $pessoas = array(
            "Eros Ravier"=>23,"Alessandro"=>16,"Kennedy"=>27,"João"=>24,"Aniha"=>41
        );//Array Associativa
        ksort($pessoas);//Ordem crescente pela chave
        //krsort($pessoas);//Ordem decrescente pela chave   
        //asort($pessoas);//Ordem crescente pelo Valor
        //arsort($pessoas);//Ordem decrescente pelo Valor
        
        foreach ($pessoas as $key => $value) {
            echo "<br>".$key ." - ".$value ;
        };

        
    ?>

</body>

</html>