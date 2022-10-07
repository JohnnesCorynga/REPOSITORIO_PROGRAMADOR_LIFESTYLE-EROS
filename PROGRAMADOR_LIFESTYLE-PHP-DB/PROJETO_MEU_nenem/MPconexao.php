<?php
    //parâmetros de conexão
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DB","projeto_meu");

    // criando o objeto de conexão
    $coon = new mysqli(HOST,USER,PASSWORD,DB);

    if($coon-> connect_error){
        die("Falha na conexão...");
    //}else{print "conectado com sucesso";
    };
?>