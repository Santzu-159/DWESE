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
            Realiza una página PHP en la que se introduzca una frase en una variable. Muestra por pantalla<br>
            las dos primeras palabras de esa frase.<br>
        </p>

        <?php
            echo" <form action='cuatro.php' style='padding: 0; display: inline' method = 'post'>".PHP_EOL;
            echo "<textarea name='textarea' rows='2' cols='25' align ='center'></textarea>".PHP_EOL;
            echo "<button type='submit'>Enviar</button>".PHP_EOL;
            echo "</form><br>".PHP_EOL;

            if(isset($_POST['textarea'])){

                $frase=$_POST['textarea']; 

                $palabras = explode(" ",$frase);

                echo $palabras[0];
                echo "<br>";
                echo $palabras[1];


            }
            else{
                echo "Introduzca una frase.";
            }    
        ?>
    </div>
    
</body>
</html>