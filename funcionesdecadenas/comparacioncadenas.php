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
        <h4 class='text-center'>Ejemplo 1 -- Comparar cadenas con == / ===</h4>
        <h6 class='text-center'>Se puede comparar cadenas con == da igual si es numero o no.</h6>
        <h6 class='text-center'>Se usa para comparar el valor. Con el triple === compara tambien el tipo.</h6>
        <?php
            echo "<br>";
            $cadena = "Hola Mundo";
            $cadena1="Hola MundO";
            if($cadena==$cadena1){
                echo "Las cadenas son iguales<br>";
            }else{
                echo "Las cadenas NO son iguales <br>";
            }

            echo "<br>";
            $num1=12;
            $num2=12.00;
            if($num1==$num2){ //con el doble igual compara el valor
                echo "Los numeros son iguales<br>";
            }else{
                echo "Los numeros NO son iguales<br>";
            } 

            if($num1===$num2){ //Con el triple igual se compara el valor y el tipo
                echo "Los numeros son iguales y del mismo tipo<br>";
            }else{
                echo "Los numeros NO son iguales o del mismo tipo<br>";
            }
            
        ?>
    </div>

    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 2 -- strcmp(cad1,cad2)</h4>
        <h6 class='text-center'>Ordenar por caracteres ASCI (posiciones), 0 si son iguales, -1 si va antes, 1 si va despues.</h6>
        <h6 class='text-center'>Distingue entre mayusculas y minusculas</h6>

        <?php
            echo "<br>";
            echo "strcmp (sevilla - betis)="; // como la b de betis va en seguna posicion devuelve 1
            echo strcmp("sevilla", "betis");

            echo "<br>";
            echo "strcmp (betis - sevilla)="; //como la b de betis va antes devuelve -1 (va antes de sevilla)
            echo strcmp ("betis", "sevilla");

            echo "<br>";
            echo "strcmp (sevilla - sevilla)="; //como son iguales devuelve 0
            echo strcmp ("sevilla", "sevilla");

        ?>
    </div>
   
</body>
</html>