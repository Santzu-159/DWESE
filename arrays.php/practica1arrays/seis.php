<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Seis</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 6</h4>
        <p class='text-center'>
        Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y<br>
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array haciendo un recorrido<br>
        diciendo el valor correspondiente a cada índice, ejemplo:<br>
        La ciudad con el índice 0 tiene el nombre Madrid.<br>


        </p>
        
        <?php
            $ciudades=[ "Madrid","Barcelona","Londres","New York","Los Ángeles", "Chicago"];
           

            for($i=0;$i<count($ciudades);$i++){

                echo "La ciudad con el índice ".$i." tiene el nombre de ".$ciudades[$i]."<br>".PHP_EOL;
            }
        



        ?>
    </div>
</body>
</html>