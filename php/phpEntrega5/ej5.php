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
         function sucesionAritmetica($inicial,$incremento,$numValores){
            if($numValores>=0){

                
                for ($i=1; $i <= $numValores; $i++) { 
                    
                    $sumaAritmetica = $inicial + ($incremento * $i);
                    $contador = $numValores - $i;

                    echo "el valor inicial es $inicial, la cantidad de repeticiones restante es $contador con un incremento de $incremento y el valor total es = ($sumaAritmetica)<br>";
                }


            }else{
                echo "<p> el valor es negativo por lo que no se mostrara nada </p>";
            }
        }

        $inicial= $_REQUEST["inicial"];
        $incremento= $_REQUEST["incremento"];
        $numValores= $_REQUEST["numValores"];

       sucesionAritmetica($inicial,$incremento,$numValores);
        ?>
</body>
</html>