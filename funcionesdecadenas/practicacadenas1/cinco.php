<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cinco</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 5</h4>
        <p class='text-center'>
            Realizar una página PHP en la que introduzca una frase en una variable y a continuación<br>
           muestre el número de letras ‘a’<br>
           A continuación muestra un array cuyas claves sean todas las letras contenidas en la frase y valor<br>
           el número de veces que aparece esa letra.<br>
        </p>

        <?php
            echo" <form action='cinco.php' style='padding: 0; display: inline' method = 'post'>".PHP_EOL;
            echo "<textarea name='textarea' rows='2' cols='25' align ='center'></textarea>".PHP_EOL;
            echo "<button type='submit'>Enviar</button>".PHP_EOL;
            echo "</form><br>".PHP_EOL;

            if(isset($_POST['textarea'])){

                $frase=$_POST['textarea']; 

                $longitud = strlen($frase);

                for($i=0;$i<$longitud;$i++){
                    
                    $contadorA= substr_count($frase,'a')+substr_count($frase,'A');                   
                }
                echo "'$frase' --> muestra:".$contadorA;
                
                for($i=0;$i<$longitud;$i++){
                    //echo $frase[$i]."<br>"; 
                    $array[$frase[$i]]=substr_count($frase,$frase[$i]);
                }
                echo "<br>";
                print_r($array);
            }
            else{
                echo "Introduzca una frase.";
            }    

        ?>
    </div>
</body>
</html>