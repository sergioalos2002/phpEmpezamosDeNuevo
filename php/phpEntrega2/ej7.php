<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php 
            $num1 = rand(1, 255);
            $num2 = rand(1, 255);
            $num3 = rand(1, 255);
            $num4 = rand(1, 255);
            $num5 = rand(1, 255); 
            $num6 = rand(1, 255);
            $num7 = rand(1, 255);
            $num8 = rand(1, 255); 
            $num9 = rand(1, 255);
            $tamCirculo1 = rand(50, 150);
            $tamCirculo2 = rand(50, 150);
            $tamCirculo3 = rand(50, 150);
            $tamAux;
           if ($tamCirculo3 > $tamCirculo2 && $tamCirculo3 > $tamCirculo1) {
                $tamAux = $tamCirculo1;
                $tamCirculo1 = $tamCirculo3;
                $tamCirculo3 = $tamAux;
                if ($tamCirculo2 < $tamCirculo3) {
                    $tamAux = $tamCirculo2;
                    $tamCirculo2 = $tamCirculo3;
                    $tamCirculo3 = $tamAux;
                }
                
            }elseif ($tamCirculo2 > $tamCirculo1 && $tamCirculo2 > $tamCirculo3) {
                $tamAux = $tamCirculo1;
                $tamCirculo1 = $tamCirculo2;
                $tamCirculo2 = $tamAux;
                if ($tamCirculo2 < $tamCirculo3) {
                    $tamAux = $tamCirculo2;
                    $tamCirculo2 = $tamCirculo3;
                    $tamCirculo3 = $tamAux;
                }
                
            }elseif ($tamCirculo1 > $tamCirculo2 && $tamCirculo1 > $tamCirculo3) {
                if ($tamCirculo2 < $tamCirculo3) {
                    $tamAux = $tamCirculo2;
                    $tamCirculo2 = $tamCirculo3;
                    $tamCirculo3 = $tamAux;
                }
                
            }
            ?>
        .circulo{
            background-color:rgb(<?php echo "$num1"?>, <?php echo "$num2"?>, <?php echo "$num3"?>);
            border-radius: 50%;
            float: left;
            margin: 0px auto;
            <?php echo "width:".$tamCirculo1."px;";
                  echo "height:".$tamCirculo1."px;";
            ?>
            
        }
        .circulo2{
            background-color:rgb(<?php echo "$num4"?>, <?php echo "$num5"?>, <?php echo "$num6"?>);
            border-radius: 50%;
            float: left;
            margin: 0px auto;
            <?php echo "width:".$tamCirculo2."px;";
                  echo "height:".$tamCirculo2."px;";
            ?>
        }
        .circulo3{
            background-color:rgb(<?php echo "$num7"?>, <?php echo "$num8"?>, <?php echo "$num9"?>);
            border-radius: 50%;
            float: left;
            margin: 0px auto;
            <?php echo "width:".$tamCirculo3."px;";
                  echo "height:".$tamCirculo3."px;";
            ?>
        }
    </style>
</head>
<body>

    <h1>Circulos de color</h1>
    <p>Actualice la pagina para mostrar 3 colores y tamaños diferentes ordenados de mayor a menor</p>
    
    <div class="circulo"></div>
    <div class="circulo2"></div>
    <div class="circulo3"></div>
</body>
</html>