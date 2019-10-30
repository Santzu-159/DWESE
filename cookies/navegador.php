<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class='container mt-4 ml-3'>
    <?php
        if(isset($_GET['dir'])){
            //hemos pasado por get el dir
            $dir=$_GET['dir'];

        }else{
            $dir = getcwd();// nos devuelve la ruta del directorio.

            //si estamos en windos hay que tunearlo
            //quitarle letra de unidad c:, e:, etc y cambiar \ por /
            //if(isset($_SERVER['WINDIR])) true si estamos en windows
        }
        
        if(!$punt=opendir($dir)){ //$punt --> puntero

            echo "<p class ='text-danger'> No se pudo abrir el directorio.</p>";
            die();
        }
        echo "<h3><b>Directorio: </b><font class='text-success'>$dir</font></h3>\n";
        echo "<div class='container mt-3' style='font-size:1.2em'>";
        

        while(($fichero=readdir($punt))!==false){
           
           if($fichero==".") continue;  
           $ficheros[]=$fichero; 
           
        }
        //lo ordenamos para que me los muestre ordenados solo si queremos
        sort($ficheros);
        foreach($ficheros  as $k=>$v){
            if(es_Directorio($dir, $v)){
                ponenlace($dir,$v);
            }
            else{
                echo "<img src='/icons/generic.gif'>".$v."<br>\n";
            }
        }
        
        echo "</div>";

        function ponEnlace($dir,$nuevoDir){
            if($nuevoDir == '..'){
                echo "<img src='/icons/back.gif'><a href='".$_SERVER['PHP_SELF']."' style='text-decoration:none'>
                <p style='font-size:1.7em; display:inline;'>..</p></a>";
            }

        }

        function es_Directorio($dir, $fich){
            if($dir=='/'){
                $dir1="/$fich";
                //Si estoy en el raiz añado a $fich la barra /
            }else{
                $dir1="$dir/$fich";
                //Si estoy en otro sitio añado la ruta
            }
            return is_dir($dir1);
        }

    ?>
    </div>  
</body>
</html>