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
    <?php
        //Algoritmo que dice si un número es primo o no
        echo "<b>NUMEROS PRIMOS</b>";
        echo "<br>";
        echo "<br><b>Con bucle for</b>";
        echo "<br>";
        $contadorDiv = 0;
        $numero = 127;

        for ($i = 2; $i<$numero; $i++){
            if($numero%$i == 0){
                $contadorDiv ++;
            }
            if($contadorDiv>0) break;
        }
        if($contadorDiv>0){
            echo "El numero $numero no es primo";
        }else{
            echo "El numero $numero es primo";
        }
          
       //Mismo algoritmo pero con un while
       echo "<br>";
       echo "<br>";
       echo "<b>Con bucle While</b>";
       echo "<br>";
       
       $contadorDiv1 =0; //Contador que va dividiendo 
       $numero1 =27;
       $inicio=2;
       while($contadorDiv1==0 && $inicio<$numero1){
           if($numero1%$inicio == 0) $contadorDiv1++;
            $inicio++;
       }
       if($contadorDiv1>0){
        echo "El num $numero1 no es primo";
       } else{
           echo "El num $numero1 es primo";
       }

       //Algoritmo que muestra todos los números primos que hay entre 1 y el número que se de.
      
    $elNumero=2000;
    $candidatos = 1;
    while($candidatos <= $elNumero){
        $cDiv=0;
           for($i=1; $i<$candidatos;$i++){
                if($candidatos%$i==0){
                    $cDiv++;
                }
                if($cDiv>1) break;
            }    
        if($cDiv<2){
            echo "$candidatos, ";
        }
        $candidatos++;
              
    }
        echo "<br>";
       
       //Todos multiplos de 7 entre 1 y 1000
        echo"<br><b>Multiplos de 7 entre 1 y 1000</b><br>";
        $num=300;
        $cont = 0;
        for($i =7; $i<=$numero; $i++){
            if($i%7==0){
                echo "$i, ";
                $cont++;
            }
        }
        echo "<br>En total hay $cont números múltiplos de 7 entre 1 y 1000"


    ?>
</body>
</html>