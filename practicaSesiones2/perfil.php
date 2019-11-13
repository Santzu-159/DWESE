<?php
    session_start();
    //Si no existe el usuario vuelvo al login=>login.php
    if(!isset($_SESSION['usuario'])){
        header('Location:login.php');
        die();
    }

    if(isset($_COOKIE['usesion'.$_SESSION['usuario']])){ //comprobamos si existe

        $_SESSION['sesion']=$_COOKIE['usesion'.$_SESSION['usuario']];
    }else{
        $_SESSION['sesion'] = "Esta es tu primera visita :D";

    }

    setcookie('usesion'.$_SESSION['usuario'],date('d/m/Y H:i:s'),time()+365*24*60*60);
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
<body class='bg-info'>
<div class="container float-left mt-1">
    <div class='from-group row float-left'>
        <div class='col-xs-3'>
            <input type='text' class='form-control' value='<?php echo $_SESSION['usuario'];?>' readonly />
        </div>
        <div class='col-xs-3'>
            <input type='text' class='form-control' value='<?php echo $_SESSION['sesion'];?>' readonly />
        </div>
        <div class='col-xs-2'>
            <a href='cerrar.php' class='btn btn-danger ml-3'>Cerrar sesion</a><br>
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------->
<div class="container mt-6 text-center">
   
</div>

</body>

</html>