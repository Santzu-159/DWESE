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
        Realiza una función que calcula el IVA y que recibe dos parámetros. Uno el valor sobre el que se
        calcula y otro el porcentaje a aplicar. Si no se indica el porcentaje se entenderá que es del 18%.
        </p>
        <?php

        $precio=100;
        $IVA=50;

        echo "Sin IVA: $precio<br>".PHP_EOL;

        echo "Con IVA: ".operacion($precio,$IVA)."<br>".PHP_EOL;

        function operacion($precio,$IVA){

                if($IVA == 0){
                    
                   return $precio+=(18*$precio/100);
                }else{
                   
                  return $precio+=($IVA*$precio/100);
                }
        }
    
         ?>
    </div>
</body>
</html>