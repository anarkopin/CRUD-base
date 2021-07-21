<?php
    session_start();    

require_once("conexion/datos.php");

    if (isset($_REQUEST['c']))
    {
        $control = 'c'.$_REQUEST['c'];

        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'listar';

        require_once "control/$control.php";
        $controller = new $control;		    
        call_user_func(array($controller,$accion));
    }
    else
    {
        require_once "login.php";
    }
    hola hice un cambio automatico
    
?>
