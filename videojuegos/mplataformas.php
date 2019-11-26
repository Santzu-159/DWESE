<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if(!isset($_SESSION['nombre'])){
            header("Location:index.php");
            die();
        }

        $nombre=$_SESSION['nombre'];

        spl_autoload_register(function($clase){
            require "./class/".$clase."php";
        });

        function error($m){
            $_SESSION['error']=$m;
            header("Location:mplataforma.php");
            die();
        }

        $conexion = new Conexion();
        $llave = $conexion->getConector();

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
    <p class ="text-center text-info mt-3"><b>Modificar Plataforma</b></p>
    <?php
        if(isset($_POST['btnEnviar'])){
            //procesamos
            $nom=trim($_POST['nombre']);

            if(strlen($nom)==0){
                error("El nombre debe de contener algún caracter.");
            }

            if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
                $array=[
                    'image/jpg',
                    'image/jpeg',
                    'image/png',
                    'image/tiff',
                    'image/bmp',
                    'image/gif',
                    'image/x-icon',
                    'image/svg+xml'
                ];

                //miramos que el tupo de mime del archivo subido sea el adecuado
                if(!in_array($_FILES['imagen']['type'],$array)){
                        error("Los únicos tipos permitidos son los de imagen.");
                }
                //he subido un archivo y e ltipo mime es el adecuado:
                $id=time();
                $nombreFich="/recursos/img/$id_".$_FILES['imagen']['name']; //nombre del archivo: id+nombre del fichero 
                                                                            //asi se les pone un nombre unico
                move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreFich);

            }else{
                $nombreFich='recursos/img/consola.jpeg';
            }
            
            if($miPlatadorma->imagen!=)
            $miPlataforma->setNombre($nom);
            $miPlataforma->setImagen($nombreFich);

            $miPlataforma->update();
            $_SESSION['mensaje']='Plataforma modificada correctamente.';
            $llave->null;
            header("Location:plataformas.php");
            die();

        }else{
                
    ?>        
    <div class="container mt-3">
        <?php
            if(isset($_SESSION['error'])){
                echo "<p class =' text-center mt-3 text-danger'>{$_SESSION['error']}</p>";
                unset($_SESSION['error']);
            }
        ?>
    <form name="a" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="nom">Nombre:</label>
                </td>
                <td>
                    <input type="text" class="form-control" id="nom" placeholder="<?php echo $nombre; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "<img src='{$miPlataforma->imagen}' width='80px' height='80px'>"; ?>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">Cambiar</button>
                    <a href ><!-- SE LO PASAMOS POR GET???? --></a>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="file" name ="imagen"/>
                </td>
            </tr>
            <tr class='text-right'>
                <td>
                    <button type="submit" class="btn btn-primary">Confirmar Cambios</button>
                </td>
            </tr>
        </table>    
    </form>
        <?php } ?>
</body>
</html>