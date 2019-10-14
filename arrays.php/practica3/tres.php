<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tres</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 3</h4>
        <p class='text-center'>

            Definir un array que tenga como valor diez títulos de películas. Utilizar la<br>
            función sort para ordenarlos de forma alfabética y mostrarlo por pantalla con<br>
            print_r.<br>
        </p>
        
        <?php
            $peliculas=[

                    "Iron Man",
                    "Como Entrenar a tu Dragón",
                    "Big Hero",
                    "Solo en Casa",
                    "Pesadilla en Elm Street",
                    "Proyecto Warren",
                    "Deadpool",
                    "Vaiana",
                    "Aladdin",
                    "Maléfica"
            ];

            echo "<b>Array original: </b><br>".PHP_EOL;
            print_r($peliculas);
            
            $sortPelis = $peliculas;
            sort($sortPelis);
            echo "<br><b>Array ordenado: </b><br>".PHP_EOL;
            print_r($sortPelis);
            echo "<br>".PHP_EOL;

  

        ?>
    </div>
</body>
</html>