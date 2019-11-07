<?php
class Coches{
    //los atributos que queramos public, protected, private

    public static $cont;
    public $id;
    public $matricula;
    private $modelo;
    private $marca;
    public $color;


    //metodos primero el constructor

    public function __construct(){ //dos barras bajas

        if(func_num_args()==1){ //funcion para saber cuantos arg se le pasan
            $this->matricula=func_get_arg(0);
        }

        self::$cont++; //contar coches

        //inicializar el id de cada coche
        $this->id=self::$cont; //para atributos estaticos a los que nos vamos a referir ponemos ::



    }

    //setter
    public function setModelo($m){
        $this->modelo=$m;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
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
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function mostrarCoche(){
        echo "<div class ='container text-center'>";
        echo "<b>Id: </b>".$this->id;
        echo "<br>";
        echo "<b>Marca: </b>".$this->marca;
        echo "<br>";
        echo "<b>Modelo: </b>".$this->modelo;
        echo "<br>";
        echo "<b>Color: </b>".$this->color;
        echo "<br>";
        echo "<b>Matricula: </b>".$this->matricula;
        echo "</div>";
    }
}