<?php
require_once('modelo/mUsuario.php');

class cUsuario {
    private $musuario;

    public function __construct()
    {
        $this->musuario=new mUsuario();
    }
    
    public function Mostrar()
    {
       $datos = $this->musuario->leerUsuarios(); 
    }

    public function validar()
    {
        $usuario = $_REQUEST["txtusuario"];
        $clave = $_REQUEST["txtclave"];

        $_SESSION['error']="";
        $_SESSION['usuario']="";

        $d = $this->musuario->buscar($usuario,$clave);

        if ($d)
        {   
            $_SESSION['usuario'] = $usuario;
            require_once "vistas/header.php";
            require_once "vistas/inicio.php";
            require_once "vistas/pie.php";
        }
        else
        {   
        
            $_SESSION['error']="Usuario o contraseña incorrectos, vuelva a intentarlo. Gracias.";
            require_once "login.php";
        }

    }

    function listar() {

        $data = $this->musuario->leerUsuarios();
		require_once 'vistas/header.php';
		require_once 'vistas/verUsuarios.php';
		require_once 'vistas/pie.php';

    }

    function guardar() 
	{
		$persona = [
			"Usuario"=>$_REQUEST['txtUsuario'],
			"Clave"=>$_REQUEST['txtClave'],
		];

		$this->musuario->Insertar($persona); //se llama al procedimiento de cProducto
		$this->listar();

	}

    function Eliminar() 
	{
		$persona = [
            "Id"=>$_REQUEST['txtid'],
		];

		$this->musuario->Borrar($persona); //se llama al procedimiento de cProducto
		$this->listar();

	}

        
    




    public function cerrar()
    {
        session_start();
        session_destroy();
        require_once "login.php";
    }




}












