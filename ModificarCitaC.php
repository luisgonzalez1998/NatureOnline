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

 
       public function ModificarCita($idC, $idE, $dia, $mes, $ano, $hora, $minuto, $consultorio)
	           {
			   
			   
			      if(isset($_POST['checkbox']))
				     { 
					 
				
			     
			   
			   include('conexion.php');
			           
					  
					   $IdC = $idC;
					   $this->idC = $IdC;
					   $IdE = $idE;
					   $this->idE = $IdE;
					  
					   
					   $Dia = $dia;
					   $this->dia = $Dia;
					   $Mes = $mes;
					   $this->mes = $Mes;
					   $Ano = $ano;
					   $this->ano = $Ano;
					   $Hora = $hora;
					   $this->hora = $Hora;
					   $Minuto = $minuto;
					   $this->minuto = $Minuto;
					   $Consultorio = $consultorio;
					   $this->consultorio = $Consultorio;
					   
					   
					   mysqli_query($db, " UPDATE cita SET idC = '$this->idC', idE = '$this->idE', dia = '$this->dia', mes = '$this->mes', ano = '$this->ano', hora = '$this->hora', minuto = '$this->minuto', consultorio = '$this->consultorio' WHERE idC = '$this->idC' ")
					   or die (mysqli_error($db));
					   
					 
					  
					  
					  	 }					   
			   }
			   	  
}

$nuevo = new Cita();
$nuevo->ModificarCita($_POST['documentoC'], $_POST['documentoE'], $_POST['dia'], $_POST['mes'], $_POST['ano'], $_POST['hora'], $_POST['minuto'],  $_POST['consultorio']);

 header ('location: BuscarCitas1C.php');

?>

</body>
</html>
