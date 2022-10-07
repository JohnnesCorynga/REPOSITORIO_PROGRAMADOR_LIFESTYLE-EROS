<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando MySQL</title>
</head>
<body>
<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
?>
<h2>Olá, Mundo! <br> Bem-vindo ao PHP e Banco de dados <?php echo $nome?>. Você tem <?php echo $idade?> anos de idade</h2>


</body>
</html>