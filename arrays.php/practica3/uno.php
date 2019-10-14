<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Uno</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 1</h4>
        <p class='text-center'>
        Definir un array con valores numéricos. Realizar la suma de todos los valores y<br>
        guardarlo en una variable. Mostrar la suma por pantalla.<br>

        </p>
        
        <?php
            $numeros=[1,2,3,4,5,6,7,8,9,10];

            $suma =array_sum($numeros);
            print_r("La suma de los numeros del array \$numeros es: ".$suma);

        ?>
    </div>
</body>
</html>