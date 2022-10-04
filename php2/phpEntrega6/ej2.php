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
    
    
    

    $colores = array(
        array("rojo:FF0000","verde:00FF00","azul:0000FF"),
        array("rosa:FE9ABC","Amarillo:FDF189","malva:BC8F8F")
    );
    $contador = 1;
    foreach ($colores as $colorFil) {
        
            if ($contador == 1) {
                echo "Colores Fuertes:";
            }else{
                echo "<span style='background-color:white'>Colores Suaves:<span>";
            }
            
            foreach ($colorFil as $colorCol) {

                    $codigo = [];
                    $codigo = explode(":",$colorCol);
                    echo "<span style = 'background-color:#".$codigo[1].";'>$colorCol<span>";
                
            
            }
       
        echo "<br>";
        $contador++;
        
        
    }
    ?>
</body>
</html>