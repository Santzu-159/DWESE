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
            Implementaremos una función a la que pasaremos un número variable de argumentos (números),
            mostraremos los números pasados y el mayor de todos, si no pasamos ningun argumento, error.
         </p>

        <?php

            mayor(20,5,79,64,2,8,15);

            function mayor(...$numero){ //Los tres puntos significa que se le van a pasar un numero variable (indefinido) de argumentos

                $mayor=PHP_INT_MIN;

                foreach ($numero as $num) {

                    echo "$num &nbsp";

                    if($num>$mayor){

                        $mayor=$num;
                    }
                }
                echo "<br>El número mayor es: $mayor".PHP_EOL;
            }
    
         ?>
    </div>
</body>
</html>