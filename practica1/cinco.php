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
    <!--*............................................ Ejercicio 5 Descomposición del numero en base 10 .........................................*-->
    
    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio 5 Descomposición del numero en base 10</h3>

    <?php
      echo "<br>".PHP_EOL;
      $num=6354;
        
      if($num>1000){

        for($i=strlen($num);$i>0;$i--){ //Strlen devuelve la longitud de lo que haya dentro de los parentesis
            echo (int)($num%pow(10,$i)/pow(10,$i-1)); //pow sirve para calcular la potencia
            if($i>1){
                echo "*10";    
            }
            if($i>2){
                echo "^".($i-1);
            }
            echo "+";
        }
      }else{
          echo "El número debe de ser mayor que 1000";
      }  


    ?>
    </div>
</body>
</html>