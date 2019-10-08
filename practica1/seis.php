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
    <!--*............................................ Ejercicio 6 Mostrar múltiplos de 3 entre dos números separados por 100 unidades  .........................................*--> 

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio 6 Mostrar múltiplos de 3 entre dos números separados por 100 unidades </h3>

    <?php
        $numero1=400;
        $numero2=500;
        $contNum=0;

        echo "Los números múltiplos de 3 entre $numero1 y $numero2 son: <br>";
        for($i=$numero1;$i<=$numero2;$i++){

            if($i%3==0){
                echo $i." / ";
                echo $contNum++;
            }
             
        }
        echo "<br>Cantidad de múltiplos de 3: $contNum";


    ?>
    </div>
</body>
</html>