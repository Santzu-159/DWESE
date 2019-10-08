<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!--*............................................ Ejercicio 4 Cantidad de numeros primos a partir del número dado .........................................*-->

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio 4 Cantidad de numeros primos a partir del número dado</h3>
    <?php
        
        echo "<br>".PHP_EOL;
        $cantidad=1023;
        $contDiv3=0;
        for($cont=2;$cont<$cantidad;$cont++){
            for($i=2;$i<$cont && $contDiv3==0;$i++){
                if($cont%$i==0){
                    $contDiv3++;
                }
            }
            if($contDiv3==0){
                echo "$cont, ";
            }else{
                $contDiv3=0;
            }
        }
    ?>
    </div>
</body>
</html>