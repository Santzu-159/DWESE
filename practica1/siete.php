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
    <!--*............................................ Ejercicio 7  Mostrar los divisores de un número  .........................................*-->
    
    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio 7 Mostrar los divisores de un número  </h3>
    <?php

        $numero= 50;
        $contDivi=0;

        for($i=1;$i<=$numero;$i++){
            if($numero%$i==0){
                echo "$i, ";
                $contDivi++;
            }
           
        }
        echo "$numero tiene $contDivi divisores.";


    ?>
    </div>
</body>
</html>