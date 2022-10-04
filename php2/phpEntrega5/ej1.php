<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.div-1 {
       background-color: black;
       width: 200px;
       height: 200px;
       border-radius: 50%;
    }

    </style>

</head>
<body>
    <?php
    $num1 = rand(1, 10);
    echo "<center><h1>Circulos en Fila</h1></center>";
    echo "<p>Actualice la pagina para un nuevo dibujo</p>";
    echo "<h1>Numero de circulo ".$num1. "</h1>"
    ?>
    <table border="1px">
        <tr>
        <?php
        
        

        for ($i=0; $i < $num1; $i++) { 
            echo "<td><div class='div-1'></div></td>";
        }
        ?>

        </tr>
    </table>
    
</body>
</html>