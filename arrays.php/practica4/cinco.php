<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cinco</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 5</h4>
        <p class='text-center'>
        Crea un array asociativa para introducir los datos de una persona:<br>
        Nombre: Pedro Torres<br>
        Dirección: C/ Mayor, 37<br>
        Teléfono: 123456789<br>
        Al acabar muestra los datos por pantalla.<br>

        </p>
        
        <?php

        $persona=[
            "Nombre:"=>"Pedro Torres",
            "Dirección:"=>"C/ Mayor, 37",
            "Teléfono:"=>"123456789"
        ];


        do{
            echo key($persona)." ".current($persona)."<br>".PHP_EOL;
        }while(next($persona))



        ?>
    </div>
</body>
</html>