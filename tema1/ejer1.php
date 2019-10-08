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
    echo "INTRODUCCIÓN";
    
    echo "<br>Hola mundo".PHP_EOL; //Fin de línea
    echo "<br>Otra linea";
    echo "<br> Mi nombre es \"Sandra\" ";
    echo "<br> Mi nombre es 'Sandra' ";

    //Variables
    echo"<br>*-------------------------------------------------------------------------*";
    echo "<br>VARIABLES";
   
    $nombre="Sandra";
    $cantidad=25;
    $var=12.45;
    echo "<br>";
    echo "Mi nombre es: $nombre";
    echo '<br> Mi nombre es: $nombre';
    echo "\$nombre=$nombre";
    echo "<br>";
    echo "$nombre=".$nombre;
    echo "<br>Nombre=$nombre, Cantidad=$cantidad";
    echo '<br>Nombre='.$nombre.' Cantidad='.$cantidad;
    echo "<br>";
    echo $nombre." ".$cantidad;
    echo"<br>";
    echo"*-------------------------------------------------------------------------*";
    echo"<br>";
    echo <<<END
        Aqui escribo todo lo que quiera por cierto tu nombre es: $nombre
        <br>
        "hola", 'hola', "go' hola'"
        
        <table border=2>
            <tr>
                <td>celda1</td>
                <td>celda2</td>
            </tr>
            <tr>
                <td>celda3</td>
                <td>celda4</td>
            </tr>
        </table>
        END;

    //Sentencias
    echo"<br>*-------------------------------------------------------------------------*";
    echo "<br>SENTENCIAS";
    
    echo "<br>";
    $valor=0; //para php cualquier cosa que valga 0 es FALSE
    if($valor){
        echo "valor debe de ser true";
    }else{
        echo "valor debe de ser false";
    }

    echo "<br>";
    //Podemos usar AND || &&
    //Pasar datos con GET para formularios
   /* if(!isset($_GET['num1']) || !isset($_GET['num2'])){

       echo "<h3 class='text-danger>' >No pasaste parametros</h3>"; 
    }
    else{

    $num1=(int)$_GET['num1'];
    $num2=(int)$_GET['num2'];
    echo "<br>";
    
        if($num1<$num2){
            echo "$num2 > $num1";
        }else if($num1 > $num2){
            echo "$num1 > $num2";
        }else{
            echo "$num2 = $num1";
        }
    }*/

    if(!isset($_GET['nom'])){
        echo "No has pasado el parametro";
    }else{
        $nom=(string)$_GET['nom'];
        echo "Buenos días $nom";
    }


    
    ?>


</body>
</html>