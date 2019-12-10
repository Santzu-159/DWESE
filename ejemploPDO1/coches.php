<?php

session_start();

spl_autoload_register(function($clase){
    require ("./class/$clase.php");
    });

$conexion = new Conexion();
$conector=$conexion->getConector();

$coche = new Coches($conector);
$todos = $coche->read(); 

$conector = null;

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <br>
        <h1 align="center">COCHECICOS TO FLAMAH</h1><br><br>
        <div class='text-center'>
            <a href='crear.php' class='btn btn-success'>Crear</a>
        </div>&nbsp;&nbsp;

        <?php
        
            if(isset($_SESSION['mensaje'])){
                echo "<h2>".$_SESSION['mensaje']."</h2>";
                unset($_SESSION['mensaje']);
            }

        ?>
       <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col">Kmts</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($todos as $t){

                    echo "<tr>
                        <td>{$t->id}</td>
                        <td>{$t->marca}</td>
                        <td>{$t->modelo}</td>
                        <td>{$t->color}</td>
                        <td>{$t->kmts}</td>
                        <td>
                            <form action='borrar' method='post'>
                                <input type='hidden' name='id' value='{$t->id}'>
                                <a href='editar.php?id={$t->id}' class='btn btn-info'>Editar</a>&nbsp;&nbsp;
                                <input type='submit' class='btn btn-danger' value='Borrar'>
                            </form>
                        
                        </td>
                        </tr>
                    ";
                } 
            ?>        
            </tbody>
        </table>
    
    </body>
</html>