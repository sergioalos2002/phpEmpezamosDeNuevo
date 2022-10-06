<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ej5_1.php" method="post">
    <?php 
    $fila = $_REQUEST["fila"];
    $columna = $_REQUEST["columna"];
   
   
    for ($i=0; $i < $fila ; $i++) { 
        
        for ($x=0; $x < $columna ; $x++) { 
           
            echo "<input type='number' name='fila".$i.$x."' value='".$i.$x."'>";
            
        }
        echo "<br>";
    }
    
    ?>
    <p>Vuelva a introducir el numero de filas y de columnas</p>
    <input type="number" name="fila">
    <input type="number" name="columna">
    <input type="submit" value="Mostrar" name="enviar"><input type="reset" value="borrar">
</form>
</body>
</html>