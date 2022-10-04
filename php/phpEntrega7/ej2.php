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

    //ESTE EJERCICIO ME HA LLEVADO MUCHOS PROBLEMAS POR LO QUE HE DEJADO UN DEBUGGER MENTAL

function esPrimo($num)
{
    $esPrimo = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $esPrimo = false;
        }
    }
    if ($esPrimo) {
        return true;
    }else{
        return false;
    }
    
}
    function factorizacion($num){

         // num = 10 - 5  $comprobador = true; $validador = false  $contadorWhile2_1 = 2;  $contadorWhile2_2 = 0 - 1; $contadorLista = 0;
        $listaValores = []; // 5 - 
        $comprobador = true;
        $validador = true;
        $contadorWhile2_1 = 2; 
        $contadorWhile2_2 = 0;
        $contadorLista = 0; // 1
        
        
        
        while ($comprobador) {

                    // true                        // true                       //true                          //true
                    // false                                                                                    //false
            //  10 %  2 == 0 - 5               2 es primo == si                   contador vale 0 == si        validador = true
            

              
                    
         while ($num % $contadorWhile2_1 == 0 && esPrimo($contadorWhile2_1) && $contadorWhile2_2 == 0 || $validador){

                if ($num % $contadorWhile2_1 == 0 && esPrimo($contadorWhile2_1)  && $contadorWhile2_2 == 0) {
                    $listaValores[$contadorLista] = $contadorWhile2_1; // 5
                    $contadorLista++; 
                    $num = $num / $contadorWhile2_1;
                    $contadorWhile2_2++;
                    $validador = false;
                    
                   }
                   
                   $contadorWhile2_1++;
            }
            
            

            if ($num == 1) {
                $comprobador =false;
                
            }

            $contadorWhile2_1 = 2;
            $contadorWhile2_2 = 0;
            $validador = true;
            
            
            
    }
    return $listaValores;
}
    


    $num = $_REQUEST["numero"];
    $listaValores = factorizacion($num);
    for ($i=0; $i < count($listaValores) ; $i++) { 
         
         if ($i == (count($listaValores) - 1)) {
            echo "". $listaValores[$i]." y el valor elegido es $num";
         }else{
            echo "". $listaValores[$i]."x";
         }
    }
    

    ?>
</body>
</html>