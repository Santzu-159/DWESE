<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dos</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 2</h4>
        <p class='text-center'>
        Imprime los valores del array asociativo siguiente usando la estructura de control foreach:<br>
            $v[1]=90;<br>
            $v[30]=7;<br>
            $v['e']=99;<br>
            $v['hola']=43;<br>
        </p>
        
        <?php
            
            $v[1]=90;
            $v[30]=7;
            $v['e']=99;
            $v['hola']=43;
            foreach($v as $key=>$value)	{
                echo $key." = ".$value."<br>".PHP_EOL;
            }

        ?>
    </div>
</body>
</html>