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
        
        Repite el ejercicio anterior pero ahora si se ha de crear índices, ejemplo: El índice del array que<br>
        contiene como valor Madrid es MD.<br>


        </p>
        
        <?php

            $ciudades=[ 
                "MA"=>"Madrid",
                "BA"=>"Barcelona",
                "LON"=>"Londres",
                "NY"=>"New York",
                "LA"=>"Los Ángeles",
                "CHI"=>"Chicago"
            ];
           

            do{
                echo "El índice del array que contiene como valor ".current($ciudades)." es ".key($ciudades)."<br>".PHP_EOL;
            }while(next($ciudades))



        ?>
    </div>
</body>
</html>