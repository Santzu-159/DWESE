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
        <h4 class='text-center'>Ejercicio 3</h4>
        <p class='text-center'>
        Crea un array de dos dimensiones, de manera que en una dimensión contenga<br>
        el tipo de colores (fuerte o suave) y en la otra 3 colores de cada tipo. Muestra<br>
        una tabla como la siguiente recorriendo el array:<br>
        
                         *--------------------------------------------------*
        Colores fuertes: | Rojo:FF0000   | Verde:00FF00      | Azul: 0000FF |
                         |---------------|-------------------|--------------|
        Colores suaves:  | Rosa:FE9ABC   | Amarillo:FDF189   | Malva:BC8F8F |
                         *--------------------------------------------------*
        </p>
        
        <?php
            
            $tabla=[
                fuerte =>["Rojo:FF0000","Verde:00FF00","Azul: 0000FF"],
                suave =>["Rosa:FE9ABC","Amarillo:FDF189","Malva:BC8F8F"]
            ];



        ?>
    </div>
</body>
</html>