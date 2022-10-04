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

   function queEsEstaVariable($texto){
    if (is_numeric($texto)) {
        echo "es un numero";
    }else{
        if ($texto == "") {
            echo "Es un espacio en blanco";
        }else if ($texto == "." || $texto == "-" || $texto == "_") {
            echo "Es un caracter de puntuacion";
        }else{
            if ($texto === strtoupper($texto)) {
                echo "El texto esta en mayus";
            }else if ($texto === strtolower($texto)) {
                echo "El texto esta en minus";
            }else{
                echo "Es cualquier otra cosa";
            }

            
        }
    }
   }

   $variableTexto = $_REQUEST["variableTexto"];

    queEsEstaVariable($variableTexto);

    

    ?>
</body>

</html>