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

  
  public function BuscarHistorial($identificacion)
  {
     include('conexion.php');
	  session_start();
	  
	  
	   $documento=$identificacion;
	   $this->documento=$documento;
	   
	   
	   
	    /*subconsulta*/
							  

							  $sql= "SELECT * FROM historial WHERE idC='$this->documento'";
							  if(!$resultado = $db->query($sql))
							     {
								     die ('no se pudo [' .$db->error. ']');
								 }
								 
							while($row = $resultado->fetch_assoc())
							     {
								     $this->Hiid=stripslashes($row['id']);
									 $this->iidC=stripslashes($row['idC']);
									 $this->iidE=stripslashes($row['idE']);
									 $this->mmotivo=stripslashes($row['motivo']);
									 $this->eenfermedad=stripslashes($row['enfermedad']);
									 $this->aalergia=stripslashes($row['alergias']);
									 $this->nnota=stripslashes($row['nota']);
								 }
								 
					
								      $_SESSION['iiid']=$this->Hiid;
									  $_SESSION['idC']=$this->iidC;
									  $_SESSION['idE']=$this->iidE;
									  $_SESSION['motivo']=$this->mmotivo;
									  $_SESSION['enfermedad']=$this->eenfermedad;
									  $_SESSION['alergia']=$this->aalergia;
									  $_SESSION['nota']=$this->nnota;
									  
									  echo $_SESSION['iiid'];
									  echo "<br/>";
									  echo $_SESSION['idC'];
									  echo "<br/>";
									  echo $_SESSION['idE'];
									  echo "<br/>";
									  echo $_SESSION['motivo'];
									  echo "<br/>";
									  echo $_SESSION['enfermedad'];
									  echo "<br/>";
									  echo $_SESSION['alergia'];
									  echo "<br/>";
									  echo $_SESSION['nota'];
									  echo "<br/>";
							  
							  
							  /*subconsulta*/
							  
							  
 $sql1 ="SELECT * FROM usuarios WHERE documento = '$this->iidC'";
if (!$resultado = $db->query($sql1))
{
   die('no se pudo perrioto [' . $db->error. ']');
}

while ($row1 =$resultado->fetch_assoc())
{
   $this->iid=stripslashes($row1["id"]);
   $this->ddocumento=stripslashes($row1["documento"]);
   $this->nnombre=stripslashes($row1["nombre"]);
   $this->aapellido=stripslashes($row1["apellido"]);
   $this->ggenero=stripslashes($row1["genero"]);
   $this->eedad=stripslashes($row1["edad"]);
   $this->ttelefono=stripslashes($row1["telefono"]);
   $this->ccorreo=stripslashes($row1["correo"]);
   $this->ddireccion=stripslashes($row1["direccion"]);
}

 	 	
        $_SESSION['id']=$this->iid;
		/*$_SESSION['documento']=$this->ddocumento;*/
		$_SESSION['nombre']=$this->nnombre;
		$_SESSION['apellido']=$this->aapellido;
		$_SESSION['genero']=$this->ggenero;
		$_SESSION['edad']=$this->eedad;
		$_SESSION['telefono']=$this->ttelefono;
		$_SESSION['correo']=$this->ccorreo;
		$_SESSION['direccion']=$this->ddireccion;

         /*subconsulta*/
		 
		                              echo $_SESSION['id'];
									  echo "<br/>";
									  echo $_SESSION['documento'];
									  echo "<br/>";
									  echo $_SESSION['nombre'];
									  echo "<br/>";
									  echo $_SESSION['apellido'];
									  echo "<br/>";
									  echo $_SESSION['genero'];
									  echo "<br/>";
									  echo $_SESSION['edad'];
									  echo "<br/>";
									  echo $_SESSION['telefono'];
									  echo "<br/>";
									  echo $_SESSION['correo'];
									  echo "<br/>";
									  echo $_SESSION['direccion'];
									  echo "<br/>";
									  
									  
									  
									   /*subconsulta*/
		 

		 
		   $sql2 ="SELECT * FROM especialistas WHERE identificacion='$this->iidE'";
		   if(!$resultado2 = $db->query($sql2))
		   {
		      die ('paila [' .$db->error . ']');
		   }
		      
			   while($row2 = $resultado2->fetch_assoc())
			   {
			     $this->iiid=stripslashes($row2["id"]);
				 $this->iidentificacion=stripslashes($row2["identificacion"]);
				 $this->nnnombre=stripslashes($row2["nombre"]);
				 $this->aaapellido=stripslashes($row2["apellido"]);
				 $this->cccorreo=stripslashes($row2["correo"]);
				 $this->tttelefono=stripslashes($row2["telefono"]);
			   }
			   
	
	   
	    $_SESSION['iid']=$this->iiid;
		$_SESSION['identificacion']=$this->iidentificacion;
		$_SESSION['nnombre']=$this->nnnombre;
		$_SESSION['aapellido']=$this->aaapellido;
		$_SESSION['ccorreo']=$this->cccorreo;
		$_SESSION['ttelefono']=$this->tttelefono;
		
		
		                              echo $_SESSION['iid'];
									  echo "<br/>";
									  echo $_SESSION['identificacion'];
									  echo "<br/>";
									  echo $_SESSION['nnombre'];
									  echo "<br/>";
									  echo $_SESSION['aapellido'];
									  echo "<br/>";
									  echo $_SESSION['ccorreo'];
									  echo "<br/>";
									  echo $_SESSION['ttelefono'];
									  echo "<br/>";
								
			   

	   
	   /*subconsulta*/
					  
	}	

}
	
	
	echo $_POST['identificacion'];

$nuevo= new Especialista();
$nuevo->BuscarHistorial($_POST['identificacion']);

/*$nuevo->CrearHistirial($_POST['identificacion'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['genero'], $_POST['edad'], $_POST['correo'], $_POST['direccion'], $_POST['documentoE'], $_POST['nombreE'], $_POST['apellidoE'], $_POST['telefonoE'], $_POST['correoE'], $_POST['motivo'], $_POST['enfermedad'], $_POST['alergia'], $_POST['nota']);*/
header ('location: HistorialConsultar.php');









?>








</body>
</html>
