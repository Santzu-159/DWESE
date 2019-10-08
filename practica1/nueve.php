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
    <!--*............................................ Ejercicio 9  Ecuación Lineal  .........................................*-->
    
    <div class='container mt-4' align='center'>
    <h3 class='text-center'>Ejercicio 9  Ecuación Lineal</h3>
    <?php

        $a=2;
        $b=2;
        $c=4;
        if(!$a==0){
            $x = ($c-$b)/$a;

            echo "&nbsp;$c - $b ";
            echo "<br>";
            echo "x = -------- = $x";
            echo "<br>";
            echo "&nbsp;&nbsp;$a";
        }else{
            echo "$a debe de ser distinta de 0.";
        }
    ?>
    </div>

</body>
</html>