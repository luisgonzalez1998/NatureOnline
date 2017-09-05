  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<?php


$idE =$_POST['documentoE'];
echo "$idE";
$idC =$_POST['documentoC'];
echo "$idC";

$consultorio =$_POST['consultorio'];
echo "$consultorio";

class Cita
{
        public function GenerarCita($id, $documentoC, $documentoE, $dia, $mes, $ano, $hora, $minuto, $consultorio)
		      {
			  
			  include('conexion.php');
			    session_start();
			  
			        $Id = $id;
					$this->id = $Id;
					$DocumentoC = $documentoC;
					$this->documentoC = $DocumentoC;
					$DocumentoE = $documentoE;
					$this->documentoE = $DocumentoE;
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
					
					mysqli_query($db, "INSERT INTO cita (id, idC, idE, dia, mes, ano, hora, minuto, consultorio) VALUES (NULL, '$this->documentoC', '$this->documentoE', '$this->dia',  '$this->mes', '$this->ano', '$this->hora', '$this->minuto', '$this->consultorio')")
					or die (mysqli_error($db));
	
			  }
			  
			     /*   $_SESSION['idC'] = $this->id;
					$_SESSION['idCL'] = $this->documentoC;
					$_SESSION['idE'] = $this->documentoE;
					$_SESSION['fechaC'] = $this->fecha;
					$_SESSION['horaC'] = $this->hora;
					$_SESSION['consultorioC'] = $this->consultorio;
			  
			  	  */ 
      
}

$id = "";


                  

$nuevo = new Cita();
$nuevo->GenerarCita($id, $_POST['documentoC'], $_POST['documentoE'], $_POST['dia'], $_POST['mes'], $_POST['ano'], $_POST['hora'], $_POST['minuto'], $_POST['consultorio']);
header('location: CrearCita.php');

?>
</body>
</html>
