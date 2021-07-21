<?php
    class mUsuario
    {
        private $conex;
        private $usuario;

        public function __construct()
        {
            $this->conex = Conectar::ConectaDATA();
            $this->usuario = array();
        }

        public function leerUsuarios()
        {
            $datos = $this->conex->query("SELECT * FROM usuario");
            while ($fila=$datos->fetch_assoc())
            {
                $this->usuario[]=$fila;
            }
            return $this->usuario;
        }

        public function buscar($usuario,$clave)
        {
            $consulta = $this->conex->query("SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave'");
            $nfila=$consulta->num_rows;
            if ($nfila!=0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function Insertar($datos)
        {
            $intSQL=$this->conex->prepare("INSERT INTO usuario(Usuario,Clave) VALUES(?,?)");
            $intSQL->bind_param("ss",$usu,$cla); //indica el tipo la primera cadena

            $usu=$datos['Usuario'];
            $cla=$datos['Clave'];

            $intSQL->execute();
            $intSQL->close();    
        }

        public function Borrar($id)
        {
            $intSQL=$this->conex->prepare("DELETE FROM usuario WHERE Id=? ");
            $intSQL->bind_param("i",$ide); //indica el tipo la primera cadena

            $ide=$id['Id'];

            $intSQL->execute();
            $intSQL->close();    
        }

        public function Actualizar($datos)
        {
            //Update
        }
        
    }
        

?>