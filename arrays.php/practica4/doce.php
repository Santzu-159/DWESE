<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Doce</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 12</h4>
        <p class='text-center'>
        
            Realiza el ejercicio anterior pero utilizando la función array_push()<br>

        </p>
        
        <?php

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
        
        Crea un array con los nombres Pedro, Ismael, Sonia, Clara, Susana, Alfonso y Teresa. Muestra el<br>
        número de elementos que contiene y cada elemento en una lista HTML no numerada.<br>
        </p>
        
        <?php

            $nombre=[
                "Pedro",
                "Ismael",
                "Sonia",
                "Clara",
                "Susana",
                "Alfonso",
                "Teresa"
            ];

            echo "El número de elementos que contiene el array \$nombre es: ".count($nombre)."<br><br>".PHP_EOL;
            echo "<ul>".PHP_EOL;
            do{
                echo "<li>".current($nombre)."</li><br>".PHP_EOL;

            }while(next($nombre));

            echo "</ul>".PHP_EOL;


        ?>
    </div>
</body>
</html>  

        ?>
    </div>
</body>
</html>