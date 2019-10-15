<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tres</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 2</h4>
        <p class='text-center'>
        Realizar un programa que muestre las películas que se han visto. Crear un array que contenga los<br>
        meses de enero, febrero, marzo y abril, asignando los valores 9, 12, 0 y 17, respectivamente. Si en alguno<br>
        de los meses no se ha visto ninguna película, no ha de mostrar la información de ese mes.<br>
        </p>
        
        <?php
        $peliculas;
        $mes;
        $meses=[
            "enero"=>9,
            "febrero"=>12,
            "marzo"=>0,
            "abril"=>17
        ];

        foreach($meses as $mes=>$peliculas){

            if($peliculas>0){

                echo "Has visto ".$peliculas." películas el mes de ".$mes."<br>".PHP_EOL;
            }
        }

        
            
           
        ?>
    </div>
</body>
</html>