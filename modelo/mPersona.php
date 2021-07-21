<?php
    class mPersona
    {
        private $conex;
        private $persona;

        public function __construct()
        {
            $this->conex = Conectar::ConectaDATA();
            $this->persona = array();
        }

        public function leerPersonas()
        {
            $datos = $this->conex->query("SELECT * FROM persona");
            while ($fila=$datos->fetch_assoc())
            {
                $this->persona[]=$fila;
            }
            return $this->persona;
        }

       

        public function Insertar($datos)
        {
            $intSQL=$this->conex->prepare("INSERT INTO persona(Nombres,Apellidos,Correo) VALUES(?,?,?)");
            $intSQL->bind_param("sss",$nomb,$apel,$correo);
            $nomb=$datos['Nombres'];
            $apel=$datos['Apellidos'];
            $correo=$datos['Correo'];
            $intSQL->execute();
            $intSQL->close();    
        }

        public function Buscar($id)
        {
            //Select
        }

        public function Borrar($id)
        {
            $intSQL=$this->conex->prepare("DELETE FROM persona WHERE Id=? ");
            $intSQL->bind_param("i",$ide); //indica el tipo la primera cadena

            $ide=$id['Id'];

            $intSQL->execute();
            $intSQL->close();  
        }

        public function Actualizar($Datos)
        {
            //Update
        }
        
    }
        

?>