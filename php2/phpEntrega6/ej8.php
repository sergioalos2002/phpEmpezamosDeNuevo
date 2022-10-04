<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Pais</td><td>moneda antigua</td><td>Lengua hablada</td>
        </tr>
        
        <?php
            
            $listaValores = array(

                    array("España","Castellano","Peseta"),
                    array("Francia","Frances","Franco"),
                    array("Reino Unido","Ingles","Libra"),
                    array("Alemania","Aleman","Marco"),
            );

            foreach ($listaValores as $fila) {
                echo "<tr>";
                foreach ($fila as $columna) {
                    echo "<td>$columna</td>";
                }
                echo "</tr>";
            }
            
            
            ?>
    </table>
</body>
</html>