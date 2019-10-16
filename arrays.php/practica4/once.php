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
            Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por pantalla.<br>
            “Lagartija”, “Araña”, “Perro”, “Gato”, “Ratón”<br>
            “12”, “34”, “45”, “52”, “12”<br>
            “Sauce”, “Pino”, “Naranjo”, “Chopo”, “Perro”, “34”<br>
            Utiliza la función array_merge()<br>  
        
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


            echo "Array \$animales: <br>";
            print_r($animales);
            
            echo "<br><br>Array \$numeros: <br>";
            print_r($numeros);

            echo "<br><br>Array \$mixto: <br>";
            print_r($mixto);

            $todos = array_merge($animales,$numeros,$mixto);
            echo "<br> <br>Array compuesto por los demás:<br>";
            print_r($todos);
            


        ?>
    </div>
</body>
</html>