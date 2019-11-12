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

        $arrayMarca=['Ford','Seat','BMW','Audi','Ferrari','Lamborghini','Land Rover','Renault','Mercedes-Benz','Jeep'];
        $arrayModelo=['SD34F','LJ5TF','A3MLD4','2FG53D','234FR4','HY789F','57GJD9','94VJ7','CJHD79N','JCUF764'];
        $arrayMatricula=['1234-ADC','4567-DEF','7890-GHI','4321-JKL','7654-MNO','0987-PQR','3578-SRT','6598-UVW','4512-XYZ','7658-HUF'];
        

       for ($i=0;$i<=9;$i++){
           $coch[$i]=new Coches($arrayMarca[rand(0,9)],$arrayModelo[rand(0,9)],$arrayMatricula[rand(0,9)],rand(0,400000),rand(0,1000000));
            //$coch[$i]= new Coches('Ford','Mustang GT','1234-ADC',rand(0,400000),rand(0,1000000));

            if($coch[$i]->getMatricula()==null){ 
                unset($coch[$i]);
                break;
            }
        }
        
        echo "<div class='p-3 mb-2 bg-success text-white text-center'><h4>Inventario total de coches:<br></h4></div>";
        for ($i=0;$i<count($coch);$i++){
            echo $coch[$i];
        }

            
        function venderCoche($matricula,&$coch){
            $cocheV;
            for($i=0;$i<count($coch);$i++){
                //echo $coch[$i]->getMatricula();
                if($coch[$i]->getMatricula()==$matricula){

                    $cocheV= new CochesVendidos($coch[$i]->getMarca(),$coch[$i]->getModelo(),$coch[$i]->getMatricula(),$coch[$i]->getKms(),$coch[$i]->getPrecio(),date("Y/m/d"));
                    unset($coch[$i]);

                    return $cocheV;
                }

            }
            echo "<div class='p-3 mb-2 bg-danger text-white text-center'><h4>La matricula del coche a vender no existe.<br></h4></div>";
            return null;
        }

        $cocheVendido=venderCoche($arrayMatricula[rand(0,9)],$coch);
       
        if($cocheVendido!=null){
            echo "<div class='p-3 mb-2 bg-warning text-dark text-center'><u><b><h2>El coche vendido es: </h2></b></u><br>".$cocheVendido."</div>";
        }


    ?>
</body>
</html>