	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosEspecialistaHistorial.css" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php

class Especialista
{
   public function ActualizarDatos($identificacion, $nombre, $apellido, $telefono, $correo, $contrasena)
   {
   
   include('conexion.php');
   
   
       $Identificacion = $identificacion;
	   $this->identificacion = $Identificacion;
	   $Nombre = $nombre;
	   $this->nombre = $Nombre;
	   $Apellido = $apellido;
	   $this->apellido = $Apellido;
	   $Telefono = $telefono;
	   $this->telefono = $Telefono;
	   $Correo = $correo;
	   $this->correo = $Correo;
	   $Contrasena = $contrasena;
	   $this->contrasena = $Contrasena;
	   
	   mysqli_query($db, "UPDATE especialistas SET identificacion = '$this->identificacion', nombre = '$this->nombre', apellido = '$this->apellido', telefono = '$this->telefono', correo = '$this->correo', contrasena = '$this->contrasena' WHERE identificacion = '$this->identificacion'")
	   or die (mysqli_error($db));
	   
	   
	   
	  $_SESSION['iid'] = $this->identificacion; 
      $_SESSION['nnombre']= $this->nombre;
      $_SESSION['aapellido']= $this->apellido;
      $_SESSION['ttelefono']= $this->telefono;
      $_SESSION['ccorreo']= $this->correo;
      $_SESSION['password']= $this->contrasena;
	 
	 
	  echo $_SESSION['iid'];
	  echo $_SESSION['nnombre'];
	  echo $_SESSION['aapellido'];
	  echo $_SESSION['ttelefono'];
	  echo $_SESSION['ccorreo'];
	  echo $_SESSION['password'];
	  
	   
   }

}

echo $_POST['identificacion'];
echo $_POST['nombre'];
echo $_POST['apellido'];
echo $_POST['telefono'];
echo $_POST['correo'];
echo $_POST['contrasena'];

$nuevo = new Especialista();
$nuevo->ActualizarDatos($_POST['identificacion'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo'], $_POST['contrasena']);

	header ('location: BuscarDatosC.php');

?>

</body>
</html>
