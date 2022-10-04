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
    $peso = $_REQUEST['peso'];
    $altura = $_REQUEST['altura'];
    
    if ($peso > 0 || $altura > 0) {
        $imc = $altura % $peso;

        echo "Con un peso $peso kg y una altura de $altura cm, su indice de masa corporal es $imc"; 
    }else{
        echo "El numero introducido es negativo por lo que no se puede hacer la conversion"; 
    }

    
   
    ?>
</body>
</html>