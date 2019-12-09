<?php
class Producto{

    private $conector;
    private $id; 
    private $nombre;
    private $precio;
    private $idFabricante;

    public function __construct(){
        $num=func_num_args();
        if($num==4){
            $this->nombre=func_get_arg(1);
            $this->precio=func_get_arg(2);
            $this->idFabricante=func_get_arg(3);
        }
        if($num>=1){
            $this->conector=func_get_arg(0);
        }
        
    }

    public function read(){
        $consulta="select * from producto order by nombre, precio";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar productos ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }
    public function create(){
        $consulta="insert into producto(nombre,precio,codigo_fabricante) values(:n,:p,:iF)";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':p'=>$this->precio,
                ':iF'=>$this->idFabricante
            ]);
        }catch(PDOException $ex){
            die("Error al crear producto ".$ex);
        }
    }
    public function update(){
        $consulta="update producto set nombre=:n, precio=:p, codigo_fabricante=:iF where codigo=:i";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':p'=>$this->precio,
                ':iF'=>$this->idFabricante,
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar producto ".$ex);
        }
    }
    public function delete(){
        $consulta="delete from producto where codigo=:i";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al eliminar producto ".$ex);
        }
    }


 
    public function guardarProducto($idFabricante){
        $consulta="select * from producto where codigo_fabricante=:i order by nombre, precio";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':i'=>$idFabricante
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar productos ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }


    public function getProducto(){
        $q="select * from producto where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar producto ".$ex);
        }
        $prod=$stmt->fetch(PDO::FETCH_OBJ);
        return $prod;
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

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of idFabricante
     */ 
    public function getIdFabricante()
    {
        return $this->idFabricante;
    }

    /**
     * Set the value of idFabricante
     *
     * @return  self
     */ 
    public function setIdFabricante($idFabricante)
    {
        $this->idFabricante = $idFabricante;

        return $this;
    }


}//finclase




