<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link href="styles/css/mystylo.css" rel="stylesheet">
	<script src="styles/js/jquery-3.3.1.min.js"></script>
	<script src="styles/js/bootstrap.min.js"></script>
    <title>Mi página Web</title>
</head>
<body>
 <div class="container">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Web Sistemas</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="?c=inicio">Inicio</a></li>
        <li><a href="?c=Persona&a=listar">Personas</a></li>
        <li><a href="?c=Producto&a=listar">Productos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="?c=Usuario&a=listar"><span class="glyphicon glyphicon-user"></span>Usuarios</a></li>
        <li><a href="?c=Usuario&a=cerrar"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-ok"></span><?php echo $_SESSION["usuario"] ?></a></li>
        </ul>
    </div>
    </nav>
