<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>

<body>

    <h2>Array multidimensional</h2>

    <?php

    //$pessoas = ['Raquel', 'Júlia' , 'Márcio', 'Adriana' ];
    
    $pessoas = ['Raquel' => '40', 'Júlia' => '10' , 'Márcio' => '42', 'Adriana' => '34'];

    //sort($pessoas); //ordem crescente
    //rsort($pessoas); //ordem crescente

    //ksort($pessoas); //ordem crescente pela chave
    //krsort($pessoas); //ordem decrescente pela chave

    //asort($pessoas); //ordem crescente pelo valor
    //arsort($pessoas); //ordem decrescente pelo valor

    foreach ($pessoas as $key => $value){
        echo "<br>" . $key . " - " . $value;
    }

    echo "<br>";

    $cars = array(
        array('Fusca', 15, 20), //linha 0
        array('Gol', 23, 6), //linha 1
        array('Brasília', 45, 24), //linha 2
        array('Fiat Uno', 37, 32) //linha 3
    );

    sort($cars);

    //var_dump($cars);

    ?>
    <table>
        <tr>
            <th>Carro</th>
            <th>Qtde em Estoque</th>
            <th>Qtde Vendida</th>
        </tr>

        <?php
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $cars[$i][$j] . "</td>";
            }
            echo "</tr>";
        }


        ?>
    </table>

</body>

</html>