<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $amigos = [
        'Gustavo',
        'Gonzalo',
        'Jonathan',
        'Francisco',
        'Michael'
    ];
    shuffle($amigos);
    echo $amigos[1] . " se va de viaje";
    echo "<br>";

    $ciudades = [
        'Montevido',
        'Rio de Janeiro',
        'Buenos Aires',
        'Colonia',
        'Maldonado'
    ];
    shuffle($ciudades);
    echo $amigos[2] . " se va de viaje a " . $ciudades[1];

    ?>

</body>
</html>