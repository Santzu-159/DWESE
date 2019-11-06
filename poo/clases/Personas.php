<?php
class Personas{

    private static $cantidad = 0;
    private $nombre;
    private $edad;
    private $mail;
    public $nick;

    public function __construct(){

        if(func_num_args()==1){
            $this->nombre=func_get_arg(0); // si nos pasan un argumento se asigna al atributo nombre
        }
        self::$cantidad++;
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
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($m = 'nomail@dom.es') //podemos poner un valor por defecto si no nos lo pasan.
    {
        $this->mail = $m;

        return $this;
    }

    /**
     * Get the value of cantidad
     */ 
    public function getCantidad()
    {
        return self::$cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */ 
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function mostrarPersona(){

        echo "<div class ='container text-center'>";
        echo "<b>Nick: </b>".$this->nick;
        echo "<br>";
        echo "<b>Nombre: </b>".$this->nombre;
        echo "<br>";
        echo "<b>Edad: </b>".$this->edad;
        echo "<br>";
        echo "<b>Mail: </b>".$this->mail;
        echo "<br>";
        echo "</div>";
        
    }
}