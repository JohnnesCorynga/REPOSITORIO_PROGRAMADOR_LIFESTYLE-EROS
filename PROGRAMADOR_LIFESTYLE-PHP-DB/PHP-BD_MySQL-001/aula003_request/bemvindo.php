<?php
    
    $nome = $_REQUEST["nome"];//Não recomendavel posi pode ser pouco seguro o uso de request
    $idade = $_REQUEST["idade"];
    echo"Olá, Mundo";
    echo "<br>Bem-vindo ao PHP e Banco de dados $nome. Você tem $idade anos de idade.";
?>
