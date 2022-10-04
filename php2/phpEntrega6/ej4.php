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
    
    function crearArrayAlea($min,$max){

        $lista = [];
        $contador = 0;
        for ($i=$min; $i <=$max ; $i++) { 
            $numero_De_Dados = rand(1, 10);
            $lista[$contador] = $numero_De_Dados;
            $contador++;
        }
        return $lista;
    }
    function mostrarLista($listaValoresAlea){

        for ($i=0; $i < count($listaValoresAlea) ; $i++) { 
            echo "[$i] ==> ".$listaValoresAlea[$i]."<br>";
        }


    }
    
    $listaValoresAlea = crearArrayAlea(5,15);
    
    mostrarLista($listaValoresAlea);


    ?>
</body>
</html>