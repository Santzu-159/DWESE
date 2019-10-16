<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dieciseis</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 16</h4>
        <p class='text-center'>
        
            Crea un array con los siguientes valores: 5 => 1, 12 => 2, 13 => 56, x => 42. Muestra el<br>
            contenido. Cuenta el número de elementos que tiene y muéstralo por pantalla. A continuación borra<br>
            el elemento de la posición 5. Vuelve a mostrar el contenido y por último elimina el array.<br>
        </p>
        
        <?php

            $array=[
                5=>1,
                12=>12,
                13=>56,
                "x"=>42
            ];

            echo "Array original<br>".PHP_EOL;
            print_r($array);

            echo "<br>El array \$array tiene ".count($array)." elementos<br>".PHP_EOL;
            unset($array[5]);

            echo "<br>Array después de borrar el elemento en la posición 5<br>".PHP_EOL;
            print_r($array);

            echo "<br>Array vacio</br>".PHP_EOL;
            $array=[];
            print_r($array);


        ?>
    </div>
</body>
</html>