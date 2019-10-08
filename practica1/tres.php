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
    <!--*............................................ Ejercicio 3 Cantidad de numeros primos hasta el número dado .........................................*-->
    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio 3 Cantidad de numeros primos hasta el número dado</h3>
    <?php
        $cantidad=123;
        $contDiv2=0;
        $contPrimo=0;
        for($cont=2;$contPrimo<$cantidad;$cont++){
            for($x=2;$x<$cont && $contDiv2==0;$x++){
                if($cont%$x==0){
                    $contDiv2++;
                }
            }
            if($contDiv2==0){
                echo "$cont, ";
                $contPrimo++;
            }
            $contDiv2=0;
        }        
    ?>
    </div>   
</body>
</html>