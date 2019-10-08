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
        <h4 class='text-center'>Ejemplo 1 -- strlen(cad)</h4>
        <h6 class='text-center'>Devuelve la longitud de la cadena</h6>
        <?php
            echo "<br>";
            $cadena = "Hola Mundo";
            echo "La longitud de \"$cadena\ es: ".strlen($cadena); //Devuelve la longitud de la cad.
            echo "<br>";
            for($i =0; $i<strlen($cadena);$i++){
                echo $cadena[$i]."-";
            }
        ?>
    </div>

    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 2 -- strstr(cad1,cad2)</h4>
        <h6 class='text-center'>Busca una cadena dentro de otra (Distingue entre mayus y min).</h6>
        <?php
            $cadena = "Hola Mundo";
            echo "<br>";
            echo strstr($cadena,"Mun"); //Distingue entre min y mayus.
            $mail = "ajkdfha@hotmail.es";
            echo "<br>";
            echo strstr($mail,"@");
            
        ?>
    </div>


    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 3 -- strpos(cad)</h4>
        <h6 class='text-center'>Devuelve la posicion donde comienza la cadena. Distingue entre mayus y min.</h6>
        <?php
          echo "<br>";  
          echo strpos($cadena,"Mundo");  //devuelve la posición donde empieza la cadena
                                        //diferencia entre mayus y min.

          echo strpos($cadena,"o",3);  //Con el último parámetro (3), le indicamos desde donde
                                      //queremos que empiece a buscar (el desplazamiento).                            
        ?>
    </div>

    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 4 -- strspn(cadena,mascara)</h4>
        <h6 class='text-center'>Devuelve la cantidad de caracteres que coinciden de la cadena con la mascara.</h6>
        <?php
            echo "<br>";
            $cadena = "america fue descubierta en 1492";
            $cadena1 ="1492 fue el año del descubrimiento";
            echo strspn($cadena,"123456789");
            echo "<br>";
            echo strspn ($cadena1,"987654321");

            //Empieza a mirar el primer caracter de la cadena. Si coincide con algun caracter de la
            //máscara, si no se encuentra, devuelve 0, si coincide, los va contando.
            //por eso en el primero devuelve 0 y el en segundo devuelve 4 (4 numeros).
            echo "<br>";
            echo strspn($cadena, "Aabcdefghijklmnopqrstuvwxyz ");
            
        ?>
    </div>  


     <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejemplo 5 -- strcspn(cad,mascara)</h4>
        <h6 class='text-center'>Devuelve la cantidad de caracteres que NO coinciden de la cadena con la mascara.</h6>
        <?php
            $cadena = "La expo fue en 1992";
            echo "<br>";
            echo strcspn($cadena,"0123456789"); //Devuelve la cantidad de caracteres que 
                                                //NO coinciden de la cadena con la mascara.
            
        ?>
    </div> 

</body>
</html>