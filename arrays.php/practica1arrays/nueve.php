<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nueve</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 9</h4>
        <p class='text-center'>
        
        Crea un array asociatico que tenga la estructura siguiente:<br>
            ‘articulo1’=>(‘nombre’ = >’Bombilla’,<br>
            ‘pvp’ =>23.4,<br>
            ‘tipo’=>’Electricidad’,<br>
            ‘stock’=>45<br>
            ),<br>
            ‘articulo2’=>(‘nombre’ = >’Brasero’,<br>
            ‘pvp’ =>123.4,<br>
            ‘tipo’=>’Electricidad’,<br>
            ‘stock’=>4<br>
            ),<br>
            ‘articulo3’=>(‘nombre’ = >’Monitor led 19’,<br>
            ‘pvp’ =>203.4,<br>
            ‘tipo’=>’Informatica’,<br>
            ‘stock’=>5<br>
            ),<br>
            ‘articulo4’=>(‘nombre’ = >’tablet 10’,<br>
            ‘pvp’ =>123.4,<br>
            ‘tipo’=>’Informatica’,<br>
            ‘stock’=>45<br>
            )<br>

            a) Muestra los datos en una salida del tipo:<br>
                       | NOMBRE | PVP (€) | TIPO | STOCK<br>
            articulo 1 |<br>
            articulo 2 |<br>
            articulo 3 |<br>
            articulo 4 |<br>
            El total de stock es de : 99 (obviamente sumamos el stock)<br>


            b) Misma salida pero solo nos mostrará los árticulos de tipo Informática.<br>
                    </p>
        
        <?php

            $articulos=[
                "articulo1"=>[
                    "nombre"=>"Bombilla",
                    "pvp"=>23.4,
                    "tipo"=>"Electricidad",
                    "stock"=>45
                ],
                "articulo2"=>[
                    "nombre"=>"Brasero",
                    "pvp"=>123.4,
                    "tipo"=>"Electricidad",
                    "stock"=>4
                ],
                "articulo3"=>[
                    "nombre"=>"Monitor led 19",
                    "pvp"=>203.4,
                    "tipo"=>"Informatica",
                    "stock"=>5
                ],
                "articulo4"=>[
                    "nombre"=>"tablet 10",
                    "pvp"=>123.4,
                    "tipo"=>"Informatica",
                    "stock"=>45
                ]
            ];

            echo "<br><table style="border:1px black solid">".PHP_EOL;
            echo "<tr>".PHP_EOL.
            "<td></td>".PHP_EOL.
            "<td>Nombre</td>".PHP_EOL.
            "<td>PVP (€)</td>".PHP_EOL.
            "<td>Tipo</td>".PHP_EOL.
            "<td>Stock</td>".PHP_EOL.
            "</tr>".PHP_EOL;


            do{
                
               
                do{




                }while(next($articulos));

            }while(next($articulos));


        ?>
    </div>
</body>
</html>