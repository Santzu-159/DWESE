<!DOCTYPE html>
<?php
    if(!isset($_GET['id'])){ //si no recibe parametros
        header("Location:modulos");
        die();
    }
    session_start();
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    $conexion = new Conexion();
    $llave = $conexion->getConector();
    $modulo = new Modulos($llave);

    function error($mes){
        $_SESSION['error']=$mes;
        header("Location:mmodulo.php?id={$_GET['id']}");
        die();
    }
    function editarModulo($n,$h){
        global $modulo;
        $modulo->setIdMod($_GET['id']);
        $modulo->setNomMod($n);
        $modulo->setHorasSem($h);
        $modulo->update();

        $_SESSION['mensaje']='Modulo actualizado con éxito.';
        header("Location:modulos.php");
        die();
    }

?>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    </head>
    <body style="background-color:salmon">
        <h3 class= 'mt-3 text-center'>Editar Módulo</h3>
        <div class="container mt-3">
            <?php
                if(isset($_SESSION['error'])){
                    echo "<p class='text-danger mb2'>{$_SESSION['error']}</p>".PHP_EOL;
                    unset($_SESSION['error']);
                }

                if(isset($_POST['enviar'])){
                    //procesamos el formulario
                    $nombre=trim($_POST['nombre']);
                    $horas=$_POST['horas'];
                    if(strlen($nombre)==0){
                        error("El nombre no es válido.");
                    }
                    editarModulo($nombre,$horas);

                }else{
                
                $miModulo = $modulo->getModulo($_GET['id']); //miModulo guarda toda la info de el modulo
            ?>
            <form name='as' action='<?php echo $_SERVER['PHP_SELF']."?id={$_GET['id']}";?>' method='POST'>
                <div class="form-group">

                    <label for="nom">Nombre Módulo</label>
                    <input type="text" class="form-control" id="nom" value='<?php echo $miModulo->nomMod; ?>' name='nombre' required>
                </div>

                <div class="form-group">
                    <label for="horas">Horas Semanales</label>
                    <input type="number" class="form-control" id="horas" value='<?php echo $miModulo->horasSem; ?>' max='8' min='1'name='horas' required>
                </div>

                <button type="submit" class="btn btn-primary" name='enviar'>Modificar</button>&nbsp;
                <input type='reset' value='Limpiar'class='btn btn-warning'>&nbsp;
                <a href='modulos.php' class='btn btn-info'>Volver</a>
            </form>
        </div>

        <?php } ?> 

    </body>
</html>