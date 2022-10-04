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
     //Lo hago para tenerlo de las 2 maneeras
    echo '<h1 style ="font-size:'.$numAlea.'px">'.$numAlea.'</h1>';
    ?>
     
     <h1 style="font-size:<?php echo"$numAlea"?>px"><?php echo "$numAlea" ?></h1>
</body>
</html>