<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <div class= "container m-5" align ="center">
            <h4 class='text-center'>Ejercicio 7</h4>
            <p class='text-center'>
            Realiza una página PHP en la que se introduzca una frase en una variable y a continuación<br>
            muestre la misma frase repitiendo todos sus caracteres. Así:<br>
            CadenaOriginal<br>
            CCaaddeennaaOOrriiggiinnaall<br>
            </p>

            <?php
                echo" <form action='siete.php' style='padding: 0; display: inline' method = 'post'>".PHP_EOL;
                echo "<textarea name='textarea' rows='2' cols='25' align ='center'></textarea>".PHP_EOL;
                echo "<button type='submit'>Enviar</button>".PHP_EOL;
                echo "</form><br>".PHP_EOL;

                if(isset($_POST['textarea'])){

                    $cadena=$_POST['textarea'];

                    $resultado="";
                    for($i=0;$i<strlen($cadena);$i++){
                        $resultado=$resultado.$cadena[$i].$cadena[$i];
                    }
                    echo $cadena.PHP_EOL;
                    echo "<br>".PHP_EOL;
                    echo $resultado.PHP_EOL;
                }else{
                    echo "Introduzca una frase.";
                }
                
            ?>
        </div>    
    </body>
</html>