<?php
class Fabricante{
    private $conector;
    private $id; 
    private $nombre;

    
    public function __construct(){

        $num=func_num_args();
    
       
       if($num == 1){
        $this->conector=func_get_arg(0);
       }

       if($num == 2){
        $this->conector=func_get_arg(0);
        $this->nombre=func_get_arg(1);
   }
    
    }
   

    public function read(){ 
        $consulta="select * from fabricante order by nombre";
        $stmt = $this->conector->prepare($consulta);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar fabricantes ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }
    public function create(){
        $consulta="insert into fabricante(nombre) values(:n)";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':n'=>$this->nombre
            ]);
        }catch(PDOException $ex){
            die("Error al crear el fabricante ".$ex);
        }
    }
    public function update(){ 
        $consulta="update fabricante set nombre=:n where codigo=:i";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar fabricante ".$ex);
        }
    }
    public function delete(){  
        $consulta="delete from fabricante where codigo=:i";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar fabricante ".$ex);
        }
    }

    public function getFabricante(){
        $q="select * from fabricante where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar fabricante ".$ex);
        }
        $fabr=$stmt->fetch(PDO::FETCH_OBJ);
        return $fabr;
    }
  

    /**
     * Get the value of conector
     */ 
    public function getConector()
    {
        return $this->conector;
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

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}//finclase