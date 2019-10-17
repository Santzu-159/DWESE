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
        Realiza una función que calcula el IVA y que recibe dos parámetros. Uno el valor sobre el que se<br>
        calcula y orro el porcentaje a aplicar. Si no se indica el porcentaje se entenderá que es del 18%.<br>

        </p>
        
        <?php

            $num = 100;
            $porcentaje = 50;

            echo calcularIva($num,$porcentaje);

        function calcularIva($num,$porcentaje){

            if($porcenaje == 0){

                $porcentaje = 18;
                $iva = ($num*$porcentaje)/100;


            }else{

            $iva = ($num*$porcentaje)/100;

            }   

        }

        ?>
    </div>
</body>
</html>