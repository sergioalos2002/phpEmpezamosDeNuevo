<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

   


    $celda1 = $_REQUEST["celda1"];
    $celda2 = $_REQUEST["celda2"];
    $celda3 = $_REQUEST["celda3"];
    $celda4 = $_REQUEST["celda4"];
    $celda5 = $_REQUEST["celda5"];
    $celda6 = $_REQUEST["celda6"];
    $celda7 = $_REQUEST["celda7"];
    $celda8 = $_REQUEST["celda8"];
    $celda9 = $_REQUEST["celda9"];

    $total1 = 0;
    $total2 = 0;
    $total3 = 0;

    $listaValores = [$celda1,$celda2,$celda3,$celda4,$celda5,$celda6,$celda7,$celda8,$celda9];

    for ($i=0; $i < count($listaValores) ; $i++) { 
        for ($x=0; $x < 3; $x++) { 
            if ($i < 3) {
                $total1 = $total1 + $listaValores[$i];
            }else if($i >= 3 && $i < 6){
                $total2 = $total2 + $listaValores[$i];
            }else{
                $total3 = $total3 + $listaValores[$i];
            }
        }
        
    }
    echo "el total de la fila 1 es $total1";
    echo "<br>";
    echo "el total de la fila 1 es $total2";
    echo "<br>";
    echo "el total de la fila 1 es $total3";
    echo "<br>";
    if ($total1 > $total2 && $total1 > $total3) {
        echo "<br>";
    echo "La fila con el valor total es $total1";
    }else if ($total2 > $total1 && $total2 > $total3) {
        echo "<br>";
        echo "La fila con el valor total es $total2";
    }else if ($total3 > $total1 && $total3 > $total2) {
        echo "<br>";
        echo "La fila con el valor total es $total3";
    }else{
        echo "<br>";
        echo "Hay algun empate";
    }

    ?>
</body>

</html>