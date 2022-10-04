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
    $v1 = $_REQUEST['v1'];
    $v2 = $_REQUEST['v2'];
    $v3 = $_REQUEST['v3'];

    $resultado =  sqrt(pow($v2,2) - (4*$v1*$v3));
    
    if ($resultado >= 0) {
        $x = (-$v2 + $resultado) / (2*$v1);
        echo "el valor es $x";
        
    }else{
        echo "La ecuacion $v1*x al cuadrado + $v2*x + $v3 = 0 no tiene solucion reales"; 
    }

    
   
    ?>
</body>
</html>