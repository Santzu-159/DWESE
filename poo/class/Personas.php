<?php
    class Personas{
        static $cant=0;
        protected $nombre;
        private $edad;
        public $mail;

        //------------------------------------------

        public function __construct($n,$e,$m){
            self::$cant++;
            if(func_num_args()==3){
                $this->nombre = func_get_arg(0);
                $this->edad = func_get_arg(1);
                $this->mail = func_get_arg(2);
            }
        }

        //----------------- Getters y Setters  -----------------------------


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

/*

        // -------------------------  Metodo Mágico  __GET ---------------------------
        public function __get($p){

            if(property_exists($this,$p)){
                //return $this->$p;
                //return "<b>Acceso Denegado.</b> Esta propiedad es privada.<br>";
                return $this->$p;
            }
            return "La propiedad <b>p</b>, no existe en esta clase.<br>";
        }



        // -------------------------  Metodo Mágico  __SET ---------------------------
        public function __set($p,$v){

            if(property_exists($this,$p)){

                $this->$p=$v; //instanciamos
            }
            return "El atributo $p no existe.";
        }


*/

        // -------------------------  Metodo Mágico  __toString ---------------------------
        public function __toString(){

            return "{$this->nombre}, {$this->edad}, {$this->mail}";

        }

    }