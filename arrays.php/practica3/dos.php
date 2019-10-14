<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dos</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 2</h4>
        <p class='text-center'>

            Definir un array que tenga claves de un caracter representando cada letra del<br>
            alfabeto desde la a hasta la f. En la misma definición, asignarle a cada clave un<br>
            nombre propio que comience con esa letra. Ejemplo array (‘a’=>’Amanda’);<br>
            Mostrar el resultado por pantalla con var_dump.<br>

        </p>
        
        <?php
            
            $nombres=[
                    "a" => "Amanda",
                    "b" => "Benito",
                    "c" => "Carla",
                    "d" => "Dania",
                    "e" => "Enrique",
                    "f" => "Francisco"
            ];
            

        print_r(var_dump($nombres));

        ?>
    </div>
</body>
</html>