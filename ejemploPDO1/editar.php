<?php
session_start();

spl_autoload_register(function($clase){
    require ("./class/$clase.php");
    });

$conexion = new Conexion();
$conector= $conexion->getConector();
$coche = new Coches($conector);
$coche->setId($_GET['id']);
$miCoche = $coche->getCoche(); //obtenemos un objeto con la fila del coches que vamos a editar


function error($text){
    $_SESSION['error'] = $text;
    header("Location:editar.php?id={$_GET['id']}");
    die();
}

function editarCoche($marca,$modelo,$color,$kmts){

    global $coche; //para poder usar ese objeto dentro de esa funcion
    global $conexion;

    $coche->setMarca($marca);
    $coche->setModelo($modelo);
    $coche->setColor($color);
    $coche->setKmts($kmts);

    $coche->update();
    $conexion = null;

    $_SESSION['mensaje'] = "El coche se ha creado con éxito.";
    header("Location:coches.php");
    die();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color:tomato;">
    <?php
        if(isset($_POST['enviar'])){

            $marca = trim($_POST['marca']);
            $modelo = trim($_POST['modelo']);
            $color = trim($_POST['color']);
            $kmts = trim($_POST['kmts']);

            if(strlen($marca) == 0){
                error("Este campo no puede estar vacío");
            }

            if(strlen($modelo) == 0){
                error("Este campo no puede estar vacío");
            }

            if(strlen($color) == 0){
                error("Este campo no puede estar vacío");
            }
            if(strlen($kmts) == 0){
                $kmts=1500;
            }

            editarCoche($marca,$modelo,$color,$kmts);
        }else{

    ?>
    <br><h1 align="center">CREAR COCHECICO TO FLAMAH</h1><br><br>
    <?php
        if(isset($_SESSION['error'])){
            echo "<h2>".$_SESSION['error']."</h2>";
            unset($_SESSION['error']);
        }

    ?>
    <form  action='<?php echo $_SERVER['PHP_SELF']."?id={$_GET['id']}"; ?>' method='post' style="margin-left: 20%; margin-right:20%;">
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" class="form-control" id="marca" placeholder="Marca" name="marca" value='<?php echo $miCoche->marca;?>'>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" placeholder="Modelo" name="modelo" value='<?php echo $miCoche->modelo; ?>'>
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" placeholder="Color" name="color" value='<?php echo $miCoche->color; ?>'>
        </div>
        <div class="form-group">
            <label for="kmts">Kmts</label>
            <input type="text" class="form-control" id="kmts" placeholder="Kmts" name="kmts" value='<?php echo $miCoche->kmts; ?>'>
        </div>
        <div class="form-group" style="float:right">
            
            <button type="submit" class="btn btn-warning" name="enviar">Modificar</button>&nbsp;&nbsp;
            <a href="coches.php" class="btn btn-info" >Volver</a>
        </div>
    </form>
        <?php } ?>
</body>
</html>