<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <h2>Cadastro de produtos</h2>
    <form action="exibir.php" method="post">
        <label for="">Nome do produto</label>
        <input type="text" name="txtProduto" id="txtProduto" autofocus>
        <br>
        <label for="">Categoria do produto</label>
       <select name="ddlCategoria" id="ddlCategoria">
            <option value="1">Tecnológia da informação</option>
            <option value="2">Bebidas</option>
            <option value="3">Alimentos</option>
            <option value="4">Escritório</option>
            <option value="5">Cama, mesa e banho</option>

       </select>
        <br>
        <label for="">Descrição do produto</label>
        <textarea name="txtDescricao" id="txtDescricao" cols="30" rows="10">

        </textarea>
        <br>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
        <br>
        <div name="resto"></div>

    </form>


</body>
</html>