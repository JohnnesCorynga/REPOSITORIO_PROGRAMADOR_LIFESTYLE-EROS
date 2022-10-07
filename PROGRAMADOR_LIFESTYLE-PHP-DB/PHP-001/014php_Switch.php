<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>

    <?php
    //Estrutura de multipla esCOLHA
        //Exemplo 1
        $cor_favorita = "vertmelha";
        switch ($cor_favorita) {
            case 'verde':
                echo "Sua cor favorita é Verde!";
                break;//o break para a execução do codigo aqui
            case 'azul':
                echo "Sua cor favorita é Azul!";
                break;//o break para a execução do codigo aqui
            case 'Amarela';
                echo "Sua cor favorita é Amarela!";
                break;//o break para a execução do codigo aqui
            case 'vermelha':
                echo "Sua cor favorita é Vermelha!";
                break;//o break para a execução do codigo aqui
            default:
                echo "Nenhuma cor favorita!";
                break;//o break para a execução do codigo aqui
        }
        echo "<br>";
        //Exemplo 2
        $alternativa = 'E';
        switch ($alternativa) {
            case 'a';
            case 'A';
                echo "Alternativa A";
                break;//o break para a execução do codigo aqui
            case 'b';
            case 'B';
                echo "Alternativa B";
                break;//o break para a execução do codigo aqui
            case 'c';
            case 'C';
                echo "Alternativa C";
                break;//o break para a execução do codigo aqui
            case 'd';
            case 'D':
                echo "Alternativa D";
                break;//o break para a execução do codigo aqui
            case 'e';
            case 'E';
                echo "Alternativa E";
                break;//o break para a execução do codigo aqui
            default:
                echo "Alternativa Inválida!";
                break;//o break para a execução do codigo aqui
        }
    ?>
    
</body>
</html>