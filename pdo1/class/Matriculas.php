<?php
    class Matriculas{
        private $al;
        private $modulo;
        private $notaFinal;
        private $conector;

        public function __construct(){
            $n=func_num_args();

            if($n==1){
                $this->conector=func_get_arg(0);
            }
            if($n==4){
                $this->conector=func_get_arg(0);
                $this->$al=func_get_arg(1);
                $this->$modulo=func_get_arg(2);
                $this->notaFinal=func_get_arg(3);

            }
        }

        //------------ CRUD
        //--------------------------------------------- create
        public function create(){}

        //--------------------------------------------- read
        public function read(){
            $consulta = "select al,modulo,nomAl,apeAl,nomMod,notaFinal from alumnos,modulos,matriculas where idAl=al AND modulo=idMod order by apeAl,nomMod";
            $stmt=$this->conector->prepare($consulta);
            try{
                $stmt->execute();

            }catch(PDOException $ex){
                die("Error al recuperar matriculas ".$ex);
            }

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        //--------------------------------------------- update
        public function update(){}

        //--------------------------------------------- delete
        public function delete(){
            $delete = "delete from matriculas where al=:a AND modulo=:m";
            $stmt=$this->conector->prepare($delete);
            try{
                $stmt->execute([
                    ":a"=>$this->al,
                    ":m"=>$this->modulo
                ]);
            }catch(PDOException $ex){
                die("No se ha podido dar de baja el alumno. ".$ex);
            }
        }

        //--------------------------- setters y getters y otros metodos

        /**
         * Get the value of al
         */ 
        public function getAl()
        {
                return $this->al;
        }

        /**
         * Set the value of al
         *
         * @return  self
         */ 
        public function setAl($al)
        {
                $this->al = $al;

                return $this;
        }

        
        /**
         * Get the value of notaFinal
         */ 
        public function getNotaFinal()
        {
                return $this->notaFinal;
        }

        /**
         * Set the value of notaFinal
         *
         * @return  self
         */ 
        public function setNotaFinal($notaFinal)
        {
                $this->notaFinal = $notaFinal;

                return $this;
        }

        /**
         * Get the value of conector
         */ 
        public function getConector()
        {
                return $this->conector;
        }

        /**
         * Set the value of conector
         *
         * @return  self
         */ 
        public function setConector($conector)
        {
                $this->conector = $conector;

                return $this;
        }

        /**
         * Get the value of modulo
         */ 
        public function getModulo()
        {
                return $this->modulo;
        }

        /**
         * Set the value of modulo
         *
         * @return  self
         */ 
        public function setModulo($modulo)
        {
                $this->modulo = $modulo;

                return $this;
        }
    }