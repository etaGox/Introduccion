<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="ejemplo32.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Consumo Final: </h1>
    
    <?php
        $pbanana = 20;
        $pmanzana = 25;
        $bananas = 2;
        $manzanas = 3;
        $costobanana = $bananas*$pbanana;
        $costomanzana = $manzanas*$pmanzana;
        $total = $costobanana+$costomanzana;
        echo "<br>";
        echo '<h3>' . $bananas . 'kg de bananas $' . $pbanana . ' el kilo $' . $costobanana . ' total.</h3>';
        echo '<h3>' . $manzanas . 'kg de manzanas $' . $pmanzana . ' el kilo $' . $costomanzana . ' total.</h3>';
        echo "<br>";
        echo '<h3> Total: $' . $total . '</h3>';
    ?>
    <h3>El total es $<?php echo $total;?></h3>
</body>
</html>