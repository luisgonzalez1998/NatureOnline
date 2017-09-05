<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosEspecialistaHistorial.css" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
session_start();

class Especialista
{


public function ActualizarDatosHistorial($iidentificacion , $documentoE , $motivo , $enfermedad , $alergia , $nota)
	   {
	   
	   include('conexion.php');
	   	 
	   
	     $Identificacion = $iidentificacion;
		 $this->identificacion = $Identificacion;
		 $DocumentoE = $documentoE;
		 $this->documentoE = $DocumentoE;
		 $Motivo = $motivo;
		 $this->motivo = $Motivo;
		 $Enfermedad = $enfermedad;
		 $this->enfermedad = $Enfermedad;
		 $Alergia = $alergia;
		 $this->alergia = $Alergia;
		 $Nota = $nota;
		 $this->nota = $Nota;
		 
		 		 mysqli_query($db, "UPDATE historial SET idC = '$this->identificacion', idE = '$this->documentoE',  motivo = '$this->motivo', enfermedad = '$this->enfermedad', alergias = '$this->alergia', nota = '$this->nota'  WHERE idC = '$this->identificacion'")
		 or die (mysqli_error($db));
		 
		 /*      echo  $this->identificacion;
			   echo  $this->nombre;
			   echo  $this->apellido;
			   echo  $this->telefono;
			   echo  $this->genero;
			   echo  $this->edad;
			   echo  $this->correo;
			   echo  $this->direccion;
			   echo  $this->documentoE;
			   echo  $this->nombreE;
			   echo  $this->apellidoE;
			   echo  $this->telefonoE;
			   echo  $this->correoE;
			   echo  $this->motivo;
			   echo  $this->enfermedad;
			   echo  $this->alergia;
			   echo  $this->nota;
			   
		 */


	   }
	   
	   
	 


  
  }

echo $_POST['iidentificacion'];
echo "<br/>";
echo $_POST['documentoE'];
echo "<br/>";
echo $_POST['motivo'];
echo "<br/>";
echo $_POST['enfermedad'];
echo "<br/>";
echo $_POST['alergia'];
echo "<br/>";
echo $_POST['nota'];
echo "<br/>";


$nuevo= new Especialista();
/*$nuevo->BuscarHistorial($_SESSION['idC']);*/
$nuevo->ActualizarDatosHistorial($_POST['iidentificacion'], $_POST['documentoE'], $_POST['motivo'], $_POST['enfermedad'], $_POST['alergia'], $_POST['nota'] );
	
 header ('location: BuscarC1.php');









?>








</body>
</html>
