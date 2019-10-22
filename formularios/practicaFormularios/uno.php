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

    <?php
        if(isset($_POST['btnEnviar'])){
            //procesamos los datos
            echo "<br><br>".PHP_EOL;
            $nombre=$_POST['nombre'];
            if($nombre==""){
                echo "Por favor, introduce tu nombre.".PHP_EOL;
            }else{
                echo "<b>Nombre:</b> $nombre<br><br>".PHP_EOL;
            }
            $apellidos=$_POST['apellidos'];
            if($apellidos==""){
                echo "Por favor, introduce tus apellidos.".PHP_EOL;
            }else{
                echo "<b>Apellidos:</b> $apellidos<br><br>".PHP_EOL;
            }
    ?>     

            <!--Volver-->
        <p class='text-center mt-5'>
            <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
        </p>
    <?php
            
        }else{
            //Pinto el formulario
   
            
    ?>

    <div class= "container mt-5">  
        <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nombre">Nombre: </label>
                    <input type="nombre" class="form-control" id="nombre" placeholder="nombre" name='nombre'>

                </div>
                
                <div class="form-group col-md-6">
                    <label for="apellidos">Apellidos: </label>
                    <input type="apellidos" class="form-control" id="apellidos" placeholder="apellidos" name='apellidos'>
                </div>

            </div>

            <div class="form-group">
                <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
                <input type='reset' value='Borrar' class='btn btn-primary'>
            </div>    
         
        </form>
    </div>    
        <?php   } ?>
    
</body>
</html>