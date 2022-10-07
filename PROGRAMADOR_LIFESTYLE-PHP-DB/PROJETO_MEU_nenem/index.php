<?php include_once("MPconexao.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color: black;
            color: blue;
        }
        h2{
            font: normal 35px "arial black";
        }
        section{
            margin: auto;
            margin-top: 150px;
            min-height: 300px;
            max-width: 450px;
            text-align: center;
            border-radius: 15px;
            color: blue;
        }
        label{
            font:normal 30px "time new roman";
        }
        input{
            font:normal 20px "time new roman"; 
            margin: 8px;
            border-color: blue;
            border-radius: 5px;
        }
        .botao{
            margin-top: 20px;
            border-radius: 50px;
            background-color: blue;
            
        }
    </style>
</head>
<body>
    
        <section>
            <h2>Loguin</h2>
            <form class="form-control" action="loguinAdm.php" method="post">
                <label for="idUsuario">Usuario</label><br>
                <input type="text" name="idUsuario" id="idUsuario" placeholder="Id,Usuário ou Email" autofocus required><br>
                <label for="password">Senha</label><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                <input type="checkbox" onclick="MostrarOcultarSenha()">Mostrar Senha
                <br>
                <input type="submit" class="botao" value="Entrar" onclick="enviar()">
                  </form>
        </section>
        <?php
        function enviar(){
            $usuario = $_POST["idUsuario"];
            $password = $_POST["password"];
           if($usuario>0||$password>0){
        ?>
            <script>
                window.location = "pageInicial.php";
            </script>
        <?php
           }
        };
        ?>
        <script>
            function MostrarOcultarSenha(){
                var senha = document.querySelector("#password");
                if(senha.type== "password"){
                    senha.type = "text"
                }else{
                    senha.type = "password";
                }
            }
        </script>
</body>
</html>