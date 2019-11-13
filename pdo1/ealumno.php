<!DOCTYPE html>

<?php
if(!isset($_GET['id'])){
    header("Location:alumnos.php");
    die();
}
session_start();

//Hacemos autoload de las clases
spl_autoload_register(
    function ($nombre) {
        require "./class/". $nombre .".php"; //Cuando llamo a una clase, automaticament ebusca el nombre de la clase .php
    }
);

$conexion = new Conexion(); //creamos objeto de la clase conexion
$miLlave = $conexion->getConector(); //llave de acceso (recuperamos el conector para conectarnos)
$alumno = new Alumnos($miLlave);// le pasamos el conector para poder acceder a alumnos
$alumno->setIdAl($_GET['id']); //introducimos id que se le pasa
$datosAlumno=$alumno->getAlumno();

function error($txt){
    $_SESSION['error']=$txt;
    $id=$_GET['id'];
    header("Location:ealumno.php?id=$id");
    die();
}

function editarAlumno($n,$a,$m){
    global $alumno;
    global $datosAlumno;
    $alumno->setNomAl($n);
    $alumno->setApeAl($a);
    $alumno->setMail($m);
    //compruebo si he modificado o no el mail por el tema de no permitir mails unicos
    if($m!=$datosAlumno->mail){
        //si ha cambiado el mail compruebo que no exista el mail nuevo
        if($alumno->existeMail()){
            error("El mail esta duplicado, elije otro");
        }

    }
        $alumno->edit();
        $_SESSION['mensaje']="Alumno modificado con éxito";
        header("Location:alumnos.php");
    
}

?>

<html lang='es'>

<head>
    <title></title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>

<body style="background-color:salmon">
    <h3 class="text-center mt-4">Editar Alumno</h3>
    <div class='container mt-3'>
    <?php
        if(isset($_POST['enviar'])){
            //procesamos
            $nombre=ucwords(trim($_POST['nombre']));
            $ape=ucwords(trim($_POST['ape']));
            $mail=trim($_POST['email']);
            if(strlen($nombre)==0 || strlen($ape)==0){
                error("Error, los campos deben contener algún caracter.");
            }
            editarAlumno($nombre,$ape,$mail);
        }else{
    ?>
    <?php
        if(isset($_SESSION['error'])){
            echo "<p class='mt-3 mb-3 text-danger'>".PHP_EOL;
            echo $_SESSION['error'].PHP_EOL;
            echo "</p>".PHP_EOL;
            unset($_SESSION['error']);
        }
    ?>
        <form name='as' action='<?php echo $_SERVER['PHP_SELF']."?id={$datosAlumno->idAl}"; ?>' method='POST'>
            <div class='form-group'>
                <label for='nom'>Nombre</label>
                <input type='text' class='form-control' id='nom' value='<?php echo $datosAlumno->nomAl; ?>' name='nombre' required>
            </div>
            <div class='form-group'>
                <label for='ape'>Apellidos</label>
                <input type='text' class='form-control' id='ape' value='<?php echo $datosAlumno->apeAl; ?>' name='ape' required>
            </div>
            <div class='form-group'>
                <label for='mail'>E-Mail</label>
                <input type='email' class='form-control' id='mail' value='<?php echo $datosAlumno->mail; ?>' name='email' required>
            </div>
            <input type='submit' class='btn btn-primary' name='enviar' value='Modificar'>&nbsp;
            <a href='alumnos.php' class='btn btn-info'>Volver</a>
        </form>
        <?php } ?>
    </div>
</body>

</html>