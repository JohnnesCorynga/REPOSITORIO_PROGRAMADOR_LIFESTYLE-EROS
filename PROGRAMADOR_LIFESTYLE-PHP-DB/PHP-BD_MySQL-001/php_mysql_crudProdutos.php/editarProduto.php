<?php include_once("conexao.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .center{
        margin: auto;
        margin-top: 25px;
        max-width: 30%;
        border: 3px solid green;
        padding: 10px;
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <h2>Editar produtos</h2>
        <?php
            $idProduto = $_GET["idProduto"];
            $sql = "SELECT *FROM tbprodutos WHERE idProduto = $idProduto";
            $executa = $conn->query($sql);
            $produto = $executa->fetch_assoc();
        ?>
        <form class="form-control" action="updateProduto.php" method="POST">
            <label for="txtId">Id Produto: </label><br>
            <input type="text" name="txtId" id="txtId" value="<?php echo $produto["idProduto"] ?>" readonly>
        <br><br>
            <label for="txtProduto">Nome do Produto: </label><br>
            <input type="text" name="txtProduto" id="txtProduto" value="<?php echo $produto['nmProduto']  ?>" placeholder="Nome do Produto" required autofocus>
        <br><br>
            <label for="ddlCategoria">Categoria do Produto: </label>
            <br>
            <select name="ddlCategoria" id="ddlCategoria">
            <option value="0">>-- Selecione uma Categoria--<</option>
        
                <?php
                    $sql = "SELECT *FROM tbCategoria ORDER BY nmcategoria asc";
                    $registros = $conn->query($sql);
                    while ($exibir =$registros->fetch_assoc()){
                ?>
                <option value="<?php echo $exibir["idCategoria"]?>"
                    <?php echo ($exibir["idCategoria"]==$produto["idCategoria"])?"selected":"" ?>>
                    <?php echo $exibir["nmCategoria"]?>
                </option>
                <?php
                    //usamos acima o operador ternário para define o atributo selected
                    }
                ?>
            </select>
            <br><br>
            <label for="txtDescricao">Descrição do Produto</label>
            <br>
            <textarea  name="txtDescricao" id="txtDescricao" cols="30" rows="10" placeholder="Descrição do Produto"><?php echo $produto["descProduto"]?></textarea>
            <br><br>
            <input type="submit" value="Salvar">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>