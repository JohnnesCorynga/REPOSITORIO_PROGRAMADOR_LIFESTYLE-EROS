<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>

    <h2>Strings em PHP</h2>

    <body>

        <?php
        //strings
        $nome_aluno = "Eros Ravier da Silva Aragão";
        $nome_curso = "Programação Web";

        //quando estamos trabalhando com aspas duplas, não precisa usar o operador de concatenação
        echo("Eu faço o curso $nome_curso e o aluno se chama $nome_aluno.");
        echo("<br>");
        echo('Eu faço o curso ' . $nome_curso . ' e o professor se chama ' . $nome_aluno . '.');
        
        //tamanho da strings
        echo("<br>");
        echo(strlen($nome_aluno));
        
        //quantidade de palavras
        echo("<br>");
        echo(str_word_count($nome_aluno));

        //reverter uma string
        echo("<br>");
        echo(strrev($nome_aluno)); //escreve a string de trás para frente

        //retonar a posição que uma string se encontra
        echo("<br>");
        echo(strpos($nome_aluno, "Ravier"));

        //substituir string
        echo("<br>");
        echo(str_replace( "Ravier","Johnnes", $nome_aluno));
            
    ?>

    </body>

</html>