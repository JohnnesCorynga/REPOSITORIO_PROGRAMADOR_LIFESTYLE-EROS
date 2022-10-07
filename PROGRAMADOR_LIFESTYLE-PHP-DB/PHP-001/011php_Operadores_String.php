<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaadores de String</title>
</head>
<body>
    
    <?php
        //Operador de concatenação
        $texto_a = "Olá, ";
        $texto_b = "Mundo! ";
        $texto_c = $texto_a . $texto_b;// O ponto(.) concatena a string
        echo $texto_c . "<br>";
        
        //a .= b è o mesmo que a = a + b
        $texto_c .= $texto_a;
        echo $texto_c;
        echo "<br>";
        $texto_c .= "Mais Alguma coisa!";
        echo $texto_c;


    ?>
</body>
</html>