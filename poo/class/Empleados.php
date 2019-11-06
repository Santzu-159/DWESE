<?php
    class Empleados extends Personas{
        private $puesto;
        private $sueldo;


        public function __construct($n,$e,$m,$p,$s){
            parent::__construct($n,$e,$m); //es como el super en java -- llamamos al constructor de Personas
            $this->puesto=$p;
            $this->sueldo=$s;

        }

        //=====================================================================


        public function __toString(){
            return parent::__toString().", {$this->puesto}, {$this->sueldo}"; //llamamos al toString de Personas

        }


        /**
         * Get the value of puesto
         */ 
        public function getPuesto()
        {
                return $this->puesto;
        }

        /**
         * Set the value of puesto
         *
         * @return  self
         */ 
        public function setPuesto($puesto)
        {
                $this->puesto = $puesto;

                return $this;
        }

        /**
         * Get the value of sueldo
         */ 
        public function getSueldo()
        {
                return $this->sueldo;
        }

        /**
         * Set the value of sueldo
         *
         * @return  self
         */ 
        public function setSueldo($sueldo)
        {
                $this->sueldo = $sueldo;

                return $this;
        }

        //Vamos a sobreescribir algunos métodos

        //el setNombre (nombre es protected)
        public function setNombre($n){
            $this->nombre = "Empleado: $n";
        }

        //el setEdad (edad es private)
        public function setEdad($edad){
            parent::setEdad("$edad años"); //tenemos que heredar ya que edad es private
        }

        public function isJefe(){
            return $this->puesto=='Jefe';
        }

    }
