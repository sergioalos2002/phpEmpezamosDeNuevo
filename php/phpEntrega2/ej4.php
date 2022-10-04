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
            ?>
        .circulo{
            background-color:rgb(<?php echo "$num1"?>, <?php echo "$num2"?>, <?php echo "$num3"?>);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: relative;
            left: 70px;
            top: 40px;
        }
        .circulo2{
            background-color:rgb(<?php echo "$num4"?>, <?php echo "$num5"?>, <?php echo "$num6"?>);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: relative;
            left: 100px;
            top: -20px;
        }
        .circulo3{
            background-color:rgb(<?php echo "$num7"?>, <?php echo "$num8"?>, <?php echo "$num9"?>);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: relative;
            left: 20px;
            top: -120px;
        }
    </style>
</head>
<body>

    <h1>Circulos de color</h1>
    <p>Actualice la pagina para mostrar 3 colores diferentes</p>
    <h3>Azul:<?php echo "$num1";?></h3>
    <h3>Rojo:<?php echo "$num3";?></h3>
    <h3>Verde:<?php echo "$num2";?></h3>
    
    <div class="circulo"></div>
    <div class="circulo2"></div>
    <div class="circulo3"></div>
</body>
</html>