<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ej5_1.php" method="post">
    <?php 
    $fila = $_REQUEST["fila"];
    $columna = $_REQUEST["columna"];
    $lista;
    
    


    for ($i=0; $i < $fila ; $i++) { 
        
        for ($x=0; $x < $columna ; $x++) { 
           
            $lista[$i][$x] = $_REQUEST["fila$i$x"];
            
        }
    }

    
    ?>
    <table>
        <h1>Lista normal</h1>
        <?php 
        for ($i=0; $i < $fila ; $i++) { 
            echo "<tr>";
            for ($x=0; $x < $columna ; $x++) { 
               
                echo "<td>".$lista[$i][$x]."</td>";
                
            }
            echo "</tr>";
        }
       echo "</table>";
        
        ?>
        <br>
        <h1>Lista cambiada</h1>
        <table>
        <?php 
        for ($i=$fila-1; $i >= 0 ; $i--) { 
            echo "<tr>";
            for ($x=0; $x < $columna ; $x++) { 
               
                echo "<td>".$lista[$i][$x]."</td>";
                
            }
            echo "</tr>";
        }
        
        
        ?>
    </table>
    
    
</form>
</body>
</html>