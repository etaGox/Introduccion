<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="ejemplo32.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h4> Verdulería Pepe </h4>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1> Consumo Final: </h1>
    <p> A continuación se detallan los totales de su compra. </p>
    <section class="row justify-content-center">
            <article class="col-12 col-sm-3 text-center">
    
        <?php
            $pbanana = 20;
            $pmanzana = 25;
            $bananas = 2;
            $manzanas = 3;
            $costobanana = $bananas*$pbanana;
            $costomanzana = $manzanas*$pmanzana;
            $total = $costobanana+$costomanzana;
            echo "<br> <ul>";
            echo '<li> <h5>' . $bananas . 'kg de bananas $' . $pbanana . ' el kilo $' . $costobanana . ' total.</h5></li>';
            echo '<li> <h5>' . $manzanas . 'kg de manzanas $' . $pmanzana . ' el kilo $' . $costomanzana . ' total.</h5></li>';
            echo "<br></ul>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo '<h6> Total: $' . $total . '</h6>';
            
        ?>
        </article>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>