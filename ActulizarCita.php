<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosRegistro.css">
<link rel="stylesheet" href="EstilosEspecialista.css">
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


/*datos del especialista

$iid=$_SESSION['iid'];
$nnombre=$_SESSION['nnombre'];
$aapellido=$_SESSION['aapellido'];
$ttelefono=$_SESSION['ttelefono'];
$ccorreo=$_SESSION['ccorreo'];
*/


?>



<body>


<div class="baner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<iframe src="Menup.php" width="1450" height="100" scrolling="no" frameborder="0"></iframe>

<iframe src="silider.html"  width="1300" height="380" scrolling="no" frameborder="0"></iframe>



<div class="campo">

		

<div class="campo1">
<p class="asigL">Asignar cita.</p>
<form id="form1" name="form1" method="post" action="ModificarCitaC.php">

		  <p class="documentoL">Documento:</p>
		  <input type="text" name="documentoC" class="documento" />
	  		  
		  <div class="linea"></div> 		  
		 <p class="datosEL">Datos del especialista.</p>
		 <p class="nombreEL">documento:</p>
		 <input type="text" name="documentoE" class="nombree"  />
		 
		<div class="linea1"></div>
		<div class="linea2"></div>
		
		<p class="datos1L">Datos de la cita.</p>
		
		<p class="fechaL">Fecha de la cita:</p>
		<input type="date" name="fecha" class="fecha" />
		<p class="horaL" >Hora:</p>
		<input type="time" name="hora" class="hora" />
		<p class="consultorioL">Consultorio.</p>
		<input type="text" name="consultorio" class="consultorio" />
		
		<div class="linea3"></div>
		 
		  
		  
		 <button class="boton boton1" > hola mundo</button>
		    
		  
		
 </form>        
    

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
  
  
  
  
  
  
  
  
  
  
  
  
  

    

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

    
