<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin Adm</title>
</head>
<body>
    <h2>Loguin ADM</h2>
    
    <?php
        //incorporandoo arquivo de conexão
        include_once('MPconexao.php');
        //Definindo string com o comando sql
        $sql = "SELECT *FROM tb_loguin_admi order by id_admi";
        //execultando o comando sql
        $dadosAdmi = $coon->query($sql);

        //verificando se foi retornado algum registro
        if ($dadosAdmi->num_rows>0) {
            //echo "foi retornado registro";
            while ($exibir = $dadosAdmi->fetch_assoc()) {
                print "Id: ".$exibir["id_admi"]."<br>Loguin: ".$exibir["usuario"]."<br>Cpf : ".$exibir["cpf_admi"]."<br>Senha: ".$exibir["password"];
            };
        }else{
            echo "Nenhum Registro encontrado!";
        };
    
    
    
    
    ?>
</body>
</html>