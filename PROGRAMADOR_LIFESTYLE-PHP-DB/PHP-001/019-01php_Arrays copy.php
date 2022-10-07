<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>Arrays PhP - 02</h2>
    <?php
        $cars = array("Jeap","Corsa","Fusca","Corsa");
        for($i=count($cars)-1;$i>=0;$i--){//o count mostra o tamanho do array.
            echo $cars[$i];
            echo "<br>";
        };
        echo "<br>";

        $minhaArray = array("Eros"=>"23","Alessandro"=>"16","Kennedy"=>"27","João"=>"24","Alana"=>"10");
        foreach ($minhaArray as $x => $x_value){
            echo "<br>Nome: ".$x." Idade: ".$x_value.";";
        };


    ?>

</body>

</html>