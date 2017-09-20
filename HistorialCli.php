<?php
include('Usuario.php');
if(isset($_POST['his']))
{
	$usuario = new usuario();
	%usuario->mostrarHistorial(($_POST['IdC'], $_POST['motivo'], $_POST['enfermedad'], $_POST['alergias'], $_POST['nota']));
	
	
}

?>