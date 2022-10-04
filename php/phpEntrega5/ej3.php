<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
<?php
       
        ?>
.div-1 {
       
       width: 200px;
       height: 200px;
       border-radius: 50%;
       text-align: center;
    }
.h1{
    font-size: 100px;   
}


    </style>

</head>
<body>
    <?php
    $num1 = rand(1, 10);
    
    echo "<center><h1>Circulos en Fila</h1></center>";
    echo "<p>Actualice la pagina para un nuevo dibujo</p>";
    echo "<h1>Numero de circulo ".$num1. "</h1>"
    ?>
    <table border="1px">
        <tr>
        <?php
        

        for ($i=0; $i < $num1; $i++) { 
            $numeroCircular = rand(1, 9);
            $color1 = rand(0, 255);
            $color2 = rand(0, 255);
            $color3 = rand(0, 255);
            echo "<td><div class='div-1' style='background-color:rgb(".$color1.",".$color2.",".$color3."')><h1 class='h1'>".$numeroCircular."</h1></div></td>";
        }
        ?>

        </tr>
    </table>
    
</body>
</html>