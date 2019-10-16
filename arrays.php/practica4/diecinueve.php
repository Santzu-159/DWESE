<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Diecinueve</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 19</h4>
        <p class='text-center'>
            Crea una matriz para guardar a los amigos clasificados por diferentes ciudades. Los valores<br>
            serán los siguientes:<br>
            En Madrid: nombre Paco, edad 32, telefono 91-9999999<br>
            En Barcelona: nombre Susana, edad 34, telefono 93-0000000<br>
            En Toledo: nombre Sonia, edad 42, telefono 925-090909<br>
            Haz un recorrido del array multidimensional mostrando los valores de tal manera que nos muestre<br>
            en cada ciudad qué amigos tiene<br>
            
        </p>
        
        <?php
            $amigos=[ 
                "Madrid"=>[
                    "nombre"=>"Paco",
                    "edad"=>32,
                    "telefono"=>"91-9999999"
                ],
                "Barcelona"=>[
                    "nombre"=>"Susana",
                    "edad"=>34,
                    "telefono"=>"93-0000000"
                ],
                "Toledo"=>[
                    "nombre"=>"Sonia",
                    "edad"=>42,
                    "telefono"=>"925-090909"
                ]
            ];

            mostrar($amigos);
    
            function mostrar($array){

                echo "<ul>";

                do{

                    $indice=key($array);

                    if(!is_numeric($indice)){

                        echo "<li>$indice</li>";
                    }

                    $valor=current($array);

                    if(is_array($valor)){

                        mostrar($valor);

                    }else{

                        echo "<li>$valor</li>";
                    }

                }while(next($array));

                echo "</ul>";
            }
           


        ?>
    </div>
</body>
</html>