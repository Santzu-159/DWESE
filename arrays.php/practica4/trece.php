<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Trece</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 13</h4>
        <p class='text-center'>
        
        Muestra el array del ejercicio anterior pero en orden inverso.<br>
        </p>
        
        <?php

            $animales=[
                "Lagartija",
                "Araña",
                "Perro",
                "Gato",
                "Ratón"
            ];
            $numeros=[
                "12",
                "34",
                "45",
                "52",
                "12"
            ];
            $mixto=[
                "Sauce",
                "Pino",
                "Naranjo",
                "Chopo",
                "Perro",
                "34"
            ];


            $todos=[];

            $todos=anadir($todos,$animales);
            $todos=anadir($todos,$numeros);
            $todos=anadir($todos,$mixto);

            echo "Fusion de arrays con push inverso:<br>";
            $inverso=array_reverse($todos);
            print_r($inverso);


            function anadir($destino, $origen){
                do{        
                    array_push($destino, current($origen));
                }while(next($origen));
                
                return $destino;
            }  
            

        ?>
    </div>
</body>
</html>