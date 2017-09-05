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

  
 public function BuscarHistorial($identificacion)
  {
     include('conexion.php');
	  

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
   $this->iid=stripslashes($row['id']);
   $this->iidC=stripslashes($row['idC']);
   $this->iidE=stripslashes($row['idE']);
   $this->mmotivo=stripslashes($row['motivo']);
   $this->eenfermedad=stripslashes($row['enfermedad']);
   $this->aalergia=stripslashes($row['alergias']);
   $this->nnota=stripslashes($row['nota']);
								 }
								 
					
								      $_SESSION['2iiid']=$this->iid;
									  $_SESSION['2idC']=$this->iidC;
									  $_SESSION['2idE']=$this->iidE;
									  $_SESSION['2motivo']=$this->mmotivo;
									  $_SESSION['2enfermedad']=$this->eenfermedad;
									  $_SESSION['2alergia']=$this->aalergia;
									  $_SESSION['2nota']=$this->nnota;
									  
									 
							  
							  
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

 	 	
        $_SESSION['2id']=$this->iid;
		$_SESSION['2documento']=$this->ddocumento;
		$_SESSION['2nombre']=$this->nnombre;
		$_SESSION['2apellido']=$this->aapellido;
		$_SESSION['2genero']=$this->ggenero;
		$_SESSION['2edad']=$this->eedad;
		$_SESSION['2telefono']=$this->ttelefono;
		$_SESSION['2correo']=$this->ccorreo;
		$_SESSION['2direccion']=$this->ddireccion;

         /*subconsulta*/
		 
		                            
									  
									  
									  
									   /*subconsulta*/
		 

		 
		   $sql1 ="SELECT * FROM especialistas WHERE identificacion='$this->iidE'";
		   if(!$resultado1 = $db->query($sql1))
		   {
		      die ('paila [' .$db->error . ']');
		   }
		      
			   while($row1 = $resultado1->fetch_assoc())
			   {
			     $this->iiid=stripslashes($row1["id"]);
				 $this->iidentificacion=stripslashes($row1["identificacion"]);
				 $this->nnnombre=stripslashes($row1["nombre"]);
				 $this->aaapellido=stripslashes($row1["apellido"]);
				 $this->cccorreo=stripslashes($row1["correo"]);
				 $this->tttelefono=stripslashes($row1["telefono"]);
			   }
			   
	
	   
	    $_SESSION['2iid']=$this->iiid;
		$_SESSION['2identificacion']=$this->iidentificacion;
		$_SESSION['2nnombre']=$this->nnnombre;
		$_SESSION['2aapellido']=$this->aaapellido;
		$_SESSION['2ccorreo']=$this->cccorreo;
		$_SESSION['2ttelefono']=$this->tttelefono;
		
		
		                            
								
			   

	   
	   /*subconsulta*/
					  
	}	

}
	
	
	

$nuevo= new Especialista();
$nuevo->BuscarHistorial($_SESSION['idC']);

/*$nuevo->CrearHistirial($_POST['identificacion'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['genero'], $_POST['edad'], $_POST['correo'], $_POST['direccion'], $_POST['documentoE'], $_POST['nombreE'], $_POST['apellidoE'], $_POST['telefonoE'], $_POST['correoE'], $_POST['motivo'], $_POST['enfermedad'], $_POST['alergia'], $_POST['nota']);*/
header ('location: HistorialActualizar.php');









?>








</body>
</html>
