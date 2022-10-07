<?php 
    include_once("conexao.php");
    $nmProduto = $_POST["txtProduto"];
    $categoria = $_POST["ddlCategoria"];
    $descProduto = $_POST["txtDescricao"];

    $sql = "INSERT INTO tbProdutos (nmProduto, idCategoria, descProduto)";
    $sql .= " VALUES ('$nmProduto', $categoria, '$descProduto')";
    //echo $sql;

    if ($conn->query($sql)=== TRUE) {
?>
       <script>
            alert("Registro salvo com sucesso!");
            window.location = "select_parte04_bootstrap.php";//retorna parq a página anterior

       </script>

<?php
    }else{
?>
    <script>
        alert("Error ao inserir o registro!")
        window.history.back();//retorna parq a página anterior
    </script>
<?php
    }



?>
