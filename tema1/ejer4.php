<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <?php
    //Pasamos un número por GET entre 25 y 50 (ambos validos)
    //Si no hemos pasado el numero o no esta entre estos límites nos mosrtara error
    //Pintamos la tabla de multiplicar del numero tal que: 45x1=45 / 45x2=90

    $numero=(int)$_GET['numero'];
    $resultado;

    if(isset($_GET['numero'])){

        if($numero>=25 || $numero<=50){
           // die("Entre en pintar la tabla");
            echo "<table border=2px>";
            for($i=1; $i<=10; $i++){
                $resultado = $numero*$i;
                echo <<<END
                
                    <tr>
                        <td>$numero</td>
                        <td> x </td>
                        <td>$i</td>
                        <td> = </td>
                        <td>$resultado</td>
                    </tr>
                
                END;
            }
            echo"</table>";
        }else{
            echo "Por favor, introduzca números entre 25 y 50 (ambos incluidos).";
        }    
    }    

    ?>
    
</body>
</html>