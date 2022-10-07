<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h2>Operadores lógicos</h2>

    <?php
    //OPERADOR (and == &&)
    //todas as condições tem que ser verdadeiras para retornar true

    //var_dump(true and true and true);//retorna true
    //var_dump(true and false);//retorna false
    //var_dump(true && true && false);//retorna false
    //var_dump(true && false);//retorna false

    //OPERADOR  (or ou ||)
    //apenas uma condição precisa ser verdadeira para retornar true
    //var_dump(true or false or false);//retorna true
    //var_dump(true or false);//retorna true
    //var_dump(true || false);//retorna true
    //var_dump(false || false);//retorna false

    //OPERADOR DE (NEGAÇÃO)
    //var_dump(!true);  //false
    //var_dump(!false); //true

    //var_dump(!(true or false));//false
    
    //OPERADOR (XOR)
    //retorna true se a ou b são verdareiros e não ambos
    //Só um deve ser verdadeiro
    var_dump(true xor false);//true
    var_dump(false xor true);//true
    var_dump(true xor true);//false
    var_dump(false xor false);//false


    
    



        
    ?>

</body>

</html>