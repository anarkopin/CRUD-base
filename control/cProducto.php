<?php
 require_once "modelo/mProducto.php";
 
 class cProducto
 {
    private $obj_producto;

	function __construct()
	{
		$this->obj_producto = new mProducto();
	}

    function listar()
	{
		$data = $this->obj_producto->leerProductos();
		require_once 'vistas/header.php';
		require_once 'vistas/verProductos.php';
		require_once 'vistas/pie.php';
	}
	
	function guardar() 
	{
		$persona = [
			"Producto"=>$_REQUEST['txtProducto'],
			"Categoría"=>$_REQUEST['txtCategoria'],
			"Precio"=>$_REQUEST['txtPrecio'],
			"Stock"=>$_REQUEST['txtStock'],
		];

		$this->obj_producto->inserta($persona); //se llama al procedimiento de cProducto
		$this->listar();

	} //son los nombres de los name de los divs
	
	function eliminar()
	{
		$persona = [
            "Id"=>$_REQUEST['txtid'],
		];

		$this->obj_producto->Borrar($persona); //se llama al procedimiento de cProducto
		$this->listar();
	}


 }







 ?>








