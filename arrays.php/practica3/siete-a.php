<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Siete-A</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 7-A</h4>
        <p class='text-center'>
            Realizar una ruleta virtual en PHP, de la misma manera que con el dado.
        </p>
        
        <?php
            
            $ruleta=[
                "Yate sin pilas",
                "El coche de los Picapiedra",
                "5 centimicos pa un chicle",
                "Venga, 1 euro y mucho te estas llevando",
                "Bicicleta sin sillín",
                "Sabanas de ventana",
                "Croissants de chocolate sin chocolate",
                "Bola de queso revenío",
                "Bragas de esparto"
            ];

            echo "Has ganado: ";
            shuffle($ruleta);
            print("<b>".$ruleta[0]."</b>");
        

        ?>
    </div>
</body>
</html>