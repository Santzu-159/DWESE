<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style='background-color:bisque'>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 1 -- substr(cad,primera posicion, segunda posicion)</h4>
        <h6 class='text-center'>Extraer subcadenas</h6>
        <?php
            echo "<br>";
            $cadena = " Hola Mundo Otra Vez";
            echo "<br>Salida de substr($cadena, 0, 4), donde \$cadena=$cadena"; 
            echo substr($cadena, 0, 5); //A partidr del caracter 0, sacame 4 caracteres.
                                        //Por eso aparece Hola al final.
            echo "<br>";
            echo "<br>Ahora con numeros negativos:";
            echo "<br>Salida de substr($cadena, -6, 3), donde \$cadena=$cadena"; 
            echo substr($cadena,-6, 3); //Cuenta desde el final 6 caracteres y coge los tres que hay a partir de ahi.

            echo "<br>";
            echo "<br>Ahora con los dos numeros negativos: (es el menos usual)";
            echo "<br>Salida de substr($cadena, -8, -2), donde \$cadena=$cadena"; 
            echo substr($cadena,-8, -2); //cuenta -8 cracteres al reves y con el -2 indicamos los caracteres que queremos excluir.
           
        ?>
    </div>

    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 2 -- str_replace(cad1,cad2, inicio [tamaño])</h4>
        <h6 class='text-center'>Sustituir caracteres o palabras en la cadena.</h6>
        <?php
            $cadena1 ="Hola Mundo";
            $cadena2 ="Hola Mundo";
            echo "<br>";
            echo "str_replace(o, 0, \$cadena1)= ";
            echo str_replace("o","0", $cadena1); //cambiamos las o por ceros
            echo "<br>str_replace(Hola, Adios, \$cadena2)= ";
            echo str_replace("Hola","Adios", $cadena2); //cambiamos hola por adios

            echo "<br>";
            echo "<br>str_replace(caca, Adios, \$cadena2)= ";
            echo str_replace("caca","Adios", $cadena2);
            echo "Como caca no está, pone la cadena que hay."

        ?>
    </div>




</body>
</html>