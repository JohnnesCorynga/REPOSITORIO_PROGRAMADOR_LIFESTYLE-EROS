<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function confirmarExclusao(id, prod){
            if (window.confirm("Deseja realmente Excluir o Registro? \n" + id + " - " + prod + "\n\n\n???")) {
                window.location = "excluirProduto.php?idProduto="+id;
            }
        }
    </script>
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
    <table class="table table-striped">
        <tr>
            <th>Id do Produto</th>
            <th>Nome do produto</th>
            <th>Categoria</th>
            <th>Descriação do produto</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>

    <?php
        while ($exibirProduto = $dadosProdutos->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $exibirProduto["idProduto"] ?></td>
        <td><?php echo $exibirProduto["nmProduto"] ?></td>
        <?php
            $sqlCategoria = "select *from tbcategoria where idCategoria = " . $exibirProduto["idCategoria"];
            $dadosCategoria = $conn->query($sqlCategoria);
            $exibirCategoria = $dadosCategoria->fetch_assoc();   
        ?>
        <td><?php echo $exibirCategoria["idCategoria"] . " - " . $exibirCategoria["nmCategoria"] ?></td>
        <td><?php echo $exibirProduto["descProduto"] ?></td>
        <td><a href="editarProduto.php?idProduto=<?php echo $exibirProduto["idProduto"] ?>">Editar</a></td>
        <td><a href="#" onclick="confirmarExclusao(<?php echo $exibirProduto['idProduto'] ?>,'<?php echo $exibirProduto['nmProduto'] ?>')">Excluir</a></td>

        

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
    <button><a style="text-decoration: none;" href="novo_produto_parte02.php">Adicionar Produto</a></button>
</body>
</html>