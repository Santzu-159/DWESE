<!DOCTYPE html>

<?php
    session_start();
    //hacemos el autoload de las clases
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });
    $conexion = new Conexion();
    $miLlave = $conexion->getConector();

    $modulo = new Modulos($miLlave);
    $misModulos = $modulo->read();
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Alumnos</title>
    </head>
    <body style="background-color:salmon">
        <h3 class="text-center mt-4">Crud Modulos</h3>
        <div class="container mt-3">
            <a href="cmodulo.php" class="btn btn-success mb-3">Nuevo Modulo</a>
            <?php
                if(isset($_SESSION['mensaje'])){
                    echo "<p class='mt-3 mb-3 text-primary'>{$_SESSION['mensaje']}</p>".PHP_EOL;
                    unset($_SESSION['mensaje']); //que no lo muestre cuando recarguemos la pag
                }
            ?>    
            <table class="table table-dark">
                <thead>
                    <tr style='text-align:center; font-weight:bold;'>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Horas Semanales</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($misModulos as $mod){
                            echo "<tr style='text-align:center;'>".PHP_EOL;
                                echo "<th scope='row'>{$mod->idMod}</th>".PHP_EOL;
                                echo "<td>{$mod->nomMod}</td>".PHP_EOL;
                                echo "<td>{$mod->horasSem}</td>".PHP_EOL;
                                echo "<td>".PHP_EOL;
                                    echo"<form name='borrar' action='bmodulos.php' method='post' style='display:inline'>".PHP_EOL;
                                        echo"<input type='hidden' name='id' value='{$mod->idMod}'>".PHP_EOL;
                                        echo"<a href='mmodulo.php?id={$mod->idMod}' class='btn btn-info'>Editar</a>&nbsp;".PHP_EOL;
                                        echo"<input type='submit' value='Borrar' class='btn btn-danger'>".PHP_EOL;
                                    echo"</form>".PHP_EOL;
                                echo"</td>".PHP_EOL;
                            echo "</tr>".PHP_EOL;
                        }
                        $llave=null; //cerramos la conexion
                     ?>   
                </tbody>
            </table>

        </div>
    </body>
</html>