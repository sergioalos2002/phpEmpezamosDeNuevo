<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contar Pares e Impares</h1>
    <p>Actualice la pagina para un nuevo numero</p>
   <?php
   //funciones
  
    function sacarNumeroDadoAlea($numDados){
       
        $listaDados = [];
        for ($i=0; $i < $numDados; $i++) { 
            $numeroAlea =  rand(1, 6);
            $listaDados[$i] = $numeroAlea;
        }
        return $listaDados;
        }
    function pintarNumeroDadoAlea($listaNumeros){
        for ($i=0; $i < count($listaNumeros); $i++) { 
            if ($listaNumeros[$i] == 1) {
                echo "<div><img src='../../imagenes/img/img/1.svg'></div>";
            }elseif ($listaNumeros[$i] == 2) {
                echo "<div><img src='../../imagenes/img/img/2.svg'></div>";
            }elseif ($listaNumeros[$i] == 3) {
                echo "<div><img src='../../imagenes/img/img/3.svg'></div>";
            }elseif ($listaNumeros[$i] == 4) {
                echo "<div><img src='../../imagenes/img/img/4.svg'></div>";
            }elseif ($listaNumeros[$i] == 5) {
                echo "<div><img src='../../imagenes/img/img/5.svg'></div>";
            }elseif ($listaNumeros[$i] == 6) {
                echo "<div><img src='../../imagenes/img/img/6.svg'></div>";
            }
        }
    }
    
    function sacarNumeroImparOPar($listaNumeros){
        global $contImpar,$contPar;


        for ($i=0; $i < count($listaNumeros); $i++) { 
            
            if ($listaNumeros[$i] % 2 == 0) {
                $contPar++;
            }else{
                $contImpar++;
            }
        }
        

    }

    //codigo
    $contPar = 0;
    $contImpar = 0;
    $numero_De_Dados = rand(1, 10);
    
    $listaDeDados = sacarNumeroDadoAlea($numero_De_Dados);
    sacarNumeroImparOPar($listaDeDados);
    pintarNumeroDadoAlea($listaDeDados);
    echo "<p>El numero de valores pares es $contPar y el numero de valores impares se $contImpar</p>";
    
    

    echo "<h1>$numero_De_Dados de dados</h1>";

    

    

   
   ?>

</body>
</html>