<?php
	include('usuario.php');
	session_start();
	
	$usuario = new usuario();
	$usuario->ActualizarDatos($_POST['nombresC'], $_POST['appellidosC'], $_POST['telefonoC'], $_POST['correo'], $_POST['edad'],$_SESSION['Usuario']);

?>