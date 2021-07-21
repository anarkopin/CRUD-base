<?php
 require_once "modelo/mPersona.php";
 
 class cPersona
 {
    private $obj_persona;

	function __construct()
	{
		$this->obj_persona = new mPersona();
	}

    function listar()
	{
		$data = $this->obj_persona->leerPersonas();
		require_once 'vistas/header.php';
		require_once 'vistas/verPersonas.php';
		require_once 'vistas/pie.php';
	}	

	function guardar()
	{
		$persona = [
			"Nombres"=>$_REQUEST['txtNombres'],
			"Apellidos"=>$_REQUEST['txtApellidos'],
			"Correo"=>$_REQUEST['txtCorreo'],
		];
		$this->obj_persona->insertar($persona);
		$this->listar();
	}

	function eliminar()
	{
		$persona = [
            "Id"=>$_REQUEST['txtid'],
		];

		$this->obj_persona->Borrar($persona); //se llama al procedimiento de cProducto
		$this->listar();
	}




	

 }
?>