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
    function crearArrayAlea($numMinVal,$numMaxVal,$valMin,$valMax){

        $lista = [];
        $contador = 0;
        for ($i=$numMinVal; $i <=$numMaxVal ; $i++) { 
            $numero_De_Dados = rand($valMin, $valMax);
            $lista[$contador] = $numero_De_Dados;
            $contador++;
        }
        
        return $lista;
    }
    function mostrarLista($listaValoresAlea){

        for ($i=0; $i < count($listaValoresAlea); $i++) { 
            echo "[$i] ==> ".$listaValoresAlea[$i]."<br>";
        }
        echo "<br>";


    }
    function eliminarValorLista($posicion,$listaValoresAlea){
        

        unset($listaValoresAlea[$posicion]);
        $listaValoresAlea = array_values($listaValoresAlea);
        

        return $listaValoresAlea;


    }
    
    
    $numMinVal= $_REQUEST["valorMinimoValores"];
    $numMaxVal= $_REQUEST["valorMaximoValores"];
    $valMin= $_REQUEST["valorMinimo"];
    $valMax= $_REQUEST["valorMaximo"];
    $eliminar = $_REQUEST["eliminar"];

    echo "$numMinVal<br> $numMaxVal <br> $valMin <br> $valMax <br> $eliminar <br>";

    
    
    $listaValoresAlea = crearArrayAlea($numMinVal,$numMaxVal,$valMin,$valMax);
    
    mostrarLista($listaValoresAlea); 

    $listavaloresEliminados = eliminarValorLista($eliminar,$listaValoresAlea);
    

    mostrarLista($listavaloresEliminados);





    ?>
</body>
</html>