<?php
    //parâmetros de conexão
    define('HOST', 'localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DB', 'bd_curso');

    //criar o obeto de conexão
    $conn = new mysqli(HOST, USER, PASSWORD, DB);

    if($conn -> connect_error){
        die("Falha na conexâo...");
    }
    // "Conectado com sucesso!"; 




?>