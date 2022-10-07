<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>Arrays PhP</h2>
    <?php
        $ano =[];
        for($i= 1980;$i<=2022;$i++){
            for($j =0;$j<=42;$j++){
                $ano[$j] = $i;
            }
            
        }           
        echo $ano[7];
        echo"<br>";

        //Tipos de arrays
        $carros = array("Fiat Uno", "Fiat Miller", "Celta", "Camaro", "Corola");
        $nomes = ["Eros", "Alessandro", "João Vittor", "Kennedy"];
        echo 'Eu me chamo ' .$nomes[0] .' e meu nome tem '.count($nomes). ' ' .strlen($nomes[0]). ' Letras.';//o count() assim como o strlen() retorna o tamanho da array
        echo "<br>Meu carro favorito é o ". $carros[1] ." ". $ano[19]." Ao todo temos " .count($carros) ." carros no estoque.";
        //Atribuindo valores pro array
        $carros[count($carros)]= "Polo";//Dessa forma o objeto sempre será adicionado no fim do array.

        for($k =0; $k<count($carros);$k++){
            echo "<br>";
            echo $carros[$k];
            echo "<br>";
           
        }
        $carros[0]= $carros[0].", Citroen C3";
        for($k =0; $k<count($carros);$k++){
            echo "<br>";
            echo ($k+1)." - ".$carros[$k];
            echo "<br>";
           
        }


    ?>

</body>

</html>