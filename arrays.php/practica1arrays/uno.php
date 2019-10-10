<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Uno</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 1</h4>
        <p class='text-center'>
        Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una línea.<br>
        </p>
        
        <?php
            
            $cont=0;
            for($i=2;$cont<10;$cont++){     
                $array[$cont]=$i;
                $i=$i+2;
             }

             do{
                 echo current($array)."<br>".PHP_EOL;
             }while(next($array))

        
        ?>
    </div>
</body>
</html>