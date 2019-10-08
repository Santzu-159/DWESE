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
        <h4 class='text-center'>Ejercicio 6</h4>
        <p class='text-center'>
        Realiza una página PHP en la que por medio de la función printf muestre un número tanto en
        binario como en octal.
        </p>

        <?php
            echo" <form action='seis.php' style='padding: 0; display: inline' method = 'post'>".PHP_EOL;
            echo "<textarea name='textarea' rows='2' cols='25' align ='center'></textarea>".PHP_EOL;
            echo "<button type='submit'>Enviar</button>".PHP_EOL;
            echo "</form><br>".PHP_EOL;

            if(isset($_POST['textarea'])){

                $numero=$_POST['textarea'];
                $octal=(decoct($numero));
                $binario=(decbin($numero));

                printf ($octal."<br>".$binario); 
            }
            else{
                echo "Introduzca un numero.";
            }    

        ?>
    </div>
</body>
</html>