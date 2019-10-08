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
    <!--*............................................ Ejercicio 1 Tabla de multiplicar .........................................*-->
    <div class='container mt-4'>
        <h3 class='text-center'>Ejercicio 1 -- Tabla de multiplicar</h3>
        <br>
        <?php
            $numero=3;
            echo "<table align='center' border='3' cellpadding='6' cellspacing='6'>".PHP_EOL;
            echo "<td colspan='5'><b>Tabla de Multiplicar de $numero</b></td>".PHP_EOL;
            echo "</tr>".PHP_EOL;
            for($i=1;$i<11;$i++){
                $fondo;
                if($i%2==0){
                    $fondo="#48BF00"; //Verde
                    
                }else{
                    $fondo="#ffffff"; //Blanco
                }
                
                echo "<tr align='center' bgcolor=$fondo>".PHP_EOL;
                echo "<td>$numero</td>".PHP_EOL;
                echo "<td>x</td>".PHP_EOL;
                echo "<td>$i</td>".PHP_EOL;
                echo "<td>=</td>".PHP_EOL;
                echo "<td>".($numero*$i)."</td>".PHP_EOL;
                echo "</tr>".PHP_EOL;
            }     
            echo "</table>".PHP_EOL;
        ?>
    </div>
</body>
</html>