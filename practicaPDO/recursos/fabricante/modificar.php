<?php
session_start();
$_SESSION['sesion']='fabricantes';
if(!isset($_GET['id'])){
    header('Location:../../index.php');
    die();
}
spl_autoload_register(function($clase){
    require "../../class/".$clase.".php";
});
function error($txt){
    $_SESSION['error']=$txt;    
    header('Location:editar.php');
    die();
}
$conexion = new Conexion();
$conector=$conexion->getConector();
$fabricante=new Fabricante($conector);
$fabricante->setId($_GET['id']);
$fab=$fabricante->getFabricante();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:lightpink;">
    
    <h1 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>Modificar Fabricante</h1>

<?php
    if(isset($_POST['btnEnviar'])){
        $nom=trim($_POST['nom']);
        if(strlen($nom)==0){
            error("El nombre no puede estar vacio");
        }        
        $fabricante->setNombre($nom);
        $fabricante->update();
        $_SESSION['mensaje']="Fabricante actualizado correctamente";
        $llave=null;
        header('Location:../../index.php');
        die();
    }else{
?>

<div class="container mt-3">
<?php
    if(isset($_SESSION['error'])){
        echo "<div>".PHP_EOL;
        echo "<h4 class='text-center text-danger bg-warning'>".$_SESSION['error']."</h4>".PHP_EOL;
        echo "</div>".PHP_EOL;
        unset($_SESSION['error']);
    }
?>
<form name='a' action='<?php echo $_SERVER['PHP_SELF']."?id=".$_GET['id']; ?>' method='POST'>
  <div class="form-group">
    <label for="nom"><b>Nombre:</b></label>
    <input type="text" class="form-control" name="nom" id="nom" value='<?php echo $fab->nombre; ?>' placeholder="Nombre Fabricante">
  </div>
  <button type="submit" name='btnEnviar' class="btn btn-success mt-3">Editar</button>&nbsp;
  <button type="reset" class="btn btn-primary mt-3">Limpiar</button>&nbsp;
  <a href="../../index.php" class='btn btn-info mt-3'>Volver</a>
  
</form>
</div>
<?php } ?>

    </body>
</html>