<?php
    class Conexion{

        private $conector;
        private $database;
        private $host;
        private $user;
        private $pass;
        private $dsn;


        function __construct(){
            $this->database= 'prueba27';
            $this->host= 'localhost';
            $this->user= 'prueba';
            $this->pass= 'secreto';
            $this->dsn="mysql:host={$this->host};dbname={$this->database};charset=utf8";

        }


        function getConector(){

            try{

              $this->conector = new PDO($this->dsn,$this->user,$this->pass); //Creamos un objeto PDO y lo guardamos en la variable conector
              $this->conector->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  

            }catch(PDOException $ex){

                die("Error al obtener el conector: ".$ex);

            }
            return $this->conector;
        }


    }