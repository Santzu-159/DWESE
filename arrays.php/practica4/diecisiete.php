<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Diecisiete</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 17</h4>
        <p class='text-center'>
        
            Crea un array multidimensional para poder guardar los componentes de dos familias: “Los<br>
            Simpson” y “Los Griffin” dentro de cada familia ha de constar el padre, la madre y los hijos, donde<br>
            padre, madre e hijos serán los índices y los nombres serán los valores.<br>
            Familia “Los Simpson”: padre Homer, madre Marge, hijos Bart, Lisa y Maggie.<br>
            Familia “Los Griffin”: padre Peter, madre Lois, hijos Chris, Meg y Stewie<br>
            Muestra los valores de las dos familias en una lista no numerada.<br>
        </p>
        
        <?php

            $familias=[
                "Los Simpson"=>[
                    "padre"=>"Homer",
                    "madre"=>"Marge",
                    "hijos"=>[
                        "Bart",
                        "Lisa",
                        "Maggie"
                    ]
                ],
                "Los Griffin"=>[
                    "padre"=>"Peter",
                    "madre"=>"Lois",
                    "hijos"=>[
                        "Chris",
                        "Meg",
                        "Stewie"
                    ]
                ]
            ];

            mostrar($familias);
    
            function mostrar($array){

                echo "<ul>";

                do{

                    $indice=key($array);

                    if(!is_numeric($indice)){//filtro para indices numericos

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