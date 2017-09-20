<?php

include('Usuario.php');

$usuario = new usuario();
$usuario->ingresarUsuario($_POST['documento'],$_POST['contrasena']);


?>