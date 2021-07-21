<?php
    class mProducto
    {
        private $conex;
        private $producto;

        public function __construct()
        {
            $this->conex = Conectar::ConectaDATA();
            $this->producto = array();
        }

        public function leerProductos () 
        {
            $datos = $this->conex->query("SELECT * FROM productos");
            while ($fila=$datos->fetch_assoc())
            {
                $this->producto[]=$fila;
            }
            return $this->producto;


        }

        public function inserta($Datos) 
        {
            $intSQL=$this->conex->prepare("INSERT INTO productos(Producto,Categoría,Precio,Stock) VALUES(?,?,?,?)");
            $intSQL->bind_param("ssii",$prod,$cat,$pre,$stock); //indica el tipo la primera cadena

            $prod=$datos['Producto'];
            $cat=$datos['Categoría'];
            $pre=$datos['Precio'];
            $stock=$datos['Stock'];

            $intSQL->execute();
            $intSQL->close();    

        }

        public function Borrar($id) 
        {
            $intSQL=$this->conex->prepare("DELETE FROM productos WHERE Id=? ");
            $intSQL->bind_param("i",$ide); //indica el tipo la primera cadena

            $ide=$id['Id'];

            $intSQL->execute();
            $intSQL->close();  
        }

        public function actualizar() 
        {
            //
        }
    }

?>