<?php
class Modulos{
private $idMod;
private $nomMod;
private $horasSem;
private $conector;

public function __construct(){

    $num=func_num_args();
    if($num==1){
        $this->conector=func_get_arg(0);
    }
    if($num == 3){
        $this->conector=func_get_arg(0);
        $this->nomMod=func_get_arg(1);
        $this->horasSem=func_get_arg(2);
    }
}

//-------------------- create
public function create(){
    $create="insert into modulos(nomMod,horasSem) values (:n,:h)";
    $stmt=$this->conector->prepare($create);
    try{
        $stmt->execute([
        ':n'=>$this->nomMod,
        ':h' =>$this->horasSem
        ]);   
    }catch(PDOException $ex){
        die("Error al crear el Módulo ".$ex);
    }

}

//------------------- update

public function update(){



}

//------------------- read
public function read(){

    $consulta= "select * from modulos order by nomMod";
    $stmt=$this->conector->prepare($consulta);

    try{
        $stmt->execute();

    }catch (PDOException $ex){
        die('Error al recuperar los modulos '.$ex);
    }
        $modulos=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $modulos;
}

//------------------- delete

public function delete(){

    $borrar="delete from modulos where idMod=:i";
    $stmt=$this->conector->prepare($borrar);
    try{
        $stmt->execute([

            ":i"=>$this->idMod
        ]);

    }catch(PDOException $ex){
        die("Error al borrar modulo: ".$ex);
    }

}

//----------------- getters y setters




/**
 * Set the value of idMod
 *
 * @return  self
 */ 
public function setIdMod($idMod)
{
$this->idMod = $idMod;

return $this;
}

/**
 * Set the value of nomMod
 *
 * @return  self
 */ 
public function setNomMod($nomMod)
{
$this->nomMod = $nomMod;

return $this;
}

/**
 * Get the value of horasSem
 */ 
public function getHorasSem()
{
return $this->horasSem;
}

/**
 * Set the value of horasSem
 *
 * @return  self
 */ 
public function setHorasSem($horasSem)
{
$this->horasSem = $horasSem;

return $this;
}

/**
 * Set the value of conector
 *
 * @return  self
 */ 
public function setConector($conector)
{
$this->conector = $conector;

return $this;
}
}//fin clase