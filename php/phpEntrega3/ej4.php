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
    $cantidad= $_REQUEST["cantidad"];
    $divisa= $_REQUEST["divisa"];
    $conversion;
    $tipo_moneda;
    if ($divisa=="Dolares Usa") {
    $conversion=(($cantidad * 1.01) /1);
    $tipo_moneda = "Dolares Usa";
    }elseif ($divisa=="Peso") {
    $conversion=(($cantidad * 0.0069) /1);
    $tipo_moneda = "Peso";
    }elseif ($divisa=="Yenes") {
    $conversion=(($cantidad * 0.0070) /1);
    $tipo_moneda = "Yenes";
    }elseif ($divisa=="Pesetas") {
    $conversion=(($cantidad * 0.01) /1);
    $tipo_moneda = "Pesetas";
    }
    echo "<p>$cantidad $tipo_moneda son $conversion Euros<p>";
    echo "<p>Gracias por utilizar este convertidor<p>";
    ?>
</body>
</html>