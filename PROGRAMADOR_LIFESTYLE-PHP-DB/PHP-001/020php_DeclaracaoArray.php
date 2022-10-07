<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h2>Declaração de Arrays PhP</h2>
    <?php
       $dados = array(
        "Nomes"=> array(
            "Eros Ravier","Alessandro","Kennedy","João","Aniha"
        ),
        "Idades"=> array(23,16,27,24,41
        ),
        "Profissões"=>array(
            "Dev. Senior", "Dev Junior","Diretor ","Produtor","Ceo Executiva"
        )

        );
        var_dump($dados["Profissões"][0]);
        echo "<br>";
        echo "<ol>";
            for ($i=0; $i <count($dados["Nomes"]); $i++) { 
                echo "<li>".$dados["Nomes"][$i]." ".$dados["Idades"][$i]. " Anos.</li>". " ". $dados["Profissões"][$i];
            }
        echo "</ol>";
    ?>

</body>

</html>