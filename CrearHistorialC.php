<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>


<?php

session_start();

  class Especialista
    {
	    public function CrearHistorial($identificacion)
		    {
			
			include('conexion.php');
			
			
			
			      $Identificacion = $identificacion;
				  $this->identificacion = $Identificacion;
				  			
		     $sql = "SELECT * FROM usuarios WHERE id = '$this->identificacion'";
			     if(!$resultado = $db->query($sql))
				    {
					   die ('no se pudo conectar [' .$db->error. ']');
					}
				while($row = $resultado->fetch_assoc())
				   {
				        $this->iid=stripslashes($row["id"]);
                        $this->nnombre=stripslashes($row["nombre"]);
                        $this->aapellido=stripslashes($row["apellido"]);
                        $this->ggenero=stripslashes($row["genero"]);
                        $this->eedad=stripslashes($row["edad"]);
                        $this->ttelefono=stripslashes($row["telefono"]);
                        $this->ccorreo=stripslashes($row["correo"]);
                        $this->ddireccion=stripslashes($row["direccion"]);
						$this->hhistorial=stripslashes($row["historial"]);
				   }
				    
				      
					   $_SESSION['a1'] = $this->iid;
					   $_SESSION['a2'] = $this->nnombre;
					   $_SESSION['a3'] = $this->aapellido;
					   $_SESSION['a4'] = $this->ggenero;
					   $_SESSION['a5'] = $this->eedad;
					   $_SESSION['a6'] = $this->ttelefono;
					   $_SESSION['a7'] = $this->ccorreo;
					   $_SESSION['a8'] = $this->ddireccion;
					   $_SESSION['a9'] = $this->hhistorial;
					   
					   
				   
				   
				   $this->id = 99; 
				   $sql1 = "SELECT * FROM especialistas WHERE id = '$this->id'";
				      if(!$resultado1 = $db->query($sql1))
					      {
						      die ('paila [' .$db->error. ']');
						  }
						while($row1 = $resultado1->fetch_assoc())
						  {
						     $this->iiid=stripslashes($row1["id"]);
				             $this->nnnombre=stripslashes($row1["nombre"]);
				             $this->aaapellido=stripslashes($row1["apellido"]);
				             $this->cccorreo=stripslashes($row1["correo"]);
				             $this->tttelefono=stripslashes($row1["telefono"]);
						  }
						    
							 $_SESSION['a10'] = $this->iiid;
							 $_SESSION['a11'] = $this->nnnombre;
							 $_SESSION['a12'] = $this->aaapellido;
							 $_SESSION['a13'] = $this->cccorreo;
							 $_SESSION['a14'] = $this->tttelefono;

           }
						
     }
			
			
	
	
	
$nuevo = new Especialista();
$nuevo->CrearHistorial($_POST['identificacion']);
 header ('location: CrearHistorial.php');

?>




</body>
</html>
