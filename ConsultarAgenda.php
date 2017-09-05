<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosRegistro.css">

<link rel="stylesheet" href="EstilosEspecialistaHistorial.css" />
<link rel="stylesheet" href="EstilosConsultarAgenda.css" />
 <link rel="stylesheet" href="xd.css"/>	
  <link rel="stylesheet" href="Style.css"/>	
  
  

<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Times New Roman", Times, serif;
	left: 0px;
	top: -50px;
	font-size: 80px;
	color: #FFFFFF;
	position: absolute;
}
-->
</style>
</head>
<div class="social-bar">
    <a href="https://www.facebook.com/tostaocafeypan/" class="icon icon-facebook" target="_blank"></a>
    <a href="https://twitter.com/tostaocafeypan/" class="icon icon-twitter" target="_blank"></a>
	<a href="https://www.instagram.com/tostaocafeypan/" class="icon icon-instagram" target="_blank"></a>
		     
</div>
<style>
body{
background:url(palo.jpg);
float:left;
height:200px;
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;

}
</style>
<body>

















<div class="baner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
<iframe src="Menu1.php" width="1450" height="100" scrolling="no" frameborder="0"></iframe>

<iframe src="silider.html"  width="1300" height="380" scrolling="no" frameborder="0"></iframe>

<div class="campo3">



<div class="campo4">

<?php


class Cita
{
        public function ConsultarAgenda($cumplio)
		     {
			 
			 include('conexion.php');
			 
			 
			      $Cumplio = $cumplio;
				  $this->cumplio= $Cumplio;
				  
				
				    
					$sql = "SELECT * FROM cita WHERE cumplio = '$this->cumplio' ";
					if (!$resultado = $db->query($sql))
					       {
						        die('no se pudo['  .$db->error. ']');
						   }
						   					
					while($row = $resultado->fetch_assoc())
					     {
						     
							 
						     $this->iid=stripslashes($row['id']);
							 $this->iidC=stripslashes($row['idC']);
							 $this->iidE =stripslashes($row['idE']);
							 $this->ddia =stripslashes($row['dia']);
							 $this->mmes =stripslashes($row['mes']);
							 $this->aano =stripslashes($row['ano']);
							 $this->hhora =stripslashes($row['hora']);
							 $this->mminuto =stripslashes($row['minuto']);
							 $this->cconsultorio =stripslashes($row['consultorio']);
							 $this->ccumplio =stripslashes($row['cumplio']);
							 
							 
							 
							  /*subconsulta*/
						   
						   
				               $sql1 ="SELECT * FROM usuarios WHERE documento = '$this->iidC'";
					             if (!$resultado1 = $db->query($sql1))
					                    {
										     die('no se pudo[' .$db->error. ']');
										}
								 while($row1 = $resultado1->fetch_assoc())
								        {
										     
										     $this->ddocumento = stripslashes($row1['documento']);
											 $this->nnombre = stripslashes($row1['nombre']);
											 $this->aapellido = stripslashes($row1['apellido']);
											 $this->ttelefono = stripslashes($row1['telefono']);
											 $this->ccorreo = stripslashes($row1['correo']);
											 $this->hhistorial = stripslashes($row1['historial']);
											 
											 
											 
											
 										}
										
										
							/*subconsulta*/
							
							 $fecha = $this->ddia."/".$this->mmes."/".$this->aano; 
							 $hora = $this->hhora.":".$this->mminuto;
							
							
							
							               echo "<div class=cita1>";
										     
											     /**/echo "<p class=w18>"; echo "<u>Cita Numero  #"; echo $this->iid; echo "</p></u>";
												 

                           						/**/ echo "<p class=w10>"; echo "<u>Id</u>"; echo "</p>";
												 echo "<p class=w1>"; echo $this->iidC; echo "</p>";
                           						/* echo "<p class=w2>"; echo $this->iidE; echo "</p>";*/
												/**/echo "<p class=w11>"; echo "Hora:"; echo "</p>";
                           						echo "<p class=w3>"; echo $hora; echo "</p>";
												/**/echo "<p class=w12>"; echo "Fecha:"; echo "</p>";
                          					     echo "<p class=w4>"; echo $fecha; echo "</p>";
												/* echo "<p class=nombre5>"; echo $this->ddocumento; echo "</p>";*/
												/**/echo "<p class=w13>"; echo "<u>Nombre</u>"; echo "</p>";
                           						 echo "<p class=w5>"; echo $this->nnombre; echo "</p>";
												 /**/echo "<p class=w14>"; echo "<u>Apellido</u>"; echo "</p>";
                           						 echo "<p class=w6>"; echo $this->aapellido; echo "</p>";
												 /**/echo "<p class=w15>"; echo "<u>Telefono</u>"; echo "</p>";
                          					     echo "<p class=w7>"; echo $this->ttelefono; echo "</p>";
												 /*echo "<p class=w16>"; echo "<u>Correo Electronico</u>"; echo "</p>";*/
												 /*echo "<p class=w8>"; echo $this->ccorreo; echo "</p>";*/
												 /*echo "<p class=w17>"; echo "Historial"; echo "</p>";*/
												 /*echo "<p class=w9>"; echo $this->hhistorial; echo "</p>";*/

                                                  echo "<img src=img_foto4.jpg class=foto88 />";
												  
                                            echo "</div>";

				
							 							 						 
						 }
						 
						 
						    
						 
						  
							
							           
						 
						 
						 
						 
			 }
}

$cumplio = 0;

$nuevo = new Cita();
$nuevo->ConsultarAgenda($cumplio);


?>

</div>

		







<div class="campo5"></div>
<div class="campo6"></div>

<div class="campo7">
<?php 
include('footer.html');
?>
</div>


<div class="campo8">

<?php
include('BusquedaEspecialista.php');
?>

</div>



<iframe src=""  width="1300" height="500" scrolling="no" frameborder="0"></iframe>

  </div>
  
  </div>



  
  
  
  </body>

</html>
  
  
  