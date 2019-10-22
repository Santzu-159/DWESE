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
    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos
            echo "<br><br>".PHP_EOL;
            $email1=$_POST['email'];
            $email2=$_POST['confirmar'];
            
            if(filter_var($email1, FILTER_VALIDATE_EMAIL)==null || filter_var($email2, FILTER_VALIDATE_EMAIL)==null){ //comprobamos que los emails son correctos
                echo "<p>No se encuentra ningún correo con esa dirección.</p>".PHP_EOL; 

            }else{

                if(strcasecmp($email1,$email2)==0){ //comparamos las cadenas
                    echo "<p>Tu correo es: ".strtolower($email1)."</p>".PHP_EOL;
                }else{
                    echo "<p>Los correos introducidos no coinciden.</p>".PHP_EOL; 
                }
            }

            if(isset($_POST['suscripcion'])){
                $opcion=$_POST['suscripcion'];

                if($opcion=='not_select'){

                    echo "<p>No has seleccionado si deseas recibir correos.</p>".PHP_EOL; 
                }else{
                echo "<p> $opcion deseas recibir correos.</p>".PHP_EOL;                    
                }

            }else{
                echo "<p> $opcion deseas recibir correos.</p>".PHP_EOL;                    
            }
            
            ?>

        <!--Botón Volver-->
        <p class='text-center mt-5'>

            <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
        </p>
    <?php
            
        }else{
            //Pinto el formulario
    ?>


        <div class= "container mt-5">  
        <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>

        <div class="form-group">
            <div class="form-check">
                <p>Email:</p>
                <input type='email' name='email' required />
                
            </div>

            <div class="form-check">
                <p>Confirmaración de email:</p>
                <input type='email' name='confirmar' required />                
            </div>

            <div class="form-check">
            <br><p>¿Quiere recibir nuestros correos?</p>

                <select name="suscripcion" required>
                    <option value="not_select">...</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>        
            </div>
        </div>

        <div class="form-group">
        <br><input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
            <input type='reset' value='Borrar' class='btn btn-primary'>
        </div>    
        
        </form>
    </div>    
        <?php   } ?>

    
</body>
</html>