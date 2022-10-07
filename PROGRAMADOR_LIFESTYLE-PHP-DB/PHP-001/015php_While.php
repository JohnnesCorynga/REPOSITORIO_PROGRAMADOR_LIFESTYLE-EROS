<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    
    <h2>While</h2>

    <?php
        //comando de repetição while -> teste o início

        $a = 1;
        while ($a <= 10) {
            echo "<br>$a"; //código a ser executado
            if ($a == 5) {
                break; //finaliza a execução do bloco
            }
            $a++; //operador de incremento -> a = a + 1
        }
    ?>

</body>

</html>