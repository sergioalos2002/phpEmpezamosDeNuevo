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
    
    
    

    $capitales = ["Italia-Roma","Luxemburgo-Luxemburgo","Belgica-Bruselas"
                    ,"Dinamarca-Copenhage","Finlandia-Helsinki","Francia-Paris",
                     "Eslovakia-Bratislava","ESlovenia-Ljubljana","Alemania-Berlin",
                      "Grecia-Atenas","Irlanda-Dublín","Holanda-Amsterdam","Portugal-Lisboa",
                      "España-Madrid","Suecia-Estocolmo","Reino Unido-Londres","Chipre-Nicosia",
                        "República-ChecaPraga","Estonia-Tallin","Hungria-Budapes","Malta-Valetta",
                        "Austria-Viena","Polonia-Varsovia"];
    
    foreach ($capitales as $capital) {
        $tratadoDeCadenas = [];
        $tratadoDeCadenas = explode("-",$capital);
        
        echo " El pais es  << ".$tratadoDeCadenas[0]." >>  y la capital es  << ".$tratadoDeCadenas[1]." >><br> ";
        // echo "<span>El pais es<<".$tratadoDeCadenas[0].">> y la capital es <<".$tratadoDeCadenas[1].">></span><br>";

        
    }
    ?>
</body>
</html>