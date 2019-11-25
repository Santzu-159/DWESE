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
                <td><a href="cerrarsesion.php" class='btn btn-info'>Cerrar Sesión</a></td>
        </tr>
        </table>
    </div>
    <p class ="text-center text-info mt-3"><b>PLATAFORMAS</b></p>
    <div class="container mt-3">

    <?php

    if($perfil==100){
        echo "<a href='cplataforma.php' class='btn btn-info mt-3 mb-3> Crear PPlataforma </a>";
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
                            <td>@mdo</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>
