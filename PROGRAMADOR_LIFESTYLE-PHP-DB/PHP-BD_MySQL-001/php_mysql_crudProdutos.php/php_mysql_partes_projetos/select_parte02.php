<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos cadastrados</title>
    <style>
        table, th, td{
            text-align: center;
            border: solid 1px black ;
            border-collapse: collapse;/*Faz com que seja so uma borda*/ 
        }
        table{
            width: 90%;
        }
    </style>
</head>
<body>
    <h2>Lista de produtos cadastrados</h2>
    <?php

    //incorporando o arquivo de conexão
    include_once("conexao.php");//Só execulta se ainda não tiver sido exexultado
    
    //definindo a string com o comando sql
    $sql = "SELECT *FROM tbprodutos order by nmProduto";
    //$sql= "select *from tbprodutos order by nmProdutos"; // tbm funciona
    
    //executando o comando sql
    $dadosProdutos = $conn->query($sql);
    //verificando se foi retornado algum registro
    if ($dadosProdutos->num_rows>0) {
        //echo "Foi Retornado algum registro";
    ?>
    <table>
        <tr>
            <th>Id do Produto</th>
            <th>Nome do produto</th>
            <th>Categoria</th>
            <th>Descriação do produto</th>
        </tr>

    <?php
        while ($exibir = $dadosProdutos->fetch_assoc()) {
    ?>
    <tr>
        <td>
            <?php echo $exibir["idProduto"] ?>
        </td>
        <td>
            <?php echo $exibir["nmProduto"] ?>
        </td>
        <td>
            <?php echo $exibir["idCategoria"] ?>
        </td>
        <td>
            <?php echo $exibir["descProduto"] ?>
        </td>
    </tr>
    <?php
        }
    ?>

    </table>
    <?php
    
    }else{
        echo "Nenhum registro encontrado!";
    }
    
    ?>
</body>
</html>