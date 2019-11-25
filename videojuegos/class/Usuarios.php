<?php 
    class Usuarios{
        private $conector;
        private $nombre;
        private $pass;
        private $perfil;


        public function __construct(){
            $num=func_num_args();
                if($num==1){
                    $this->conector=func_get_arg(0);
                }
                if($num==3){
                    $this->conector=func_get_arg(0);
                    $this->nombre=func_get_arg(1);
                    $this->pass=func_get_arg(2);
                }
        }//Fin constructor
        

        //---------------------------- METODOS CRUD

        public function create(){
            $i="insert into usuarios(nombre,pass) values(:n,:p)";
            $stmt=$this->conector->prepare($i);
            try{
                $stmt->execute([
                    ':n'=>$this->nombre,
                    ':p'=>$this->pass
                ]);

            }catch(PDOException $ex){
                die("Error al crear el usuario;");
            }
        }

        public function read(){

        }

        public function update(){

        }

        public function delete(){

        }


        //--------------------------------- GETTERS Y SETTERS

        public function setNombre($n){
            $this->nombre=$n;
        }
        public function setPass($p){
            $this->pass=$p;
        }

        public function setPerfil($p){
            $this->perfil=$p;
        }


        //-------------------------------- FUNCION EXISTE USUARIO

        public function existeUser($n){
            $c="select * from usuarios where nombre=:n";
            $stmt=$this->conector->prepare($c);

            try{
                $stmt->execute([
                    ":n"=>$n
                ]);
            }catch(PDOException $ex){
                die("Error al comprobar el usuario."+$ex);
            }//fin trycatch
            $cont=0;

            while($fila=$stmt->fetch()){
                $cont++;
            }//fin while

            return !($cont==0);

        }//fin existeUser

        
        //-------------------------------------------- DEVOLVER PERFIL (devuelve -1 si no lo encuentra)
        public function isOk(){
            $c="select * from usuarios where nombre=:n AND pass=:p";
            $stmt = $this->conector->prepare($c);
            try{
                $stmt->execute([
                    ":n"=>$this->nombre,
                    ":p"=>$this->pass
                ]);
            }catch(PDOException $ex){
                die("Error al validar ".$ex);
            }
            $perfil=-1;
            while($fila=$stmt->fetch(PDO::FETCH_ASSOC)){
                $perfil=$fila['perfil'];
            }
            return $perfil;
        }



    }//FIN CLASS