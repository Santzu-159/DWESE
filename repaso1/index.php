<!DOCTYPE html>
<html lang="es">
<?php

    session_start();

    spl_autoload_register(function ($nombre){
        require "./class/".$nombre.".php";
    });

    $objeto = new Conexion();
    $llave=$objeto->getConector();
    $coche = new Coches($llave);
    $todos=$coche->read();
    $llave=null;

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Index</title>
</head>

<body style="background-color:#32c230">
    <h3 class="text-center mt-4">COCHES</h3>
    <?php

        if (isset($_SESSION['mensaje'])) {
            echo "<p class='text-center text-success' mt-3>{$_SESSION['mensaje']}</p>";
            unset($_SESSION['mensaje']);
        }

    ?> 
    <div class="container mt-3">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Color</th>
                    <th scope="col">Kilómetros</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($todos as $item){
                        echo "<tr>".PHP_EOL;
                        echo "<th scope='row'>{$item->id}</th>".PHP_EOL;
                        echo "<td>{$item->marca}</td>".PHP_EOL;
                        echo "<td>{$item->modelo}</td>".PHP_EOL;
                        echo "<td>{$item->color}</td>".PHP_EOL;
                        echo "<td>{$item->kmts}</td>".PHP_EOL;
                        echo "<td>".PHP_EOL;
                            echo "<form name='a' action='borrar.php' method='POST' style='display:inline'>".PHP_EOL;
                                echo "<input type='hidden' value='{$item->id}' name='id'>".PHP_EOL;
                                echo "<input type='submit' class='btn btn-danger' value='Borrar'>".PHP_EOL;
                            echo "</form>".PHP_EOL;
                        echo "</td>".PHP_EOL;
                        echo "</tr>".PHP_EOL;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>