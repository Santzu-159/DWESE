<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Uno</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 1</h4>
        <p class='text-center'>
        Crea un array $dias con los días de la semana y muestra todas sus parejas<br>
        índices/valores mediante un bucle foreach y for.<br>

        </p>
        
        <?php
            
            $dias=["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];

            echo "Bucle Foreach: <br>".PHP_EOL;
            foreach($dias as $key=>$value)	{
                echo $key." = ".$value."<br>".PHP_EOL;
            }

            echo "<br>Bucle For: <br>".PHP_EOL;
            $longitud = count($dias);
            for($i=0;$i<$longitud;$i++){

                print_r("<br>".$i." = ".$dias[$i]);
            }
        

        ?>
    </div>
</body>
</html>