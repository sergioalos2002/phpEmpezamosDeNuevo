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
    function mostrarLista($lista){

    usort($lista,'ordenarLista');

    for ($i=0; $i < count($lista); $i++) { 
        echo "" . $i + 1 . ". El equipo : ". $lista[$i][0]. " tiene el estadio : " . $lista[$i][1]. "<br>";
    }

    }


    function ordenarLista($a,$b){
        return strcmp($a[0], $b[0]);
        }
    function eliminarLista($listaValores){
        $listaConDatoEliminado = [];
        for ($i=0; $i < count($listaValores) ; $i++) { 
            if ($listaValores[$i][0] == "Real Madrid") {
                unset($listaValores[$i]);
            }
        }
        $listaValores = array_filter($listaValores);
        $listaConDatoEliminado = $listaValores;
        
        return $listaConDatoEliminado;
    }
        
            

    

    $listaValores =  array(
        array("Barcelona","Nou Camp"),
        array("Real Madrid","Santiago Bernabeu"),
        array("Valencia","Mestalla"),
        array("Real Sociedad","Anoeta"),
    );

    


    
    mostrarLista($listaValores);

    $listaConDatoEliminado = eliminarLista($listaValores);

    echo "<br>";

     mostrarLista($listaConDatoEliminado);

    ?>
</body>
</html>