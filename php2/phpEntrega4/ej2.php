<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .div-1 {
        background-color: red;
        width: 200px;
        height: 200px;
    }
    
    .div-2 {
    	background-color: blue;
        width: 200px;
        height: 200px;
    }


    </style>
</head>

<body>
    <p>Refresca la pagina para mostrar una nueva combinacion</p>
    <?php
    $num1 = rand(1, 6);
    $num2 = rand(1, 6);
    $resultado = $num1 + $num2;
    if ($num1>$num2) {
        if ($num1==1) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num1==2) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num1==3) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num1==4) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num1==5) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num1==6) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        if ($num2==1) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num2==2) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num2==3) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num2==4) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num2==5) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num2==6) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        echo "<p>y el numero mayor es el primero(".$num1.")</p>";
    }else if($num2>$num1){
        if ($num1==1) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num1==2) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num1==3) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num1==4) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num1==5) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num1==6) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        if ($num2==1) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num2==2) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num2==3) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num2==4) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num2==5) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num2==6) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        echo "<p>y el numero mayor  es el segundo(".$num2.")</p>";
    }else{
        if ($num1==1) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num1==2) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num1==3) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num1==4) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num1==5) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num1==6) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        if ($num2==1) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num2==2) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num2==3) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num2==4) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num2==5) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num2==6) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        echo "<p>Empate tecnico</p>";
    }
    
        
    
    
    echo " <h1>".$resultado."</h1>"
    
    ?>
    
</body>
</html>