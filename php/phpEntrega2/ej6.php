<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .circulo{
            background-color: red;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            
        }
    </style>
</head>
<body>
    <?php
    $num1 = rand(1, 6);
    echo "<table border='1'>";
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
    echo  "<tr>";
    switch ($num1) {
        case 1:
            echo    "<td><div class='circulo'></div></td>";
            echo    "<td><h1>2</h1></td>";
            echo    "<td><h1>3</h1></td>";
            echo    "<td><h1>4</h1></td>";
            echo    "<td><h1>5</h1></td>";
            echo    "<td><h1>6</h1></td>";
            break;
        case 2:
            echo    "<td><h1>1</h1></td>";
            echo    "<td><div class='circulo'></div></td>";
            echo    "<td><h1>3</h1></td>";
            echo    "<td><h1>4</h1></td>";
            echo    "<td><h1>5</h1></td>";
            echo    "<td><h1>6</h1></td>";
            break;
        case 3;
            echo    "<td><h1>1</h1></td>";
            echo    "<td><h1>2</h1></td>";
            echo    "<td><div class='circulo'></div></td>";
            echo    "<td><h1>4</h1></td>";
            echo    "<td><h1>5</h1></td>";
            echo    "<td><h1>6</h1></td>";
            break;
        case 4:
            echo    "<td><h1>1</h1></td>";
            echo    "<td><h1>2</h1></td>";
            echo    "<td><h1>3</h1></td>";
            echo    "<td><div class='circulo'></div></td>";
            echo    "<td><h1>5</h1></td>";
            echo    "<td><h1>6</h1></td>";
            break;
        case 5:
            echo    "<td><h1>1</h1></td>";
            echo    "<td><h1>2</h1></td>";
            echo    "<td><h1>3</h1></td>";
            echo    "<td><h1>4</h1></td>";
            echo    "<td><div class='circulo'></div></td>";
            echo    "<td><h1>6</h1></td>";
            break;
        case 6:
            echo    "<td><h1>1</h1></td>";
            echo    "<td><h1>2</h1></td>";
            echo    "<td><h1>3</h1></td>";
            echo    "<td><h1>4</h1></td>";
            echo    "<td><h1>5</h1></td>";
            echo    "<td><div class='circulo'></div></td>";
            break;
        
        default:
        echo    "<td></td>";
        echo    "<td></td>";
        echo    "<td></td>";
        echo    "<td></td>";
        echo    "<td></td>";
            break;
    }
    
    ?>
    
</body>
</html>