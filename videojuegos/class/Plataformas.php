<?php
    class Plataformas{

        private $conector;
        private $id;
        private $nombre;
        private $imagen;

        public function __construct(){
            $num=func_num_args();

            if($num==1){
                $this->conector=func_get_arg(0);
            }

            if($num==2){
                $this->conector=func_get_arg(0);
                $this->nombre=func_get_arg(1);
                $this->imagen='recursos/img/consola.jpeg';
            }

            if($num==3){
                $this->conector=func_get_arg(0);
                $this->nombre=func_get_arg(1);
                $this->imagen=func_get_arg(2);
            }
        }

        //------------------------------------- CRUD

        public function create(){
            $i="insert into plataformas(nombre, imagen) values(:n,:i)";
            $stmt=$this->conector->prepare($i);
            try{

                $stmt->execute([
                    ':n'=>$this->nombre,
                    ':i'=>$this->imagen
                ]);
            }catch(PDOException $ex){
                die("Error al crear la plataforma. "+$ex);
            }

        }

        public function read(){

            $c="select * from plataformas order by nombre";
            $stmt=$this->conector->prepare($c);
            try{
                $stmt->execute();

            }catch(PDOExceotion $ex){
                die(" Error al recuperar las plataformas: "+$ex);
            }
            $plataformas =$stmt->fetchAll(PDO::FETCH_OBJ);
            return $plataformas;
        }

        public function update(){

        }

        public function delete(){

        }

        //---------------------------------------------- SETTERS

        public function setId($i){
            $this->id=$i;
        }

        public function setNombre($n){
            $this->nombre=$n;
        }

        public function setImagen($im){
            $this->imagen=$im;
        }
    }