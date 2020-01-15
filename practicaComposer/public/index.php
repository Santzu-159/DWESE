<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class='bg-info'>
    <?php

    // spl_autoload_register(function($n){
    //     require "../$n.php";
    // // });
     require "../src/Conexion.php";
     require "../src/Usuarios.php";
    // use Src\Conexion as Con;
    // use Src\Usuarios as Users;

    require '../vendor/autoload.php';
    use Carbon\Carbon;
    use Src\{Conexion, Usuarios};
    $con=new Conexion();
    $llave = $con->getConector();
    $usu=new Usuarios($llave);
    $usuarios=$usu->read();

   


    if(isset($_POST['edad'])){

      $usuario =$usu->getUsuario($_POST['id']);
      $fecha=$usuario->fNacimiento;
      $edad = Carbon::createFromDate($fecha)->age; //Averiguamos la edad a raiz de la fecha
      $_SESSION['mensaje'] = "El usuario ".$usuario->nombre." tiene, ".$edad." años.";
      header("Location:index.php");
      die();

    

    }else if (isset($_POST['adia'])){

      $usuario =$usu->getUsuario($_POST['id']);
      $fecha=$usuario->fNacimiento;
     // $fecha = Carbon::now()->addDay();
      $mañana=Carbon::createFromDate($fecha)->addDay();
      $_SESSION['mensaje'] = "El día posterior fue :".$mañana;
      header("Location:index.php");
      die();

    }else if (isset($_POST['qdia'])){

      $usuario =$usu->getUsuario($_POST['id']);
      $fecha=$usuario->fNacimiento;
      $mañana=Carbon::createFromDate($fecha)->subDay();
      $_SESSION['mensaje'] = "El anterior fue :".$mañana;
      header("Location:index.php");
      die();

    }elseif (isset($_POST['diferencia'])){

      $usuario =$usu->getUsuario($_POST['id']);
      $fecha=$usuario->fNacimiento;
      $dt = Carbon::createFromDate($fecha);
      $_SESSION['mensaje']=$dt->diffForHumans(Carbon::now());
      header("Location:index.php");
      die();

    }else{


    ?>

    <h3 class='text-center mt-3'>Usuarios</h3>
    <div class="container mt-3">
    <?php
        if(isset($_SESSION['mensaje'])){
          echo "<div>
                  <h4 class='text-center text-primary bg-light'>".$_SESSION['mensaje']."</h4>
                </div>".PHP_EOL;
          unset($_SESSION['mensaje']);
        }
    ?>
      <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fecha Nacimiento</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php
                    foreach($usuarios as $usuario){
                        echo "    
                            <tr>
                                <th scope='row'>{$usuario->id}</th>
                                <td>{$usuario->nombre}</td>
                                <td>{$usuario->fNacimiento}</td>
                                <td>
                                <form name='as' action='index.php' method='POST' style='display:inline'>
                                <input type='hidden' name='id' value='{$usuario->id}'>
                                <input type='submit' value='Averiguar Edad' class='btn btn-info' name='edad'>
                                <input type='submit' value='Añadir dia' class='btn btn-success' name='adia'>
                                <input type='submit' value='Quitar dia' class='btn btn-danger' name='qdia'>
                                <input type='submit' value='Diferencia de Fechas' class='btn btn-warning' name='diferencia'>
                                </form>
                                </td>
                            </tr>
                        ";
                    }
                    ?>
      </tbody>
    </table>
    </div>
  <?php } ?>
</body>
</html>