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
    $segundos = $_REQUEST['segundos'];
    if ($segundos > 0) {
        $minutos = (int) ($segundos/60)  . " minutos y " . $segundos%60 . " segundos";
        echo "$segundos segundos son $minutos"; 
    }else{
        echo "El numero introducido es negativo por lo que no se puede hacer la conversion"; 
    }

    
   
    ?>
</body>
</html>