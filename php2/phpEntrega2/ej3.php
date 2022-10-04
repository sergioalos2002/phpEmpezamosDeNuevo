<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/ej3.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    $numAlea = rand (10 ,100);
     echo "<h1>Ejemplo de ejercicio sin formulario 1</h1>";
     echo "<p>Actualice la pagina para mostrar un tamaño diferente</p>";
     
    
    ?>
     
     
     <table border="1">
  <tr>
    <td><h1 style="font-size:<?php echo"$numAlea"?>px"><?php echo "$numAlea" ?></h1></td>
    </tr>
    </table>
    <p>Ultima modificacion de esta pagina: 8 de septiembre de 2020</p>
    <p>Este programa forma parte del curso <b>Programacion web de PHP</b> de 2 DAW</p>
</body>
</html>