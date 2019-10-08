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
        //Bluces For / While / Do While

        for($i = 1; $i<11; $i++){
            echo $i."<br>";
        }

        echo "<hr>";
        echo "Tabla con bucle for";
        echo "<table align='center' border=2px>";
            for($f=0; $f<5; $f++){
                echo"<tr align='center'>";
                for ($c=0; $c<6; $c++){
                    
                    if($f%2==0){
                        echo "<td bgcolor ='yellow'>Celda $f.$c</td>";
                    }else{
                        echo "<td>Celda $f.$c</td>";
                    }
                }
                echo "</tr>";
            }
       echo "</table>"; 
       
       

       echo "<hr>";
        echo "Tablero de Ajedrez con bucle for";
        echo "<table align='center' border=2px>";
            for($f=0; $f<8; $f++){
                echo"<tr align='center'>";
                for ($c=0; $c<8; $c++){
                    $suma = $f + $c;
                    if($suma%2==0){
                        echo "<td bgcolor ='grey'>Celda $f.$c</td>";
                    }else{
                        echo "<td>Celda $f.$c</td>";
                    }
                }
                echo "</tr>";
            }
       echo "</table>";    

    ?>
</body>
</html>