<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style='background-color:bisque'>
            <!--Procesamos el formulario -->
    <?php
        if(isset($_POST['btnEnviar'])){
            //Procesamos
            //var_dump($_FILES['foto']); //Hacemos un volcado para ver la info del archivo

            if(is_uploaded_file($_FILES['foto']['tmp_name'])){
                //El archivo se subio correctamenteç
                $nombreActual=$_FILES['foto']['name'];
                $id=time(); //marca de tiempo es un entero secuencial y único
                $nombre=$id.$nombreActual; //Le meto el id delante como nombre de archivo
                move_uploaded_file($_FILES['foto']['tmp_name'], $nombre); //movemos el archivo temporal al directorio actual


            }
        
            ?>
            <p class='text-center mt-5'>
            <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
            </p>
            <?php
        
        }else{ //Lo cerramos antes de cerrar el body
            echo "<br>Error, no se subio el archivo.";
            
    ?>
    <div class="container mt-5">
        <h3 class="text-center bg-primary">Subir Archivos</h3>
        <form name="sf" action="<?php echo $_SERVER['PHP_SELF'];?>" ENCTYPE="multipart/form-data" method="POST">
        <!-- El ENCTYPE es obligatorio ya que si no, el formulario no sube los archivos -->

            <input type="text" name ="nombre" placeholder="Tu nombre"/><br>

            <b>Tu Foto: </b>&nbsp;<input type="file" name="foto" />

            <p class="text-center mt-5">
                <input type="submit" value="Enviar" name="btnEnviar" class="btn btn-success"/>
            </p>

        <!-- Imponemos un tamaño máximo al fichero -->
        <!-- (Se puede hacer de otras formas pero esta es una-->
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/> <!-- value es el tamaño maximo en bytes -->


        </form>
    </div>
    <?php
        } //cerramos el else
    ?>
</body>
</html>