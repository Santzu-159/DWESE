<?php

//$array=[1,2,3,4,5]


echo contar();

echo contar1();

    function contar(){
        static $contar;
        $contar++;
        return $contar;
    }
    function contar1(){
        $contar;
        $contar++;
        return $contar;
    }
    
    ?>