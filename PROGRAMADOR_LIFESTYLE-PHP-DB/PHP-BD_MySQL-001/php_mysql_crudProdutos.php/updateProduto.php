<?php
    include_once("conexao.php");
    
    $idProduto = $_POST["txtId"];
    $produto = $_POST["txtProduto"];
    $descricao = $_POST["txtDescricao"];
    $categoria = $_POST["ddlCategoria"];
    
    $sql = "UPDATE tbProdutos SET nmproduto = '$produto', descProduto = '$descricao', idcategoria = $categoria WHERE idProduto = $idProduto";
    //echo $sql;
    if ($conn->query($sql)===TRUE) {
?>
    <script>
        alert("Registro atualizado com sucesso!");
        window.location = "select_parte04_bootstrap.php";
    </script>
<?php
    }else{
?>
        <script>
            alert("Error ao atualizar o registro!");
            window.history.back(); //o back() volta para a página anterior
        </script>
<?php 
    }
?>