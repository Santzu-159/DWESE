<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tres</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 3</h4>
        <p class='text-center'>
            Realiza una comprobación para el nombre de usuario con dos partes, la primera para ver si la longitud<br>
            de la cadena está permitida (entre 3 y 20 caracteres) y la segunda para asegurar que los<br>
            caracteres utilizados están entre los permitidos (letras, números, guión alto, guión bajo).<br>
        </p>

        <?php
             echo" <form action='tres.php' style='padding: 0; display: inline' method = 'post'>".PHP_EOL;
             echo "<textarea name='textarea' rows='2' cols='25' align ='center'>Introduzca su usuario</textarea>".PHP_EOL;
             echo "<button type='submit'>Enviar</button>".PHP_EOL;
             echo "</form><br>".PHP_EOL;
 
             if(isset($_POST['textarea'])){
 
                 $usuario=$_POST['textarea']; 
                 trim($usuario);
 
                     echo "<br>";
                     $longitud = strlen($usuario);
                     echo $longitud;
                     echo "<br>";
                    
                if($longitud !== 0){     
                     if($longitud>3 && $longitud<20){
                        
                        $comprobacion = strspn($usuario, "abcdefghijklmnñopqrstuvwxyz
                                                        ABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_");

                         if($comprobacion == $longitud){     
                            echo "El usuario ha sido registrado exitosamente.";
                            
                         }else{
                            echo "Por favor, introduzca letras, numeros, guion medios y/o guines bajos. <br> El resto de caracteres no estan permitidos.";
                         }
 
                    }else{
 
                        echo "El usuario debe de tener entre 3 y 20 caracteres.";
                    }
                }
                  
            }else{

                 echo "Por favor, introduzca un usuario.";
            }    
    
        ?>

    </div>
</body>
</html>