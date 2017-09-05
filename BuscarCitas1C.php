<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php


session_start();


echo $_SESSION['idC'];

class Cita
{
			   
			   
		public function BuscarCita($idC)
		       {
			   
			   include('conexion.php');
			 
			   
			          $IdC = $idC;
					  $this->idC = $IdC;
					  
					  
					   $sql = " SELECT * FROM cita WHERE idC = '$this->idC'";
					   if(!$resultado = $db->query($sql))
					       {
						         die ('no se pudo [' .$db->error. ']');
						   }
					   while($row = $resultado->fetch_assoc())
					       {
                                $this->id = stripslashes($row['id']);
								$this->idC = stripslashes($row['idC']);
								$this->idE = stripslashes($row['idE']);
								$this->ddia = stripslashes($row['dia']);
								$this->mmes = stripslashes($row['mes']);
								$this->aano = stripslashes($row['ano']);
								$this->hhora = stripslashes($row['hora']);
								$this->mminuto = stripslashes($row['minuto']);
								$this->consultorio = stripslashes($row['consultorio']);
 						   }
						   
						   
						   $_SESSION['2idC'] = $this->id;
						   $_SESSION['2idCC'] = $this->idC;
						   $_SESSION['2idEC'] = $this->idE;
						   $_SESSION['2dia'] = $this->ddia;
						   $_SESSION['2mes'] = $this->mmes;
						   $_SESSION['2ano'] = $this->aano;
						   $_SESSION['2hora'] = $this->hhora;
						   $_SESSION['2minuto'] = $this->mminuto;
						   $_SESSION['2consultorio'] = $this->consultorio;
						   
						   echo  $_SESSION['2idC'] ;
						   echo  $_SESSION['2idCC'] ;
						   echo  $_SESSION['2idEC'] ;
						   echo  $_SESSION['2dia'] ;
						   echo  $_SESSION['2mes'] ;
						   echo  $_SESSION['2ano'] ;
						   echo  $_SESSION['2hora'] ;
						   echo  $_SESSION['2minuto'] ;
						   echo  $_SESSION['2consultorio'] ;
						   
			   }
			   
			   
			   	  
}




$nuevo = new Cita();
$nuevo->BuscarCita($_SESSION['idC']);
 header ('location: ModificarCita.php');

?>

</body>
</html>
