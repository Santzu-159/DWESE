<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        use Src\{Conexion, Usuarios};
        
       /* spl_autoload_register(function($n){
            require "../src/".$n.".php";
        });
        
        use Src\Conexion;
        use Src\Usuarios;
        
         //es lo mismo las dos cosas pero el de abajo es a partir de PHP 7
        use Src\{Conexion, Usuarios};
        */

        require "../src/Conexion.php";
        require "../src/Usuarios.php";

        $con = new Conexion();
        $llave = $con->getConector();
        $usu = new Usuarios ($llave);
        $usuarios =$usu->read();


    ?>
    
    <h3 class='text-center mt-3'>Usuarios</h3>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Mail</th>
                <th scope="col">Web</th>
                <th scope="col">Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($filas=$usuarios->fetch(\PDO::FETCH_OBJ)){

                    echo "<tr>
                            <th scope='row'>{$fila->id}</th>
                            <td>{$fila->nombre}</td>
                            <td>{$fila->direction}</td>
                            <td>{$fila->mail}</td>
                            <td>{$fila->web}</td>
                            <td>{$fila->description}</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>