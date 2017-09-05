<?php
 session_start();
class Especialista
{


public function BuscarDatos($identificacion)
   {
   
   include('conexion.php');
  
   
   
      $Identificacion = $identificacion;
	  $this->identificacion = $Identificacion;
	  
	  $sql = "SELECT * FROM especialistas WHERE  identificacion = '$this->identificacion'";
if(!$resultado = $db->query($sql))
    {
	    die ('no se ha podido [' . $db->error. ']');
	}
while($row = $resultado->fetch_assoc())
    {
	   $this->iid=stripslashes($row["id"]);
	   $this->iidentificacion=stripslashes($row["identificacion"]);
       $this->nnombre=stripslashes($row["nombre"]);
       $this->aapellido=stripslashes($row["apellido"]);
       $this->ccorreo=stripslashes($row["correo"]);
       $this->ttelefono=stripslashes($row["telefono"]);
       $this->ppassword=stripslashes($row["contrasena"]);
	   
	}
	
	   $_SESSION['iid'] = $this->iid;
	   $_SESSION['iidentificacion'] = $this->iidentificacion;
	   $_SESSION['1nombre'] = $this->nnombre;
	   $_SESSION['1apellido'] = $this->aapellido;
	   $_SESSION['1correo'] = $this->ccorreo;
	   $_SESSION['1telefono'] = $this->ttelefono;
	   $_SESSION['1password'] = $this->ppassword;
	  
	  
	  /*
	  echo $_SESSION['iid'];
	  echo $_SESSION['iidentificacion'];
	  echo $_SESSION['1nombre'];
	  echo $_SESSION['1apellido'];
	  echo $_SESSION['1correo'];
	  echo $_SESSION['1telefono'];
	  echo $_SESSION['1password'];
	   
		*/
		
   }
}

$identificacion = 99;/*temporal mientras me pasan el login*/

$nuevo = new Especialista();
$nuevo->BuscarDatos($identificacion);
	header ('location: ActualizarDatosEspecialista.php');

?>
