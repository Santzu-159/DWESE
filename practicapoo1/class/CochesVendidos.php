<?php
    class CochesVendidos extends Coches{
        private $fecha_venta;
        private $precio_venta;


        public function __construct($marc,$mo,$mat,$klms,$pv,$fv){
            parent::__construct($marc,$mo,$mat,$klms,$pv);
            $this->fecha_venta=$fv;
            $this->precio_venta=$pv*(1-(parent::getDescuento()/100));
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

        public function __toString(){
                return "<div class='container mt-3' align='center'>
                <b>Marca: </b>".parent::getMarca()."<br>
                <b>Modelo: </b>".parent::getModelo()."<br>
                <b>Matricula: </b>".parent::getMatricula()."<br>
                <b>Kilómetros: </b>".parent::getkms()."<br>
                <b>Precio Inicial: </b>".parent::getPrecio()."<b>euros</b><br>
                <b>Precio Inicial: </b>{$this->precio_venta}<b>euros</b><br>
                <b>Precio Inicial: </b>{$this->fecha_venta}<b>euros</b>
                </div><br><hr><br>";
            }


    }