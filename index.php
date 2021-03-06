<?php
session_start();
require_once 'autoload.php';
require_once 'config/Conexion.php';
require_once 'config/parameters.php';
require_once 'helpers/Utils.php';
require_once 'includes/navbar.php';
require_once 'includes/sidebar.php';


function show_error(){

	$error = new errorController();
	$error->index();
}


if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';

}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	
}else{
	exit();
}


if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
	}
}else{
}
require_once 'includes/footer.php';