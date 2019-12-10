<?php

class Coches{

    private $conector;
    private $id;
    private $marca;
    private $modelo;
    private $color;
    private $kmts;

/*----------------------------------------------- CONSTRUCT -------------------------------------------------------*/


    function __construct(){

        $argumentos=func_num_args();

        if($argumentos > 5){
            die("Demasiados argumentos");
        }
        if($argumentos >= 1){
            $this->conector=func_get_arg(0);
        }
        if($argumentos >= 4){
            $this->marca = func_get_arg(1);
            $this->modelo = func_get_arg(2);
            $this->color = func_get_arg(3);
        }
        if($argumentos == 5){
            $this->kmts = func_get_arg(4);
        }
    }

/*----------------------------------------------- READ -------------------------------------------------------*/

public function read(){

    $consulta = "select * from coches order by marca,modelo";
    $stmt= $this->conector->prepare($consulta);

    try{
        $stmt->execute();

    }catch(PDOException $ex){
        die("No se han podido obtener los datos: ".$ex);
    }

    $coches = $stmt->fetchAll(PDO::FETCH_OBJ); //Devuelve todas las filas de la tabla como si fueran objetos
    return $coches;
}

/*----------------------------------------------- CREATE -------------------------------------------------------*/

public function create(){
    $consulta = "insert into coches(marca,modelo,color) values (:mar,:mo,:c)";
    $stmt = $this->conector->prepare($consulta);

    try{
        $stmt->execute([

            ':mar' => $this->marca,
            ':mo' => $this->modelo,
            ':c' => $this->color

        ]);
        

    }catch(PDOEXception $ex){
        die("No se pudo crear un coche nuevo ".$ex);
    }

}

/*----------------------------------------------- UPDATE -------------------------------------------------------*/

public function update(){
    $consulta = "update coches set marca = :mar, modelo = :mo, color = :c where id = :i ";
    $stmt = $this->conector->prepare($consulta);

    try{
        $stmt->execute([
           ':mar' => $this->marca,
           ':mo' => $this->modelo,
           ':c' => $this->color,
           ':i' => $this->id 
        ]);

    }catch(PDOException $ex){
        die("No se ha podido actualizar la informacion del coche ".$ex);
    }

}

/*----------------------------------------------- DELETE --------------------------------------------------------*/

public function delete(){

    $consulta = "delete from coches where id=:i";
    $stmt = $this->conector->prepare($consulta);

    try{
        $stmt -> execute([
            ':i' => $this->id
        ]);

    }catch(PDOException $ex){
        die("No se ha podido borrar el coche ".$ex);

    }

}


/*----------------------------------------------- GET COCHE --------------------------------------------------------*/


public function getCoche(){

    $consulta = "select * from coches where id = :i";
    $stmt= $this->conector->prepare($consulta);

    try{
        $stmt->execute([
            ':i' => $this->id
        ]);

    }catch(PDOException $ex){
        die("No se han podido obtener los datos: ".$ex);
    }

    $coche = $stmt->fetchAll(PDO::FETCH_OBJ); //Devuelve todas las filas de la tabla como si fueran objetos
    return $coche;

}

/*----------------------------------------------- GETTERS Y SETTERS ----------------------------------------------*/






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

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Set the value of kmts
     *
     * @return  self
     */ 
    public function setkmts($kmts)
    {
        $this->kmts = $kmts;

        return $this;
    }


}//FinCoches