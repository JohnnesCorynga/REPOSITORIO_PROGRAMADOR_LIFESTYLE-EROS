<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos cadastrados</title>
</head>
<body>
    <h2>Lista de produtos cadastrados</h2>
    <?php

    //incorporando o arquivo de conexão
    include_once("conexao.php");//Só execulta se ainda não tiver sido exexultado
    
    //definindo a string com o comando sql
    $sql = "SELECT *FROM tbprodutos order by nmProduto";
    //$sql= "select *from tbprodutos order by nmProduto"; // tbm funciona
    
    //executando o comando sql
    $dadosProdutos = $conn->query($sql);
    //verificando se foi retornado algum registro
    if ($dadosProdutos->num_rows>0) {
        //echo "Foi Retornado algum registro";
        while ($exibir = $dadosProdutos->fetch_assoc()) {
            echo "Id: " . $exibir["idProduto"] . " - Produto " . $exibir["nmProduto"] . "<br>";
        }
    }else{
        echo "Nenhum registro encontrado!";
    }
    
    ?>
</body>
</html>