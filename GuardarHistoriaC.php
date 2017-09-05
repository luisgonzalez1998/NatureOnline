<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>



<?php 


class Especialista
{
          public function GuardarHistorial($id, $motivo, $enfermedad, $alergia, $nota)
		        {
				  include('conexion.php');
				  
				       $Id = $id;
					   $this->id = $Id;
				       
					   $Motivo = $motivo;
					   $this->motivo = $Motivo;
					   $Enfermedad = $enfermedad;
					   $this->enfermedad = $Enfermedad;
					   $Alergia = $alergia;
					   $this->alergia = $Alergia;
					   $Nota = $nota;
					   $this->nota = $Nota;
					   
					   
					        mysqli_query($db, "INSERT INTO historial (id, motivo, enfermedad, alergias, nota) VALUES ('$this->id', '$this->motivo', '$this->enfermedad', '$this->alergia', '$this->nota')")
							or die (mysqli_error($db));
					   
					   

			
 				}
				
			

}

$id = $_POST['id'];
$motivo = $_POST['motivo'];
$enfermedad = $_POST['enfermedad'];
$alergia = $_POST['alergia'];
$nota = $_POST['nota'];

echo "$id";
echo "<br/>"; 
echo "$motivo";
echo "<br/>";
echo "$enfermedad";
echo "<br/>";
echo "$alergia";
echo "<br/>";
echo "$nota";
echo "<br/>";


$nuevo= new Especialista();
$nuevo->GuardarHistorial($_POST['id'], $_POST['motivo'], $_POST['enfermedad'], $_POST['alergia'], $_POST['nota']);

?>


<body>
</body>
</html>
