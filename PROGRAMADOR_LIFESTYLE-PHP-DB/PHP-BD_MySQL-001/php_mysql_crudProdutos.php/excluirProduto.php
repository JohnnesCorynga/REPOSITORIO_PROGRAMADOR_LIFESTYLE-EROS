<?php
    include_once("conexao.php");

    $idProduto = $_GET["idProduto"];
    $sql = "DELETE FROM tbprodutos WHERE idProduto = $idProduto";
    if ($conn->query($sql)===TRUE) {
?>
        <script>
            alert("Registro foi excluido com sucesso!");
            window.location = "select_parte04_bootstrap.php";
        </script>
<?php
    }else{
?>
        <script>
            alert("Error ao excluir o registro");
            window.location = "select_parte04_bootstrap.php";
        </script>
<?php

    }

?>