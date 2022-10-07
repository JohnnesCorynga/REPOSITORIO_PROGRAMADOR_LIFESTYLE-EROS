<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h2>Sintaxe básica da linguagem PHP</h2>

    <?php
        $txt="Olá Mundo";
        echo $txt;

        //comentário uma linha
        #comenta uma linha
        //o operador de concatenação é o . (ponto)

        /*
            aqui podemos colocar vários comentários, 
            inclusive ocupando 
            várias linhas
        */

        $resposta_expressao = 5 /*+ 15*/ + 6;
        echo ($resposta_expressao) . "<br>";//mais recomendada
        ECHO ($resposta_expressao) . "<br>";
        eCHO ($resposta_expressao) . "<br>";

        //variáveis são case-sensitive
        $valor_float = 12.0; //float
        $valor_int = 8; //int
        $nome_pessoa = "Márcio Assis Miranda"; //string

        //saída válida
        echo ("<br>O nome do professor é $nome_pessoa");
        echo ('<br>O nome do professor é ' . $nome_pessoa); //exemplo com aspas simples
        //saída inválida com variáveis não declaradas
        echo ("<br>O nome do professor é $Nome_pessoa");
        echo ("<br>O nome do professor é $NOME_PESSOA <br>");

        //mais exemplos com print
        $salario_funcionario = 1200.00;
        $nota_aluno = 12.90;
        print("<br>O salário do funcionário é $salario_funcionario");
        print("<br>A nota do aluno é $nota_aluno pontos");
        print('<br>Exemplo de string com aspas simples' . $nota_aluno); //exemplo com aspas simples     

    
    ?>
    
</body>
</html>