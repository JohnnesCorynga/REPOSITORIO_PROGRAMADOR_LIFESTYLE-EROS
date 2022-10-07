<?php
    include_once("MPconexao.php");
    $usuario = $_POST["idUsuario"];
    $password = $_POST["password"];
    $sql = "SELECT *FROM tb_loguin_admi order by id_admi";
        //execultando o comando sql
        $dadosAdmi = $coon->query($sql);
        $usuarioID;
        $usuarioUS;
        $usuarioCPF;
        $senhaBD;
        while ($exibir = $dadosAdmi->fetch_assoc()) {
            $usuarioID =$exibir["id_admi"];
            $usuarioUS =$exibir["usuario"];
            $usuarioCPF =$exibir["cpf_admi"];
            $senhaBD =$exibir["password"]; 
        };
        if($password==$senhaBD&&$usuario==$usuarioID||$usuario==$usuarioUS||$usuario==$usuarioCPF){
            //echo "Deu Certo!!!";
?>
    <script>
        window.location = "pageInicial.php";
    </script>
<?php
        }else{
            ?>
    <script>
        
        alert("ERRO] Usuario/senha não encontrados!!");
        window.location = "index.php";
    </script>
<?php
        };

?>