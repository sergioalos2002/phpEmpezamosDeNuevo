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
     $numAlea = rand (10 ,100);
     echo "<h1>Ejemplo de ejercicio sin formulario 1</h1>";
     echo "<p>Actualice la pagina para mostrar un tamaño diferente</p>";
     echo "<p>tamaño a aplicar: ( ".$numAlea." )</p>";
    //Lo hago de las dos maneras para tenerlo
    //Porcierto me ha estado dando MUCHOS ERRORES por el tema de los espacios
     echo "<h1 style ='font-size:". $numAlea . "px;'>Hola mundo</h1>";

    ?>
     
     <h1 style='font-size:<?php echo "$numAlea" ?>px;'>Hola mundo</h1>
     
</body>
</html>