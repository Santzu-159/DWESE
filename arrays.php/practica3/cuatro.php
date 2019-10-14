<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cuatro</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 4</h4>
        <p class='text-center'>

            Definir tres arrays: uno puramente asociativo, otro puramente enumerativo y<br>
            otro mixto. Luego, guardar en una variable la suma de los elementos de los tres<br>
            arrays y mostrarla por pantalla.<br>

        </p>
        
        <?php
            
            $asociativo =[
                "uno" => 1,
                "dos" => 2,
                "tres" => 3,
                "cuatro" => 4,
                "cinco" => 5              
            ];
            
            $enumerativo=[1,2,3,4,5];

            $mixto =[
                "uno" => 1,
                "dos" => 2,
                3,4,
                "cinco" => 5
            ];
        

            $globalArray = array_merge($asociativo,$enumerativo,$mixto);

            $suma = array_sum($globalArray);

            echo "La suma total de los arrays es: ".$suma;

        ?>
    </div>
</body>
</html>