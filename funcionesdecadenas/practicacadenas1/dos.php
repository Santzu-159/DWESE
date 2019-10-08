<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dos</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 2</h4>
        <p class='text-center'>
            Realiza una página PHP que permita chequear si en una caja de texto se introduce una dirección<br>
            de correo válida. Una dirección de correo válida debe tener presentes los caracteres ‘@’ y ‘.’ Si<br>
            la dirección es válida escribe por un lado el nombre de usuario y por otro el dominio de dicha<br>
            dirección.<br>
        </p>

        <?php

            echo" <form action='dos.php' style='padding: 0; display: inline' method = 'post'>".PHP_EOL;
            echo "<textarea name='textarea' rows='2' cols='25' align ='center'>Introduzca su email</textarea>".PHP_EOL;
            echo "<button type='submit'>Enviar</button>".PHP_EOL;
            echo "</form><br>".PHP_EOL;

            if(isset($_POST['textarea'])){

                $email=$_POST['textarea']; 
                trim($email);

                if(strstr($email,"@") && strstr($email,".")){

                   // $nombre = substr($email, 2, -1);

                   $delimitador = explode("@",$email);
                    echo $delimitador[0];
                    echo "<br>";
                    echo $delimitador[1];

                    echo "<br>Su email ha sido registrado";

                }else{

                    echo "<br>Asegurese de que su email esta correctamente escrito.";

                }

            }else{

                echo "<br>Introduzca un email.";
            }
           

        ?>

    </div>
</body>
</html>