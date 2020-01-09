<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colisiones</title>
    <?php
        /*require "./src/clases1/Usuarios.php";
        require "./src/clases2/Usuarios.php";
        use Src\Clases1\Usuarios as Usuarios1;
        use Src\Clases2\Usuarios as Usuarios2; //le damos un alias*/

        spl_upload_tegister(function($c){
            require "./src/clases1/Usuarios.php";
            require "./src/clases2/Usuarios.php";
        });

        use Src\Clases1\Usuarios as Usuarios1;
        use Src\Clases2\Usuarios as Usuarios2; //le damos un alias

    ?>
</head>
<body bgcolor='gray'>
    <h3><center>Prueba de Namespaces</center></h3>
    <?php
        $miusuario = new Usuarios1 ("Pepito Grillo");
        $miusuario1 = new Usuarios2 ();
        $miusuario2 = new Src\Clases2\Usuarios("Otro usuario"); //en vez del use
        echo $miusuario->saludo();
        echo $miusuario1->saludo();
        echo $miusuario2->saludo();
    ?>
    
</body>
</html>