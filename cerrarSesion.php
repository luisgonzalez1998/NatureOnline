<?php 
	session_start();
	$_SESSION['estadoUsuario'] = 0;
	header("location: registro.php");
?>