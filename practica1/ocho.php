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
     <!--*............................................ Ejercicio 8  Mostrar tabla con celdas de diferentes colores  .........................................*-->
    
     <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio 8 Mostrar tabla con celdas de diferente color  </h3>
    <br>
    <?php
        $color=999999;
        echo "<table align='center' border=2px>";
            for($f=0; $f<8; $f++){
                echo"<tr align='center'>";
                for ($c=0; $c<8; $c++){
                    $suma = $f + $c;
                    if($suma%2==0){
                        echo "<td bgcolor=#$color><font color='white'>Celda $f.$c</font></td>";
                   
                    }
                    $color++;
                }
                echo "</tr>";
            }
        echo "</table>";

    ?>
    </div>
</body>
</html>