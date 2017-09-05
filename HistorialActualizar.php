<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="EstilosRegistro.css">

<link rel="stylesheet" href="EstilosEspecialistaHistorial.css" />
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

<?php

include('conexion.php');
 session_start();
 
$id=$_SESSION['2idC'];
$nombre=$_SESSION['2nombre'];
$apellido=$_SESSION['2apellido'];
$genero=$_SESSION['2genero'];
$edad=$_SESSION['2edad'];
$telefono=$_SESSION['2telefono'];
$correo=$_SESSION['2correo'];
$direccion=$_SESSION['2direccion'];

/*datos del especialista*/





$iid=$_SESSION['2idE'];
$nnombre=$_SESSION['2nnombre'];
$aapellido=$_SESSION['2aapellido'];
$ttelefono=$_SESSION['2ttelefono'];
$ccorreo=$_SESSION['2ccorreo'];


$iiid= $_SESSION['2iiid'];
$motivo=$_SESSION['2motivo'];
$enfermedad=$_SESSION['2enfermedad'];
$alergia=$_SESSION['2alergia'];
$nota=$_SESSION['2nota'];

   

?>








<div class="baner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
<iframe src="Menu1.php" width="1450" height="100" scrolling="no" frameborder="0"></iframe>

<iframe src="silider.html"  width="1300" height="380" scrolling="no" frameborder="0"></iframe>

<div class="campo3">

		

<div class="campo4">
<p class="historiaL">Historia Clinica.</p>

<p class="dato">Datos personales.</p>
<div class="linea"></div>
<img src="img_fotoP.jpg" class="foto1" /> 

<form id="form2" name="form2" method="post" action="ActualizarHistorialC.php">
      <p class="identificacionL">Identificacion.</p>
         <input type="text" name="iidentificacion" class="identificacion" value="<?php echo"$id"; ?>" readonly />
     <p class="nombreL1">Nombre.</p>
         <input type="text" name="nombre" class="nombre1" value="<?php echo"$nombre"; ?>" readonly />
	 <p class="apellidoL1">Apellido.</p>
	     <input type="text" name="apellido" class="apellido1" value="<?php echo"$apellido"; ?>" readonly />
	 <p class="telefonoL">Telefono.</p>
	     <input type="text" name="telefono" class="telefono" value="<?php echo"$telefono"; ?>" readonly />
	 <p class="generoL">Genero.</p>
	     <input type="text" name="genero" class="genero" value="<?php echo"$genero"; ?>" readonly />
	 <p class="edadL">Edad.</p>
	     <input type="text" name="edad" class="edad" value="<?php echo"$edad"; ?>" readonly />
	 <p class="correo1L">Correo.</p>
	     <input tipe="text" name="correo" class="correo1" value="<?php echo"$correo"; ?>" readonly />
     <p class="direccion1L">Direccion.</p>
	     <input type="text" name="direccion" class="direccion1" value="<?php echo"$direccion"; ?>" readonly  />

     <div class="linea2"></div>
	 
	 <p class="datoEL">Datos del especialista.</p>
	 <div class="linea3"></div>
	 
	 
	 <p class="documentoEL">Documento.</p>
	    <input type="text" name="documentoE" class="documentoE" value="<?php echo"$iid"; ?>" readonly />
	 <p class="nombreEL">Nombre.</p>
	    <input type="text" name="nombreE" class="nombreE" value="<?php echo"$nnombre"; ?>" readonly />
	<p class="apellidoEL">Apellido.</p>
	    <input type="text" name="apellidoE" class="apellidoE" value="<?php echo"$aapellido"; ?>" readonly />
	<p class="telefonoEL">Telefono.</p>
	    <input type="text" name="telefonoE" class="telefonoE" value="<?php echo"$ttelefono"; ?>" readonly />
	<p class="correoEL">Correo especialista.</p>
	    <input type="text" name="correoE" class="correoE" value="<?php echo"$ccorreo"; ?>" readonly />
		
		
	<div class="linea4"></div>
	
	
	
		
	
	<p class="observacionL">Observaciones.</p>
	<div class="linea5"></div>
	
	<p class="motivoCL">Motivo de la consulta.</p>
	   <input type="text" name="motivo" class="motivoC" value="<?php echo"$motivo"; ?>"  />
	<p class="enfermedadL">Enfermedad actual.</p>
	   <input type="text" name="enfermedad" class="enfermedad" value="<?php echo"$enfermedad"; ?>"  />
	<p class="alergiaL">Alergias.</p>
	   <input type="text" name="alergia" class="alergia" value="<?php echo"$alergia"; ?>"  />
	<p class="notaL">Notas.</p>
	   <input type="text" name="nota" class="nota" value="<?php echo"$nota"; ?>"  />	
	   
	 <div class="linea6"></div>
	 

	 <button class="boton2">Guardar Cambios.</button>
		
</form>

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
  
  
  
  
  
  
  
  
  
  
  
  
  

    

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

    
