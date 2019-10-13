<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Siete</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 7</h4>
        <p class='text-center'>
        Obtén el número de valores iguales al valor 2 contenidos en un array de 10<br>
        valores generados aleatoriamente con valores de 1 a 10.<br>
        </p>
        
        <?php

            $valores = array();
            $contador =0;
            for ($i=0;$i<10;$i++) {
                $num_aleatorio = rand(1,10);
                array_push($valores,$num_aleatorio);
                if($num_aleatorio == 2){

                    $contador++;
                    
                }
              }
              print_r($valores);
              echo "<br>El numero 2 aparece ".$contador." veces.".PHP_EOL;

        ?>
    </div>
</body>
</html>