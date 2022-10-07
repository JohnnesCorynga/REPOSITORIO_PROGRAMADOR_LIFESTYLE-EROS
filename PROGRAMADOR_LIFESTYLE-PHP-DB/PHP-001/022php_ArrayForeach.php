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
        $frutas = ["Pêra","Maçã", "Banana","Uva"];
        $idades = array(
            "Eros Ravier"=>23,"Alessandro"=>16,"Kennedy"=>27,"João"=>24,"Aniha"=>41
        );//Array Associativa
        echo "<h2>Aqui estão todas as  Frutas</h2>";
        echo "<br>Temos ao todo ".count($frutas)." frutas";
        foreach ($frutas as $value) {
            echo "<br> $value";
        };
        echo "<h2>Aqui estão todas as pessoas e suas idades</h2>";
        foreach ($idades as $key => $value) {
            echo "<br> $key tem $value Anos.";
        };

    ?>

</body>

</html>