<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cuatro</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 4</h4>
        <p class='text-center'>
        Dado el array anterior comprueba si en él se encuentra el color “FF88CC” y el
        color “FF0000” usando la función in_array.

        
                         *--------------------------------------------------*
        Colores fuertes: | Rojo:FF0000   | Verde:00FF00      | Azul: 0000FF |
                         |---------------|-------------------|--------------|
        Colores suaves:  | Rosa:FE9ABC   | Amarillo:FDF189   | Malva:BC8F8F |
                         *--------------------------------------------------*
        </p>
        
        <?php
            
            $tabla=[
                "Colores fuertes" =>["FF0000","00FF00","0000FF"],
                "Colores suaves" =>["FE9ABC","FDF189","BC8F8F"]
            ];
            
            $color = "FF88CC";
            $color2= "FF0000";
            $interruptor = false;
            $interruptor2 = false;

            do{
                if(in_array($color,current($tabla))){

                    $interruptor = true;
                   
                }else{
                    $interruptor = false;
                }


                if(in_array($color2,current($tabla))){

                    $interruptor2 = true;                

                }else{
                    $interruptor2 = false;
                }
            }while(next($tabla));    


            if($interruptor == true){

                echo "Se ha encontrado el color: ".$color;
            }else{
                echo "No se ha encontrado el color: ".$color;
            }

            if($interruptor2 == true){

                echo "<br>Se ha encontrado el color: ".$color2;
            }else{
                echo "<br>No se ha encontrado el color: ".$color2;
            }

        ?>
    </div>
</body>
</html>