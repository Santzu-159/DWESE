
<!-- EVITAR QUE PUEDAN ENTRAR AL RESTO DE PÁGINAS SI SE SABEN EL  NOMBRE A TRAVES DE LA URL -->
<?php 
session_start(); //trabajamos con sesiones
if(!isset($_SESSION["usuario"])){

    //si no existe volvermos a index
    header("Location:index.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background-color:orange">
    <div class="container mt-5">
        <h3 class="text-center">Sitio principal del Portal</h3>
        <p>Bienvenido: <?php echo $_SESSION["usuario"];?></p>
        <a href="cerrar.php" class="btn btn-danger"> Cerrar Sesion </a>
    </div>
    
</body>
</html>