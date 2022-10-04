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
    $texto = "";
     $texto = $_REQUEST["texto"];
     echo "<h1>Validacion  de entrada de texto 1 (RESULTADO)</h1>";
     echo "<p>Ha escrito (" . $texto . ")<br>";
     echo  "ej1";
     function esPar($num){
        if ($num % 2 == 0) {
            return true;
        }else{
            return false;
        }
     }
     if ($texto == "") {
        echo "<p>La cadena  (" . $texto . ") esta vacia";
     }else{
        echo "<p>La cadena  contiene (" . $texto . ") no esta vacia";
     }
     echo "<br>ej2";
     if (preg_match("/^[a-z]+$/i",$texto)) {
        echo "<p>La cadena  (" . $texto . ") es una cadena de texto</p>";
     }else{
        echo "<p>La cadena  (" . $texto . ") es mas de una cadena de texto o contiene algun numero</p>";
     }
     echo "<br>ej3";
    if (preg_match("/^[a-z]+\s+[a-z]+$/i",$texto)){
        echo "<p>La cadena  (" . $texto . ") son dos cadena de texto</p>";
    }else{
        echo "<p>La cadena  (" . $texto . ") no son dos cadenas de texto</p>";
    }
    echo "<br>ej4";
    if (preg_match("/^[[:alpha:]]$/",$texto)) {
        echo "<p>La cadena  (" . $texto . ") es una unica palabra que contiene solamente caracteres ingleses</p>";
    }else{
        echo "<p>La cadena  (" . $texto . ") NO es una unica palabra que contiene solamente caracteres ingleses</p>";
    }
    echo "<br>ej5";
    if (preg_match("/^a*e*i*o*u*$/",$texto)) {
        echo "<p>La cadena  (" . $texto . ") es una cadena de vocales minusculas sin acentuar en orden alfabetico .</p>";
    }else{
        echo "<p>La cadena  (" . $texto . ") NO es una cadena de vocales minusculas sin acentuar en orden alfabetico .</p>";
    }
    echo "<br> ej6";
    if (preg_match("/^[0-9]$/",$texto)) {
        echo "<p>La cadena  (" . $texto . ") es un unico numero</p>";

    }else{
        echo "<p>La cadena  (" . $texto . ") no es un unico numero</p>";
    }
    echo "<br> ej7";

     if (preg_match("/^[0-9]+[02468]$/",$texto)) {
        echo "<p>La cadena  (" . $texto . ") es un unico numero par</p>";
    }else{
        echo "<p>La cadena  (" . $texto . ") NO es un unico numero par</p>";
    }
    echo "<br> ej8";

    if (preg_match("/^[0-9]+$/",$texto)) {
        echo "<p>La cadena  (" . $texto . ") es un unico numero par</p>";
    }else{
        echo "<p>La cadena  (" . $texto . ") NO es un unico numero par</p>";
    }  
            
    ?>
   
</body>
</html>