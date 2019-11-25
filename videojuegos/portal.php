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
        
        <table align='left' cellpadding='3'>
        <tr>
                <td><?php echo "Usuario: <b>$nombre</b>"?></td>&nbsp;&nbsp;
                <td><a href="cerrarsesion.php" class='btn btn-info'>Cerrar Sesión</a></td>
        </tr>
        </table>
    </div>

    <div class="container mt-5 text-center">
        <a href="plataformas.php" class='btn btn-info'> Ir a Plataformas</a>&nbsp;&nbsp;
        <a href="videojuegos.php" class='btn btn-info'> Ir a Videojuegos</a>
    </div>
</body>
</html>