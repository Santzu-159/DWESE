<?php
    class CochesVendidos extends Coches{
        private $fecha_venta;
        private $precio_venta;


        public function __construct($marca,$modelo,$matricula,$kms,$descuento,$fecha_venta,$precio_venta){
            parent::__construct($marca,$modelo,$matricula,$kms,$descuento);
            $this->fecha_venta=$fecha_venta;
            $this->precio_venta=$precio_venta/0.5;
        }


        /**
         * Get the value of fecha_venta
         */ 
        public function getFecha_venta()
        {
                return $this->fecha_venta;
        }

        /**
         * Set the value of fecha_venta
         *
         * @return  self
         */ 
        public function setFecha_venta($fecha_venta)
        {
                $this->fecha_venta = $fecha_venta;

                return $this;
        }

        /**
         * Get the value of precio_venta
         */ 
        public function getPrecio_venta()
        {
                return $this->precio_venta;
        }

        /**
         * Set the value of precio_venta
         *
         * @return  self
         */ 
        public function setPrecio_venta($precio_venta)
        {
                $this->precio_venta = $precio_venta;

                return $this;
        }

    }