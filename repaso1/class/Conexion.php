<?php
    class Conexion{
        private $conector;
        private $user;
        private $pass;
        private $base;
        private $host;
        private $dsn;

        public function __construct(){
            $this->user="prueba";
            $this->base="prueba27";
            $this->host="localhost";
            $this->pass="password";
            $this->dsn="mysql:host={$this->host};dbname={$this->base};charset=utf8";
        }

        public function getConector(){
            try {
                $this->conector=new PDO($this->dsn, $this->user, $this->pass);
                $this->conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                die("Error en la conexion a la base de datos!!".$ex);
            }  
            return $this->conector;
        }

    }