<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body style= 'background-color:#cddc39'>
    
        <div class='container mt-4'> 
        <h3 class='text-center'> Ejercicio 1</h3>
        
    <?php    
        //Ejercicio1
        $numero=5;
        echo "<table align='center' border='3' cellpading='2' cellspacing='4'>";
        echo "<tr align= 'center'>".PHP_EOL;
        echo "<td colspan=5>Tabla de Multiplicar de $numero</td>";
        echo "</tr>";

        for($i=1;$i<11;$i++){
            if($i%2==0){
                echo "<tr align='center' bgcolor='#ffff6e'>";
                echo "<td>$numero</td>".PHP_EOL;
                echo "<td>x</td>".PHP_EOL;
                echo "<td>$i</td>".PHP_EOL;
                echo "<td>=</td>".PHP_EOL;
                echo "<td>".$numero*$i."</td>".PHP_EOL;
                echo "</tr>".PHP_EOL;
                
            }else{
                echo "<tr align='center'>";
                echo "<td>$numero</td>".PHP_EOL;
                echo "<td>x</td>".PHP_EOL;
                echo "<td>$i</td>".PHP_EOL;
                echo "<td>=</td>".PHP_EOL;
                echo "<td>".$numero*$i."</td>".PHP_EOL;
                echo "</tr>".PHP_EOL;
            }
        }


        echo"</table>".PHP_EOL;

    ?>
    </div>

    <div class='container mt-4'> 
        <h3 class='text-center'> Ejercicio 2</h3>
        <?php
    if (isset($_GET['primo'])){

            //nos llegan los num primos por get
            $numero=(int)$_GET['primo'];
            $contDiv=0;
            for($i=2; $i<$numero;$i++){
                if($numero%$i==0){
                    $contDiv++;
                    break;
                }
            }
            if($contDiv>0){
                echo "El numero $numero NO es primo";
            }else{
                echo "El numero $numero si es primo";
            }
    }else{
        echo "<p class ='text-center, text warning'>";
        echo "No has pasado por GET el número a comprobar!!";
        echo "</p>";
    }

        ?>
    </div>

    <div class='container mt-4'> 
        <h3 class='text-center'> Ejercicio 3</h3>
        <?php

        $cantidad =10;
        $candidato=1;
        $contPrimo=0;
            while($contPrimo<$cantidad){
                $contDiv=0;
                for($i=2;$i<$candidato;$i++){
                    if($contPrimo%$i==0){

                        $contDiv++;
                        break;
                    }
                    if($contDiv ==0){
                        echo "$candidato, ";
                        $contPrimo++;
                    }
                    $cantidad++;
                }


            }
        ?>
    </div>

    <div class='container mt-4'> 
        <h3 class='text-center'> Ejercicio 1</h3>
        <?php

        
        ?>
    </div>

    <div class='container mt-4'> 
        <h3 class='text-center'> Ejercicio 1</h3>
        <?php

        
        ?>
    </div>
</body>
</html>