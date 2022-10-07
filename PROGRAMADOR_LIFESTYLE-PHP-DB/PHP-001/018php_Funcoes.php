<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>Funções PhP</h2>
    <?php
    //função sem parametros
    function chamar(){

    }
    //Função com parametros
        function namePrimeiro($name){
            echo $name;
        }
        namePrimeiro("Eros Ravier <br>");
        namePrimeiro("Alessandro <br>");
        namePrimeiro("Kennedy <br>");

        function multi($n1, $n2){
            return $n1*$n2;
        }
        echo " 5 x 10 = " . multi(5,10);
        echo "<br>";

        function tabuada($n1){
            for($i=1;$i<=10;$i++){
                echo "<br>$n1 x $i = ".($n1*$i);
            }
        }
        tabuada(7);
    ?>

</body>

</html>