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

    function esPar($num)
    {
        if ($num % 2 == 0) {
            return "es par";
        } else {
            return "es inpar";
        }
    }
    function esPrimo($num)
    {
        $esPrimo = true;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                //no Es primo :(
                $esPrimo = false;
            }
        }
        if ($esPrimo == true) {
            return "es primo";
        } else {
            return "no es primo";
        }
    }


    $num = $_REQUEST["numero"];

    echo "El numero " . esPrimo($num) . " y ademas " . esPar($num) . "";











    ?>
</body>

</html>