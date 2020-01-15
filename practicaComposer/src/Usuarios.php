<?php

namespace Src;
require '../vendor/autoload.php';
use PDOException;
use PDO;
use Faker\Factory;

class Usuarios{
    private $llave;
    private $id;
    private $nombre;
    private $fNacimiento;

    public function __construct(){
        $n=func_num_args();
        if($n==1){
            $this->llave=func_get_arg(0);
        }
    }
    //Crud solo haremos el read
    public function read(){
        $c="select * from fechas order by nombre";
        $stmt=$this->llave->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error!!! ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }
    public function create(){
        $i = "insert into fechas(nombre, fNacimiento) values(:n, :f)";
        $stmt=$this->llave->prepare($i);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':f'=>$this->fNacimiento
            ]);
        }catch(PDOException $ex){
            die("Error!!! ".$ex);
        }
    }
    //---------------------------------------------------------------
    public function rellenar(){
        
       $this->fNacimiento = date('Y/m/d');
       $this->nombre = "Luis";
       $this->create();
    }


    public function getUsuario($id){
        $c="select * from fechas where id=:i";
        $stmt=$this->llave->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar la fecha: ".$ex);
        }
        $fecha=$stmt->fetch(PDO::FETCH_OBJ);
        return $fecha;
    }
   
}