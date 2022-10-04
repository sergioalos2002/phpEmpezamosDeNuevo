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
     echo "<h1>Ejemplo ej 2</h1>";
     echo "<p>Actualice la pagina para mostrar un tamaño diferente</p>";
     
    //Lo hago de las dos maneras para tenerlo
    //Porcierto me ha estado dando MUCHOS ERRORES por el tema de los espacios
    ?>
     <table border="1">
  <tr>
    <td><h1 style='font-size:<?php echo "$numAlea" ?>px;'>Hola </h1></td>
    </tr>
    </table>
    <p>Ultima modificacion de esta pagina: 8 de septiembre de 2020</p>
    <p>Este programa forma parte del curso <b>Programacion web en PHP</b> de segundo de DAW</p>
</body>
</html>