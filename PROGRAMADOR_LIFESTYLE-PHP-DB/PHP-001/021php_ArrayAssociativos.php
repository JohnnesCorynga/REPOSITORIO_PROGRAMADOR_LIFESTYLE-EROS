<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>Arrays Associativas PhP</h2>
    <?php
        $carros = array("Fusca","Camaro", "Celta","Corsa","Prisma");
        $ano_fab = array("Fusca"=>1970,"Camaro"=>2012, "Celta"=>2000,"Corsa"=>1997,"Prisma"=>2008);
        var_dump($carros);
        var_dump($ano_fab['Fusca']);
        echo "<br>";
        echo "<h2>Array Original, antes da Implementação</h2>";
        echo "Carro - Ano de fabricação";
        for ($i=0; $i < count($carros); $i++) {
            echo "<br>" . $carros[$i] . " - " .$ano_fab[$carros[$i]]; 
        }
        echo "<br>";
        echo "<br>";
        array_unshift($carros,"Land Rouver", "Strada", "Hilux");
        $ano_fab = array("Land Rouver"=>2005, "Strada"=>2003, "Hilux"=>1987 ) + $ano_fab;
       
        echo "<br>";
        echo "<h2>Array depois da Implementação</h2>";
        echo "Carro - Ano de fabricação";
        for ($i=0; $i < count($carros); $i++) {
            echo "<br>" . $carros[$i] . " - " .$ano_fab[$carros[$i]]; 
        }
    ?>

</body>

</html>