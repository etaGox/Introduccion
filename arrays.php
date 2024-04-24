<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*
    var_dump($semana);
    echo "<br>";
    echo $semana[3];
    echo "<br>";
    echo $semana[6];
    echo "<br>";
    
    $planetas = []; #Tambien se puede usar $planetas = array();
    $planetas [] = 'Marte';
    $planetas [] = 'Tierra';
    $planetas [] = 'Venus';

    echo count ($planetas); // la funcion count sirve para imprimir la cantidad de elementos en pantalla 3

    var_dump ($planetas);
    */
    


    $semana = [
        'Lunes',
        'Martes',
        'Miercoles',
        'Jueves',
        'Viernes',
        'Sabado',
        'Domingo'
        ];
        // foreach significa "para cada"
        foreach ($semana as $dia) {
            echo $dia ./* el punto concatena */ "<br>";
        }

    ?>
</body>
</html>