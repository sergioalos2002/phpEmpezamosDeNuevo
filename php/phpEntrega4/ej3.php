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
       float: left;
       width: 200px;
       height: 200px;
    }
    
    .div-2 {
    	background-color: blue;
        float: left;
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
    $num3 = rand(1, 6);
    $num4 = rand(1, 6);
    $resultadoTeam1 = $num1 + $num2;
    $resultadoTeam2 = $num3 + $num4;
    


        if ($resultadoTeam1 > $resultadoTeam2) {
            //equipo1
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
        //equipo1
        //equipo2
        if ($num3==1) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num3==2) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num3==3) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num3==4) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num3==5) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num3==6) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/6.svg'></div>";
        }

        if ($num4==1) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num4==2) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num4==3) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num4==4) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num4==5) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num4==6) {
            echo "<div class='div-2'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        //equipo2
        }elseif ($resultadoTeam2 > $resultadoTeam1) {
            //equipo1
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
        //equipo1
        //equipo2
        if ($num3==1) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num3==2) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num3==3) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num3==4) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num3==5) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num3==6) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        if ($num4==1) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/1.svg'></div>";
        }elseif ($num4==2) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/2.svg'></div>";
        }elseif ($num4==3) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/3.svg'></div>";
        }elseif ($num4==4) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/4.svg'></div>";
        }elseif ($num4==5) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/5.svg'></div>";
        }elseif ($num4==6) {
            echo "<div class='div-1'><img src='../../imagenes/img/img/6.svg'></div>";
        }
        //equipo2
        }else{
            //equipo1
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
        //equipo1
        //equipo2
        if ($num3==1) {
            echo "<img src='../../imagenes/img/img/1.svg'>";
        }elseif ($num3==2) {
            echo "<img src='../../imagenes/img/img/2.svg'>";
        }elseif ($num3==3) {
            echo "<img src='../../imagenes/img/img/3.svg'>";
        }elseif ($num3==4) {
            echo "<img src='../../imagenes/img/img/4.svg'>";
        }elseif ($num3==5) {
            echo "<img src='../../imagenes/img/img/5.svg'>";
        }elseif ($num3==6) {
            echo "<img src='../../imagenes/img/img/6.svg'>";
        }
        if ($num4==1) {
            echo "<img src='../../imagenes/img/img/1.svg'>";
        }elseif ($num4==2) {
            echo "<img src='../../imagenes/img/img/2.svg'>";
        }elseif ($num4==3) {
            echo "<img src='../../imagenes/img/img/3.svg'>";
        }elseif ($num4==4) {
            echo "<img src='../../imagenes/img/img/4.svg'>";
        }elseif ($num4==5) {
            echo "<img src='../../imagenes/img/img/5.svg'>";
        }elseif ($num4==6) {
            echo "<img src='../../imagenes/img/img/6.svg'>";
        }
        //equipo2
            

        }

        
        
      
    
    
        
    
    
    
    
    ?>
    
</body>
</html>