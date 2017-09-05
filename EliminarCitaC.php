<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>



<?php

session_start();

class Cita
{

          public function EliminarCita($idC)
		          {
				  
				  include('conexion.php');
				        $Id = $idC;
						$this->id = $Id;
						
						 mysqli_query($db, "DELETE FROM `cita` WHERE `idC` = '$this->id'");
						 
						 echo "datos eliminados corectamente";
						echo $this->id;
						
						
						    $_SESSION['idC'] = 0;
							$_SESSION['idC'] = 0;
							$_SESSION['idE'] = 0;
							$_SESSION['dia'] = 0;
							$_SESSION['mes'] = 0;
							$_SESSION['ano'] = 0;
							$_SESSION['hora'] = 0;
							$_SESSION['minuto'] = 0;
							$_SESSION['consultorioC'] = 0;
							
							
							
							
							
						   $_SESSION['2idC'] = 0;
						   $_SESSION['2idCC'] = 0;
						   $_SESSION['2idEC'] = 0;
						   $_SESSION['2dia'] = 0;
						   $_SESSION['2mes'] = 0;
						   $_SESSION['2ano'] = 0;
						   $_SESSION['2hora'] = 0;
						   $_SESSION['2minuto'] = 0;
						   $_SESSION['2consultorio'] = 0;
				  }
				  
				  
				 

}

$nuevo = new Cita();
$nuevo->EliminarCita($_POST['idC']);
  header('location: CrearCita.php');

?>


</body>
</html>
