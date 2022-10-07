<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <h2>Cadastro de produtos</h2>
    <form action="inserirProduto.php" method="POST">
        <label for="txtProduto">Nome do Produto: </label><br>
        <input type="text" name="txtProduto" id="txtProduto" placeholder="Nome do Produto" required autofocus>
    <br><br>
        <label for="ddlCategoria">Categoria do Produto: </label>
        <br>
        <select name="ddlCategoria" id="ddlCategoria">
            <option value="">Alimentos</option>
            <option value="">Eletrônicos</option>
            <option value="">Bebidas</option>
        </select>
        <br><br>
        <label for="txtDescProduto">Descrição do Produto</label>
        <br>
        <textarea name="txtDescricao" id="txtDescricao" cols="30" rows="10" placeholder="Descrição do Produto"></textarea>
        <br><br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Cancelar">

    </form>
</body>
</html>