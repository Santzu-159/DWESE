<?php
    session_start();
    //Si no existe el usuario vuelvo al login=>login.php
    if(!isset($_SESSION['usuario'])){
        header('Location:login.php');
        die();
    }

    if($_SESSION['usuario']['tipo'] == "normal"){
        header('Location:menu.php');
        die();

    }

    function fondo($color){
        echo "<body style='background-color:$color'>".PHP_EOL;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
    if($_SESSION['usuario']['tipo']=='administrador'){
        fondo("red");

    }else if($_SESSION['usuario']['tipo']=='avanzado'){
        fondo("orange");

    }else{
        fondo("yellow");
    }
?>
<div class="container float-right mt-1">
    <div class='from-group row float-right'>
        <div class='col-xs-3'>
            <input type='text' class='form-control' value='<?php echo $_SESSION['usuario']['nombre']." -- ".$_SESSION['usuario']['tipo'];?>' readonly />
        </div>
        <div class='col-xs-2'>
            <a href='cerrar.php' class='btn btn-primary ml-3'>Cerrar sesion</a><br>
            <a href='menu.php' class='btn btn-primary ml-3'>Volver</a>

        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------->
<div class="container mt-6 text-center">
    <h1> Bienvenido a la página 2 :D</h1>
</div>

</body>

</html>