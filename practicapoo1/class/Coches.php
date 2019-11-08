<?php

    class Coches{
        private $marca;
        private $modelo;
        private $matricula;
        private $kms;
        private $precio;
        private static $descuento = 5;
        static $cant=0;
        public $interruptor;

        public function comprobarMatricula($matricula){

                if(preg_match('/\d{4}-[A-Z]{3}/',$matricula)){
                        $interruptor=true;
                }else{
                        $interruptor=false;
                }
                return $interruptor;
        }

        function __construct($marc,$mo,$mat,$klms,$p){
             if($this->comprobarMatricula($mat)){   
                self::$cant++;
                $this->marca =$marc;
                $this->modelo =$mo;
                $this->matricula = $mat;
                $this->kms=$klms;
                $this->precio=$p;
             }else{
                     echo "<div class='container mt-3 text-center bg-danger'>
                     <b>ERROR --> </b> La matricula debe de tener el siguiente formato: nnnn-lll</div>";
             }    
        }

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
                return $this->marca;
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
         * Get the value of modelo
         */ 
        public function getModelo()
        {
                return $this->modelo;
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
         * Get the value of matricula
         */ 
        public function getMatricula()
        {
                return $this->matricula;
        }

        /**
         * Set the value of matricula
         *
         * @return  self
         */ 
        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

                return $this;
        }

        

        /**
         * Get the value of kms
         */ 
        public function getKms()
        {
                return $this->kms;
        }

        /**
         * Set the value of kms
         *
         * @return  self
         */ 
        public function setKms($kms)
        {
                $this->kms = $kms;

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
         * Get the value of descuento
         */ 
        public function getDescuento()
        {
                return $this->descuento;
        }

        /**
         * Set the value of descuento
         *
         * @return  self
         */ 
        public function setDescuento($descuento)
        {
                $this->descuento = $descuento;

                return $this;
        }


        public function __toString(){
            return "<div class='container mt-3' align='center'>
            <b>Marca: </b>{$this->marca}<br>
            <b>Modelo: </b>{$this->modelo}<br>
            <b>Matricula: </b>{$this->matricula}<br>
            <b>Kilómetros: </b>{$this->kms}<br>
            <b>Precio: </b>{$this->precio} <b>euros</b></div><br><hr><br>";
        }

        
    }