<?php
    namespace Src;
    class Usuarios{
        private $llave;
        private $id;
        private $nombre;
        private $direccion;
        private $mail;
        private $web;
        private $descripccion;


        public function __construct(){
            $n=func_num_args();
            if($n==1){
                $this->llave = func_get_arg(0);
            }
        }

        //Crud solo haremos el read

        public function read(){
            $consulta = "select * from usuarios order by nombre";
            $stmt=$this->llave->prepare($consulta);
            try{
                $stmt->execute();
            }catch (PDOException $ex){
                die("Error al recuperar los usuarios :'( <br>".$ex);
            }
            return $stmt;
        }
    }