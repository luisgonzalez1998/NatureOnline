<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosRegistro.css">
<link rel="stylesheet" href="EstilosBuscarcita.css">
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


<?php
session_start(); 


$idC =$_SESSION['idC'];
$idCC =$_SESSION['idC'];
$idE =  $_SESSION['idE'];
$dia = $_SESSION['dia'];
$mes = $_SESSION['mes'];
$ano = $_SESSION['ano'];
$hora = $_SESSION['hora'];
$minuto = $_SESSION['minuto'];
$consultorio = $_SESSION['consultorioC'];


$hhora = $hora.":".$minuto;
$ffecha = $dia."/".$mes."/".$ano;

 $_SESSION['hora'] = $hhora;
 $_SESSION['fecha'] = $ffecha;
 




?>



<body>


<div class="baner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<iframe src="Menu1.php" width="1450" height="100" scrolling="no" frameborder="0"></iframe>

<iframe src="silider.html"  width="1300" height="380" scrolling="no" frameborder="0"></iframe>



<div class="campo">

		

		

<div class="campo1">
<p class="asigL">Cita Medica.</p>

<p class="datos1L">Datos de la cita.</p>

<form id="form1" name="form1" method="post" action="GenerarCitaC.php">

		  <p class="documentoL">Documento del usuario:</p>
		  <input type="text" name="documentoC" class="documento" value="<?php echo $idCC ;?>" readonly />
	  		  
		 	  
		 
		 <p class="documentoEL">Documento especialista:</p>
		 <input type="text" name="documentoE" class="documentoE" value="<?php echo $idE ;?>" readonly   />
		 
		 <p class="fecha01L">Fecha Actual de la cita</p>
		  <input type="text" name="fecha" class="fecha" value="<?php echo $ffecha ;?>" readonly   />
		  
		   <p class="hora01L">Hora Actual de la cita</p>
		  <input type="text" name="hora" class="hora01" value="<?php echo $hhora ;?>" readonly   />
		 

	
		
		
				  
				  		  <p class="consultorioL">Consultorio.</p>
		<input type="text" name="consultorio" class="consultorio" value="<?php echo $consultorio ;?>" readonly  />
		
		<div class="lineacrear"></div>
				  
				  		 
</form>
     
</div>

   
		

<div class="campo5">

     <div class="salir"><a href="CrearCita.php"> <p class="salirL"><u>Salir.</p></u></a></div>
	 <img src="img_iconocerrar.jpg" class="img2" />

         <a href="BuscarCitas1C.php"> <p class="modificarL"><u>Modificar Cita.</u></p></a>
		 
	<div class="eliminar">
	 <p class="eliminar0L">¿Deseas eliminar la cita?</p>
		<form name="form8" method="post" action="EliminarCitaC.php">
		    <input type="text" name="idC" class="identificacionCliente" value="<?php echo $idCC ; ?>" />
			<button class="boton boton1" >Eliminar</button>
			
		</form>
		
	</div>	




</div>



<div class="campo22">
<?php
include('footer.html');
?>
</div>

<div class="campo23">

<?php
include('BusquedaEspecialista.php');
?>

</div>

<iframe src=""  width="1300" height="500" scrolling="no" frameborder="0"></iframe>

  </div>
  
 

  
  
  
  </body>
</html>
  
  
  
  
  
  
  
  
  
  
  
  
  

    

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

    
