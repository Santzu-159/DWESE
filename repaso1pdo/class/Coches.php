<?php
    class Coches{
        private $llave;
        private $id;
        private $marca;
        private $modelo;
        private $color;
        private $kmts;

        public function __construct(){
            $num=func_num_args();
            if ($num==1) {
                $this->llave=func_get_arg(0);
            }
        }

        //-----------CRUD-------------
        public function create(){

        }

        public function read(){
            $query="select * from coches order by marca, modelo";
            $stmt=$this->llave->prepare($query);
            try {
                $stmt->execute();
            } catch (PDOException $ex) {
                die("Error al obtener los coches de la base de datos!!".$ex);
            }

            $registros=$stmt->fetchAll(PDO::FETCH_OBJ);
            return $registros;

        }


        public function update(){

        }

        public function delete(){
            $query = "delete from coches where id=:i";
            $stmt=$this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":i"=>$this->id
                ]);
            } catch (PDOException $ex) {
                die("Error al borrar el coche de la BBDD!!".$ex);
            }
        }

        //-------------------

        public function setMarca($m){
            $this->marca=$m;
        }

        public function setModelo($m){
            $this->modelo=$m;
        }

        public function setColor($c){
            $this->color=$c;
        }

        public function setKmts($k){
            $this->kmts=$k;
        }

        public function setId($i){
            $this->id=$i;
        }


    }