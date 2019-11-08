<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <?php
        require('class/Coches.php');
        require('class/CochesVendidos.php');
        $coch=[];

       for ($i=0;$i<=9;$i++){
            $coch[$i]= new Coches('Ford','Mustang GT','1234-ADC',rand(0,400000),rand(0,1000000));

            if($coch[$i]->getMatricula()==null){ 
                unset($coch[$i]);
                break;
            }
        }
        
            for ($i=0;$i<count($coch);$i++){
                echo $coch[$i];
            }

            
        function venderCoche($matricula,&$coch){
            $cocheV;

            for($i=0;$i<count($coch);$i++){
                if($coch[$i]->getMatricula()==$matricula){

                    $cocheV= new CochesVendidos($coch[$i]->getMarca(),$coch[$i]->getModelo(),$coch[$i]->getMatricula(),$coch[$i]->getKms(),$coch[$i]->getPrecio(),date("Y/m/d"));
                    unset($coch[$i]);

                    return $cocheV;
                }

            }
            echo "La matricula no existe.";
            return null;
        }

        $cocheVendido=venderCoche('1234-ADC',$coch);
       
        if($cocheVendido!=null){
            echo "El coche vendido es: <br>".$cocheVendido;
        }
    ?>
</body>
</html>