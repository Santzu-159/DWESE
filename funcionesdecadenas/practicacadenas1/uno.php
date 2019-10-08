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
        Realiza una página PHP en la que introduzca dos palabras en dos variables y diga si riman o no.<br>
        Si coinciden las tres últimas letras tiene que decir que riman. Si coinciden sólo las dos últimas<br>
        tiene que decir que riman un poco y si no, que no riman. Recuerda que las palabras rimarán<br>
        independientemente de que se escriban con mayúsculas o minúsculas.
        </p>
        <?php
            $cadena1 ="dhsdo";
            $cadena2 ="respirando";
            
            $comparar1 = substr($cadena1, strlen($cadena1)-3);
            $comparar2 = substr($cadena2, strlen($cadena2)-3);

            $comparar3 = substr($cadena1, strlen($cadena1)-2);
            $comparar4 = substr($cadena2, strlen($cadena2)-2);

           if($comparar1 == $comparar2){

                echo "$cadena1 y $cadena2 riman.";
           
           }
           if($comparar3 == $comparar4){

                echo "$cadena1 y $cadena2 riman un poquito";
           }else{
               
                echo "$cadena1 y $cadena2 no riman";
           }
        ?>
    </div>
    
</body>
</html>