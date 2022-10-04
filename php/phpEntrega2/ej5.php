<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <p>Refresca la pagina para mostrar una nueva combinacion</p>
    <?php
    $num1 = rand(1, 6);
    $num2 = rand(1, 6);
    $resultado = $num1 + $num2;
    if ($num1==1) {
        echo "<img src='../../imagenes/img/img/1.svg'>";
    }elseif ($num1==2) {
        echo "<img src='../../imagenes/img/img/2.svg'>";
    }elseif ($num1==3) {
        echo "<img src='../../imagenes/img/img/3.svg'>";
    }elseif ($num1==4) {
        echo "<img src='../../imagenes/img/img/4.svg'>";
    }elseif ($num1==5) {
        echo "<img src='../../imagenes/img/img/5.svg'>";
    }elseif ($num1==6) {
        echo "<img src='../../imagenes/img/img/6.svg'>";
    }
    if ($num2==1) {
        echo "<img src='../../imagenes/img/img/1.svg'>";
    }elseif ($num2==2) {
        echo "<img src='../../imagenes/img/img/2.svg'>";
    }elseif ($num2==3) {
        echo "<img src='../../imagenes/img/img/3.svg'>";
    }elseif ($num2==4) {
        echo "<img src='../../imagenes/img/img/4.svg'>";
    }elseif ($num2==5) {
        echo "<img src='../../imagenes/img/img/5.svg'>";
    }elseif ($num2==6) {
        echo "<img src='../../imagenes/img/img/6.svg'>";
    }
    
    
    echo "<table border='1'>
    <tr> <h1>total</h1>
    <td><h1>".$resultado."</h1></td>
    </tr>
    </table>";
    ?>
    
</body>
</html>