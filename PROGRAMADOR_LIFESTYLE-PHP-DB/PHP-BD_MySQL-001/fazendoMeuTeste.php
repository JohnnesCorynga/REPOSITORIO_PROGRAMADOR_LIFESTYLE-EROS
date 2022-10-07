<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Começando</title>
</head>
<body>
    
    <!--<form action="bemvindo.php" method="get">-->
    <form action="fazendoMeuTeste.php" method="get">
        <label>Nome:</label><input type="text" name="nome"><br>
        <label>Idade:</label> <input type="text" name="idade"><br>
        <input type="submit" value="Enviar">
    </form> 
    <?php
         $nome = $_GET["nome"];
         $idade = $_GET["idade"];
         
         echo "Olá, Mundo";
         echo "<br>Bem-vindo ao PHP e Banco de dados $nome. Você tem $idade anos de idade.";
     ?>
    

</body>
</html>