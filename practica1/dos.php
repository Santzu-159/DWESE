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
     <!--*............................................ Ejercicio 2 Comprobar si es primo o no  .........................................*-->

     <div class='container mt-4'>
     <h3 class='text-center'>Ejercicio 2 -- Comprobacion de números primos</h3>
     <br>
     
     <?php
        if(isset($_GET['primo'])){
            //nos ha llegado primo por get
            if(is_nan($_GET['primo'])){
                echo "<p class='text-center, text-danger'>
            El parametro de GET no es un número.
            </p>".PHP_EOL;
            }else{
                $numero=(int)$_GET['primo'];
                if($numero<=0){
                    echo "<p class='text-center, text-danger'>
                    El número no debe ser negativo ni 0.
                    </p>".PHP_EOL;
                }else{
                    if($numero==1){
                        echo "$numero no es primo.".PHP_EOL;
                    }else{
                        $contDiv=0;
                        for($i=2;$i<$numero && $contDiv==0;$i++){
                            if($numero%$i==0){
                                $contDiv++;
                            }                        
                        }
                        if($contDiv>0){
                            echo "$numero no es primo.".PHP_EOL;
                        }else{
                            echo "$numero es primo.".PHP_EOL;
                        }
                    }                    
                }
            }
        }else{
            echo "<p class='text-center, text-danger'>
            No has pasado por GET el número a comprobar.
            </p>".PHP_EOL;
        }
    ?>
    </div> 
</body>
</html>