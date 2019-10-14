<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ocho</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 8</h4>
        <p class='text-center'>

        Dado un array de 20 elementos que consiste en números reales (con coma<br>
        decimal) y que cada elemento representa la venta del día de un comercio.<br>
        Calcular el promedio de venta por día utilizando alguna estructura iterativa.<br>
        Mostrar el resultado por pantalla.<br>
        </p>
        
        <?php
            $ventas =[
                    0.53,
                    22.8671,
                    90.90,
                    56.80,
                    2.086,
                    6.70,
                    214.145,
                    3.08,
                    0.0025,
                    5.124,
                    25.41,
                    00.255,
                    12.6,
                    123.25,
                    45.14,
                    125.013,
                    45.258,
                    965.12,
                    789.12,
                    547.1
            ];

            $suma=0;
            $contVentas=0;
            for($i=0;$i<count($ventas);$i++){
                $contVentas++;
                $suma += $ventas[$i];
            }
            $resultado=$suma/$contVentas;
           $resultado = round($resultado, 2, PHP_ROUND_HALF_UP); 
            echo "El promedio de las ventas es de ".$resultado." euros.".PHP_EOL;

        ?>
    </div>
</body>
</html>