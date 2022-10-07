<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    table, th, td{
        border: solid 1px black;
        border-collapse:collapse ;
        padding: 10px;
        text-align: center;
    }
</style>
<body>
    <h2>Arrays Multidimensional PhP</h2>
    <?php
        $cars = array(
            array('Fusca',12,16),
            array('Gol',17,5),
            array('Mercedes',6,13),
            array('Hilux',22,14)
        );
        #Tambem dar certo
        /*$cars2 = array(
            ['Fusca',12,8],
            ['Gol',18,5],
            ['Mercedes',19,13],
            ['Hilux',22,14]
            print_r($cars2);
        );*/
        print_r($cars);
        echo "<br>";
        echo "<br>";
        ?>
        <table>
             <tr>
                <th>Carros</th>
                <th>Estoque</th>
                <th>Vendidos</th>
            </tr>
            
            <?php
        
        echo "<br>";
        
        for ($i=0; $i < count($cars); $i++) { 
            echo "<tr>";
            for ($j=0; $j< count($cars)-1; $j++) { 
            echo "<td>".$cars[$i][$j]."</td>";
            }
            echo "</tr>";
        };        
        
        ?>
    </table>

</body>

</html>