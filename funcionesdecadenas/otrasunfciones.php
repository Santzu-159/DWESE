<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 1 -- htmlentities(cad1)</h4>
        <h6 class='text-center'>Trabaja en html (se comprueba en el código fuente de la página)</h6>
        <?php
            echo " ejemplo chr(entero)";

            for($i=0;$i<255; $i++){
                echo "Caracter ascii =".chr($i);
            }
        

        ?>
    </div>


    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 2 -- count_chars(cad1,modo)</h4>
        <h6 class='text-center'>Trabaja en html (se comprueba en el código fuente de la página)</h6>
        <?php
            echo " ejemplo chr(entero)";

            $cadena = "Hola Mundo";
            


        ?>
    </div>
    
    
</body>
</html>