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
    
    function sacaryMostrarDNI($dni){
        $listaLetras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q",
        "V","H","L","C","K","E"];

        

        $resultado = $dni % 23;
        
        echo "La letra del dni $dni es ".$listaLetras[$resultado]."";
        

    
    }

    $dni = $_REQUEST["dni"];

    sacaryMostrarDNI($dni);
    
    

    
    
    ?>
</body>
</html>