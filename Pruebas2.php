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
function esPrimo($num)
{
    $esPrimo = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            //no Es primo :(
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



         // num = 5  $comprobador = true; $contadorWhile2_1 = 6;  $contadorWhile2_2 = 1; $contadorLista = 0; $validador = true
        $listaValores = [];
        $comprobador = true;
        $validador = false;
        $contadorWhile2_1 = 2; 
        $contadorWhile2_2 = 0;
        $contadorLista = 0;
        
        //pruebas
        $contadorMajestuoso = 0;
        $contadorEjecucion = 1;
        while ($contadorMajestuoso != 2) {

                  

        echo "<br>num ejecucion $contadorEjecucion <br> ";
        $contadorEjecucion++;


        //Primera condicion 0 true cualquier otro valor false;
        echo "<br>" . $num % $contadorWhile2_1 . "";
        //primo 1 true 0 false
        echo "<br>" . esPrimo($contadorWhile2_1) . "";
        // 0 true cualquier otro valor false
        echo "<br> $contadorWhile2_2";
        

        if ($validador == true) {
            echo "<br> true";
        }else{
            echo "<br>false"; 
        }
        
        //fin pruebas

  // true                          // true                        //true                          false
              
                    
         while ($num % $contadorWhile2_1 == 0 && esPrimo($contadorWhile2_1) && $contadorWhile2_2 == 0 || $validador){

                if ($num % $contadorWhile2_1 == 0 && esPrimo($contadorWhile2_1)  && $contadorWhile2_2 == 0) {
                    $listaValores[$contadorLista] = $num / $contadorWhile2_1;
                    $contadorLista++;
                    $num = $num / $contadorWhile2_1;
                    $contadorWhile2_2++;
                    $validador = false;
                    echo "<br>paso por el if valor $num";
                   }
                   
                   $contadorWhile2_1++;
            }
            
            

            if ($num == 1) {
                $comprobador =false;
                echo "<hr><br><h1>Comprobador False</h1>";
                
            }

            $contadorWhile2_1 = 2;
            $contadorWhile2_2 = 0;
            $validador = false;
            $contadorMajestuoso++;
            
            
    }
    return $listaValores;
}
    


    $num = 10; //$_REQUEST["numero"];

    print_r(factorizacion($num));

    ?>
</body>
</html>