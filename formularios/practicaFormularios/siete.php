<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siete</title>
</head>
<body>
    <?php 
        if(isset($_POST['bntnEnviar'])){

            if(is_uploaded_file($_FILES['pdf']['tmp_name'])){
                if($_FILES['pdf']['error']==2){
                    if($_FILES['pdf']['type']=='aplication/pdf'){
                         $nombreActual = $_FILES['pdf']['name'];      

                    }
                }
            }

            if(is_uploaded_file($_FILES['image']['tmp_name'])){
                if($_FILES['image']['error']==2){
                    $array=[
                        'image/jpeg',
                        'image/png',
                        'image/tiff',
                        'image/bmp',
                        'image/gif',
                        'image/x-icon',
                        'image/svg+xml'
                    ];

                    if(in_array($_FILES['image']['type'],$array)){

                        $nombreActual=$_FILES['imagen']['name'];
                        $nombre="./imagen/".$nombreActual;

                        move_uploaded_file($_FILES['imagen']['tmp_name'], $nombre);
                        echo "<p class='text-center'><img src='$nombre/></p>".PHP_EOL;

                    }else{
                        echo "El archivo que intenta subir no es una imagen.";}

                }else{
                    echo "No se ha subido el archivo.";}
            }

            ?>
            <!--Botón Volver-->
            <p class='text-center mt-5'>
                <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
            </p>
            <?php

        }else{

    ?>
    <div class='container mt-5'>
        <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST' ENCTYPE="multipart/form-data">
            <div>

                <label>PDF:</label><br>
                <input type="hidden" name="MAX_FILE_SIZE" value ="5000000"/>
                <input type = "file" name="pdf"/><br>

                <label>Imagen:</label><br>
                <input type="hidden" name="MAX_FILE_SIZE" value ="5000000"/>
                <input type = "file" name="image"/><br>

            </div>

            <div class="form-group">
                <br><input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
                    <input type='reset' value='Borrar' class='btn btn-primary'>
            </div> 

        </form>
    </div>
    
        <?php } ?>        
    
</body>
</html>