<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<?php

class Cita
{

 public function BuscarCita($idC)
		            {
					
					include('conexion.php');
					  session_start();
					
					      $IdC = $idC;
						  $this->identificacionC = $IdC;
						     
							 
							 $sql = "SELECT * FROM cita WHERE idC = '$this->identificacionC'";
							 if(!$resultado = $db->query($sql))
							      {
								       die ('no se pudo [' .$db->error. ']');
								  }
								  
						    while($row = $resultado->fetch_assoc())
							      {
								        $this->iid = stripslashes($row['id']);
										$this->iidC = stripslashes($row['idC']);
										$this->iidE = stripslashes($row['idE']);
										$this->ddia = stripslashes($row['dia']);
										$this->mmes = stripslashes($row['mes']);
										$this->aano = stripslashes($row['ano']);
										$this->hhora = stripslashes($row['hora']);
										$this->mminuto = stripslashes($row['minuto']);
										$this->cconsultorio = stripslashes($row['consultorio']);
								  }
							 
							/*
							echo $this->iid;
							echo "<br/>";
							echo $this->iidC;
							echo "<br/>";
							echo $this->iidE;
							echo "<br/>";
							echo $this->ddia;
							echo "<br/>";
							echo $this->mmes;
							echo "<br/>";
							echo $this->aano;
							echo "<br/>";
							echo $this->hhora;
							echo "<br/>";
							echo $this->mminuto;
							echo "<br/>";
							echo $this->cconsultorio;
							echo "<br/>";
							*/ 
							
							
							
							$_SESSION['idC'] = $this->iid;
							$_SESSION['idC'] = $this->iidC;
							$_SESSION['idE'] = $this->iidE;
							$_SESSION['dia'] = $this->ddia;
							$_SESSION['mes'] = $this->mmes;
							$_SESSION['ano'] = $this->aano;
							$_SESSION['hora'] = $this->hhora;
							$_SESSION['minuto'] = $this->mminuto;
							$_SESSION['consultorioC'] = $this->cconsultorio;
						
					}
					
					
}




$nuevo = new Cita();
$nuevo->BuscarCita($_POST['documento']);

header ('location: BuscarCita.php');

?>
</body>
</html>
