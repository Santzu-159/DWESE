<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Once</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 11</h4>
        <p class='text-center'>
        Tenemos el array:<br>
         “nombre”=>”Juan”, “Manuel”, 1=>”Pepe”, 5=>”Dario”, “Ines”, “Manolo”, “cosa”=>”Television”<br>
        a) Guardar en un array las keys de array anterior y muestralo<br>
        b) Guardar los valores del array anterior en otro array y muestralo<br>
        </p>
        
        <?php
           
           $array=[
                "nombre"=>["Juan","Manuel"],
                "1"=>["Pepe"],
                "5"=>["Dario","Ines","Manolo"],
                "cosa"=>["Television"]
           ];

        do{
            $indice[]=key($array); //guardamos las keys en indice
            $longitud=current($array); //calculamos la logitud del array y la guardamos en una variable

            do{

                $valores[]=current($longitud); //creamos un array donde guardamos los valores 

            }while(next($longitud));
            
         }while(next($array));

         echo "Array de keys: ".PHP_EOL;
         print_r($indice);
         echo "<br>";

         echo "Array de valores: ".PHP_EOL;
         print_r($valores);
         echo "<br>";

        ?>
    </div>
</body>
</html>