<!DOCTYPE html>
<html lang="en">

    <?php
        session_start();
        if(!isset($_SESSION['nombre'])){
            header("Location:index.php");
            die();
        }

        $nombre=$_SESSION['nombre'];
        $perfil=$_SESSION['perfil'];

        spl_autoload_register(function($clase){
            require "./class/".$clase.".php";
        });

        function miToken(){ //asegurar la pagina para que no hagan ataques csrf
            
            return bin2hex(random_bytes(12));
        }
        $_SESSION['stoken']=miToken();

        $conexion = new Conexion();
        $llave = $conexion->getConector();
        $plataforma= new Plataformas($llave);
        $todas=$plataforma->read();

    ?>  

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>
</head>
<body style="background-color:coral">
    <div class="container">
        <table align='right' cellpadding='3'>
        <tr>
                <td><?php echo "Ususario: <b>$nombre</b>"?></td>
                <td>
                    <form nombre="as" action="cerrarsesion.php" method="POST">
                        <a href="cerrarsesion.php" class='btn btn-info'>Cerrar Sesión</a> <!-- ataques csrf se hace en toras las paginas, 
                                                                                        lo mejor es hacer una funcion o una clase -->
                        <input type="hidden" name="ftoken" value ="<?php echo $_SESSION['stoken'];?>">
                        <input type="submit" class="btn btn-info" value="Cerrar Sesion">
                        
                    </form>
                </td>
        </tr>
        </table>
    </div>
    <p class ="text-center text-info mt-3"><b>PLATAFORMAS</b></p>
    <div class="container mt-3">

    <?php

    if($perfil==100){
        echo "<a href='cplataforma.php' class='btn btn-info mt-3 mb-3> Crear Plataforma </a>";
    }
    ?>    
   
    <table class="table table-dark">
        <thead>
            <tr class='text-warning font-weigth-bold'>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($todas as $item){
                    echo "    
                        <tr>
                            <th scope='row'>{$item->id}</th>
                            <td>{$item->nombre}</td>
                            <td><img src='{$item->imagen}' width='80px' height='80px'></td>
                            <td> <a href='mplataformas.php' class='btn btn-info'>Cambiar</a></td>
                            <td> <a href='bplataformas.php' class='btn btn-danger'>Eliminar</a></td>
                        </tr>
                    ";
                }
            ?>
            <tr>
                <td>
                    <a href='plataformas.php' class='btn btn-info'>Volver</a></td>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    <?php echo "<br><b>".miToken()."</b>" ?> <!-- nos muestra lo que hace esta funcion, es un ejemplo -->
</body>
</html>
