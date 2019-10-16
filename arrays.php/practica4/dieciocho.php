<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dieciocho</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 18</h4>
        <p class='text-center'>
        
            Crea un array llamado deportes e introduce los siguientes valores: futbol, baloncesto, natación y<br>
            tenis. Haz el recorrido de la matriz con un for para mostrar sus valores. A continuación realiza las<br>
            siguientes operaciones:<br>
            - Muestra el total de valores que contiene<br>
            - Sitúa el puntero en el primer elemento del array y muestra el valor actual, es decir, donde está el<br>
            puntero actualmente.<br>
            - Avanza una posición y muestra el valor actual.<br>
            - Coloca el puntero en la última posición y muestra su valor.<br>
            - Retrocede una posición y muestra este valor.<br>

        </p>
        
        <?php

            $deportes=[
                "futbol",
                "baloncesto",
                "natación",
                "tenis"
            ];

            $longitud=count($deportes);
            for($i=0;$i<$longitud;$i++){
                echo $deportes[$i]."<br>".PHP_EOL;
            }
            echo "<br>Muestra el total de valores que contiene: $longitud<br>".PHP_EOL;

            reset($deportes);
            echo "<br>Sitúa el puntero en el primer elemento del array y muestra el valor actual, es decir, donde está el<br>
            puntero actualmente: ".current($deportes)."<br>".PHP_EOL;

            next($deportes);
            echo "<br>Avanza una posición y muestra el valor actual: ".current($deportes)."<br>".PHP_EOL;

            end($deportes);
            echo "<br>Coloca el puntero en la última posición y muestra su valor: ".current($deportes)."<br>".PHP_EOL;

            prev($deportes);
            echo "<br>Retrocede una posición y muestra este valor: ".current($deportes)."<br>".PHP_EOL;
                        


        ?>
    </div>
</body>
</html>